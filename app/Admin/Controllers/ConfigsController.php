<?php

namespace App\Admin\Controllers;

use App\Config;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class ConfigsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '配置管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Config());

        return $grid;
    }

    public function index(Content $content)
    {
        $lists = Config::query()->get()->toArray();
        if (empty($lists)) {
            $configs = [
                [
                    'name' => '备案号',
                    'value' => '',
                ],
                [
                    'name' => '二维码',
                    'value' => '',
                ],
                [
                    'name' => '抖音号',
                    'value' => '',
                ],
                [
                    'name' => '公众号',
                    'value' => '',
                ],
                [
                    'name' => '关于我们',
                    'value' => '',
                ],
            ];
            $config = new Config();
            foreach ($configs as $c) {
                $config->create($c);
            }
        }

        return $content
            ->title($this->title())
            ->description($this->description['index'] ?? trans('admin.list'))
            ->body($this->form());//这里调用之后  相当于访问到这个控制器的时候 就直接显示表单页面 而不是列表页面
    }


    public function save(Request $request)
    {
        //获取提交过来的参数
        $params = $request->all();

        //如果提交过来的参数中没有有照片的数据
        if (!isset($params['二维码'])) {
            $logoName = Config::query()->where('name', '=', '二维码')->value('value');
        } else {// 如果有上传照片 进行处理
            $logoName = (new Form\Field\Image('二维码', '二维码'))->uniqueName()->prepare($params['二维码']);
        }
        //进行更新数据
        foreach ($params as $key => $param) {
            if ($key == '二维码') {
                Config::query()
                    ->where('name', '=', $key)
                    ->update(['value' => $logoName]);
            } else {
                Config::query()
                    ->where('name', '=', $key)
                    ->update(['value' => $param]);
            }
        }
        //这个地方是 处理成功之后 反馈给前端的弹窗样式 如果是失败 只需要把success改成error
        admin_toastr('更新成功', 'success');
        return back();
    }


    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Config::findOrFail($id));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Config());
        $form->setTitle('');
        $lists = Config::query()->get()->toArray();
        foreach ($lists as $list) {
            if ($list['name'] == '二维码') {
                $form->image($list['name'], $list['name'])->value($list['value']);
            } elseif ($list['name'] == '关于我们') {
                $form->editor('关于我们')->value($list['value']);
            } else {
                $form->text($list['name'], $list['name'])->value($list['value']);
            }
        }
        $form->setAction('/admin/configs');
        $form->disableEditingCheck();
        $form->disableViewCheck();
        $form->disableCreatingCheck();
        $form->disableReset();


        return $form;
    }
}
