## Install https://github.com/spatie/laravel-translation-loader

## Convert lang files to database

Get file content to array
```textmate
public function getFileContent($filePath)
{
    if (is_file($filePath)) {
        $wordsArray = include $filePath;
        asort($wordsArray);

        return $wordsArray;
    }

    return false;
}
```

Put in LanguageLine tables

```textmate
foreach ($langContents as $keyLine => $contentAr) {
    $keyArs = explode("|-|", $keyLine);

    LanguageLine::create([
        'group' => $keyArs[0],
        'key' => $keyArs[1],
        'text' => $contentAr,
    ]);

}
```

Then create Controller and Model for this table so we can create/edit in Admin

```textmate
app/Http/Controllers/Admin/LanguageLineCrudController.php
app/Models/LanguageCustom.php
```

Then create a function view just we can reload cache for languages after edited.

```textmate
CRUD::addButtonFromView('top', 'reload_languages', 'reload_languages', 'beginning');
public function reloadLanguages()
{
    Artisan::call("cache:clear");
    \Alert::success('Success reload languages')->flash();

    return \Redirect::to($this->crud->route);
}
```
