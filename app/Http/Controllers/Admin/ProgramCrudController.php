<?php

namespace App\Http\Controllers\Admin;

use App\Helpers;
use App\Http\Requests\ProgramRequest;
use App\Http\Requests\ProgramUpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;

/**
 * Class ProgramCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProgramCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    //use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }

    public function handleCustomInput($request)
    {
        foreach (['total_collect_amount'] as $field) {
            $value = $request->request->get($field);
            if ($value) {
                $request->request->set($field, Helpers::setRequestAmount($value));
            }
        }

        return $request;
    }

    public function customValidate($request, $isUpdate = false)
    {
        return $isUpdate ? $this->traitUpdate() : $this->traitStore();
    }

    public function update()
    {

        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->setRequest($this->handleCustomInput($this->crud->getRequest()));
        $this->crud->unsetValidation(); // validation has already been run
        return $this->customValidate($this->crud->getRequest(), true);

        //custom validator run on admin, super and account.

    }

    public function store()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->setRequest($this->handleCustomInput($this->crud->getRequest()));
        $this->crud->unsetValidation(); // validation has already been run
        return $this->customValidate($this->crud->getRequest());
    }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Program::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/program');
        CRUD::setEntityNameStrings(trans('app.program'), trans('app.program'));
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->label(trans('app.program_name'));
        CRUD::column('slug')->label(trans('app.program_slug'));

        CRUD::column('partner_id')->type('relationship')->label(trans('app.program_partner_id'));

        CRUD::column('donation_type')->type('select_from_array')->label(trans('app.program_donation_type'))->options(Helpers::PROGRAM_DONATION_TYPES);

        CRUD::column('current_collect_amount')
            ->type('number')
            ->label(trans('app.program_current_collect_amount'));

        CRUD::column('total_collect_amount')
            ->type('number')
            ->label(trans('app.program_total_collect_amount'));

        CRUD::column('collect_percent')
            ->type('number')
            ->label(trans('app.program_collect_percent'));

        CRUD::column('total_collect_turn')
            ->type('number')
            ->label(trans('app.program_total_collect_turn'));

        CRUD::column('day_left')
            ->type('number')
            ->label(trans('app.program_day_left'));

        CRUD::column('start_date')->type('date')->label(trans('app.program_start_date'));
        CRUD::column('end_date')->type('date')->label(trans('app.program_end_date'));
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProgramRequest::class);
        CRUD::field('name')->label(trans('app.program_name'));

        CRUD::addField([
            'label' => trans('app.program_donation_type'),
            'type' => 'select_from_array',
            'name' => 'donation_type',
            'options' => Helpers::PROGRAM_DONATION_TYPES,
        ]);

        CRUD::addField([
            'type' => "select",
            'name' => 'partner_id',
            'entity' => 'partner',
            'model'  => 'App\Models\Partner',
            'label' => trans('app.partner'),
        ]);


        CRUD::field('total_collect_amount')
            ->type('number_decimal')
            ->label(trans('app.program_total_collect_amount'));

        CRUD::field('start_date')
            ->type('date_picker')
            ->label(trans('app.program_start_date'))
            ->default(Carbon::now()->toDateString())
            ->date_picker_options([
                'todayBtn' => 'linked',
                'format' => 'dd/mm/yyyy',
                'language' => 'vi',
            ]);
        CRUD::field('end_date')
            ->type('date_picker')
            ->label(trans('app.program_end_date'))
            ->default(Carbon::now()->toDateString())
            ->date_picker_options([
                'todayBtn' => 'linked',
                'format' => 'dd/mm/yyyy',
                'language' => 'vi',
            ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::setValidation(ProgramUpdateRequest::class);
        CRUD::field('name')->label(trans('app.program_name'));

        CRUD::addField([
            'label' => trans('app.program_donation_type'),
            'type' => 'select_from_array',
            'name' => 'donation_type',
            'options' => Helpers::PROGRAM_DONATION_TYPES,
        ]);


        CRUD::field('total_collect_amount')
            ->type('number_decimal')
            ->label(trans('app.program_total_collect_amount'));

        CRUD::field('start_date')
            ->type('date_picker')
            ->label(trans('app.program_start_date'))
            ->default(Carbon::now()->toDateString())
            ->date_picker_options([
                'todayBtn' => 'linked',
                'format' => 'dd/mm/yyyy',
                'language' => 'vi',
            ]);
        CRUD::field('end_date')
            ->type('date_picker')
            ->label(trans('app.program_end_date'))
            ->default(Carbon::now()->toDateString())
            ->date_picker_options([
                'todayBtn' => 'linked',
                'format' => 'dd/mm/yyyy',
                'language' => 'vi',
            ]);
    }
}
