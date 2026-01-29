<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Destination;
use Illuminate\Support\Str;

class DestinationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Destination';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Destination());

        $grid->column('id', __('Id'));
        $grid->column('thumb_image', __('Thumb image'))->image('/uploads/','50','50');

        $grid->column('title', __('Title'));

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
        $show = new Show(Destination::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('thumb_image', __('Thumb image'));
        $show->field('gallery', __('Gallery'));
        $show->field('alt', __('Alt'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('short_description', __('Short description'));
        $show->field('tour_duration', __('Tour duration'));
        $show->field('tour_group', __('Tour group'));
        $show->field('tour_location', __('Tour location'));
        $show->field('best_time', __('Best time'));
        $show->field('pickup_location', __('Pickup location'));
        $show->field('tour_reviews', __('Tour reviews'));
        $show->field('description', __('Description'));
        $show->field('itinerarys', __('Itinerarys'));
        $show->field('inclusions', __('Inclusions'));
        $show->field('exclusions', __('Exclusions'));
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
        $form = new Form(new Destination());

        $form->select('category_id', __('Category Name'));
        $form->text('thumb_image', __('Thumb image'));
        $form->text('gallery', __('Gallery'));
        $form->text('alt', __('Alt'));
        $form->text('title', __('Title'));
        $form->saving(function (Form $form) {
            $form->slug = Str::slug($form->title);
        });
        $form->hidden('slug', __('Slug'));
        $form->textarea('short_description', __('Short description'));
        $form->text('tour_duration', __('Tour duration'));
        $form->text('tour_group', __('Tour group'));
        $form->text('tour_location', __('Tour location'));
        $form->text('best_time', __('Best time'));
        $form->text('pickup_location', __('Pickup location'));
        $form->text('tour_reviews', __('Tour reviews'));
        $form->textarea('description', __('Description'));
        $form->text('itinerarys', __('Itinerarys'));
        $form->text('inclusions', __('Inclusions'));
        $form->text('exclusions', __('Exclusions'));
        $form->switch('is_active', __('Is active'))->default(1);

        return $form;
    }
}
