<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FeedbackRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FeedbackCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FeedbackCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Feedback::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/feedback');
        CRUD::setEntityNameStrings(trans('app.feedback'), trans('app.feedback'));
        CRUD::denyAccess('create');
        CRUD::denyAccess('delete');
        CRUD::denyAccess('update');
    }

    protected function setupShowOperation()
    {
        CRUD::column('name')->label('Họ tên');
        CRUD::column('phone')->label('Số điện thoại');
        CRUD::column('email')->label('Email');
        CRUD::column('address')->label('Địa chỉ')->limit(2000);
        CRUD::column('province_name')->label('Tỉnh/Thành');
        CRUD::column('district_name')->label('Quận/Huyện');
        CRUD::column('message')->label('Nội dung góp ý')->limit(2000);
        CRUD::column('created_at')->type('date')->label('Thời gian');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->label('Họ tên');
        CRUD::column('phone')->label('Số điện thoại');
        CRUD::column('email')->label('Email');
        CRUD::column('address')->label('Địa chỉ');
        CRUD::column('province_name')->label('Tỉnh/Thành');
        CRUD::column('district_name')->label('Quận/Huyện');
        CRUD::column('message')->label('Nội dung góp ý');
        CRUD::column('created_at')->type('date')->label('Thời gian');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(FeedbackRequest::class);



        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
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
