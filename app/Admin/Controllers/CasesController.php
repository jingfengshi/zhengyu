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
    protected $title = 'Cases';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cases());

        $grid->column('id', __('Id'));
        $grid->column('covers', __('Covers'));
        $grid->column('title', __('Title'));
        $grid->column('content', __('Content'));
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

        $form->text('covers', __('Covers'));
        $form->text('title', __('Title'));
        $form->editor('content', __('Content'))->rules('required');
        $form->switch('show', __('Show'))->default(1);

        return $form;
    }
}
