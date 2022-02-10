<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category2 extends Model
{
    const TYPE_PRO = 'protected';
    const TYPE_CAL = 'cal';

    public static function getTypeLabel()
    {
        return [
            self::TYPE_PRO => '保护人们在危险环境安全工作',
            self::TYPE_CAL => '智慧工业计量',
        ];
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
