<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'feedbacks';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'message',
        'district_id',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public $appends= [
        'province_name',
        'district_name',
    ];

    public function getProvinceNameAttribute()
    {
        if (!$this->district) {
            return null;
        }
        return $this->district->province->province_name;
    }

    public function getDistrictNameAttribute()
    {
        if (!$this->district) {
            return null;
        }
        return $this->district->district_name;
    }

    public function district()
    {
        return $this->belongsTo(District::class);
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
