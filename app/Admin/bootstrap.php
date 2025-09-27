<?php

use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;
use Dcat\Admin\Show;

/**
 * Dcat-admin - admin builder based on Laravel.
 * @author jqh <https://github.com/jqhph>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *
 * extend custom field:
 * Dcat\Admin\Form::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Column::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Filter::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

//如果当前登录用户是admin角色
if (Admin::user()) {
    if (Admin::user()->inRoles(['administrator'])) {
        env('APP_DEBUG', true);
    }
}

//表单的初始化设置
Form::resolving(function (Form $form) {
    //默认勾选继续编辑
    $form->footer(function ($footer) {
        $footer->defaultEditingChecked();
    });

    //禁用不使用的按钮
    $form->disableResetButton();
    $form->disableViewCheck();
    $form->disableCreatingCheck();

    $form->tools(function (Form\Tools $tools) {
        $tools->disableDelete();
        $tools->disableView();
        $tools->disableList();
    });
});


Grid::resolving(function (Grid $grid) {

    //操作列显示图标
//    $grid->setActionClass(Grid\Displayers\Actions::class);

    //列内文字默认居中
    $grid->addTableClass(['table-text-center']);

    //禁用的组建
    $grid->disableBatchDelete();
    $grid->disableRowSelector();
    $grid->disableViewButton();

    //设置默认筛选样式
    $grid->filter()->panel();

    //非Admin角色不显示删除按钮
    if (! Admin::user()->inRoles(['administrator'])) {
        $grid->disableDeleteButton();
    }
});

//全局JS加载
Admin::script(
    <<<'JS'
        //移除底部链接
        Dcat.init('body > footer > p',function (s){
            s.remove()
        })
    JS
);

////重写导航栏个人信息，隐藏头像和设置按钮
//admin_inject_section(Admin::SECTION['NAVBAR_USER_PANEL'], function () {
//    return view('admin.navbar-user-panel', ['user' => Admin::user()]);
//});

//
//Log::channel('admin')
//    ->info('|#|'.Request()->getClientIp().'|#|'.
//        optional(Admin::user())->id.'|#|'.
//        Request()->method().'|#|'.
//        Request()->fullUrl().'|#|'.
//        json_encode(Request()->all())
//    );

