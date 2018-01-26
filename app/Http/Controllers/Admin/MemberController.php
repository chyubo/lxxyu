<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    
    public function member_add(){
        return view('admin.member.member_add');
    }
   

    public function member_del(){
        return view('admin.member.member_del');
    }

    public function member_list(){
        return view('admin.member.member_list');
    }

    public function member_show(){
        return view('admin.member.member_show');
    }

    public function member_record_browse(){
        return view('admin.member.member_record_browse');
    }

    public function member_record_download(){
        return view('admin.member.member_record_download');
    }


    public function member_record_share(){
        return view('admin.member.member_record_share');
    }

}
