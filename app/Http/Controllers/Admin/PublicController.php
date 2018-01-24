<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
// use Illuminate\Support\Facades\Input;
// use Illuminate\Database\Eloquent\Model;



class PublicController extends Controller
{
    

    public function add(){
    	return view('admin.public.add');
    }


 

    


    public function article_add(){
        return view('admin.public.article_add');
    }

    public function article_class_edit(){
        return view('admin.public.article_class_edit');
    }
    

     public function picture_add(){
        return view('admin.public.picture_add');
    }



     public function product_add(){
        return view('admin.public.product_add');
    }



     
   



    public function article_list(){
        return view('admin.public.article_list');
    }

    public function picture_list(){
        return view('admin.public.picture_list');
    }

     public function product_brand(){
        return view('admin.public.product_brand');
    }


     public function product_category(){
        return view('admin.public.product_category');
    }


    public function product_category_add(){
        return view('admin.public.product_category_add');
    }

    


     public function product_list(){
        return view('admin.public.product_list');
    }


     public function feedback_list(){
        return view('admin.public.feedback_list');
    }
    

    public function member_add(){
        return view('admin.public.member_add');
    }
   

    public function member_del(){
        return view('admin.public.member_del');
    }

    public function member_list(){
        return view('admin.public.member_list');
    }

    public function member_show(){
        return view('admin.public.member_show');
    }

    public function member_record_browse(){
        return view('admin.public.member_record_browse');
    }

    public function member_record_download(){
        return view('admin.public.member_record_download');
    }


    public function member_record_share(){
        return view('admin.public.member_record_share');
    }

    

    public function charts_1(){
        return view('admin.public.charts_1');
    }

     public function charts_2(){
        return view('admin.public.charts_2');
    }

     public function charts_3(){
        return view('admin.public.charts_3');
    }

     public function charts_4(){
        return view('admin.public.charts_4');
    }

     public function charts_5(){
        return view('admin.public.charts_5');
    }

     public function charts_6(){
        return view('admin.public.charts_6');
    }

     public function charts_7(){
        return view('admin.public.charts_7');
    }

     
    


    public function system_base(){
        return view('admin.public.system_base');
    }


    public function system_category(){
        return view('admin.public.system_category');
    }


    public function system_data(){
        return view('admin.public.system_data');
    }


    public function system_shielding(){
        return view('admin.public.system_shielding');
    }

    public function system_log(){
        return view('admin.public.system_log');
    }

    


}
