@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('post.create') }}" class="btn btn-primary">Thêm tin tức</a>
            <table class="table" id="tablepost">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Hot</th>
                    <th scope="col">Date</th>
                    {{--  <th scope="col">Description</th>  --}}
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
                    <td>
                        @if($post->hot_news == 1)
                            Có
                        @else
                            Không
                        @endif
                    </td>
                    <td>{{ $post->date }}</td>
                    {{--  <td>{{ $post->description }}</td>  --}}
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
