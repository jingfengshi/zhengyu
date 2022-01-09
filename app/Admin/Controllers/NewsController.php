<?php

namespace App\Admin\Controllers;

use App\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '新闻管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->column('id', __('Id'));
        $grid->column('title', '新闻标题');
        //$grid->column('content', '新闻详情');
        $grid->column('on_shelf','已发布')->display(function($value){
            return $value ? '是':'否';
        });
        $grid->column('publish_time','显示日期')->datetime('YYYY-MM-DD');
        $grid->column('author', __('Author'));
        $grid->column('created_at', '创建时间');
        //$grid->column('updated_at', __('Updated at'));

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
        $show = new Show(News::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('on_shelf', __('On shelf'));
        $show->field('publish_time', __('Publish time'));
        $show->field('author', __('Author'));
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
        $form = new Form(new News());

        $form->text('title','新闻标题');
        $form->editor('content','新闻详情');
        $form->switch('on_shelf', '已发布');
        $form->datetime('publish_time', '时间')->default(date('Y-m-d H:i:s'));
        $form->image('author', '作者');

        return $form;
    }
}
