<?php

namespace App\Models;

use App\Helpers;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Partner extends Model
{
    use CrudTrait;

    use Sluggable;
    use SluggableScopeHelpers;

    use HasTranslations;


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

    protected $table = 'partners';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];

    protected $translatable = ['name', 'desc', 'content', 'slogan'];

    protected $fillable = [
        'name',
        'slug',
        'slogan',
        'image',
        'desc',
        'content',
        'frontend_image',
//        'number_of_success_projects',
//        'total_collect_amount',
//        'total_collect_turn',
//        'source_id',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public $appends = [
        'number_of_success_projects',
        'total_collect_amount',
        'total_collect_turn',
        'source_id',
    ];

    public function getTotalCollectAmountAttribute()
    {
        return $this->payments->filter(function ($q) {
            return $q->status == Helpers::PAYMENT_STATUS_SUCCESS;
        })->count('amount');
    }

    public function getTotalCollectTurnAttribute()
    {
        return $this->payments->count();
    }

    public function getNumberOfSuccessProjectsAttribute()
    {
        return $this->programs->count();
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

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
