@extends('layout')
@section('admin_content')
    @foreach($edit_product as $key => $edit_value_product)
    <form action="{{route('admin_update-product',['product_id' => $edit_value_product->id])}}" method="post">
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
                        <a href="{{route("admin_product-list")}}">
                            Product
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                </ol>
            </nav>
        </div>
        <style>
            .form-group{
                padding-top: 10px;
            }
        </style>
        <div class="col-md-12 table-responsive">
            <div class="panel panel-primary">
                <div class="panel-body">
                        <div class="row">
                            <div class="col-md-11 col-10">
                                <div class="form-group">
                                    <label for="usr">Product name:</label>
                                    <input required="true" type="text" class="form-control" id="usr" name="product_name" value="{{$edit_value_product->product_name}}" style="border-radius: 10px">
                                    <input type="text" name="id" value="" hidden="true">
                                </div>
                                <div class="form-group">
                                    <label for="thumbnail">Thumbnail:</label>
                                    <input type="file" class="form-control" id="thumbnail" name="thumbnail[]"  accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                    <img id="thumbnail_img" height="100px" width="150px" src="" style="max-height: 160px; margin-top: 5px; margin-bottom: 15px;">
                                </div>
                                <div class="form-group">
                                    <label for="usr">Category:</label>
                                    <select class="form-control" name="category_id" id="category_id" required="true">
                                        <option value="">-Choose-</option>
                                        @foreach($admin_category as $key => $cate)
                                            @if ($cate->id == $edit_value_product->category_id){
                                            <option selected value="{{$cate->id}}">{{$cate->category_name}}</option>
                                            }
                                            @else{
                                            <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                                            }
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="author">Brand:</label>
                                    <input required="true" type="text" class="form-control" id="brand" name="brand" value="{{$edit_value_product->brand}}">
                                </div>
                                <div class="form-group">
                                    <label for="author">Quantity:</label>
                                    <input required="true" type="text" class="form-control" id="quantity" name="quantity" value="{{$edit_value_product->quantity}}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input required="true" type="number" class="form-control" id="price" name="price" value="{{$edit_value_product->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Description:</label>
                                    <textarea value = "" class="form-control" rows="5" name="description" id="description" style="border-radius: 10px; height: 500px">{{$edit_value_product->description}}</textarea>
                                </div>

                                <button class="btn btn-success" style="margin-left: 550px; margin-top: 20px">Save</button>
                            </div>
                        </div>
                </div>
            </div>


        </div>
    </form>
    @endforeach
    <br>

@endsection
