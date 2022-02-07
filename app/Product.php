<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Product extends Model
{
    protected $fillable = [
        'title','desc', 'description', 'image', 'on_sale',
        'sub_image', 'is_new', 'is_authentication', 'is_recommend',
        'apply_area','sharp','file','video','install'
    ];
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
        'is_new' => 'boolean',
        'is_authentication' => 'boolean',
        'is_recommend' => 'boolean',
        'install' => 'array',
        'sub_image'=>'array'
    ];

    public function getSubImageAttribute($value)
    {
        return json_decode($value,true);
    }

    public function setSubImageAttribute($value)
    {
        if(is_array($value)){
            return $this->attributes['sub_image'] = json_encode($value);
        }
    }

    public function properties()
    {
        return $this->hasMany(ProductProperty::class);
    }

    public function category()
    {
        return $this->belongsTo(Category2::class);
    }

    public static function findOne($id)
    {
        if (!$model = self::find($id)){
            throw new NotFoundHttpException('Target Data Not Found');
        }

       return $model;
    }
}
