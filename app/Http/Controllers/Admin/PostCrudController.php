<?php

namespace App\Http\Controllers\Admin;

use App\Helpers;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PostCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PostCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Post::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/post');
        CRUD::setEntityNameStrings('Các bài viết', 'Các bài viết');
    }

    public function setupShowOperation() {
        CRUD::column('name')->label('Tiêu đề');
        CRUD::column('image')->type('image')->label(trans('app.post_image'));

        CRUD::column('desc')->label('Description')->limit(2000);
        CRUD::column('keywords')->label('SEO Keywords')->limit(2000);

        CRUD::column('category')->type('relationship')->label('Chuyên mục');
        CRUD::column('program')->type('relationship')->label(trans('app.program'));
        CRUD::column('views')->type('number')->label('Lượt xem')->priority(1);

        CRUD::addColumn([
            'name' => 'status',
            'type' => 'select_from_array',
            'options' => Helpers::POST_STATUSES,
            'label' => 'Trạng thái'
        ]);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->label('Tiêu đề');
        CRUD::column('image')->type('image')->label(trans('app.post_image'))->width("200px")->height('auto');

        CRUD::column('desc')->label('Description');
        CRUD::column('keywords')->label('SEO Keywords');

        CRUD::column('category')->type('relationship')->label('Chuyên mục');
        CRUD::column('program')->type('relationship')->label(trans('app.program'));
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
        CRUD::setValidation(PostRequest::class);

        CRUD::field('name')->label('Title');

        CRUD::addField(['name' => 'desc', 'type' => 'textarea', 'label' => 'Description']);
        CRUD::addField(['name' => 'keywords', 'type' => 'textarea', 'label' => 'SEO Keywords']);

        CRUD::addField(['name' => 'image', 'type' => 'browse', 'label' => trans('app.post_image')]);


        CRUD::addField([
            'type' => "select",
            'name' => 'category_id',
            'entity' => 'category',
            'model'     => "App\Models\Category",
            'label' => 'Chuyên mục',
            'options'   => (function ($query) {
                return $query->whereNull('parent_id')->orderBy('name', 'ASC')->get();
            }),
        ]);

        CRUD::addField([
            'type' => "select",
            'name' => 'program_id',
            'entity' => 'program',
            'model'     => "App\Models\Program",
            'label' => trans('app.program'),
        ]);

        CRUD::addField(
            [   // CKEditor
                'name'          => 'content',
                'label'         => trans('app.post_content'),
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
