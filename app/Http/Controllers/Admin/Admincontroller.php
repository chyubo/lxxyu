<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin\Admin;
use Illuminate\Support\Facades\DB;
// use App\Providers\AppServiceProvider;
class Admincontroller extends Controller
{

    //展示数据
    public function admin_list(){

       //获取数据表全部数据   
      $data = Admin::get();

      //获取数据总记录
          
      $count =DB::table("admin")->count(); 
         
      // return view('admin.public.admin_list',['data'=>$data],['count'=>$count]);
      return view('admin.admin.admin_list',['data'=>$data])->with('count',$count);     

    }




    //admin_list 搜索功能
    public function search(Request $request){
    
      
        
        // $count =DB::table("admin")->count();
       //判断是否又空值，如果没有直接查一个username
       if(empty($request['created_at']) || empty($request['end_it'])){
           $data = DB::table('admin')
                     ->where('username' , 'like' , '%' . $request->username . '%')
                     ->get();
          
                    // 统计查询的记录数
                    $count = count($data);
// 
                    //向视图传参
                    return view("admin.admin.admin_list")
                          ->with('data',$data)
                          ->with('count',$count);

die;
        //如果有值的话，查询三个
       }else{

          $data = DB::table("admin")
                  ->where("username",'like' , '%' . $request->username . '%')
                  ->where('created_at', '>',  $request->created_at)
                  ->where('created_at', '<',  $request->end_it )
                  ->get();

                  //统计查询的记录数
                   $count = count($data); 

                  //向视图传参
                  return view("admin.admin.admin_list")
                  ->with('data',$data)
                  ->with('count',$count);

       }

    }


    public function admin_add(){
      
      
        return view('admin.admin.admin_add');
    }


    public function add_admin(Request $Request){

       //获取数据表全部数据   
      $data = Admin::get();

      //获取数据总记录
          
      $count =DB::table("admin")->count(); 
     
      $add = [
          'username' => $Request->username,
          'password' => bcrypt('$Request->password'),
          'gender'   => $Request->sex,
          'mobile'   => $Request->phone,
          'email'    => $Request->email,
          'role_id'  => $Request->role_id,
          'created_at' => Carbon::now(),
          

      ];
      $dd = DB::table('admin')->insert($add);
      // $add = DB::insert('insert into admin (id, username,password,gender,mobile,email,role_id) values ('$Request', ? ,?, ? , ?, ?)');
      dd($dd);
          return View('admin.admin.admin_list')
                  ->with('data',$data)
                  ->with('count',$count);
      
    }




    public function admin_role(){
        return view('admin.admin.admin_role');
    }


    public function admin_permission(){
        return view('admin.admin.admin_permission');
    }


    
}
    