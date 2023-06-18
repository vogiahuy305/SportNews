<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Country::all();
        return view('admin.country.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.country.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        $data = $request->validate(
            [
                'title' => 'required|unique:countries|max:100',
                'description' => 'required|max:250',
                'slug' => 'required|unique:countries|max:255',
                'status' => 'required',
            ],
            [
                'title.required' => 'Vui lòng điền tên quốc gia !!',
                'title.unique' => 'Tên quốc gia dã có, vui lòng điền tên quốc gia khác',
                'description.required' => 'Vui lòng điền mô tả quốc gia !!',
                'slug.required' => 'Vui lòng điền slug quốc gia !!',
                'slug.unique' => 'Slug quốc gia đã có, vui lòng điền slug khác !!',
            ]
        );
        $country = new Country();
        $country->title = $data['title'];
        $country->slug = $data['slug'];
        $country->description = $data['description'];
        $country->status = $data['status'];
        $country->save();
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
        $country = Country::find($id);
        $list = Country::all();
        return view('admin.country.form',compact('list','country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $data = $request->all();
        $data = $request->validate(
        [
            'title' => 'required|unique:countries|max:100',
            'description' => 'required|max:250',
            'slug' => 'required|unique:countries|max:255',
            'status' => 'required',
        ],
        [
            'title.required' => 'Vui lòng điền tên quốc gia !!',
            'title.unique' => 'Tên quốc gia dã có, vui lòng điền tên quốc gia khác',
            'description.required' => 'Vui lòng điền mô tả quốc gia !!',
            'slug.required' => 'Vui lòng điền slug quốc gia !!',
            'slug.unique' => 'Slug quốc gia đã có, vui lòng điền slug khác !!',
        ]
        );
        $country = Country::find($id);
        $country->title = $data['title'];
        $country->slug = $data['slug'];
        $country->description = $data['description'];
        $country->status = $data['status'];
        $country->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Country::find($id)->delete();
        return redirect()->back();
    }
}
