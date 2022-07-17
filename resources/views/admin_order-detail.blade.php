@extends('layout')
@section('admin_content')

    <div class="content ">
        <div class="mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route("dashboard")}}">
                            <i class="bi bi-globe2 small me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route("admin_orders")}}">
                          Orders
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Order detail</li>
                </ol>
            </nav>
        </div>
<div class="row" style="margin-top: 20px;">
    <div class="col-md-8 table-responsive">
        <table class="table table-bordered table-hover" style="margin-top: 20px;">
            <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Thumbnail</th>
                <th class="text-center">Title</th>
                <th class="text-center">Price</th>
                <th class="text-center" style="width: 130px">Quantity</th>
                <th class="text-center">Subtotal</th>
            </tr>
            </thead>

            <tbody>
            <?php
            $index = 0;
            $total = 0;
            ?>

            @foreach($order_detail as $key => $detail)
                <tr>

                    <th class="text-center">{{++$index}}</th>
					<td><img src="" style="height: 120px"/></td>
					<td>{{$detail->product_name}}</td>
					<td class="text-center">{{number_format($detail->price)}}</td>
					<td class="text-center">{{($detail->total_money)/($detail->price)}}</td>
					<td class="text-center">{{number_format($detail->total_money)}}</td>

                    <a href="" hidden>{{$total += $detail->total_money}}</a>

				</tr>
            @endforeach

            <tr>

                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th class="text-center">Grand Total</th>
                <th class="text-center">
                    {{$total}}
                </th>
            </tr>

            </tbody>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table table-bordered table-hover" style="margin-top: 20px;">
            <tr>
                <th>Fullname: </th>
                <td>{{$admin_order->fullname}}</td>
            </tr>
            <tr>
                <th>Email: </th>
                <td>{{$admin_order->email}}</td>
            </tr>
            <tr>
                <th>Address: </th>
                <td>{{$admin_order->address}}</td>
            </tr>
            <tr>
                <th>Phone: </th>
                <td>{{$admin_order->phone}}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
