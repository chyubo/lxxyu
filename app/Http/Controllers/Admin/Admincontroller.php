<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin\Admin;
use Illuminate\Support\Facades\DB;
class Admincontroller extends Controller
{
       public function admin_list(){
       	
       	$data = Admin::get();

       	//获取数据总记录
        $count =DB::table("admin")->count(); 
        //$username = '2';
       // dd($count);
       // 	die; 
      //  object_get($username,'someUnSetValue');
      //   object_get($created_at,'someUnSetValue');
        /*$all_data = DB::table("admin")
      ->where("username",'like' , '%' . $username . '%')
      ->where('created_at', 'like', '%' . $created_at . '%')
      ->select();*/
      //dump($all_data);die;
    	return view('admin.public.admin_list',['data'=>$data],['count'=>$count]);
    }

    public function search(Request $request){

    	$data = DB::table("admin")
	      ->where("username",'like' , '%' . $request->username . '%')
	      ->where('created_at', '<', $request->created_at)
	      ->where('created_at', '>', $request->end_at)
	      ->get();
     	// var_dump($all_data);die;
     	return view('admin.public.admin_list',['data'=>$data]);
    }

    public function admin_role(){
        return view('admin.public.admin_role');
    }


    public function admin_permission(){
        return view('admin.public.admin_permission');
    }
}
