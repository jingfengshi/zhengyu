<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cert extends Model
{
    protected $table = 'cert';

    protected $fillable = ['title', 'file'];

    const TYPE_HONOR = 'honor';
    const TYPE_CERT = 'certificate';


    public static function getTypeLabel()
    {
        return [
            self::TYPE_HONOR => '荣誉',
            self::TYPE_CERT => '证书',
        ];
    }

}
