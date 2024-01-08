<?php

namespace App\Http\Controllers\Admin;

use App\Helpers;
use App\Http\Requests\PostRequest;
use App\Http\Requests\ProjectRequest;
use App\Models\Category;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PostCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProjectCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Project::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/project');
        CRUD::setEntityNameStrings(trans('app.project'), trans('app.project'));
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->label('Title')->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('name->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->vi', 'like', '%'.$searchTerm.'%');
        });


        CRUD::column('image')->type('image')->label(trans('app.project_image'))->width("200px")->height('auto');

        CRUD::column('image1')->type('image')->label(trans('app.project_image1'))->width("200px")->height('auto');
        CRUD::column('image2')->type('image')->label(trans('app.project_image2'))->width("200px")->height('auto');
        CRUD::column('image3')->type('image')->label(trans('app.project_image3'))->width("200px")->height('auto');
        CRUD::column('image4')->type('image')->label(trans('app.project_image4'))->width("200px")->height('auto');
        CRUD::column('image5')->type('image')->label(trans('app.project_image5'))->width("200px")->height('auto');

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

        CRUD::column('donation_type')->type('text')->label(trans('app.program_donation_type'));
        CRUD::column('program')->type('relationship')->label('Chương trình');
        CRUD::column('category')->type('relationship')->label('Chuyên mục');
        CRUD::column('views')->type('number')->label('Lượt xem')->priority(1);

        CRUD::addColumn([
            'name' => 'status',
            'type' => 'select_from_array',
            'options' => Helpers::POST_STATUSES,
            'label' => 'Trạng thái'
        ]);

    }

    protected function setupShowOperation()
    {
        CRUD::column('name')->label('Title')->searchLogic(function ($query, $column, $searchTerm) {
            $query->orWhere('name->en', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->lo', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->zh', 'like', '%'.$searchTerm.'%')
                ->orWhere('name->vi', 'like', '%'.$searchTerm.'%');
        });


        CRUD::column('image')->type('image')->label(trans('app.project_image'));

        CRUD::column('image1')->type('image')->label(trans('app.project_image1'));
        CRUD::column('image2')->type('image')->label(trans('app.project_image2'));
        CRUD::column('image3')->type('image')->label(trans('app.project_image3'));
        CRUD::column('image4')->type('image')->label(trans('app.project_image4'));
        CRUD::column('image5')->type('image')->label(trans('app.project_image5'));

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

        CRUD::column('donation_type')->type('text')->label(trans('app.program_donation_type'));
        CRUD::column('program')->type('relationship')->label('Chương trình');
        CRUD::column('category')->type('relationship')->label('Chuyên mục');
        CRUD::column('views')->type('number')->label('Lượt xem')->priority(1);

        CRUD::addColumn([
            'name' => 'status',
            'type' => 'select_from_array',
            'options' => Helpers::POST_STATUSES,
            'label' => 'Trạng thái'
        ]);

    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProjectRequest::class);

        CRUD::field('name')->label('Title');

//        CRUD::addField([
//            'name' => 'project_name',
//            'type' => 'select_from_array',
//            'options' => Helpers::PROJECT_NAMES,
//            'label' => 'Loại hoàn cảnh'
//        ]);

        CRUD::addField(['name' => 'desc', 'type' => 'textarea', 'label' => 'Description']);
        CRUD::addField(['name' => 'keywords', 'type' => 'textarea', 'label' => 'SEO Keywords']);

        CRUD::addField(['name' => 'image', 'type' => 'browse', 'label' => trans('app.project_image')]);
        CRUD::addField(['name' => 'image1', 'type' => 'browse', 'label' => trans('app.project_image1')]);
        CRUD::addField(['name' => 'image2', 'type' => 'browse', 'label' => trans('app.project_image2')]);
        CRUD::addField(['name' => 'image3', 'type' => 'browse', 'label' => trans('app.project_image3')]);
        CRUD::addField(['name' => 'image4', 'type' => 'browse', 'label' => trans('app.project_image4')]);
        CRUD::addField(['name' => 'image5', 'type' => 'browse', 'label' => trans('app.project_image5')]);

//        CRUD::addField([
//            'type' => "select",
//            'name' => 'project_type_id',
//            'entity' => 'projectType',
//            'model'  => 'App\Models\ProjectType',
//            'label' => trans('app.project_type'),
//            'options' => (function ($query) {
//                return $query->orderBy('name', 'ASC')->get();
//            }),
//        ]);

        CRUD::addField([
            'type' => "select",
            'name' => 'program_id',
            'entity' => 'program',
            'model'  => 'App\Models\Program',
            'label' => 'Chương trình quyên góp',
            'options' => (function ($query) {
                return $query->orderBy('name', 'ASC')->get();
            }),
        ]);

        CRUD::addField([
            'type' => "select",
            'name' => 'category_id',
            'entity' => 'category',
            'model'     => "App\Models\Category",
            'label' => 'Chuyên mục',
            'options'   => (function ($query) {
                return $query->whereNotNull('parent_id')->orderBy('name', 'ASC')->get();
            }),
        ]);

        CRUD::addField(
            [   // CKEditor
                'name'          => 'hoan_canh',
                'label'         => 'Hoàn cảnh',
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

        CRUD::addField(
            [   // CKEditor
                'name'          => 'cau_chuyen',
                'label'         => 'Câu chuyện',
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

        CRUD::addField([
            'name' => 'status',
            'type' => 'select_from_array',
            'options' => Helpers::POST_STATUSES,
            'label' => 'Trạng thái'
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
        $this->setupCreateOperation();
    }
}
