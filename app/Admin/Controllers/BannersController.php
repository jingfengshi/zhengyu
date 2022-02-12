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
    protected $title = 'Banners管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Banners());

        $grid->column('id', __('Id'));
        $grid->column('type', '类型')->display(function ($type){
            return Banners::getTypeLabel()[$type];
        });
        //$grid->column('file', __('File'));
        $grid->column('sort', '排序');
        $grid->column('show','是否展示')->display(function($value){
            return $value ? '是':'否';
        });
        $grid->column('created_at', '创建时间');
        $grid->column('updated_at', '更新时间');

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
        $form->select('type', '类型')->options(Banners::getTypeLabel());
        $form->image('file', 'banner图片')->rules('required');
        $form->number('sort', '排序');
        $form->switch('show','是否显示')->default(1);
        return $form;
    }
}
