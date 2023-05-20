<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Sport;
use Symfony\Component\Routing\RequestContext;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Post::with('category','genre','sport')->orderBy('id','ASC')->get();
        return view('admin.post.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::pluck('title','id');
        $genre = Genre::pluck('title','id');
        $sport = Sport::pluck('title','id');
        return view('admin.post.form',compact('category','genre','sport'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $post = new Post();
        $post->title = $data['title'];
        $post->hot_news = $data['hot_news'];
        $post->slug = $data['slug'];
        $post->date = $data['date'];
        $post->description = $data['description'];
        $post->content = $data['content'];
        $post->link_post = $data['link_post'];
        $post->image = $data['image'];
        $post->category_id = $data['category_id'];
        $post->genre_id = $data['genre_id'];
        $post->sport_id = $data['sport_id'];

        $post->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::pluck('title','id');
        $genre = Genre::pluck('title','id');
        $sport = Sport::pluck('title','id');
        $post = Post::find($id);
        return view('admin.post.form',compact('category','genre','sport','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $post = Post::find($id);
        $post->title = $data['title'];
        $post->hot_news = $data['hot_news'];
        $post->slug = $data['slug'];
        $post->date = $data['date'];
        $post->description = $data['description'];
        $post->content = $data['content'];
        $post->link_post = $data['link_post'];
        $post->image = $data['image'];
        $post->category_id = $data['category_id'];
        $post->genre_id = $data['genre_id'];
        $post->sport_id = $data['sport_id'];
        $post->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::find($id)->delete();
        return redirect()->back();
    }
}
