@extends('backend.master')


@push('css')
@endpush


@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif


        @if(session('failed'))
            <div class="alert alert-danger" role="alert">
                {{ session('failed') }}
            </div>
        @endif
            
        <form action="{{route('categories.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Tên danh mục muốn bổ sung</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
            </div>

            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{old('slug')}}">
            </div>

            <div class="form-group">
                <label for="">Danh mục cha</label>
                <input type="text" name="parent_id" class="form-control" value="{{old('parent_id')}}">
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật thêm mới</button>

        </form>
    </div>
@endsection
