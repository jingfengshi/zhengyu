<?php

namespace App\Admin\Controllers;

use App\Category;
use App\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;


class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '产品';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->model()->with(['category']);
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
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product);

        // 创建一个输入框，第一个参数 title 是模型的字段名，第二个参数是该字段描述
        $form->text('title', '商品名称')->rules('required');
        // 添加一个类目字段，与之前类目管理类似，使用 Ajax 的方式来搜索添加
        $form->select('category_id', '类目')->options(function ($id) {
            $category = Category::find($id);
            if ($category) {
                return [$category->id => $category->full_name];
            }
        })->ajax('/admin/api/categories?is_directory=0');
        // 创建一个选择图片的框
        $form->image('image', '封面图片')->rules('required|image');
        $form->multipleImage("sub_image","产品图片");
        // 创建一个富文本编辑器
        $form->editor('description', '优点和特点')->rules('required');

        // 创建一组单选框
        $form->radio('on_sale', '上架')->options(['1' => '是', '0'=> '否'])->default('0');
        $form->radio('is_new', '新品')->options(['1' => '是', '0'=> '否'])->default('0');
        $form->radio('is_authentication', '认证')->options(['1' => '是', '0'=> '否'])->default('0');
        $form->radio('is_recommend', '推荐')->options(['1' => '是', '0'=> '否'])->default('0');

        $form->textarea("apply_area","应用范围")->required("required");
        $form->image("sharp","外形尺寸");
        $form->hasMany('properties', '技术规格', function (Form\NestedForm $form) {
            $form->text('name', '属性名')->rules('required');
            $form->text('value', '属性值')->rules('required');
        });
        $form->file("file","资料下载");
        $form->file("video","视频");
        $form->multipleImage("install","现场安装");


        return $form;
    }

}
