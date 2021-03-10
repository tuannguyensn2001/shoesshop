@extends('backend.master')

@section('content')
    <div class="container">
        <form action="">
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" name="slug"  class="form-control">
            </div>

            <div class="form-group">
                <label for="">Danh mục cha</label>
                <input type="text" name="parent_id" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Thêm mới</button>

        </form>
    </div>
@endsection
