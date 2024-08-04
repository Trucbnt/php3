@extends('admin.layouts.layout')
@section('content')

    <div>
        <h2 class="d-block text-center">THÊM DANH MỤC</h2>
        <form action="{{route('admin.category.update', $category)}}" method="post" enctype="multipart/form-data">

            @csrf
            @method("PUT")
            <div class="mt-3">
                <label for="" class="form-label">Tên danh mục</label>
                <input type="text" name="name" class="form-control"  value="{{ old('name', $category->name) }}">
            </div>
            <div class="mt-3">
                <label for="" class="form-label">Ảnh danh mục</label>
                <input type="file" name="image" class="form-control">
            </div>
            @if($category->image)
                <div class="mt-3">
                    <label class="form-label">Hình ảnh hiện tại</label> <br>
                    <img src="{{ asset('storage/' . $category->image) }}" alt="Current Category Image" class="img-fluid" style="max-width: 200px;">
                </div>
            @endif
            <button class="btn btn-primary mt-3">Cập nhật</button>
        </form>
    </div>
@endsection
