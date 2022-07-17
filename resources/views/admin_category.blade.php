@extends('layout')
@section('admin_content')
    <!-- content -->
    <div class="content ">
        <div class="mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route("dashboard")}}">
                            <i class="bi bi-globe2 small me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
            </nav>
            <div class="header-bar ms-auto">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item ms-3">
                        <a href="{{route('admin_create-category')}}">
                            <button href="" class="btn btn-primary btn-icon">
                                <i class="bi bi-plus-circle"></i>Create Category
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

        <div class="table-responsive">
            <table id="stt" class="table table-custom table-lg">
                <thead>
                <tr>
                    <th>No</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Category</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($admin_category as $key => $cate)
                        <tr>
                            <td>
                                <a href="#">{{$cate->id}}</a>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                {{$cate->category_name}}
                            </td>
                            <td class="text-end">
                                <a href="{{route('admin_edit-category',['category_id' => $cate->id])}}"><button type="button" class="btn btn-info">Edit</button></a>
                                <a onclick="return confirm('Are you sure to delete!')" href="{{route('admin_delete-category',['category_id' => $cate->id])}}"><button type="button" class="btn btn-danger">Delete</button><a/>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <nav class="mt-5" aria-label="Page navigation example">
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
    <!-- ./ content -->
@endsection
