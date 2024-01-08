<?php

namespace App\Models;

use App\Helpers;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Program extends Model
{
    use CrudTrait;

    use Sluggable;
    use SluggableScopeHelpers;


    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => false,
            ]
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'programs';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'slug',
        'donation_type',
        'partner_id',
        'start_date',
        'end_date',
        'total_collect_amount',
    ];

    public $appends = [
        'collect_percent',
        'current_collect_amount',
        'total_collect_turn',
        'day_left',
    ];

    public $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function getTotalCollectTurnAttribute()
    {
        return $this->payments->count();
    }

    public function getDayLeftAttribute()
    {
        if ($this->end_date <= Carbon::now()) {
            return 0;
        }
        return Carbon::now()->diffInDays($this->end_date);
    }

    public function getCurrentCollectAmountAttribute()
    {
        return $this->payments->filter(function ($q) {
            return $q->status == Helpers::PAYMENT_STATUS_SUCCESS;
        })->sum('amount');
    }

    public function getCollectPercentAttribute()
    {
        if ($this->total_collect_amount == 0) {
            return 0;
        }
        return round(($this->current_collect_amount/$this->total_collect_amount)*100);
    }


    public function partner(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function afterSaved()
    {
       DB::table('payments')->where('program_id', $this->id)->update([
           'donation_type' => $this->donation_type
       ]);
    }


    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
