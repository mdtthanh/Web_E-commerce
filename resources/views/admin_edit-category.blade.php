@extends('layout')
@section('admin_content')
    @foreach($edit_category as $key => $edit_value)
    <form action="{{route('admin_update-category',['category_id' => $edit_value->id])}}" method="post" >
        {{csrf_field()}}
        <div class="mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route("dashboard")}}">
                            <i class="bi bi-globe2 small me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route("admin_category")}}">
                            Categories
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                </ol>
            </nav>
        </div>
        <div class="mb-3" style="width: 800px">
            <label class="form-label">Category name</label>
            <input value="{{$edit_value->category_name}}" required="true" type="text" class="form-control" id="exampleInputEmail1" name="category_name" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    @endforeach
    <br>
    <?php
    $message = Session::get('message');
    if ($message){
        echo '<span class = "text-alert" style="color: red; font-size:18px;">'.$message.'</span>';
        Session::put('message', null);
    }
    ?>
@endsection
