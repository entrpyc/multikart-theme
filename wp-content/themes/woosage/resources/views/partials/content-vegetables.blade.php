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
        @include ('partials.content-section-heading', ['subtitle' => __('Special Offer', 'theme'), 'title' => __('TOP COLLECTION', 'theme'), 'text' => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,', 'theme')])
        <div class="special-listing-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        @include ('partials.content-single-product-template',
                        [
                            'product_link' => __('some link', 'theme'),
                            'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'new_product' => __('true', 'theme'),
                            'on_sale' => __('true', 'theme'),
                            'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                            'price_value' => __('500', 'theme'),
                            'price_sale_value' => __('600', 'theme'),
                            'color_variation_1' => __('#d0edff', 'theme'),
                            'color_variation_2' => __('#f1e7e6', 'theme'),
                            'color_variation_3' => __('#bfbfbf', 'theme'),
                        ])
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        @include ('partials.content-single-product-template',
                        [
                            'product_link' => __('some link', 'theme'),
                            'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'new_product' => __('true', 'theme'),
                            'on_sale' => __('true', 'theme'),
                            'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                            'price_value' => __('500', 'theme'),
                            'price_sale_value' => __('600', 'theme'),
                            'color_variation_1' => __('#d0edff', 'theme'),
                            'color_variation_2' => __('#f1e7e6', 'theme'),
                            'color_variation_3' => __('#bfbfbf', 'theme'),
                        ])
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        @include ('partials.content-single-product-template',
                        [
                            'product_link' => __('some link', 'theme'),
                            'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'new_product' => __('true', 'theme'),
                            'on_sale' => __('true', 'theme'),
                            'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                            'price_value' => __('500', 'theme'),
                            'price_sale_value' => __('600', 'theme'),
                            'color_variation_1' => __('#d0edff', 'theme'),
                            'color_variation_2' => __('#f1e7e6', 'theme'),
                            'color_variation_3' => __('#bfbfbf', 'theme'),
                        ])
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        @include ('partials.content-single-product-template',
                        [
                            'product_link' => __('some link', 'theme'),
                            'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'new_product' => __('true', 'theme'),
                            'on_sale' => __('true', 'theme'),
                            'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                            'price_value' => __('500', 'theme'),
                            'price_sale_value' => __('600', 'theme'),
                            'color_variation_1' => __('#d0edff', 'theme'),
                            'color_variation_2' => __('#f1e7e6', 'theme'),
                            'color_variation_3' => __('#bfbfbf', 'theme'),
                        ])
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
        @include ('partials.content-section-heading', ['subtitle' => __('recent story', 'theme'), 'title' => __('from the blog', 'theme')])
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
        @include ('partials.content-section-heading', ['title' => __('# instagram', 'theme')])
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
        @include ('partials.content-section-heading', ['subtitle' => __('Exclusive Products', 'theme'), 'title' => __('SPECIAL PRODUCTS', 'theme')])
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
                    @include ('partials.content-single-product-template',
                    [
                        'product_link' => __('some link', 'theme'),
                        'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                        'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                        'new_product' => __('true', 'theme'),
                        'on_sale' => __('true', 'theme'),
                        'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                        'price_value' => __('500', 'theme'),
                        'price_sale_value' => __('600', 'theme'),
                        'color_variation_1' => __('#d0edff', 'theme'),
                        'color_variation_2' => __('#f1e7e6', 'theme'),
                        'color_variation_3' => __('#bfbfbf', 'theme'),
                    ])
                </div>
            </div>
            <div class="single-content-result flex fkex-wrap grid-wrapper" data-id="featured">
                <div class="grid-item">
                    @include ('partials.content-single-product-template',
                    [
                        'product_link' => __('some link', 'theme'),
                        'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                        'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                        'new_product' => __('true', 'theme'),
                        'on_sale' => __('true', 'theme'),
                        'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                        'price_value' => __('500', 'theme'),
                        'price_sale_value' => __('600', 'theme'),
                        'color_variation_1' => __('#d0edff', 'theme'),
                        'color_variation_2' => __('#f1e7e6', 'theme'),
                        'color_variation_3' => __('#bfbfbf', 'theme'),
                    ])
                </div>
                <div class="grid-item">
                    @include ('partials.content-single-product-template',
                    [
                        'product_link' => __('some link', 'theme'),
                        'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                        'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                        'new_product' => __('true', 'theme'),
                        'on_sale' => __('true', 'theme'),
                        'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                        'price_value' => __('500', 'theme'),
                        'price_sale_value' => __('600', 'theme'),
                        'color_variation_1' => __('#d0edff', 'theme'),
                        'color_variation_2' => __('#f1e7e6', 'theme'),
                        'color_variation_3' => __('#bfbfbf', 'theme'),
                    ])
                </div>
            </div>
            <div class="single-content-result flex fkex-wrap grid-wrapper" data-id="best">
                <div class="grid-item">
                    @include ('partials.content-single-product-template',
                        [
                            'product_link' => __('some link', 'theme'),
                            'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'new_product' => __('true', 'theme'),
                            'on_sale' => __('true', 'theme'),
                            'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                            'price_value' => __('500', 'theme'),
                            'price_sale_value' => __('600', 'theme'),
                            'color_variation_1' => __('#d0edff', 'theme'),
                            'color_variation_2' => __('#f1e7e6', 'theme'),
                            'color_variation_3' => __('#bfbfbf', 'theme'),
                        ])
                </div>
                <div class="grid-item">
                    @include ('partials.content-single-product-template',
                    [
                        'product_link' => __('some link', 'theme'),
                        'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                        'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                        'new_product' => __('true', 'theme'),
                        'on_sale' => __('true', 'theme'),
                        'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                        'price_value' => __('500', 'theme'),
                        'price_sale_value' => __('600', 'theme'),
                        'color_variation_1' => __('#d0edff', 'theme'),
                        'color_variation_2' => __('#f1e7e6', 'theme'),
                        'color_variation_3' => __('#bfbfbf', 'theme'),
                    ])
                </div>
                <div class="grid-item">
                    @include ('partials.content-single-product-template',
                    [
                        'product_link' => __('some link', 'theme'),
                        'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                        'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                        'new_product' => __('true', 'theme'),
                        'on_sale' => __('true', 'theme'),
                        'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                        'price_value' => __('500', 'theme'),
                        'price_sale_value' => __('600', 'theme'),
                        'color_variation_1' => __('#d0edff', 'theme'),
                        'color_variation_2' => __('#f1e7e6', 'theme'),
                        'color_variation_3' => __('#bfbfbf', 'theme'),
                    ])
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Exclusive Products end-->
<!-- Special rpoducts grid start -->
{{-- <section class="section section-special-products-grid">
    <div class="container">
        @include ('partials.content-section-heading', ['title' => __('SPECIAL PRODUCTS', 'theme')])
        <div class="listing-special-products flex flex-wrap ai-start jc-sb">
            <div class="col">
                @foreach($products as $key => $product)
                    @if ($key < 2)
                        @include ('partials.content-single-product-template',
                        [
                            'product_link' => __('some link', 'theme'),
                            'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'new_product' => __('true', 'theme'),
                            'on_sale' => __('true', 'theme'),
                            'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                            'price_value' => __('500', 'theme'),
                            'price_sale_value' => __('600', 'theme'),
                            'color_variation_1' => __('#d0edff', 'theme'),
                            'color_variation_2' => __('#f1e7e6', 'theme'),
                            'color_variation_3' => __('#bfbfbf', 'theme'),
                        ])
                    @endif
                @endforeach
            </div>
            <div class="col main-col">
                @foreach($products as $key => $product)
                    @if ($key == 2)
                        @include ('partials.content-single-product-template',
                        [
                            'product_link' => __('some link', 'theme'),
                            'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'new_product' => __('true', 'theme'),
                            'on_sale' => __('true', 'theme'),
                            'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                            'price_value' => __('500', 'theme'),
                            'price_sale_value' => __('600', 'theme'),
                            'color_variation_1' => __('#d0edff', 'theme'),
                            'color_variation_2' => __('#f1e7e6', 'theme'),
                            'color_variation_3' => __('#bfbfbf', 'theme'),
                        ])
                    @endif
                @endforeach
            </div>
            <div class="col">
                @foreach($products as $key => $product)
                    @if ($key > 2 && $key < 5)
                        @include ('partials.content-single-product-template',
                        [
                            'product_link' => __('some link', 'theme'),
                            'first_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'second_image' => __('https://localhost:3414/wp-content/themes/woosage/dist/images/vegetables/product.jpg', 'theme'),
                            'new_product' => __('true', 'theme'),
                            'on_sale' => __('true', 'theme'),
                            'product_name' => __('Slim Fit Cotton Shirt', 'theme'),
                            'price_value' => __('500', 'theme'),
                            'price_sale_value' => __('600', 'theme'),
                            'color_variation_1' => __('#d0edff', 'theme'),
                            'color_variation_2' => __('#f1e7e6', 'theme'),
                            'color_variation_3' => __('#bfbfbf', 'theme'),
                        ])
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section> --}}
<!-- Special rpoducts grid end-->
<!-- product-box slider -->
<section class="section-b-space addtocart_count">
    <div class="full-box">
        <div class="container">
            
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
</section>
<!-- product-box slider end -->