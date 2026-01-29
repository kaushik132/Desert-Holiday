<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\DestinationCategory;
use Illuminate\Support\Str;

class DestinationCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'DestinationCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new DestinationCategory());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image('/uploads/','50','50');
        $grid->column('name', __('Name'));
        $grid->column('is_active', __('Is active'))->bool();



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
        $show = new Show(DestinationCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('name', __('Name'));
        $show->field('slug', __('Slug'));
        $show->field('short_description', __('Short description'));
        $show->field('seo_title', __('Seo title'));
        $show->field('seo_des', __('Seo des'));
        $show->field('seo_key', __('Seo key'));
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
        $form = new Form(new DestinationCategory());

        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->text('name', __('Name'));
        $form->saving(function (Form $form) {
            $form->slug = Str::slug($form->name);
        });
        $form->hidden('slug', __('Slug'));
        $form->textarea('short_description', __('Short description'));
        $form->textarea('seo_title', __('Seo title'));
        $form->textarea('seo_des', __('Seo des'));
        $form->textarea('seo_key', __('Seo key'));
        $form->switch('is_active', __('Is active'))->default('1');

        return $form;
    }
}
