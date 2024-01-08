<?php

namespace App\Http\Controllers\Admin;

use App\Helpers;
use App\Http\Requests\PartnerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PartnerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PartnerCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Partner::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/partner');
        CRUD::setEntityNameStrings(trans('app.partner'), trans('app.partner'));
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->label(trans('app.partner_name'))->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('name->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->vi', 'like', '%'.$searchTerm.'%');
        });
        CRUD::column('slug')->label(trans('app.partner_slug'));

        CRUD::column('slogan')->label(trans('app.partner_slogan'))->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('slogan->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('slogan->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('slogan->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('slogan->vi', 'like', '%'.$searchTerm.'%');
        });
        CRUD::column('desc')->label(trans('app.partner_desc'))->type('textarea')->limit(1000)->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('desc->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->vi', 'like', '%'.$searchTerm.'%');
        });
        CRUD::column('image')->type('image')->label(trans('app.partner_image'))->width("200px")->height('auto');
        CRUD::column('number_of_success_projects')
            ->type('number')
            ->label(trans('app.partner_number_of_success_projects'));
        CRUD::column('total_collect_amount')
            ->type('number')
            ->label(trans('app.partner_total_collect_amount'));
        CRUD::column('total_collect_turn')
            ->type('number')
            ->label(trans('app.partner_total_collect_turn'));

        CRUD::column('frontend_image')->type('image')->label(trans('app.partner_frontend_image'))->width("200px")->height('auto');
    }

    protected function setupShowOperation()
    {
        CRUD::column('name')->label(trans('app.partner_name'))->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('name->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->vi', 'like', '%'.$searchTerm.'%');
        });
        CRUD::column('slug')->label(trans('app.partner_slug'));

        CRUD::column('slogan')->label(trans('app.partner_slogan'))->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('slogan->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('slogan->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('slogan->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('slogan->vi', 'like', '%'.$searchTerm.'%');
        })->limit(2000);
        CRUD::column('desc')->label(trans('app.partner_desc'))->type('textarea')->limit(1000)->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('desc->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('desc->vi', 'like', '%'.$searchTerm.'%');
        })->limit(2000);
        CRUD::column('image')->type('image')->label(trans('app.partner_image'));
        CRUD::column('number_of_success_projects')
            ->type('number')
            ->label(trans('app.partner_number_of_success_projects'));
        CRUD::column('total_collect_amount')
            ->type('number')
            ->label(trans('app.partner_total_collect_amount'));
        CRUD::column('total_collect_turn')
            ->type('number')
            ->label(trans('app.partner_total_collect_turn'));

        CRUD::column('frontend_image')->type('image')->label(trans('app.partner_frontend_image'));
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PartnerRequest::class);

        CRUD::field('name')->label(trans('app.partner_name'));

        CRUD::field('slogan')->label(trans('app.partner_slogan'));
        CRUD::field('desc')->label(trans('app.partner_desc'))->type('textarea');

        CRUD::addField(['name' => 'image', 'type' => 'browse', 'label' => trans('app.partner_image')]);

        CRUD::addField(
            [   // CKEditor
                'name'          => 'content',
                'label'         => trans('app.partner_content'),
                'type'          => 'ckeditor',

                // optional:
                'extra_plugins' => ['justify', 'font', 'resize'],
                'options'       => [
                    'autoGrow_minHeight'   => 200,
                    'autoGrow_bottomSpace' => 50,
                    'removePlugins'        => 'spellchecker',
                    'extraAllowedContent' => 'iframe[*]'
                ],

            ]
        );

        CRUD::addField(['name' => 'frontend_image', 'type' => 'browse', 'label' => trans('app.partner_frontend_image')]);
//
//        CRUD::field('number_of_success_projects')
//            ->type('number')
//            ->label(trans('app.partner_number_of_success_projects'));
//
//        CRUD::field('total_collect_amount')
//            ->type('number_decimal')
//            ->label(trans('app.partner_total_collect_amount'));
//
//        CRUD::field('total_collect_turn')
//            ->type('number')
//            ->label(trans('app.partner_total_collect_turn'));
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
