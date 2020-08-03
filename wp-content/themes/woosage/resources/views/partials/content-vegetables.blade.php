<!-- Home slider -->
@if ($data['hero-slider'])
    <section class="section section-home-slider">
        <div class="hero-slider">
            <div class="swiper-wrapper">
                @foreach($data['hero-slider'] as $slide)
                    <div class="swiper-slide">
                        <div class="slider-box">
                            <img src="{{ $slide['image'] }}" alt="slide-image">
                            <div class="content-wrapper">
                                <div class="container">
                                    <div class="flex-row flex flex-column jc-start ai-start">
                                        <h4>{{ $slide['top_text'] }}</h4>
                                        <h2>{{ $slide['title'] }}</h2>
                                        <a href="#" class="btn btn-solid">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="slider-nav-wrapper flex ai-center jc-sb">
                <div class="swiper-button-prev"><img src="@asset('images/icons/slider-next.svg')" alt="icon"></div>
                <div class="swiper-button-next"><img src="@asset('images/icons/slider-next.svg')" alt="icon"></div>
            </div>
        </div>
    </section>
@endif
{{-- <section class="p-0">
    <div class="slide-1 home-slider">
        @foreach($data['hero-slider'] as $slide)
            <div>
                <div class="home text-center">
                    <img src="{{ $slide['image'] }}" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section> --}}
<!-- Home slider end -->
<!-- Home banners start -->
<section class="section section-home-banners">
    <div class="container">
        <div class="flex-row flex listing ai-center jc-sb">
            <div class="box">
                <a href="">
                    <div class="back">
                        <img src="@asset('images/banner.jpg')" alt="back">
                    </div>
                    <div class="content-wrapper flex ai-center jc-end">
                        <div class="wrap">
                            <p class="save">save 30%</p>
                            <h2 class="label">Men</h2>
                        </div>                            
                    </div>
                </a>
            </div>
            <div class="box">
                <a href="">
                    <div class="back">
                        <img src="@asset('images/banner.jpg')" alt="back">
                    </div>
                    <div class="content-wrapper flex ai-center jc-end">
                        <div class="wrap">
                            <p class="save">save 60%</p>
                            <h2 class="label">women</h2>
                        </div>                            
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Home banners end -->
<!-- Home services start -->
<section class="section section-home-servises">
    <div class="container">
        <div class="services-listing flex-row flex-wrap">
            <div class="flex-col-3 service-block flex ai-center jc-center">
                <div class="media flex ai-center">
                    <img class="svg" src="@asset('images/icons/service1.svg')" alt="icon">
                    <div class="media-body">
                        <h4>free shipping</h4>
                        <p>free shipping world wide</p>
                    </div>
                </div>
            </div>
            <div class="flex-col-3 service-block flex ai-center jc-center">
                <div class="media flex ai-center">
                    <img class="svg" src="@asset('images/icons/service2.svg')" alt="icon">
                    <div class="media-body">
                        <h4>24 X 7 service</h4>
                        <p>online service for new customer</p>
                    </div>
                </div>
            </div>
            <div class="flex-col-3 service-block flex ai-center jc-center">
                <div class="media flex ai-center">
                    <img class="svg" src="@asset('images/icons/service3.svg')" alt="icon">
                    <div class="media-body">
                        <h4>festival offer</h4>
                        <p>new online special festival offer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home services end -->

