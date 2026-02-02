<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Gallery;
use \App\Models\GalleryCategory;

class GalleryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Gallery';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Gallery());

        $grid->column('id', __('Id'));
        $grid->column('category.name', __('Gallery category id'));
        $grid->column('image', __('Image'));

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
        $show = new Show(Gallery::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('gallery_category_id', __('Gallery category id'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'));
        $show->field('name', __('Name'));
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
        $form = new Form(new Gallery());

        $form->select('gallery_category_id', __('Gallery category id'))->options(GalleryCategory::where('is_active', 1)->pluck('name', 'id'))->required();
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->text('name', __('Name'));
        $form->switch('is_active', __('Is active'))->default(1);


        return $form;
    }
}
