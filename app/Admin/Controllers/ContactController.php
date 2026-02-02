<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Contact;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('travel_date', __('Travel date'));
        $grid->column('group_size', __('Group size'));
        $grid->column('interested_destination', __('Interested destination'));

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
        $show = new Show(Contact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('travel_date', __('Travel date'));
        $show->field('group_size', __('Group size'));
        $show->field('interested_destination', __('Interested destination'));
        $show->field('subject', __('Subject'));
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
        $form = new Form(new Contact());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->phonenumber('phone', __('Phone'));
        $form->date('travel_date', __('Travel date'))->default(date('Y-m-d'));
        $form->text('group_size', __('Group size'));
        $form->text('interested_destination', __('Interested destination'));
        $form->textarea('subject', __('Subject'));
        $form->textarea('message', __('Message'));
        $form->text('is_active', __('Is active'))->default('1');

        return $form;
    }
}