<!-- Home special-offer start-->
{{-- <section class="section-b-space addtocart_count ratio_square">
    <div class="container">
        <div class="heading">
            <h4>special offer</h4>
            <h2 class="title-inner4">trending products</h2>
            <div class="line"><span></span></div>
            <p class="text"></p>
        </div>
        <div class="listing-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <div class="single-product-template">
                            <div class="img-wrapper">
                                <a href=""></a>
                                <div class="front">
                                    <img src="" alt="">
                                </div>
                                <div class="back">
                                    <img src="" alt="">
                                </div>
                            </div>
                            <div class="lable-block">
                                <p class="new">new</p>
                                <p class="sale">on sale</p>
                            </div>
                            <div class="cart-info">
                                <p class="hover-animate add-to-cart">
                                    <img class="svg" src="@asset('images/icons/product-icon.svg')" alt="icon">
                                </p>
                                <p class="hover-animate add-to-wishlist">
                                    <img class="svg" src="@asset('images/icons/product-icon.svg')" alt="icon">
                                </p>
                                <p class="hover-animate quick-view">
                                    <img class="svg" src="@asset('images/icons/product-icon.svg')" alt="icon">
                                </p>
                            </div>
                            <div class="product-detail">
                                <div class="rating flex ai-center">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="" class="product-name"></a>
                                <div class="pricing">
                                    <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                    <div class="price-sale">
                                        <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                        <p class="price sale-price"><span class="currency">$</span><span class="val">500</span></p>
                                    </div>
                                </div>
                                <div class="color-variations">
                                    <ul class="colors flex ai-center">
                                        <li class="bg"></li>
                                        <li class="bg"></li>
                                        <li class="bg"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-5 product-m no-arrow">
            @foreach($products as $product)
            @if(in_array($product_cat['trending'], $product['cat']))
            <div class="product-box product-wrap">
                <div class="img-wrapper">
                <div class="lable-block">
                    @if(in_array($product_cat['new_product'], $product['cat']))
                    <span class="lable3">new</span>
                    @endif
                    @if($product['discount'])
                    <span class="lable4">on sale</span>
                    @endif
                </div>
                    <div class="front">
                        <a href="{{$product['href']}}"><img
                                src="{{$product['image']}}"
                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                    </div>
                    <div class="cart-info cart-wrap">
                        <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                aria-hidden="true"></i></a>
                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                class="ti-search" aria-hidden="true"></i></a>
                        <a href="compare.html" title="Compare"><i class="ti-reload"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="addtocart_btn">
                        <button class="add-button add_cart" title="Add to cart">
                            add to cart
                        </button>
                        <div class="qty-box cart_qty">
                            <div class="input-group">
                                <button type="button" class="btn quantity-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                                <input type="text" name="quantity"
                                    class="form-control input-number qty-input" value="1">
                                <button type="button" class="btn quantity-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-detail text-center">
                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                    </div>
                    <a href="product-page(no-sidebar).html">
                        <h6>{{$product['title']}}</h6>
                    </a>
                    <h4>{!!$data['product-symbol']!!}{{$product['price']}} 
                    @if($product['discount'])
                    <del>{!!$data['product-symbol']!!}{{$product['discount']}}</del>
                    @endif
                    </h4>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section> --}}
<!-- Home special-offer start-->

<!-- Parallax banner -->
<section class="section section-parallax">
    <div class="back" style="background-image: url('{{$data['parallax']['image']}}')">
        <div class="container">
            <div class="content flex flex-column jc-start ai-start">
                <div class="content-wrapper flex flex-column jc-center ai-start">
                    <h2>{{$data['parallax']['title']}}</h2>
                    {!!$data['parallax']['text']!!}
                </div>
            </div>
        </div>
    </div>   
</section>
<!-- Parallax banner end -->


<!-- product-box slider -->
{{-- <section class="section-b-space addtocart_count"> --}}
    {{-- <div class="full-box">
        <div class="container">
            <div class="title4">
                <h2 class="title-inner4">special products</h2>
                <div class="line"><span></span></div>
            </div>
            <div class="row">
                @php $count = 1; @endphp
                @foreach($products as $product)
                @if(in_array($product_cat['special'], $product['cat']))
                @if($count == 1)
                <div class="col-md-4">
                    <div class="theme-card center-align">
                        <div class="offer-slider">
                            <div class="sec-1">
                @elseif($count == 3)
                </div>
                    </div>
                    </div>
                </div>
                @endif
                @if($count++ != 3)
                <div class="product-box2">
                    <div class="media">
                        <a href="{{$product['href']}}"><img
                                class="img-fluid blur-up lazyload"
                                src="{{$product['image']}}" alt=""></a>
                        <div class="media-body align-self-center">
                            <a href="{{$product['href']}}">
                                <h6>{{$product['title']}}</h6>
                            </a>
                            <h4>{!!$data['product-symbol']!!}{{$product['price']}}</h4>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-4 center-slider">
                    <div>
                        <div class="offer-slider">
                            <div>
                                <div class="product-box product-wrap">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="{{$product['href']}}"><img
                                                    src="{{$product['image']}}"
                                                    class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view"
                                                title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity"
                                                        class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail text-center">
                                        <a href="{{$product['href']}}">
                                            <h6>{{$product['title']}}</h6>
                                        </a>
                                        <h4>{!!$data['product-symbol']!!}{{$product['price']}} 
                                        @if($product['discount'])
                                        <del>{!!$data['product-symbol']!!}{{$product['discount']}}</del>
                                        @endif
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php $count = 1; @endphp
                @endif
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section> --}}
<!-- product-box slider end -->


