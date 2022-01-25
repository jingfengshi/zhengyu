<?php

namespace App;



class Config extends Base
{
    const TYPE_WEB= 'web';
    const TYPE_FUWU = 'fuwu';


    public static function getTypeLabel()
    {
        return [
            self::TYPE_WEB => '管理后台',
            self::TYPE_FUWU => '服务',
        ];
    }
}
