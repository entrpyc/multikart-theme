<!-- Home slider start -->
@if ($data['hero-slider'])
    <section class="section section-home-slider">
        <div class="hero-slider">
            <div class="swiper-wrapper">
                @foreach($data['hero-slider'] as $slide)
                    <div class="swiper-slide">
                        <div class="slider-box">
                            <picture>
                                <source srcset="@asset('images/vegetables/mobile-hero.jpg')" media="(max-width:768px)">
                                <source srcset="{{ $slide['image'] }}" type="image/jpeg">
                                <img src="{{ $slide['image'] }}" alt="image">
                            </picture>
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
<!-- Parallax banner start -->
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
<!-- Special Offer start -->
<section class="section section-special-offer-slider">
    <div class="container">
        <div class="heading base-heading flex flex-column jc-center ai-center">
            <h4>Special Offer</h4>
            <h2>TOP COLLECTION</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="special-listing-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <div class="single-product-template">
                            <div class="wrapper">
                                <div class="img-wrapper">
                                    <a href="#!"></a>
                                    <div class="front">
                                        <img src="@asset('images/vegetables/product.jpg')" alt="">
                                    </div>
                                    <div class="back">
                                        <img src="@asset('images/vegetables/product.jpg')" alt="">
                                    </div>
                                </div>
                                <div class="lable-block flex ai-start jc-sb">
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
                            </div>
                            <div class="product-detail">
                                <div class="rating flex ai-center jc-start">
                                    <div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div>
                                    <div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div><div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div><div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div>
                                    <div class="star">
                                        <img class="svg" src="@asset('images/vegetables/star.svg')" alt="icon">
                                    </div>
                                </div>
                                <a href="#!" class="product-name">Slim Fit Cotton Shirt</a>
                                <div class="pricing flex flex-column ai-start jc-start">
                                    <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                    <div class="price-sale flex ai-end jc-start">
                                        <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                        <p class="price sale-price"><span class="currency">$</span><span class="val">500</span></p>
                                    </div>
                                </div>
                                <div class="color-variations">
                                    <ul class="colors flex ai-center">
                                        <li class="bg" style="background: #d0edff"></li>
                                        <li class="bg" style="background: #f1e7e6"></li>
                                        <li class="bg" style="background: #bfbfbf"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="single-product-template">
                            <div class="wrapper">
                                <div class="img-wrapper">
                                    <a href="#!"></a>
                                    <div class="front">
                                        <img src="@asset('images/vegetables/product.jpg')" alt="">
                                    </div>
                                    <div class="back">
                                        <img src="@asset('images/vegetables/product.jpg')" alt="">
                                    </div>
                                </div>
                                <div class="lable-block flex ai-start jc-sb">
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
                            </div>
                            <div class="product-detail">
                                <div class="rating flex ai-center jc-start">
                                    <div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div>
                                    <div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div><div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div><div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div>
                                    <div class="star">
                                        <img class="svg" src="@asset('images/vegetables/star.svg')" alt="icon">
                                    </div>
                                </div>
                                <a href="#!" class="product-name">Slim Fit Cotton Shirt</a>
                                <div class="pricing flex flex-column ai-start jc-start">
                                    <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                    <div class="price-sale flex ai-end jc-start">
                                        <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                        <p class="price sale-price"><span class="currency">$</span><span class="val">500</span></p>
                                    </div>
                                </div>
                                <div class="color-variations">
                                    <ul class="colors flex ai-center">
                                        <li class="bg" style="background: #d0edff"></li>
                                        <li class="bg" style="background: #f1e7e6"></li>
                                        <li class="bg" style="background: #bfbfbf"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="single-product-template">
                            <div class="wrapper">
                                <div class="img-wrapper">
                                    <a href="#!"></a>
                                    <div class="front">
                                        <img src="@asset('images/vegetables/product.jpg')" alt="">
                                    </div>
                                    <div class="back">
                                        <img src="@asset('images/vegetables/product.jpg')" alt="">
                                    </div>
                                </div>
                                <div class="lable-block flex ai-start jc-sb">
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
                            </div>
                            <div class="product-detail">
                                <div class="rating flex ai-center jc-start">
                                    <div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div>
                                    <div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div><div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div><div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div>
                                    <div class="star">
                                        <img class="svg" src="@asset('images/vegetables/star.svg')" alt="icon">
                                    </div>
                                </div>
                                <a href="#!" class="product-name">Slim Fit Cotton Shirt</a>
                                <div class="pricing flex flex-column ai-start jc-start">
                                    <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                    <div class="price-sale flex ai-end jc-start">
                                        <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                        <p class="price sale-price"><span class="currency">$</span><span class="val">500</span></p>
                                    </div>
                                </div>
                                <div class="color-variations">
                                    <ul class="colors flex ai-center">
                                        <li class="bg" style="background: #d0edff"></li>
                                        <li class="bg" style="background: #f1e7e6"></li>
                                        <li class="bg" style="background: #bfbfbf"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="single-product-template">
                            <div class="wrapper">
                                <div class="img-wrapper">
                                    <a href="#!"></a>
                                    <div class="front">
                                        <img src="@asset('images/vegetables/product.jpg')" alt="">
                                    </div>
                                    <div class="back">
                                        <img src="@asset('images/vegetables/product.jpg')" alt="">
                                    </div>
                                </div>
                                <div class="lable-block flex ai-start jc-sb">
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
                            </div>
                            <div class="product-detail">
                                <div class="rating flex ai-center jc-start">
                                    <div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div>
                                    <div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div><div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div><div class="star fill">
                                        <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                    </div>
                                    <div class="star">
                                        <img class="svg" src="@asset('images/vegetables/star.svg')" alt="icon">
                                    </div>
                                </div>
                                <a href="#!" class="product-name">Slim Fit Cotton Shirt</a>
                                <div class="pricing flex flex-column ai-start jc-start">
                                    <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                    <div class="price-sale flex ai-end jc-start">
                                        <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                        <p class="price sale-price"><span class="currency">$</span><span class="val">500</span></p>
                                    </div>
                                </div>
                                <div class="color-variations">
                                    <ul class="colors flex ai-center">
                                        <li class="bg" style="background: #d0edff"></li>
                                        <li class="bg" style="background: #f1e7e6"></li>
                                        <li class="bg" style="background: #bfbfbf"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Special Offer end -->
