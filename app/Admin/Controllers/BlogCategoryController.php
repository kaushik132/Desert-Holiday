<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\BlogCategory;
use Illuminate\Support\Str;

class BlogCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BlogCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BlogCategory());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));

        $grid->column('image', __('Image'))->image('/uploads/', '70', '70');

        $grid->column('is_active', __('Is active'))->switch();


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
        $show = new Show(BlogCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('slug', __('Slug'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'));
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
        $form = new Form(new BlogCategory());

        $form->text('name', __('Name'));
        $form->saving(function (Form $form) {
            $form->slug = Str::slug($form->name);
        });
        $form->hidden('slug', __('Slug'));
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->textarea('seo_title', __('Seo title'));
        $form->textarea('seo_des', __('Seo des'));
        $form->textarea('seo_key', __('Seo key'));
        $form->switch('is_active', __('Is active'))->default('1');

        return $form;
    }
}
