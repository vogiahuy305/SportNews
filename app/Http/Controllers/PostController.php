<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Country;
use App\Models\Sport;
use Illuminate\Support\Facades\File;
use Symfony\Component\Routing\RequestContext;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Post::with('category','country','sport')->orderBy('id','ASC')->get();

        $path = public_path()."/json/";
        if(!is_dir($path)) {
            mkdir($path,0777,true);
        }
        File::put($path.'post.json',json_encode($list));

        return view('admin.post.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::pluck('title','id');
        $country = Country::pluck('title','id');
        $sport = Sport::pluck('title','id');
        return view('admin.post.form',compact('category','country','sport'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->all();

        $data = $request->validate(
        [
            'title' => 'required|unique:posts|max:100',
            'slug' => 'required|unique:posts|max:255',
            'date' => 'required',
            'description' => 'required|max:65535',
            'content' => 'required|max:65535',
            'link_post' => 'required|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:255',
            'status' => 'required',
        ],
        [
            'title.required' => 'Vui lòng điền tiêu đề tin tức !!',
            'title.unique' => 'Tiêu đề tin tức đẫ có, vui lòng điền tiêu đề khác !!',
            'slug.required' => 'Vui lòng điền slug tin tức !!',
            'slug.unique' => 'Slug tin tức đã có, vui lòng điền slug khác !!',
            'date.required' => 'Vui lòng nhập ngày đăng tin !!',
            'description.required' => 'Vui lòng điền mô tả tin tức !!',
            'content.required' => 'Vui lòng nhập nội dung tin tức !!',
            'link_post.required' => 'Vui lòng điền đường dẫn tin tức gốc !!',
            'image.required' => 'Vui lòng điền đường dẫn hình ảnh tin tức !!',
        ]
        );
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
        $post->country_id = $data['country_id'];
        $post->sport_id = $data['sport_id'];
        $post->status = $data['status'];
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
        $country = Country::pluck('title','id');
        $sport = Sport::pluck('title','id');
        $post = Post::find($id);
        return view('admin.post.form',compact('category','country','sport','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $data = $request->all();
        $data = $request->validate(
        [
            'title' => 'required|unique:posts|max:100',
            'slug' => 'required|unique:posts|max:255',
            'date' => 'required',
            'description' => 'required|max:65535',
            'content' => 'required|max:65535',
            'link_post' => 'required|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:255',
            'status' => 'required',
        ],
        [
            'title.required' => 'Vui lòng điền tiêu đề tin tức !!',
            'title.unique' => 'Tiêu đề tin tức đẫ có, vui lòng điền tiêu đề khác !!',
            'slug.required' => 'Vui lòng điền slug tin tức !!',
            'slug.unique' => 'Slug tin tức đã có, vui lòng điền slug khác !!',
            'date.required' => 'Vui lòng nhập ngày đăng tin !!',
            'description.required' => 'Vui lòng điền mô tả tin tức !!',
            'content.required' => 'Vui lòng nhập nội dung tin tức !!',
            'link_post.required' => 'Vui lòng điền đường dẫn tin tức gốc !!',
            'image.required' => 'Vui lòng điền đường dẫn hình ảnh tin tức !!',
        ]
        );
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
        $post->country_id = $data['country_id'];
        $post->sport_id = $data['sport_id'];
        $post->status = $data['status'];
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
