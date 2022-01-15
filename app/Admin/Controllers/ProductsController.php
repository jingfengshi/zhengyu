<?php

namespace App\Admin\Controllers;

use App\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->id('ID')->sortable();
        $grid->title('产品名称');
        $grid->on_sale('已上架')->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->is_new('新品')->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->is_authentication('认证')->display(function ($value) {
            return $value ? '是' : '否';
        });

        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
        $show->field('sub_image', __('Sub image'));
        $show->field('on_sale', __('On sale'));
        $show->field('is_new', __('Is new'));
        $show->field('is_authentication', __('Is authentication'));
        $show->field('is_recommend', __('Is recommend'));
        $show->field('apply_area', __('Apply area'));
        $show->field('sharp', __('Sharp'));
        $show->field('file', __('File'));
        $show->field('video', __('Video'));
        $show->field('install', __('Install'));
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
        $form = new Form(new Product());

        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
        $form->image('image', __('Image'));
        $form->textarea('sub_image', __('Sub image'));
        $form->switch('on_sale', __('On sale'));
        $form->switch('is_new', __('Is new'));
        $form->switch('is_authentication', __('Is authentication'));
        $form->switch('is_recommend', __('Is recommend'));
        $form->textarea('apply_area', __('Apply area'));
        $form->textarea('sharp', __('Sharp'));
        $form->file('file', __('File'));
        $form->text('video', __('Video'));
        $form->textarea('install', __('Install'));

        return $form;
    }
}
