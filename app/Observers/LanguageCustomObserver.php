<?php

namespace App\Observers;

use App\Models\LanguageCustom;
use App\Models\Program;

class LanguageCustomObserver
{

    public function created(LanguageCustom $content)
    {
        $content->afterSaved();
    }

    public function updated(LanguageCustom $content)
    {
        $content->afterSaved();
    }
}
