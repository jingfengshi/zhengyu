<?php

namespace App\Admin\Controllers;

use App\ProductGuige;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductsGuigeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '规格参数';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductGuige());

        $grid->id('ID')->sortable();
        $grid->name('规格名称');


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
        $show = new Show(ProductGuige::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProductGuige());

        $form->text('name','规格分类名');

        return $form;
    }
}
