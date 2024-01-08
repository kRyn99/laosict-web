<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\TranslationLoader\LanguageLine;

class CreateLang extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:lang';

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

    public function getFileContent($filePath)
    {
        if (is_file($filePath)) {
            $wordsArray = include $filePath;
            asort($wordsArray);

            return $wordsArray;
        }

        return false;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $langs = [
            'vi',
            'lo',
            'en',
            'zh',
        ];

        $langContents = [];

        $groups = ['app', 'home', 'settings', 'validation'];

        foreach ($groups as $group) {
            foreach ($langs as $lang) {
                $path = resource_path('backup/'.$lang.'/'.$group.'.php');
                $contentArs = $this->getFileContent($path);
                if ($contentArs) {
                    foreach ($contentArs as $key => $contentAr) {
                        $keyLine = $group.'|-|'.$key;
                        if (!isset($langContents[$keyLine])) {
                            $langContents[$keyLine] = [];
                        }
                        $langContents[$keyLine][$lang] = $contentAr;
                    }
                }
            }
        }




        foreach ($langContents as $keyLine => $contentAr) {
            $keyArs = explode("|-|", $keyLine);

            LanguageLine::create([
                'group' => $keyArs[0],
                'key' => $keyArs[1],
                'text' => $contentAr,
            ]);

        }
    }
}
