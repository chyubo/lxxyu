<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
      public function system_base(){
        return view('admin.system.system_base');
    }


    public function system_category(){
        return view('admin.system.system_category');
    }


    public function system_data(){
        return view('admin.system.system_data');
    }


    public function system_shielding(){
        return view('admin.system.system_shielding');
    }

    public function system_log(){
        return view('admin.system.system_log');
    }
}
