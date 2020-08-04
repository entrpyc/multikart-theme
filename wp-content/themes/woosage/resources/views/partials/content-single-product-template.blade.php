<div class="single-product-template">
    <div class="wrapper">
        <div class="img-wrapper">
            <a href="{!! $product_link !!}"></a>
            <div class="front">
                <img src="{!! $first_image !!}" alt="">
            </div>
            <div class="back">
                <img src="{!! $second_image !!}" alt="">
            </div>
        </div>
        <div class="lable-block flex ai-start jc-sb">
            @if ($new_product)
                <p class="new">New</p>
            @endif
            @if ($on_sale)
                <p class="sale">On Sale</p>
            @endif
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
        <a href="{!! $product_link !!}" class="product-name">{!! $product_name !!}</a>
        <div class="pricing flex flex-column ai-start jc-start">
            <p class="price"><span class="currency">$</span><span class="val">{!! $price_value !!}</span></p>
            <div class="price-sale flex ai-end jc-start">
                <p class="price"><span class="currency">$</span><span class="val">{!! $price_value !!}</span></p>
                <p class="price sale-price"><span class="currency">$</span><span class="val">{!! $price_sale_value !!}</span></p>
            </div>
        </div>
        <div class="color-variations">
            <ul class="colors flex ai-center">
                <li class="bg" style="background: {!! $color_variation_1 !!}"></li>
                <li class="bg" style="background: {!! $color_variation_2 !!}"></li>
                <li class="bg" style="background: {!! $color_variation_3 !!}"></li>
            </ul>
        </div>
    </div>
</div>