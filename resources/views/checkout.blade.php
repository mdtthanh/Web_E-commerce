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

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#">Have a coupon?</a> Click
                    here to enter your code.</h6>
                </div>
            </div>
            <form action="{{ route('order') }}" class="checkout__form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Billing detail</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Full name<span>*</span></p>
                                    <input name="fullname" type="text">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Address <span>*</span></p>
                                    <input name="address" type="text" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input name="phone" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input name="email" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__checkbox">
                                    <div class="checkout__form__input">
                                        <p>Oder notes <span>*</span></p>
                                        <input name="note" type="text"
                                        placeholder="Note about your order, e.g, special noe for delivery">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout__order">
                            <h5>Your order</h5>
                            @php
                                $cart = Session::get('cart') ? Session::get('cart') : null;
                                $i = 0;
                            @endphp
                            @if ($cart != null)
                                <div class="checkout__order__product">
                                    <ul>
                                        <li>
                                            <span class="top__text">Product</span>
                                            <span class="top__text__right">Total</span>
                                        </li>
                                        @foreach ($cart->products as $item)
                                            <li>{{++$i}}. {{$item['productInfo']->product_name}} <span>$ {{$item['price']}}</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="checkout__order__total">
                                    <ul>
                                        <li>Subtotal <span>$ {{$cart->totalPrice}}</span></li>
                                        <li>Total <span>$ {{$cart->totalPrice}}</span></li>
                                    </ul>
                                </div>
                                <button type="submit" class="site-btn">Place oder</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Checkout Section End -->

        @include('footer')

        <!-- Js Plugins -->
        @include('script')
    </body>

    </html>
