<?php


namespace App\Admin\Controllers;


use App\Config;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;

class FuwuController extends AdminController {


    protected $title ="服务管理";


    protected function grid()
    {
        $grid = new Grid(new Config());

        return $grid;
    }
    public function index(Content $content)
    {

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
        if (!isset($params['产品下载附件'])) {
            $logoName = Config::query()->where('name', '=', '产品下载附件')->value('value');
        } else {// 如果有上传照片 进行处理
            $logoName = (new Form\Field\File('产品下载附件', '产品下载附件'))->uniqueName()->prepare($params['产品下载附件']);
        }
        //进行更新数据
        foreach ($params as $key => $param) {
            if ($key == '产品下载附件') {
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





    protected function form()
    {
        $form = new Form(new Config());
        $form->setTitle('');
        $lists = Config::query()->where('type','fuwu')->get()->toArray();
        foreach ($lists as $list) {
            if ($list['name']=='定制与试用' || $list['name']=='金牌服务') {
                $form->editor($list['name'], $list['name'])->value($list['value']);
            } elseif ($list['name'] == '产品下载附件') {
                $form->file($list['name'],$list['name'])->value($list['value'])->rules('mimes:doc,docx');
            } else {
                $form->text($list['name'], $list['name'])->value($list['value']);
            }
        }
        $form->setAction('/admin/fuwu');
        $form->disableEditingCheck();
        $form->disableViewCheck();
        $form->disableCreatingCheck();
        $form->disableReset();


        return $form;
    }
}
