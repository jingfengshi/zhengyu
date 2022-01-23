<?php

namespace App\Admin\Controllers;

use App\Cases;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CasesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '案例';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cases());

        $grid->column('id', __('Id'));
        //$grid->column('covers', '封面图片');
        $grid->column('title', '标题');
        //$grid->column('content', '内容');

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
        $show = new Show(Cases::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('covers', __('Covers'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
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
        $form = new Form(new Cases());
        $form->text('title', '标题')->rules('required');
        $form->textarea('desc', '描述');
        $form->image('covers', '封面图片')->rules('required');

        $form->editor('content', '内容')->rules('required');
        $form->switch('show','是否显示')->default(1);

        return $form;
    }
}
