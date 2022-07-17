<!DOCTYPE html>
<html lang="zxx">

@include('link')

<body>
    @include('header')

    <!-- Breadcrumb Begin -->
    {{-- <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="#">Women’s </a>
                        <span>Essential structured blazer</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                    <div class="col-lg-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__left product__thumb nice-scroll">
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($product->thumbnails_detail()->where('url', 'like', '%'.'product/details/thumb'.'%')->get() as $thumb)
                                    <a class="pt active" href="#product-{{$i}}">
                                        <img src="{{ asset('/img/'.$thumb->url) }}" alt="">
                                    </a>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach

                            </div>
                            <div class="product__details__slider__content">
                                <div class="product__details__pic__slider owl-carousel">
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($product->thumbnails_detail()->where('url', 'like', '%'.'product/details/product'.'%')->get() as $prodImg)
                                        <img data-hash="product-{{$i}}" class="product__big__img" src="{{ asset('/img/'.$prodImg->url) }}" alt="">
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product__details__text">
                            <h3>{{$product->product_name}} <span>Brand: {{$product->brand}}</span></h3>
                            <div class="product__details__price">$ {{$product->price}}</div>
                            <div class="product__details__button">
                                <a onclick="addCart({{$product->id}})" href="javascript:" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a>
                                <ul>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
    </section>
    <!-- Product Details Section End -->

    @include('footer')

    <!-- Js Plugins -->
    @include('script')
    <script>
        function addCart(id) {
            $.ajax({
                url : '../add-cart/'+id,
                type : 'GET',
            }).done(function(response){
                location.reload();
            });
        }
    </script>
</body>

</html>
