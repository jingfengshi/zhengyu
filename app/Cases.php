<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Cases extends Model
{
    protected $fillable = ['covers', 'title', 'content', 'show'];

    public static function findOne($id)
    {
        if (!$model = self::find($id)){
            throw new NotFoundHttpException('Target Data Not Found');
        }

        return $model;
    }
}
