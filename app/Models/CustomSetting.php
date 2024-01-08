<?php

namespace App\Models;

use Backpack\Settings\app\Models\Setting;

class CustomSetting extends Setting
{
    public $appends = [
        'image_display'
    ];

    public function getImageDisplayAttribute()
    {
        if ($this->getAttribute('field')) {
            $fieldOption = json_decode($this->getAttribute('field'), true);
            if ($fieldOption['type'] == 'browse') {
                return $this->getAttribute('value');
            }
        }
        return null;
    }
}
