@extends('admin.layouts.layout')
@section('style_private')
    <link rel="shortcut icon" href="{{ asset('thame/assets/images/favicon.ico') }}">
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection
@section('content')
    @if(session("messages"))
    <div class="alert alert-primary">
        {{session("messages")}}
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Thông tin dữ liệu Order</h5>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th width="5%">STT</th>
                                <th width="25%">Nhà phân phối</th>
                                <th width="25%">Khách hàng</th>
                                <th width="30%">Đơn hàng</th>
                                <th width="10%">thời gian đặt</th>
                                <th width="5%">hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>01</td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>{{ $order->products[0]->supplier->name }}</li>
                                            <li>{{ $order->products[0]->supplier->phone }}</li>
                                            <li>{{ $order->products[0]->supplier->email }}</li>
                                            <li>{{ $order->products[0]->supplier->address }}</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>{{ $order->customer->name }}</li>
                                            <li>{{ $order->customer->phone }}</li>
                                            <li>{{ $order->customer->email }}</li>
                                            <li>{{ $order->customer->address }}</li>
                                        </ul>
                                    </td>
                                    <td>
                                        @foreach ($order->products as $product)
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-column">
                                                    <div>{{ $product->name }}</div>
                                                    <div>{{ $product->pivot->price }} vnd</div>
                                                </div>
                                                <div>x {{ $product->pivot->quantity }}</div>
                                            </div>
                                        @endforeach
                                        <div class="mt-2 text-end">Tổng tiền : {{ $order->total_money }} VNĐ</div>
                                    </td>
                                    <td>{{ $order->CreatedAt($order->created_at) }}</td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a href="#!" class="dropdown-item navbar-link" ><i
                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item edit-item-btn navbar-link" 
                                                    href="{{route('orders.edit',$order)}}"><i
                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                                <li>
                                                    <form action="{{route("orders.destroy" , $order)}}" 
                                                    class="dropdown-item remove-item-btn navbar-link " 
                                                    method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        <button class="border border-0 p-0" onclick="return confirm('bạn có chắc muốn xóa không')">Delete</button>
                                                    </form>                        
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection
@section('js_private')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script>
        new DataTable("#example")
    </script>
@endsection
