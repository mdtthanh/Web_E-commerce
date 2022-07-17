<!DOCTYPE html>
<html lang="zxx">

@include('link')
<body>
    <!-- Page Preloder -->
    @include('header')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    @if (!empty($categories))
                                        @foreach ($categories as $category)
                                            <div class="card">
                                                <div class="card-heading active">
                                                    <a href="{{ route('shopcategory', ['page'=>1,'id'=>$category->id]) }}">{{$category->category_name}}</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        @if (!empty($product))
                            @foreach ($product as $p)
                                <div class="col-lg-4 col-md-6">
                                    <div class="product__item">
                                    @foreach ($p->thumbnails_detail()->where('url', 'like', '%'.'shop/'.'%')->get() as $mainPicture)
                                        <div class="product__item__pic set-bg" data-setbg="{{ asset('/img/'.$mainPicture->url) }}">
                                            <ul class="product__hover">
                                                <li><a href="{{ asset('/img/'.$mainPicture->url) }}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                            </ul>
                                        </div>
                                    @endforeach
                                        <div class="product__item__text">
                                            <h6><a href="{{ route('productdetail', ['id'=>$p->id]) }}">{{$p->product_name}}</a></h6>
                                            <div class="product__price">${{$p->price}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif


                        {{-- Đây là phân trang --}}

                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                @for ($i = 1; $i <= $count; $i++)
                                    <a href="{{ route('shopcategory', ['page'=>$i,'id'=>$id]) }}">{{$i}}</a>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    @include('footer')

    <!-- Js Plugins -->
    @include('script')
</body>

</html>
