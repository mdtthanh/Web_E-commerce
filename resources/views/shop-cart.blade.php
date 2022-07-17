<!DOCTYPE html>
<html lang="zxx">

@include('link')

<body>
    @include('header')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->
    @php
        $cart = Session::get('cart');
    @endphp
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if ($cart != null)
                        <div class="shop__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart->products as $product)

                                        <tr>
                                            <td class="cart__product__item">
                                                @php
                                                    $pic = $product['productInfo']->thumbnails_detail()->where('url', 'like', '%'.'shop/'.'%')->first();
                                                @endphp
                                                <img src="{{ asset('/img/'.$pic->url) }}" alt="" style="width:50px;height:60px;">
                                                <div class="cart__product__item__title">
                                                    <h6>{{$product['productInfo']->product_name}}</h6>
                                                </div>
                                            </td>
                                            <td class="cart__price">$ {{number_format($product['productInfo']->price)}}</td>
                                            <td class="cart__quantity">
                                                <div class="pro-qty">
                                                    <input type="text" data-id="{{$product['productInfo']->id}}" id="quantity-item-{{$product['productInfo']->id}}" value="{{$product['quantity']}}">
                                                </div>
                                            </td>
                                            <td class="cart__total">$ {{number_format($product['price'])}}</td>
                                            <td class="cart__close"><span class="icon_close" onclick="deleteItem({{$product['productInfo']->id}})"></span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="{{ route('shop', ['id'=>1]) }}">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <a onclick="saveAll()" href="javascript:" class="update-all"><span class="icon_loading"></span> Update cart</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="discount__content">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">Apply</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        @if ($cart != null)
                            <h6>Cart total</h6>
                            <ul>
                                <li>Subtotal <span>$ {{$cart->totalPrice}}</span></li>
                                <li>Total <span>$ {{$cart->totalPrice}}</span></li>
                            </ul>
                        @endif
                        <a href="{{ route('checkout') }}" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->

    @include('footer')

    <!-- Js Plugins -->
    @include('script')
    <script>
        function deleteItem(id){
            $.ajax({
                url : 'delete-item/'+id,
                type : 'GET',
            }).done(function(response){
                alert('Xóa thành công');
                location.reload();
            });
        }

        function saveAll(){
            var lists = [];
            $("table tbody tr td").each(function () {
                $(this).find("input").each(function(){
                    var element = {key: $(this).data("id"), value: $(this).val()};
                    lists.push(element);
                });
            })
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            $.ajax({
                url : 'save-all',
                type : 'POSt',
                data: {
                    "data": lists,
                },
            }).done(function(response){
                alert('Lưu lại thành công');
                location.reload();
            });
        }

    </script>
</body>

</html>
