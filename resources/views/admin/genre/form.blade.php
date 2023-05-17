@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Quản lý quốc gia') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!isset($genre))
                        {!! Form::open(['route'=>'genre.store','method'=>'POST']) !!}
                    @else
                        {!! Form::open(['route'=>['genre.update',$genre->id],'method'=>'PUT']) !!}
                    @endif

                        <div class="form-group">
                            {!! Form::label('title', 'Title', []) !!}
                            {!! Form::text('title', isset($genre) ? $genre->title : '', ['class'=>'form-control','placeholder'=>'Nhập dữ liệu ...',
                            'id'=>'slug','onkeyup'=>'ChangeToSlug()']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('slug', 'Slug', []) !!}
                            {!! Form::text('slug', isset($genre) ? $genre->slug : '', ['class'=>'form-control','placeholder'=>'Nhập dữ liệu ...',
                            'id'=>'convert_slug']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Description', []) !!}
                            {!! Form::textarea('description', isset($genre) ? $genre->description : '', ['style'=>'resize:none','class'=>'form-control','placeholder'=>'Nhập dữ liệu ...',
                            'id'=>'description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('status', 'Status', []) !!}
                            {!! Form::select('status', ['1'=>'Hiển thị','0'=>'Không'], isset($genre) ? $genre->status : '' , ['class'=>'form-control']) !!}
                        </div>
                        @if(!isset($genre))
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
                    <th scope="col">Description</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Status</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($list as $key => $gen)
                  <tr>
                    <th scope="row">{{ $gen->id }}</th>
                    <td>{{ $gen->title }}</td>
                    <td>{{ $gen->description }}</td>
                    <td>{{ $gen->slug }}</td>
                    <td>
                        @if($gen->status)
                            Hiển thị
                        @else
                            Không hiển thị
                        @endif
                    </td>
                    <td>

                        {!! Form::open(['method'=>'DELETE','route'=>['genre.destroy',$gen->id],'onsubmit'=>'return confirm("Xác nhận xóa ?")']) !!}
                            {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        <a href="{{ route('genre.edit',$gen->id) }}" class="btn btn-warning">Sửa</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
