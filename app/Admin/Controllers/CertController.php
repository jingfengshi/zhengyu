<?php

namespace App\Admin\Controllers;

use App\Cert;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CertController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '证书管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cert());

        $grid->column('title', '证书名称');
        $grid->column('file', '证书');

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
        $show = new Show(Cert::findOrFail($id));

        $show->field('title', '证书名称');
        $show->field('file', '证书');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Cert());

        $form->text('title', '证书名称')->rules('required');
        $form->image('file', '证书');

        return $form;
    }
}
