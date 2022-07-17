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
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
            </nav>
        </div>

        {{-- ----------       style       -----------------}}
        <style>
            tbody p{
                margin: 0;
            }
        </style>
        {{-- ----------       style       -----------------}}

        <div class="table-responsive">
            <table id="stt" class="table table-custom table-lg">
                <thead>
                <tr>
                    <th style="width: 30px">No</th>
                    <th style="width: 50px">Invoice</th>
                    <th style="width: 100px">Fullname</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Note</th>
                    <th style="width: 120px">Total money</th>
                    <th style="width: 100px">Order date</th>
                    <th></th>

                </tr>
                </thead>
                <?php
                $index = 0;
                ?>
                @foreach($order as $key=> $value)
                    @if ($value->status == 0)
                    @foreach($admin_order as $key_money => $id_money)
                        @if($value->id == $id_money->id)
                <tbody class="set_height">
                    <tr>
                        <td>
                            <p style="margin: 0">
                                <a href="{{route("admin_order-detail", [$value->id])}}">{{++$index}}</a>
                            </p>
                        </td>
                        <td>
                            <a href="{{route("admin_order-detail", [$value->id])}}">#{{$value->id}}</a>
                        </td>
                        <td>
                            <a href="{{route("admin_order-detail", [$value->id])}}" style=" width: 100px; text-overflow: ellipsis; overflow: hidden;white-space: nowrap ;">{{$value->fullname}}</a>
                        </td>
                        <td>
                            <p>{{$value->phone}}</p>
                        </td>
                        <td>
                            <p style=" width: 120px; text-overflow: ellipsis; overflow: hidden;white-space: nowrap ;">{{$value->address}}</p>
                        </td>
                        <td>
                            <p style=" width: 120px; text-overflow: ellipsis; overflow: hidden;white-space: nowrap ;">{{$value->note}}</p>
                        </td>
                        <td>
                            <p>{{$id_money->sum_money}}</p>

                        </td>
                        <td style="text-align: center">
                            <p>{{$value->order_time}}</p>
                        </td>
                        <td class="text-end">
                            <p>
                                    <a href="{{route('approved', $value->id)}}"><button type="button" class="btn btn-success">Approve</button></a>
                                    <a href="{{route('cancel', $value->id)}}"><button type="button" class="btn btn-danger">Cancel</button></a>
{{--                                --}}
{{--                                <button type="button" class="btn btn-success">Approve</button>--}}
{{--                                <button type="button" class="btn btn-danger">Cancel</button>--}}
                            </p>
                        </td>
                    </tr>
                </tbody>
                            @endif
                @endforeach
                    @endif
                    @endforeach
                     @foreach($order as $key=> $value)
                         @if ($value->status == 1)
                                @foreach($admin_order as $key_money => $id_money)
                                    @if($value->id == $id_money->id)
                                        <tbody class="set_height">
                                        <tr>
                                            <td>
                                                <p style="margin: 0">
                                                    <a href="{{route("admin_order-detail", [$value->id])}}">{{++$index}}</a>
                                                </p>
                                            </td>
                                            <td>
                                                <a href="{{route("admin_order-detail", [$value->id])}}">#{{$value->id}}</a>
                                            </td>
                                            <td>
                                                <a href="{{route("admin_order-detail", [$value->id])}}" style=" width: 100px; text-overflow: ellipsis; overflow: hidden;white-space: nowrap ;">{{$value->fullname}}</a>
                                            </td>
                                            <td>
                                                <p>{{$value->phone}}</p>
                                            </td>
                                            <td>
                                                <p style=" width: 120px; text-overflow: ellipsis; overflow: hidden;white-space: nowrap ;">{{$value->address}}</p>
                                            </td>
                                            <td>
                                                <p style=" width: 120px; text-overflow: ellipsis; overflow: hidden;white-space: nowrap ;">{{$value->note}}</p>
                                            </td>
                                            <td>
                                                <p>{{$id_money->sum_money}}</p>

                                            </td>
                                            <td style="text-align: center">
                                                <p>{{$value->order_time}}</p>
                                            </td>
                                            <td class="text-end">
                                                <p>
                                                    <a href="{{route('approved', $value->id)}}"><button type="button" class="btn btn-success">Approve</button></a>
                                                        {{--                                --}}
                                                        {{--                                <button type="button" class="btn btn-success">Approve</button>--}}
                                                        {{--                                <button type="button" class="btn btn-danger">Cancel</button>--}}
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                            @endif
                        @endforeach
                                @endif
                          @endforeach
                           @foreach($order as $key=> $value)
                                        @if ($value->status == 2)
                                            @foreach($admin_order as $key_money => $id_money)
                                                @if($value->id == $id_money->id)
                                                    <tbody class="set_height">
                                                    <tr>
                                                        <td>
                                                            <p style="margin: 0">
                                                                <a href="{{route("admin_order-detail", [$value->id])}}">{{++$index}}</a>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <a href="{{route("admin_order-detail", [$value->id])}}">#{{$value->id}}</a>
                                                        </td>
                                                        <td>
                                                            <a href="{{route("admin_order-detail", [$value->id])}}" style=" width: 100px; text-overflow: ellipsis; overflow: hidden;white-space: nowrap ;">{{$value->fullname}}</a>
                                                        </td>
                                                        <td>
                                                            <p>{{$value->phone}}</p>
                                                        </td>
                                                        <td>
                                                            <p style=" width: 120px; text-overflow: ellipsis; overflow: hidden;white-space: nowrap ;">{{$value->address}}</p>
                                                        </td>
                                                        <td>
                                                            <p style=" width: 120px; text-overflow: ellipsis; overflow: hidden;white-space: nowrap ;">{{$value->note}}</p>
                                                        </td>
                                                        <td>
                                                            <p>{{$id_money->sum_money}}</p>

                                                        </td>
                                                        <td style="text-align: center">
                                                            <p>{{$value->order_time}}</p>
                                                        </td>
                                                        <td class="text-end">
                                                            <p>
                                                                    <label class="btn btn-danger" class="btn btn-danger">Cancel</label>
                                                                    {{--                                --}}
                                                                    {{--                                <button type="button" class="btn btn-success">Approve</button>--}}
                                                                    {{--                                <button type="button" class="btn btn-danger">Cancel</button>--}}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                  @endif
                                             @endforeach
                                                @endif
                                            @endforeach
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

{{--    <script type="text/javascript">--}}
{{--        function changeStatus(id, status) {--}}
{{--            $.post('form_api.php', {--}}
{{--                'id': id,--}}
{{--                'status': status,--}}
{{--                'action': 'update_status'--}}
{{--            }, function(data) {--}}
{{--                location.reload()--}}
{{--            })--}}
{{--        }--}}
    <!-- ./ content -->
@endsection
