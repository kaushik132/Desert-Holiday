<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Seo;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SeoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Seo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Seo());

        $grid->column('id', __('Id'));
        $grid->column('seo_home_title', __('Seo home title'));

        $grid->column('created_at', __('Created at'))->display(function ($v) {
            return Carbon::parse($v)->format('d M Y H:i');
        });
        $grid->column('updated_at', __('Updated at'))->display(function ($v) {
            return Carbon::parse($v)->format('d M Y H:i');
        });

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
        $show = new Show(Seo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('seo_home_title', __('Seo home title'));
        $show->field('seo_home_des', __('Seo home des'));
        $show->field('seo_home_key', __('Seo home key'));
        $show->field('seo_about_title', __('Seo about title'));
        $show->field('seo_about_des', __('Seo about des'));
        $show->field('seo_about_key', __('Seo about key'));
        $show->field('seo_destination_title', __('Seo destination title'));
        $show->field('seo_destination_des', __('Seo destination des'));
        $show->field('seo_destination_key', __('Seo destination key'));
        $show->field('seo_blog_title', __('Seo blog title'));
        $show->field('seo_blog_des', __('Seo blog des'));
        $show->field('seo_blog_key', __('Seo blog key'));
        $show->field('seo_contact_title', __('Seo contact title'));
        $show->field('seo_contact_des', __('Seo contact des'));
        $show->field('seo_contact_key', __('Seo contact key'));
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
        $form = new Form(new Seo());

        $form->text('seo_home_title', __('Seo home title'));
        $form->textarea('seo_home_des', __('Seo home des'));
        $form->textarea('seo_home_key', __('Seo home key'));
        $form->text('seo_about_title', __('Seo about title'));
        $form->textarea('seo_about_des', __('Seo about des'));
        $form->textarea('seo_about_key', __('Seo about key'));
        $form->text('seo_destination_title', __('Seo destination title'));
        $form->textarea('seo_destination_des', __('Seo destination des'));
        $form->textarea('seo_destination_key', __('Seo destination key'));
        $form->text('seo_blog_title', __('Seo blog title'));
        $form->textarea('seo_blog_des', __('Seo blog des'));
        $form->textarea('seo_blog_key', __('Seo blog key'));
        $form->text('seo_contact_title', __('Seo contact title'));
        $form->textarea('seo_contact_des', __('Seo contact des'));
        $form->textarea('seo_contact_key', __('Seo contact key'));

        return $form;
    }
}
