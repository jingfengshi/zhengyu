<?php

namespace App\Admin\Controllers;

use App\Category2;
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
        $grid->is_creative('创新产品')->display(function ($value) {
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
        $cates=Category2::all()->toArray();
        $options =[];
        foreach ($cates as $cate){
            $options[$cate['id']]=$cate['name'];
        }

        $form->select('category_id', '类目')->options($options)->required();

        // 添加简短描述
        $form->editor("desc","简短描述");

        // 创建一组单选框
        $form->radio('on_sale', '上架')->options(['1' => '是', '0'=> '否'])->default('0');
        $form->radio('is_creative', '创新产品')->options(['1' => '是', '0'=> '否'])
            ->when(1,function(Form $form){
                $form->image('image', '封面图片')->removable();
                $form->embeds('extra','详情页', function ($form) {
                    $form->text('f_title','首图标题');
                    $form->text('f_mark','首图此标题');
                    $form->image('first_image','首图商品');
                    $form->text('s_desc','中图描述');
                    $form->image('s_image','中图商品');
                    $form->file("video","视频")->removable();
                    $form->text('l_title','尾图标题');

                });
                $form->hasMany('properties', '技术规格', function (Form\NestedForm $form) {
                    $form->text('name', '属性名');
                    $form->text('value', '属性值');
                    $form->select('type', '类型')->options([
                        'qita'=>'其他参数',
                    ]);
                });
        })
            ->when(0,function(Form $form){
                // 创建一个选择图片的框
                $form->image('image', '封面图片')->removable();
                $form->multipleImage("sub_image","产品图片")->removable()->sortable();

                $form->embeds('extra','简介', function ($form) {
                    $form->text('color','颜色');
                    $form->text('power','功率');
                });
                // 创建一个富文本编辑器
                $form->editor('description', '优点和特点');
                $form->radio('is_new', '新品')->options(['1' => '是', '0'=> '否'])->default(0);
                $form->radio('is_authentication', '认证')->options(['1' => '是', '0'=> '否'])->default('0');
                $form->radio('is_recommend', '推荐')->options(['1' => '是', '0'=> '否'])->default('0');

                $form->textarea("apply_area","应用范围");
                $form->image("sharp","外形尺寸")->removable();

    //                $form->table('extra2','规格参数', function ($table) {
    //                    $table->text('key');
    //                    $table->text('value');
    //                    $table->text('type');
    //                });
                $form->hasMany('properties', '技术规格', function (Form\NestedForm $form) {
                    $form->text('name', '属性名');
                    $form->text('value', '属性值');
                    $form->select('type', '类型')->options([
                        'dianqi'=>'电器参数',
                        'jiegou'=>'结构参数',
                    ]);
                });
                $form->file("file","资料下载")->removable();
                $form->file("video","视频")->removable();
                $form->multipleImage("install","现场安装")->removable()->sortable();

        })->default(0);

        $form->saving(function (Form $form) {
           // dd($form->title);
        });

        return $form;
    }

}
