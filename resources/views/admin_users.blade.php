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
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
            <div class="header-bar ms-auto">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item ms-3">
                        <a href="{{route('admin_create-users')}}">
                            <button href="" class="btn btn-primary btn-icon">
                                <i class="bi bi-plus-circle"></i>Create User
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="table-responsive">
            <table id="stt" class="table table-custom table-lg">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Role</th>

                </tr>
                </thead>
                <tbody>
                @foreach($admin_users as $key => $users)
                    <tr>
                        <td>
                            <a href="#">{{$users->id}}</a>
                        </td>
                        <td>{{$users->fullname}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->phone}}</td>
                        <td style="max-width: 300px; word-wrap: break-word; white-space: break-spaces">{{$users->address}}</td>
                        <td>{{$users->name}}</td>
                        <td class="text-end">

                            @if($users->role_id == '1')
                                <a href="{{route('admin_edit-users',['user_id' => $users->id])}}"><button type="button" class="btn btn-info">Edit</button></a>
                                <a hidden href="{{route('admin_delete-users',['user_id' => $users->id])}}"><button type="button" class="btn btn-danger">Delete</button></a>

                            @else
                                <a href="{{route('admin_edit-users',['user_id' => $users->id])}}"><button type="button" class="btn btn-info">Edit</button></a>
                                <a href="{{route('admin_delete-users',['user_id' => $users->id])}}"><button type="button" class="btn btn-danger">Delete</button></a>

                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

{{--        <nav class="mt-5" aria-label="Page navigation example">--}}
{{--            <ul class="pagination justify-content-center">--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="#" aria-label="Previous">--}}
{{--                        <span aria-hidden="true">&laquo;</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="#" aria-label="Next">--}}
{{--                        <span aria-hidden="true">&raquo;</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}

    </div>
    <!-- ./ content -->

@endsection
