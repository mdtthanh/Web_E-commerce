@extends('layout')
@section('admin_content')
    <!-- content -->
    <div class="content ">
        <div class="col-md-8">
            <div class="mb-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route("dashboard")}}">
                                <i class="bi bi-globe2 small me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </nav>
            </div>
            <div  class="mb-4">
                <div class="header-bar ms-auto">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item ms-3">
                            <a href="{{route('admin_create-product')}}">
                                <button href="" class="btn btn-primary btn-icon">
                                    <i class="bi bi-plus-circle"></i>Create Product
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
                <br>
                <?php
                $message = Session::get('message');
                if ($message){
                    echo '<span class = "text-alert" style="color: red; font-size:18px;">'.$message.'</span>';
                    Session::put('message', null);
                }
                ?>
            </div>
        </div>
        <div class="row">
                <div class="table-responsive">
                    <table class="table table-custom table-lg mb-0" id="products">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admin_product as $key => $product)
                        <tr>
                            <td>
                                <a href="#">{{$product -> id}}</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{url("admin/assets/images/products/1.jpg")}}" class="rounded" width="40" height="40px"
                                         alt="...">
                                </a>
                            </td>
                            <td style="max-width: 300px; word-wrap: break-word; white-space: break-spaces">{{$product -> product_name}}</td>
                            <td>{{number_format($product -> price)}}</td>
                            <td>{{$product -> category_id}}</td>
                            <td>{{$product -> quantity}}</td>
                            <td class="text-end">
                                <a href="{{route('admin_edit-product',['product_id' => $product->id])}}">
                                    <button type="button" class="btn btn-info">Edit</button>
                                </a>
                                <a href="{{route('admin_delete-product',['product_id' => $product->id])}}">
                                    <button type="button"  class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <nav class="mt-4" aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

    </div>
    <!-- ./ content -->

@endsection
