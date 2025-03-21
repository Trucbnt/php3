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
                    <h5 class="card-title mb-0">Thông tin danh mục sản phẩm</h5>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th width="5%">STT</th>
                                <th width="30%">Tên Danh mục</th>
                                <th width="30%">Ảnh danh mục</th>
                                <th width="30%">thời gian đặt</th>
                                <th width="5%">hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>01</td>
                                    <td>
                                       {{$category->name}}
                                    </td>
                                    <td >
                                        <img class="d-block mx-auto" style="width:100px;" src=" {{asset('storage/'.$category->image)}}" alt="">
                                    </td>
                                    <td>
                                        {{$category->created_at}}
                                    </td>
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
                                                    href="{{route("admin.category.edit" , $category)}}"><i
                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                                <li>
                                                    <form action="{{route("admin.category.destroy" , $category)}}"  
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
