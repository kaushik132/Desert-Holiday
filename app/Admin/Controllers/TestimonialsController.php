<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Testimonials;

class TestimonialsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Testimonials';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Testimonials());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));

        $grid->column('image', __('Image'))->image('/uploads/', '70', '70');

        $grid->column('user_name', __('User name'));

        $grid->column('star', __('Star'));
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
        $show = new Show(Testimonials::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('short_description', __('Short description'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'));
        $show->field('user_name', __('User name'));
        $show->field('user_role', __('User role'));
        $show->field('star', __('Star'));
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
        $form = new Form(new Testimonials());

        $form->text('title', __('Title'));
        $form->textarea('short_description', __('Short description'));
        $form->image('image', __('Profile Image'));
        $form->text('alt', __('Alt'));
        $form->text('user_name', __('User name'));
        $form->text('user_role', __('Designation '));
        $form->text('star', __('Star'));
        $form->switch('is_active', __('Is active'))->default('1');

        return $form;
    }
}
