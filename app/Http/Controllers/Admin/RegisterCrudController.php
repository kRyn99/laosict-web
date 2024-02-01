<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RegisterRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
/**
 * Class FeedbackCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RegisterCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    public function setup()
    {
        CRUD::setModel(\App\Models\Register::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/register');
        CRUD::setEntityNameStrings(trans('app.register'), trans('app.register'));
        CRUD::denyAccess('create');
        CRUD::denyAccess('delete');
        CRUD::denyAccess('update');
    }
    protected function setupShowOperation()
    {
        CRUD::column('name')->label('Họ tên');
        CRUD::column('phone')->label('Số điện thoại');
        CRUD::column('email')->label('Email');
        CRUD::column('work')->label('Công việc');
        CRUD::column('message')->label('Ghi chú');
        CRUD::column('course_name')->label('Tên khóa học');
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
        CRUD::column('work')->label('Công Việc');
        CRUD::column('message')->label('Ghi chú');
        CRUD::column('course_name')->label('Tên khóa học');
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
        CRUD::setValidation(RegisterRequest::class);

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
