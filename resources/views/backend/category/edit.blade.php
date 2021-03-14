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

        <form action="{{route('categories.update',['category' => $category->id])}}" method="post">
            {{method_field('PUT')}}
            @csrf
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="name" class="form-control" value="{{old('name',$category->name)}}">
            </div>

            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{old('slug',$category->slug)}}">
            </div>

            <div class="form-group">
                <label for="">Danh mục cha</label>
                <input type="text" name="parent_id" class="form-control" value="{{old('parent_id',$category->parent_id)}}">
            </div>

            <button type="submit" class="btn btn-primary">Sửa</button>

        </form>
    </div>
@endsection