<!-- blog section -->
<section class="section section-story-blog">
    <div class="container">
        <div class="heading flex flex-column jc-center ai-center">
            <h4>recent story</h4>
            <h2>from the blog</h2>
        </div>
        <div class="related-stories">
            <div class="swiper-wrapper">
                @foreach($news->posts as $post)
                <div class="swiper-slide">
                    <div class="box post-box flex flex-column jc-center ai-center">
                        <div class="image-wrapper box-effect">
                            <a href="#">
                                <img src="{{$post->image[0]}}" alt="">
                            </a>
                        </div>
                        <div class="blog-details flex flex-column jc-center ai-center">
                            <h4>{{$post->date}}</h4>
                            <a href="#">{{$post->post_name}}</a>
                            <span class="line"></span>
                            <p class="by flex ai-center jc-start">
                                by: {{$post->author}} , @if($post->comment_count == 0) No @else {{$post->comment_count}} @endif @if($post->comment_count != 1) Comments @else Comment @endif
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section> 

<div class="container">
    <div class="row">
        <div class="col">
            <div class="title4">
                <h4>recent story</h4>
                <h2 class="title-inner4">from the blog</h2>
                <div class="line"><span></span></div>
            </div>
        </div>
    </div>
</div>
<section class="blog section-b-space pt-0 ratio2_3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide-3 no-arrow">
                @foreach($news->posts as $post)
                    <div class="col-md-12">
                        <a href="#">
                            <div class="classic-effect">
                                <div>
                                    <img src="{{$post->image[0]}}"
                                        class="img-fluid blur-up lazyload bg-img" alt="">
                                </div>
                                <span></span>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>{{$post->date}}</h4>
                            <a href="#">
                                <p>{{$post->post_name}}</p>
                            </a>
                            <hr class="style1">
                            <h6>by: {{$post->author}} , @if($post->comment_count == 0) No @else {{$post->comment_count}} @endif @if($post->comment_count != 1) Comments @else Comment @endif</h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog section end -->
<section class="section section-instagram">
    <div class="container">
        <div class="heading">
            <h2># instagram</h2>
        </div>
    </div>
    <div class="inst-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box box-image">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>
                    <a href="#!">
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>
                    <a href="#!">
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>
                    <a href="#!">
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>
                    <a href="#!">
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>
                    <a href="#!">
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>
                    <a href="#!">
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>
                    <a href="#!">
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-brands-slider">
    <div class="container">
        <div class="brands-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box box-image">
                        <a href="#!">
                            <img src="@asset('images/vegetables/brand.png')" alt="">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box box-image">
                        <a href="#!">
                            <img src="@asset('images/vegetables/brand.png')" alt="">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box box-image">
                        <a href="#!">
                            <img src="@asset('images/vegetables/brand.png')" alt="">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box box-image">
                        <a href="#!">
                            <img src="@asset('images/vegetables/brand.png')" alt="">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box box-image">
                        <a href="#!">
                            <img src="@asset('images/vegetables/brand.png')" alt="">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box box-image">
                        <a href="#!">
                            <img src="@asset('images/vegetables/brand.png')" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>