<!-- blog section start-->
<section class="section section-story-blog">
    <div class="container">
        <div class="heading base-heading flex flex-column jc-center ai-center">
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
                            <h4 class="date">{{$post->date}}</h4>
                            <a class="name" href="#">{{$post->post_name}}</a>
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
<!-- blog section end -->
<!-- section-instagram start-->
<section class="section section-instagram">
    <div class="container">
        <div class="heading flex jc-center ai-center">
            <h2># instagram</h2>
        </div>
    </div>
    <div class="inst-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box box-image">
                    <a href="#!">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>
                    
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <a href="#!">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>
                    
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <a href="#!">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>
                    
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <a href="#!">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>
                    
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <a href="#!">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>                  
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <a href="#!">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>                    
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box box-image">
                    <a href="#!">
                    <div class="overlay-image">
                        <img src="@asset('images/icons/inst-icon.png')" alt="">
                    </div>                    
                        <img src="@asset('images/vegetables/instagram.jpg')" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section-instagram end-->
<!-- section-brands-slider start -->
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
<!-- section-brands-slider end-->
<!-- Exclusive Products start -->
<section class="section section-exclusive-products-tabs">
    <div class="container">
        <div class="heading base-heading flex flex-column jc-center ai-center">
            <h4>Exclusive Products</h4>
            <h2>SPECIAL PRODUCTS</h2>
        </div>
        <div class="tab-nav flex ai-center jc-center">
            <div class="tab-box">
                <h3 class="cat-name current" data-id='new'>NEW PRODUCTS</h3>
            </div>
            <div class="tab-box">
                <h3 class="cat-name" data-id='featured'>FEATURED PRODUCTS</h3>
            </div>
            <div class="tab-box">
                <h3 class="cat-name" data-id='best'>BEST SELLERS</h3>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="single-content-result flex fkex-wrap grid-wrapper  current" data-id="new">
                <div class="grid-item">
                    <div class="single-product-template">
                        <div class="wrapper">
                            <div class="img-wrapper">
                                <a href="#!"></a>
                                <div class="front">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                                <div class="back">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                            </div>
                            <div class="lable-block flex ai-start jc-sb">
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
                        </div>
                        <div class="product-detail">
                            <div class="rating flex ai-center jc-start">
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star">
                                    <img class="svg" src="@asset('images/vegetables/star.svg')" alt="icon">
                                </div>
                            </div>
                            <a href="#!" class="product-name">Slim Fit Cotton Shirt</a>
                            <div class="pricing flex flex-column ai-start jc-start">
                                <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                <div class="price-sale flex ai-end jc-start">
                                    <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                    <p class="price sale-price"><span class="currency">$</span><span class="val">500</span></p>
                                </div>
                            </div>
                            <div class="color-variations">
                                <ul class="colors flex ai-center">
                                    <li class="bg" style="background: #d0edff"></li>
                                    <li class="bg" style="background: #f1e7e6"></li>
                                    <li class="bg" style="background: #bfbfbf"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content-result flex fkex-wrap grid-wrapper" data-id="featured">
                <div class="grid-item">
                    <div class="single-product-template">
                        <div class="wrapper">
                            <div class="img-wrapper">
                                <a href="#!"></a>
                                <div class="front">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                                <div class="back">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                            </div>
                            <div class="lable-block flex ai-start jc-sb">
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
                        </div>
                        <div class="product-detail">
                            <div class="rating flex ai-center jc-start">
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star">
                                    <img class="svg" src="@asset('images/vegetables/star.svg')" alt="icon">
                                </div>
                            </div>
                            <a href="#!" class="product-name">Slim Fit Cotton Shirt</a>
                            <div class="pricing flex flex-column ai-start jc-start">
                                <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                <div class="price-sale flex ai-end jc-start">
                                    <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                    <p class="price sale-price"><span class="currency">$</span><span class="val">500</span></p>
                                </div>
                            </div>
                            <div class="color-variations">
                                <ul class="colors flex ai-center">
                                    <li class="bg" style="background: #d0edff"></li>
                                    <li class="bg" style="background: #f1e7e6"></li>
                                    <li class="bg" style="background: #bfbfbf"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="single-product-template">
                        <div class="wrapper">
                            <div class="img-wrapper">
                                <a href="#!"></a>
                                <div class="front">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                                <div class="back">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                            </div>
                            <div class="lable-block flex ai-start jc-sb">
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
                        </div>
                        <div class="product-detail">
                            <div class="rating flex ai-center jc-start">
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star">
                                    <img class="svg" src="@asset('images/vegetables/star.svg')" alt="icon">
                                </div>
                            </div>
                            <a href="#!" class="product-name">Slim Fit Cotton Shirt</a>
                            <div class="pricing flex flex-column ai-start jc-start">
                                <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                <div class="price-sale flex ai-end jc-start">
                                    <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                    <p class="price sale-price"><span class="currency">$</span><span class="val">500</span></p>
                                </div>
                            </div>
                            <div class="color-variations">
                                <ul class="colors flex ai-center">
                                    <li class="bg" style="background: #d0edff"></li>
                                    <li class="bg" style="background: #f1e7e6"></li>
                                    <li class="bg" style="background: #bfbfbf"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-content-result flex fkex-wrap grid-wrapper" data-id="best">
                <div class="grid-item">
                    <div class="single-product-template">
                        <div class="wrapper">
                            <div class="img-wrapper">
                                <a href="#!"></a>
                                <div class="front">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                                <div class="back">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                            </div>
                            <div class="lable-block flex ai-start jc-sb">
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
                        </div>
                        <div class="product-detail">
                            <div class="rating flex ai-center jc-start">
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star">
                                    <img class="svg" src="@asset('images/vegetables/star.svg')" alt="icon">
                                </div>
                            </div>
                            <a href="#!" class="product-name">Slim Fit Cotton Shirt</a>
                            <div class="pricing flex flex-column ai-start jc-start">
                                <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                <div class="price-sale flex ai-end jc-start">
                                    <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                    <p class="price sale-price"><span class="currency">$</span><span class="val">500</span></p>
                                </div>
                            </div>
                            <div class="color-variations">
                                <ul class="colors flex ai-center">
                                    <li class="bg" style="background: #d0edff"></li>
                                    <li class="bg" style="background: #f1e7e6"></li>
                                    <li class="bg" style="background: #bfbfbf"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="single-product-template">
                        <div class="wrapper">
                            <div class="img-wrapper">
                                <a href="#!"></a>
                                <div class="front">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                                <div class="back">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                            </div>
                            <div class="lable-block flex ai-start jc-sb">
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
                        </div>
                        <div class="product-detail">
                            <div class="rating flex ai-center jc-start">
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star">
                                    <img class="svg" src="@asset('images/vegetables/star.svg')" alt="icon">
                                </div>
                            </div>
                            <a href="#!" class="product-name">Slim Fit Cotton Shirt</a>
                            <div class="pricing flex flex-column ai-start jc-start">
                                <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                <div class="price-sale flex ai-end jc-start">
                                    <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                    <p class="price sale-price"><span class="currency">$</span><span class="val">500</span></p>
                                </div>
                            </div>
                            <div class="color-variations">
                                <ul class="colors flex ai-center">
                                    <li class="bg" style="background: #d0edff"></li>
                                    <li class="bg" style="background: #f1e7e6"></li>
                                    <li class="bg" style="background: #bfbfbf"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="single-product-template">
                        <div class="wrapper">
                            <div class="img-wrapper">
                                <a href="#!"></a>
                                <div class="front">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                                <div class="back">
                                    <img src="@asset('images/vegetables/product.jpg')" alt="">
                                </div>
                            </div>
                            <div class="lable-block flex ai-start jc-sb">
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
                        </div>
                        <div class="product-detail">
                            <div class="rating flex ai-center jc-start">
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div><div class="star fill">
                                    <img class="svg" src="@asset('images/vegetables/star-fill.svg')" alt="icon">
                                </div>
                                <div class="star">
                                    <img class="svg" src="@asset('images/vegetables/star.svg')" alt="icon">
                                </div>
                            </div>
                            <a href="#!" class="product-name">Slim Fit Cotton Shirt</a>
                            <div class="pricing flex flex-column ai-start jc-start">
                                <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                <div class="price-sale flex ai-end jc-start">
                                    <p class="price"><span class="currency">$</span><span class="val">500</span></p>
                                    <p class="price sale-price"><span class="currency">$</span><span class="val">500</span></p>
                                </div>
                            </div>
                            <div class="color-variations">
                                <ul class="colors flex ai-center">
                                    <li class="bg" style="background: #d0edff"></li>
                                    <li class="bg" style="background: #f1e7e6"></li>
                                    <li class="bg" style="background: #bfbfbf"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Exclusive Products end-->