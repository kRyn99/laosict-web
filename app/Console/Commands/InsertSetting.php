<?php

namespace App\Console\Commands;

use Backpack\Settings\app\Models\Setting;
use Illuminate\Console\Command;

class InsertSetting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:setting';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $settings = Setting::where('key', 'like', 'feedback%')->get();
        foreach ($settings as $setting) {
            Setting::insert([
                'key' => str_replace("feedback", "partner", $setting->key),
                'name' => str_replace('Feedback', 'Partner', $setting->name),
                'description' => $setting->description,
                'field' => $setting->field,
                'active' => $setting->active,
                'value' => $setting->value,
            ]);
        }
    }
}
