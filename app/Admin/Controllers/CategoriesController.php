<?php

namespace App\Admin\Controllers;

use App\Category;
use App\Category2;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class CategoriesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '产品类目管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category2);

        $grid->id('ID')->sortable();
        $grid->name('名称');
        $grid->column('type', '类型')->display(function ($type){
            return Category2::getTypeLabel()[$type];
        });

        $grid->actions(function ($actions) {
            // 不展示 Laravel-Admin 默认的查看按钮
            $actions->disableView();
        });

        return $grid;
    }

    public function edit($id, Content $content)
    {
        return $content
            ->title($this->title())
            ->description($this->description['edit'] ?? trans('admin.edit'))
            ->body($this->form(true)->edit($id));
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($isEditing = false)
    {
        $form = new Form(new Category2);

        $form->text('name', '类目名称')->rules('required');
        $form->image('image', '分类图片')->rules('required|image')->uniqueName();
        $form->select('type', '类型')->options(Category2::getTypeLabel())->required();
        $form->number('sort','排序');
        $form->textarea('desc','描述')->rows(5);
        $form->image('f_icon','第一个图标')->required()->uniqueName();
        $form->text('f_icon_desc','第一个图标文字');
        $form->image('s_icon','第二个图标')->required()->uniqueName();
        $form->text('s_icon_desc','第二个图标文字');
        $form->image('l_icon','第三个图标')->required()->uniqueName();
        $form->text('l_icon_desc','第三个图标文字');
        return $form;
    }

    // 定义下拉框搜索接口
    public function apiIndex(Request $request)
    {

        $result = Category::query()
            // 通过 is_directory 参数来控制
            ->where('is_directory', boolval($request->input('is_directory', true)))
            ->where('name', 'like', '%'.$search.'%')
            ->paginate();
        // 把查询出来的结果重新组装成 Laravel-Admin 需要的格式
        $result->setCollection($result->getCollection()->map(function (Category $category) {
            return ['id' => $category->id, 'text' => $category->full_name];
        }));

        return $result;
    }


}
