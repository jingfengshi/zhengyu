<?php

namespace App\Providers;

use App\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

//        \DB::listen(function ($query) {
//            $tmp = str_replace('?', '"'.'%s'.'"', $query->sql);
//            $qBindings = [];
//            foreach ($query->bindings as $key => $value) {
//                if (is_numeric($key)) {
//                    $qBindings[] = $value;
//                } else {
//                    $tmp = str_replace(':'.$key, '"'.$value.'"', $tmp);
//                }
//            }
//            $tmp = vsprintf($tmp, $qBindings);
//            $tmp = str_replace("\\", "", $tmp);
//            \Log::info(' execution time: '.$query->time.'ms; '.$tmp."\n\n\t");
//        });

        $configs = [
            [
                'name' => '定制与试用',
                'value' => '',
                'type'=>Config::TYPE_FUWU
            ],
            [
                'name' => '产品使用邮件',
                'value' => '',
                'type'=>Config::TYPE_FUWU
            ],
            [
                'name' => '产品下载附件',
                'value' => '',
                'type'=>Config::TYPE_FUWU
            ],
            [
                'name' => '金牌服务',
                'value' => '',
                'type'=>Config::TYPE_FUWU
            ],
            [
                'name' => 'ICP备案号',
                'value' => '',
                'type'=>Config::TYPE_WEB
            ],
            [
                'name' => '网安备案号',
                'value' => '',
                'type'=>Config::TYPE_WEB
            ],
            [
                'name' => '二维码',
                'value' => '',
                'type'=>Config::TYPE_WEB
            ],
            [
                'name' => '抖音号',
                'value' => '',
                'type'=>Config::TYPE_WEB
            ],
            [
                'name' => '公众号',
                'value' => '',
                'type'=>Config::TYPE_WEB
            ],
            [
                'name' => '关于我们',
                'value' => '',
                'type'=>Config::TYPE_WEB
            ],
            [
                'name' => '隐私声明',
                'value' => '',
                'type'=>Config::TYPE_WEB
            ],
            [
                'name' => '企业信息',
                'value' => '',
                'type'=>Config::TYPE_WEB
            ],
        ];
        foreach ($configs as $config){
            Config::firstOrCreate([
                'name'=>$config['name'],
                'type'=>$config['type']
            ],$config);
        }

        view()->composer('main', function ($view) {
            $view->with('sys_icp',Config::where('name','ICP备案号')->select('value')->first());
            $view->with('sys_wa',Config::where('name','网安备案号')->select('value')->first());
        });

    }
}
