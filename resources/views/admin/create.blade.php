@extends('admin.layouts.layout')
@section('content')
    <div>
        <h2 class="d-block text-center">Thêm sản phẩm </h2>
        <form action="{{route("admin.product.store")}}" method="post" enctype="multipart/form-data" class="container-fuild">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Giá bán thường</label>
                        <input type="text" name="price_regular" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Mô tả ngắn</label>
                        <textarea name="short_description" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>

                </div>
                <div class="col-6">

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Ảnh</label>
                        <input type="file" name="img_thumbnail" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Giá sale</label>
                        <input type="text" name="price_sale" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Mô tả chi tiết</label>
                        <textarea name="long_description" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mt-3 col-4">
                        <label for="" class="form-label">Danh mục sản phẩm</label>
                        <select name="category_id" id="" class="form-select">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <h1>Biến thể</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Màu</th>
                                <th>Kích thước</th>
                                <th>Số lượng</th>
                                <th>Hình ảnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sizes as $size)
                            @foreach ($colors as $color)
                                    <tr>
                                      
                                        <td>
                                            <div
                                                style="width: 30px; height: 30px; background-color: {{$color->name}}; border-radius: 50%; border:1px solid black;">
                                            </div>
                                        </td>
                                        <td>
                                            <span>{{$size->name}}</span>
                                        </td>
                                        <td>
                                            <input type="text" name="product_variants[{{$size->id.'-'.$color->id}}][quantity]"
                                                class="form-control">
                                        </td>
                                        <td>
                                            <input type="file" name="product_variants[{{$size->id.'-'.$color->id}}][image]" class="form-control">
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <button class="btn btn-primary">Thêm sản phẩm</button>
        </form>

    </div>
@endsection
