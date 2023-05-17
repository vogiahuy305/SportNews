@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Quản lý tin tức') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!isset($post))
                        {!! Form::open(['route'=>'post.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    @else
                        {!! Form::open(['route'=>['post.update',$post->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                    @endif

                        <div class="form-group">
                            {!! Form::label('title', 'Title', []) !!}
                            {!! Form::text('title', isset($post) ? $post->title : '', ['class'=>'form-control','placeholder'=>'Nhập dữ liệu ...',
                            'id'=>'slug','onkeyup'=>'ChangeToSlug()']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('slug', 'Slug', []) !!}
                            {!! Form::text('slug', isset($post) ? $post->slug : '', ['class'=>'form-control','placeholder'=>'Nhập dữ liệu ...',
                            'id'=>'convert_slug']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('date', 'Date', []) !!}
                            {!! Form::date('date', isset($post) ? $post->date : '', ['class'=>'form-control','id'=>'date']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Description', []) !!}
                            {!! Form::textarea('description', isset($post) ? $post->description : '', ['style'=>'resize:none; height:100px','class'=>'form-control','placeholder'=>'Nhập dữ liệu ...',
                            'id'=>'description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', 'Content', []) !!}
                            {!! Form::textarea('content', isset($post) ? $post->content : '', ['style'=>'resize:none; height: max-content','class'=>'form-control','placeholder'=>'Nhập dữ liệu ...',
                            'id'=>'content']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('link post', 'Link Post', []) !!}
                            {!! Form::text('link_post', isset($post) ? $post->link_post : '', ['class'=>'form-control','placeholder'=>'Nhập dữ liệu ...',
                            'id'=>'link_post']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('image URL', 'Image', []) !!}
                            {!! Form::url('image', isset($post) ? $post->image : '', ['style'=>'resize:none','class'=>'form-control','placeholder'=>'Nhập dữ liệu ...',
                            'id'=>'image']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category', 'Category', []) !!}
                            {!! Form::select('category_id', $category, isset($post) ? $post->status : '' , ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('genre', 'Genre', []) !!}
                            {!! Form::select('genre_id', $genre, isset($post) ? $post->status : '' , ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('sport', 'Sport', []) !!}
                            {!! Form::select('sport_id', $sport, isset($post) ? $post->status : '' , ['class'=>'form-control']) !!}
                        </div>
                        @if(!isset($post))
                            {!! Form::submit('Thêm dữ liệu', ['class'=>'btn btn-success']) !!}
                        @else
                            {!! Form::submit('Cập nhật', ['class'=>'btn btn-success']) !!}
                        @endif
                    {!! Form::close() !!}
                </div>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Category</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Sport</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($list as $key => $post)
                  <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td><img src="{{ $post->image }}" width="80%"></td>
                    <td>{{ $post->date }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->category->title }}</td>
                    <td>{{ $post->genre->title }}</td>
                    <td>{{ $post->sport->title }}</td>
                    <td>

                        {!! Form::open(['method'=>'DELETE','route'=>['post.destroy',$post->id],'onsubmit'=>'return confirm("Xác nhận xóa ?")']) !!}
                            {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        <a href="{{ route('post.edit',$post->id) }}" class="btn btn-warning">Sửa</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
