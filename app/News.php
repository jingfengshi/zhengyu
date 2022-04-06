<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'content', 'publish_time', 'on_shelf','author'
    ];
    protected $casts = [
        'on_shelf' => 'boolean', // on_shelf 是一个布尔类型的字段
        'publish_time'=>'date'
    ];
}
