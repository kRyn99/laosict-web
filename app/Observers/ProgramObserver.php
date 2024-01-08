<?php

namespace App\Observers;

use App\Models\Program;

class ProgramObserver
{

    public function updated(Program $content)
    {
        $content->afterSaved();
    }
}
