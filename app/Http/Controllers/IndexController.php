<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Sport;
use App\Models\Post;

class IndexController extends Controller
{
    public function home(){
        $category = Category::orderBy('id','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','ASC')->get();
        $sport = Sport::orderBy('id','ASC')->get();
        $category_home = Category::orderBy('id','ASC')->where('status',1)->get();
        return view('page.home',compact('category','genre','sport','category_home'));
    }
    public function category($slug){
        $category = Category::orderBy('id','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','ASC')->get();
        $sport = Sport::orderBy('id','ASC')->get();
        $cate_slug = Category::where('slug',$slug)->first();
        return view('page.category',compact('category','genre','sport','cate_slug'));
    }
    public function genre($slug){
        $category = Category::orderBy('id','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','ASC')->get();
        $sport = Sport::orderBy('id','ASC')->get();
        $genre_slug = Genre::where('slug',$slug)->first();
        return view('page.genre',compact('category','genre','sport','genre_slug'));
    }
    public function sport($slug){
        $category = Category::orderBy('id','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','ASC')->get();
        $sport = Sport::orderBy('id','ASC')->get();
        $sport_slug = Category::where('slug',$slug)->first();
        return view('page.sport',compact('category','genre','sport','sport_slug'));
    }
}
