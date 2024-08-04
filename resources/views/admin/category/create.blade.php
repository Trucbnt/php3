@extends('admin.layouts.layout')
@section('content')

    <div>
        <h2 class="d-block text-center">THÊM DANH MỤC</h2>
        <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mt-3">
                <label for="" class="form-label">Tên danh mục</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mt-3">
                <label for="" class="form-label">Ảnh danh mục</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button class="btn btn-primary mt-3">Thêm danh mục</button>
        </form>
    </div>
@endsection
