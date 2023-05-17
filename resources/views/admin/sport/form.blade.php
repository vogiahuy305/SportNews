@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Quản lý thể thao') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!isset($sport))
                        {!! Form::open(['route'=>'sport.store','method'=>'POST']) !!}
                    @else
                        {!! Form::open(['route'=>['sport.update',$sport->id],'method'=>'PUT']) !!}
                    @endif

                        <div class="form-group">
                            {!! Form::label('title', 'Title', []) !!}
                            {!! Form::text('title', isset($sport) ? $sport->title : '', ['class'=>'form-control','placeholder'=>'Nhập dữ liệu ...','id'=>'slug','onkeyup'=>'ChangeToSlug()']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('slug', 'Slug', []) !!}
                            {!! Form::text('slug', isset($sport) ? $sport->slug : '', ['class'=>'form-control','placeholder'=>'Nhập dữ liệu ...','id'=>'convert_slug']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Description', []) !!}
                            {!! Form::textarea('description', isset($sport) ? $sport->description : '', ['style'=>'resize:none','class'=>'form-control','placeholder'=>'Nhập dữ liệu ...',
                                'id'=>'description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('status', 'Status', []) !!}
                            {!! Form::select('status', ['1'=>'Hiển thị','0'=>'Không'], isset($sport) ? $sport->status : '' , ['class'=>'form-control']) !!}
                        </div>
                        @if(!isset($sport))
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
                @foreach($list as $key => $spt)
                  <tr>
                    <th scope="row">{{ $spt->id }}</th>
                    <td>{{ $spt->title }}</td>
                    <td>{{ $spt->description }}</td>
                    <td>{{ $spt->slug }}</td>
                    <td>
                        @if($spt->status)
                            Hiển thị
                        @else
                            Không hiển thị
                        @endif
                    </td>
                    <td>

                        {!! Form::open(['method'=>'DELETE','route'=>['sport.destroy',$spt->id],'onsubmit'=>'return confirm("Xác nhận xóa ?")']) !!}
                            {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        <a href="{{ route('sport.edit',$spt->id) }}" class="btn btn-warning">Sửa</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
