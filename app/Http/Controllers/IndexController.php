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
        $category_home = Category::with('post')->orderBy('id','ASC')->where('status',1)->get();
        $hot_news = Post::where('hot_news',1)->get();
        return view('page.home',compact('category','genre','sport','category_home','hot_news'));
    }
    public function category($slug){
        $category = Category::orderBy('id','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','ASC')->get();
        $sport = Sport::orderBy('id','ASC')->get();
        $cate_slug = Category::where('slug',$slug)->first();
        $post = Post::where('category_id',$cate_slug->id)->paginate(12);
        $hot_news = Post::where('hot_news',1)->get();
        return view('page.category',compact('category','genre','sport','cate_slug','post','hot_news'));
    }
    public function genre($slug){
        $category = Category::orderBy('id','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','ASC')->get();
        $sport = Sport::orderBy('id','ASC')->get();
        $genre_slug = Genre::where('slug',$slug)->first();
        $post = Post::where('genre_id',$genre_slug->id)->paginate(12);
        $hot_news = Post::where('hot_news',1)->get();
        return view('page.genre',compact('category','genre','sport','genre_slug','post','hot_news'));
    }
    public function sport($slug){
        $category = Category::orderBy('id','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','ASC')->get();
        $sport = Sport::orderBy('id','ASC')->get();
        $sport_slug = Sport::where('slug',$slug)->first();
        $post = Post::where('sport_id',$sport_slug->id)->paginate(12);
        $hot_news = Post::where('hot_news',1)->get();
        return view('page.sport',compact('category','genre','sport','sport_slug','post','hot_news'));
    }
    public function post($slug){
        // $category = Category::orderBy('id','ASC')->where('status',1)->get();
        // $genre = Genre::orderBy('id','ASC')->get();
        // $sport = Sport::orderBy('id','ASC')->get();
        // $post_slug = Post::where('slug',$slug)->first();
        return view('page.post');
        // ,compact('category','genre','sport','post_slug'
    }
}
