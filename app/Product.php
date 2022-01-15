<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'image', 'on_sale',
        'sub_image', 'is_new', 'is_authentication', 'is_recommend',
        'apply_area','sharp','file','video','install'
    ];
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
        'is_new' => 'boolean',
        'is_authentication' => 'boolean',
        'is_recommend' => 'boolean',
    ];
}
