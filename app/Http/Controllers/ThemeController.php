<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //

    public function index(){


       $blogs= Blog::paginate(2);

        return view("theme.index",compact('blogs'));
    }
    public function category($id){

        $category_name=Category::find($id)->name;
       $blogs=Blog::where('category_id',$id)->paginate(1);
        return view("theme.category",compact('blogs','category_name'));
    }
    public function contact(){

        return view("theme.contact");
    }
 /*    public function singleBlog(){

        return view("theme.singleBlog");
    } */
    public function login(){

        return view("theme.login");
    }
    public function register(){

        return view("theme.register");
    }

}
