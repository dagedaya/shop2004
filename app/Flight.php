<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //设置表名
    protected $table='course';
    //设置主键
    protected $primaryKey='course_id';
    //设置时间戳
    public $timestamps=false;
    //
    protected $guarded=[];
}
