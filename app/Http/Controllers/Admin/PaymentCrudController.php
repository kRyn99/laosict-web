<?php

namespace App\Http\Controllers\Admin;

use App\Helpers;
use App\Http\Requests\PaymentRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PaymentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PaymentCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Payment::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/payment');
        CRUD::setEntityNameStrings(trans('app.payment'), trans('app.payment'));
        CRUD::denyAccess('create');
        CRUD::denyAccess('update');
        CRUD::denyAccess('delete');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::enableExportButtons();

        CRUD::addFilter(
            [
                'type' => 'date_range',
                'name' => 'from_to_created_at',
                'label' => trans('app.payment_time')
            ],
            false,
            function ($value) { // if the filter is active, apply these constraints
                if ($value) {
                    $dates = json_decode($value);
                    $this->crud->addClause('where', 'created_at', '>=', $dates->from);
                    $this->crud->addClause('where', 'created_at', '<=', $dates->to . ' 23:59:59');
                }

            }
        );

        CRUD::addFilter(
            [
                'name' => 'filter_by_payment_status',
                'type' => 'select2',
                'label' => trans('app.payment_status'),
            ],
            Helpers::PAYMENT_STATUSES,
            function ($value) { // if the filter is active
                CRUD::addClause('where', function ($q) use ($value) {
                    $q->where('status', $value);
                });
            }
        );

        CRUD::addFilter(
            [
                'name' => 'filter_by_payment_donation_type',
                'type' => 'select2',
                'label' => trans('app.program_donation_type'),
            ],
            Helpers::PROGRAM_DONATION_TYPES,
            function ($value) { // if the filter is active
                CRUD::addClause('where', function ($q) use ($value) {
                    $q->where('donation_type', $value);
                });
            }
        );


        CRUD::column('partner')->type('relationship')->label(trans('app.partner_name'))->searchLogic(function ($query, $column, $searchTerm) {
            $query->OrWhereHas('partner', function ($q) use ($searchTerm) {
                $q->where('name->en', 'like', '%'.$searchTerm.'%')
                    ->orWhere('name->lo', 'like', '%'.$searchTerm.'%')
                    ->orWhere('name->zh', 'like', '%'.$searchTerm.'%')
                    ->orWhere('name->vi', 'like', '%'.$searchTerm.'%');
            });
        });
        CRUD::column('program')->type('relationship')->label(trans('app.program_name'))->searchLogic(function ($query, $column, $searchTerm) {
            $query->OrWhereHas('program', function ($q) use ($searchTerm) {
                $q->where('name', 'like', '%'.$searchTerm.'%');
            });
        });
        CRUD::column('donation_type')->type('select_from_array')->label(trans('app.program_donation_type'))->options(Helpers::PROGRAM_DONATION_TYPES);
        CRUD::column('amount')->type('number')->label(trans('app.payment_amount'));
        CRUD::column('phone')->type('text')->label(trans('app.payment_phone'));
        CRUD::column('payment_number')->type('text')->label(trans('app.payment_number'));
        CRUD::column('bill_number')->type('text')->label(trans('app.bill_number'));
        CRUD::column('created_at')->type('datetime')->label(trans('app.payment_time'));
        CRUD::column('status')->type('select_from_array')->label(trans('app.payment_status'))->options(Helpers::PAYMENT_STATUSES);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PaymentRequest::class);



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
