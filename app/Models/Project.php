<?php

namespace App\Models;

use App\Helpers;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use CrudTrait;
    use HasFactory;

    use Sluggable;
    use SluggableScopeHelpers;
    use HasTranslations;


    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true,
            ]
        ];
    }

    protected $table = 'projects';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $translatable = ['name', 'desc', 'keywords', 'hoan_canh', 'cau_chuyen'];
    protected $fillable = [
        'name',
        'slug',
        //'project_name',
        //'project_type_id',
        'desc',
        'hoan_canh',
        'cau_chuyen',
        'program_id',
        'category_id',
        'views',
        'image',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'status',
        'keywords',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public $appends = [
        'donation_type'
    ];

    public function getDonationTypeAttribute() {
        if (!$this->program) {
            return null;
        }
        return Helpers::PROGRAM_DONATION_TYPES[$this->program->donation_type];
    }

    public function program(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


}
