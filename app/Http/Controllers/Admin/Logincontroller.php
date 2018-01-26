<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class logincontroller extends Controller
{
    

    //后台登录页面
     public function login()
    {   
    	return view('admin.public.login');
    }



    //后台登录方法
     public function logindl(Request $request)
    {

            // $input = $request->input();

           $this -> validate($request,[
                    'username' => 'required|min:2|max:20',
                    'password' => 'required|min:6|max:20',
                    'captcha' => 'required|size:5|captcha',
            ]);
           
            $data=$request->only('username','password'); 
            $result=Auth::guard('admin')->attempt($data,$request->get('online'));
           
           if($result){
                return  redirect()->route("index");

           }else{
                return redirect()->route("login") -> withErrors([
                        'loginError' => '用户名或密码错误！'
                    ]);
           }
                   
    }
  

    //后台退出方法  
    public function logout()
    {
        Auth::guard('admin') ->logout();
        // dump($rlll);die;
        return redirect()->route('login');
    }

    public function index(){

    	return view('admin.public.index');
    }

    public function welcome(){
    	return view('admin.public.welcome');
    }

}
