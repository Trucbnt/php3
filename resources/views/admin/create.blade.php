@extends('admin.layouts.layout')
@section('content')

    <div>
        <h2 class="d-block text-center">TẠO ĐƠN ĐẶT HÀNG </h2>
        <form action="{{ route('orders.store') }}" method="post" class="" class="container-fuild" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <h2 class="d-block text-center">Nhà cung cấp</h2>
                    <div class="mt-3">
                        <label for="" class="form-label">Tên nhà cung cấp :</label>
                        <input type="text" placeholder="Tên nhà cung cấp" value="{{ old('supplier.name') }}"
                            name="supplier[name]" class="form-control">
                        @error('supplier.name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Địa chỉ :</label>
                        <input type="text" placeholder="Địa chỉ" value="{{ old('supplier.address') }}"
                            name="supplier[address]" class="form-control">
                        @error('supplier.address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Số điện thoại :</label>
                        <input type="text" placeholder="Số điện thoại " value="{{ old('supplier.phone') }}"
                            name="supplier[phone]" class="form-control">
                        @error('supplier.phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">email :</label>
                        <input type="email" placeholder="email" value="{{ old('supplier.email') }}" name="supplier[email]"
                            class="form-control">
                        @error('supplier.email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="d-block text-center">Khách hàng</h2>
                    <div class="mt-3">
                        <label for="" class="form-label">Tên khách hàng :</label>
                        <input type="text" placeholder="Tên nhà cung cấp" value="{{ old('customer.name') }}"
                            name="customer[name]" class="form-control">
                        @error('customer.name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Địa chỉ :</label>
                        <input type="text" placeholder="Địa chỉ" value="{{ old('customer.address') }}"
                            name="customer[address]" class="form-control">
                        @error('customer.address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Số điện thoại :</label>
                        <input type="text" placeholder="Số điện thoại " value="{{ old('customer.phone') }}"
                            name="customer[phone]" class="form-control">
                        @error('customer.phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">email :</label>
                        <input type="email" placeholder="email" value="{{ old('customer.email') }}"
                            name="customer[email]" class="form-control">
                        @error('customer.email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <h2 class="my-3">Danh sách sản phẩm</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng tồn kho</th>
                        <th>Số lượng nhập</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 2; $i++)
                        <tr>
                            <td>
                                <input type="text" name="products[{{ $i }}][name]" placeholder="tên sản phẩm"
                                    class="form-control" value="{{ old('products.' . $i . '.name') }}">
                                @error('products.' . $i . '.name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </td>

                            <td>
                                <input type="file" name="products[{{ $i }}][image]" 
                                class="form-control"value="{{ old('products.' . $i . '.image') }}" >

                            </td>

                            <td>
                                <textarea name="products[{{$i}}][description]" id="" cols="10" rows="3" class="form-control"></textarea>
                            </td>

                            <td>
                                <input type="number" name="products[{{ $i }}][price]"
                                value="{{ old('products.' . $i . '.price') }}"
                                    placeholder="giá sản phẩm" class="form-control">
                                @error('products.' . $i . '.price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </td>

                            <td>
                                <input type="number" name="products[{{ $i }}][inventory]"
                                value="{{ old('products.' . $i . '.inventory') }}"
                                    placeholder="Số tồn kho" class="form-control">
                                @error('products.' . $i . '.inventory')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </td>

                            <td>
                                <input type="number" name="order_detail[{{ $i }}][quantity]" 
                                placeholder="Số lượng sản phẩm nhập"
                                value="{{ old('order_detail.' . $i . '.quantity') }}"
                                    class="form-control">
                                @error('order_detail.' . $i . '.quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </td>

                        </tr>
                    @endfor
                </tbody>
            </table>
            <button class="btn btn-primary">Tạo đơn hàng</button>
        </form>

    </div>
@endsection
