<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Category::orderBy('id','ASC')->get();
        return view('admin.category.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->all();

        $data = $request->validate(
            [
                'title' => 'required|unique:categories|max:100',
                'description' => 'required|max:250',
                'slug' => 'required|unique:categories|max:255',
                'status' => 'required',
            ],
            [
                'title.required' => 'Vui lòng điền tên danh mục !!',
                'title.unique' => 'Tên danh mục tin đẫ có, xin điền tên khác !!',
                'description.required' => 'Vui lòng điền mô tả danh mục !!',
                'slug.required' => 'Vui lòng điền đường dẫn danh mục !!',
                'slug.unique' => 'Đường dẫn danh mục đã có, xin điền slug khác !!',
            ]
        );
        $category = new Category();
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];
        $category->status = $data['status'];
        $category->save();
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
        $category = Category::find($id);
        $list = Category::orderBy('id','ASC')->get();
        return view('admin.category.form',compact('list','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $data = $request->all();
        $data = $request->validate(
            [
                'title' => 'required|unique:categories|max:100',
                'description' => 'required|max:250',
                'slug' => 'required|unique:categories|max:255',
                'status' => 'required',
            ],
            [
                'title.required' => 'Vui lòng điền tên danh mục !!',
                'title.unique' => 'Tên danh mục tin đẫ có, vui lòng điền tên khác !!',
                'description.required' => 'Vui lòng điền mô tả danh mục !!',
                'slug.required' => 'Vui lòng điền slug danh mục !!',
                'slug.unique' => 'Slug danh mục đã có, vui lòng điền slug khác !!',
            ]
        );
        $category = Category::find($id);
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];
        $category->status = $data['status'];
        $category->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }

}
