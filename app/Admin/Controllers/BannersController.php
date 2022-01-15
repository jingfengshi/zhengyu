<?php

namespace App\Admin\Controllers;

use App\Banners;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BannersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Banners';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Banners());

        $grid->column('id', __('Id'));
        $grid->column('type', __('Type'))->display(function ($type){
            return Banners::getTypeLabel()[$type];
        });
        $grid->column('file', __('File'));
        $grid->column('sort', __('Sort'));
        $grid->column('show', __('Show'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Banners::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('type', __('Type'));
        $show->field('file', __('File'));
        $show->field('sort', __('Sort'));
        $show->field('show', __('Show'));
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
        $form = new Form(new Banners());

//        $form->text('type', __('Type'));
        $form->select('type', __('Type'))->options(Banners::getTypeLabel());
        $form->file('file', __('File'));
        $form->number('sort', __('Sort'));
        $form->switch('show', __('Show'))->default(1);

        return $form;
    }
}
