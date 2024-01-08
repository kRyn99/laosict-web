<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CategoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Category::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/category');
        CRUD::setEntityNameStrings(trans('app.category'), trans('app.category'));
    }

    protected function setupShowOperation()
    {
        CRUD::column('id')->label('#ID');
        CRUD::column('name')->label('Tiêu đề')->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('name->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->vi', 'like', '%'.$searchTerm.'%');
        });
        CRUD::column('desc')->label('Description')->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('desc->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->vi', 'like', '%'.$searchTerm.'%');
        })->limit(2000);
        CRUD::column('keywords')->label('SEO Keywords')->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('keywords->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('keywords->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('keywords->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('keywords->vi', 'like', '%'.$searchTerm.'%');
        })->limit(2000);
        CRUD::column('slug')->label('SEO Url');
        CRUD::column('banner_image_pc')->type('image')->label(trans('app.category_banner_pc'));
        CRUD::column('banner_image_mobile')->type('image')->label(trans('app.category_banner_mobile'));
        CRUD::column('frontend_image')->type('image')->label(trans('app.category_frontend_image'));

        CRUD::column('order')->type('number')->label('Thứ tự Menu');

        CRUD::addColumn(['name' => 'parent', 'type' => 'relationship', 'label' => 'Chuyên mục cha']);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id')->label('#ID');
        CRUD::column('name')->label('Tiêu đề')->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('name->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->vi', 'like', '%'.$searchTerm.'%');
        });
        CRUD::column('desc')->label('Description')->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('desc->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->vi', 'like', '%'.$searchTerm.'%');
        });
        CRUD::column('keywords')->label('SEO Keywords')->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('keywords->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('keywords->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('keywords->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('keywords->vi', 'like', '%'.$searchTerm.'%');
        });
        CRUD::column('slug')->label('SEO Url');
        CRUD::column('banner_image_pc')->type('image')->label(trans('app.category_banner_pc'))->width("200px")->height('auto');
        CRUD::column('banner_image_mobile')->type('image')->label(trans('app.category_banner_mobile'))->width("200px")->height('auto');
        CRUD::column('frontend_image')->type('image')->label(trans('app.category_frontend_image'))->width("200px")->height('auto');

        CRUD::column('order')->type('number')->label('Thứ tự Menu');

        CRUD::addColumn(['name' => 'parent', 'type' => 'relationship', 'label' => 'Chuyên mục cha']);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CategoryRequest::class);

        CRUD::field('name')->label('Tiêu đề');
        CRUD::addField(['name' => 'desc', 'type' => 'textarea', 'label' => 'Description']);
        CRUD::addField(['name' => 'keywords', 'type' => 'textarea', 'label' => 'SEO Keywords']);
        CRUD::field('banner_image_pc')->type('browse')->label(trans('app.category_banner_pc'));
        CRUD::field('banner_image_mobile')->type('browse')->label(trans('app.category_banner_mobile'));
        CRUD::field('order')->type('number')
            ->label('Thứ tự')
            ->hint('Thứ tự xuất hiện trong danh sách chuyên mục ở menu');

        CRUD::addField([
            'name' => 'parent_id',
            'entity' => 'parent',
            'attribute' => 'name',
            'model' => 'App\Models\Category',
            'type' => 'select2',
            'label' => 'Chuyên mục cha',
            'options'   => (function ($query) {
                return $query->whereDoesntHave('parent')->orderBy('name', 'ASC')->get();
            }),
        ]);

        CRUD::field('frontend_image')->type('browse')->label(trans('app.category_frontend_image'));
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
