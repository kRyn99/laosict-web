<?php

namespace App\Http\Controllers\Admin;

use App\Helpers;
use App\Http\Requests\CategoryRequest;
use App\Models\LanguageCustom;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Artisan;
use Spatie\TranslationLoader\LanguageLine;

/**
 * Class CategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class LanguageLineCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    //use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(LanguageCustom::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/language-line');
        CRUD::setEntityNameStrings("Language Lines", "Language Lines");
        CRUD::denyAccess('delete');
        //CRUD::denyAccess('create');
    }

    public function reloadLanguages()
    {
        Artisan::call("cache:clear");
        \Alert::success('Success reload languages')->flash();

        return \Redirect::to($this->crud->route);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::addButtonFromView('top', 'reload_languages', 'reload_languages', 'beginning');
        CRUD::addClause('where','group', '!=', 'validation');
        CRUD::column('id')->label('#ID');
        CRUD::column('group')->label('Group')->type('select_from_array')->options(Helpers::GROUPS)->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('group', 'like', '%'.$searchTerm.'%');
        });
        CRUD::column('key')->label('Key')->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('key', 'like', '%'.$searchTerm.'%');
        });
        CRUD::column('text')->label('Content')->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('text->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('text->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('text->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('text->vi', 'like', '%'.$searchTerm.'%');
        });


        CRUD::addFilter(
            [
                'name' => 'filter_by_group',
                'type' => 'select2',
                'label' => 'Filter by Group',
            ],
            Helpers::USE_GROUPS,
            function ($value) { // if the filter is active
                CRUD::addClause('where', function ($q) use ($value) {
                    $q->where('group', $value);
                });
            }
        );
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        //CRUD::setValidation(CategoryRequest::class);

        CRUD::field('group')->label('Group')->type('select_from_array')->options(Helpers::GROUPS);
        CRUD::field('key')->label('Key');
        CRUD::addField(['name' => 'text', 'type' => 'textarea', 'label' => 'Text']);

    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
