<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
//引入框架自身已经给实现好的代码段文件 

use Illuminate\Auth\Authenticatable;

class Admin extends Model implements \Illuminate\Contracts\Auth\Authenticatable 
{
	use Authenticatable;
    //指定当前模型关联的数据表
    protected $table = 'admin';
}
