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
    



 
      public function picture_list(){
            return view('admin.public.picture_list');
        }
       

     public function picture_add(){
        return view('admin.public.picture_add');
    }








   
    








       public function article_add(){
        return view('admin.public.article_add');
    }

    public function article_class_edit(){
        return view('admin.public.article_class_edit');
    }

      public function article_list(){
        return view('admin.public.article_list');
    }
   



     public function feedback_list(){
        return view('admin.public.feedback_list');
    }
    


}
