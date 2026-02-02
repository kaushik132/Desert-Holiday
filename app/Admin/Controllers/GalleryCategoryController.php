<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\GalleryCategory;

class GalleryCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'GalleryCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GalleryCategory());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('is_active', __('Status'))->switch([
    'on'  => ['value' => 1, 'text' => 'Active'],
    'off' => ['value' => 0, 'text' => 'Inactive'],
]);

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(GalleryCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('is_active', __('Is active'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new GalleryCategory());

        $form->text('name', __('Name'));
        $form->switch('is_active', __('Is active'))->default('1');

        return $form;
    }
}
