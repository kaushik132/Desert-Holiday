<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Blog;
use \App\Models\BlogCategory;
use Illuminate\Support\Str;

class BlogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Blog';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Blog());
        $grid->quickSearch('title');
        // $grid->column('id', __('Id'));
        $grid->column('category.name', __('Blog category id'));
        $grid->column('title', __('Title'))->sortable();

        $grid->column('image', __('Image'))->image('/uploads/', 100, 100);

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
        $show = new Show(Blog::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('blog_category_id', __('Blog category id'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'));
        $show->field('description', __('Description'));
        $show->field('facebook_link', __('Facebook link'));
        $show->field('twitter_link', __('Twitter link'));
        $show->field('instagram_link', __('Instagram link'));
        $show->field('youtube_link', __('Youtube link'));
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
        $form = new Form(new Blog());

        $form->select('blog_category_id', __('Blog category id'))->options(BlogCategory::all()->pluck('name', 'id'))->required();
        $form->text('title', __('Title'));
        $form->saving(function (Form $form) {
            $form->slug = Str::slug($form->title);
        });
        $form->hidden('slug', __('Slug'));
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->ckeditor('description', __('Description'));
        $form->url('facebook_link', __('Facebook link'))->default('https://www.facebook.com/');
        $form->url('twitter_link', __('Twitter link'))->default('https://x.com/');
        $form->url('instagram_link', __('Instagram link'))->default('https://www.instagram.com/');
        $form->url('youtube_link', __('Youtube link'))->default('https://youtube.com/');
        $form->textarea('seo_title', __('Seo title'));
        $form->textarea('seo_des', __('Seo des'));
        $form->textarea('seo_key', __('Seo key'));
        $form->switch('is_active', __('Is active'))->default(1);

        return $form;
    }
}
