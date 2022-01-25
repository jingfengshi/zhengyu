<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $fillable = ['type', 'file', 'sort', 'show'];

    const TYPE_ABOUT = 'about';
    const TYPE_CASES = 'cases';
    const TYPE_CASES_INFO = 'cases_info';
    const TYPE_CERT = 'cert';
    const TYPE_CONNECT = 'connect';
    const TYPE_INDEX_LEFT = 'index_left';
    const TYPE_INDEX_RIGHT = 'index_right';
    const TYPE_NEWS = 'news';
    const TYPE_NEWS_INFO = 'news_info';
    const TYPE_PRODUCT_LIST = 'product_list';
    const TYPE_PRODUCT = 'product';
    const TYPE_PRODUCT_INFO = 'product_info';
    const TYPE_SERVICE = 'service';

    public static function getTypeLabel()
    {
        return [
            self::TYPE_ABOUT => '关于我们页',
            self::TYPE_CASES => '案例页',
            self::TYPE_CASES_INFO => '案例详情页',
            self::TYPE_CERT => '证书页',
            self::TYPE_CONNECT => '联系我们页',
            self::TYPE_INDEX_LEFT => '首页左图(重复上传会覆盖之前的图片)',
            self::TYPE_INDEX_RIGHT => '首页右图(重复上传会覆盖之前的图片)',
            self::TYPE_NEWS => '新闻页',
            self::TYPE_NEWS_INFO => '新闻详情页',
            self::TYPE_PRODUCT_LIST => '产品列表页',
            self::TYPE_PRODUCT => '产品首页',
            self::TYPE_PRODUCT_INFO => '产品详情页',
            self::TYPE_SERVICE => '服务品牌页',
        ];
    }

}
