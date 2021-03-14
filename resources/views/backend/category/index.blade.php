@extends('backend.master')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Thứ tự</th>
            <th scope="col">Tên</th>
            <th scope="col">Slug</th>
            <th scope="col">Danh mục cha</th>
            <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $key=>$category)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->parent_id }}</td>
                <td>
                    <a href="{{route('categories.edit',['category' => $category->id])}}">Sửa</a>
                    <button>Xóa</button>
                </td>

            </tr>
        @endforeach


        </tbody>
    </table>
@endsection
