<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Enquiry;

class EnquiryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Enquiry';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Enquiry());

        $grid->column('id', __('Id'));
        $grid->column('package_id', __('Package id'));

        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('date_of_travel', __('Date of travel'));

        $grid->column('is_active', __('Is active'));
      
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
        $show = new Show(Enquiry::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('package_id', __('Package id'));
        $show->field('people', __('People'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('date_of_travel', __('Date of travel'));
        $show->field('country', __('Country'));
        $show->field('city', __('City'));
        $show->field('message', __('Message'));
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
        $form = new Form(new Enquiry());

        $form->number('package_id', __('Package id'));
        $form->text('people', __('People'));
        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->phonenumber('phone', __('Phone'));
        $form->date('date_of_travel', __('Date of travel'))->default(date('Y-m-d'));
        $form->text('country', __('Country'));
        $form->text('city', __('City'));
        $form->textarea('message', __('Message'));
        $form->text('is_active', __('Is active'))->default('1');

        return $form;
    }
}
