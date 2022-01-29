<?php

namespace App;



class Config extends Base
{
    const TYPE_WEB= 'web';
    const TYPE_FUWU = 'fuwu';
    const TYPE_INDEX = 'index';


    public static function getTypeLabel()
    {
        return [
            self::TYPE_WEB => '管理后台',
            self::TYPE_FUWU => '服务',
            self::TYPE_INDEX=>'首页'
        ];
    }
}
