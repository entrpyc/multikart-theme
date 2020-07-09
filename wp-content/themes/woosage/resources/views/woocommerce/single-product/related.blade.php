{{--
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.9.0
--}}

@php if ( !defined( 'ABSPATH' ) ) { exit; } @endphp

{{-- @if ( $related_products )

	<section class="related products">

		@php
			$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );
		@endphp

		@if($heading)
			<h2>{{ $heading }}</h2>
		@endif

		@php woocommerce_product_loop_start() @endphp

			@foreach ( $related_products as $related_product )

				@php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' )
				@endphp

			@endforeach

		@php woocommerce_product_loop_end() @endphp

	</section>

@endif --}}
<section class="section-b-space ratio_asos">
  <div class="container">
      <div class="row">
          <div class="col-12 product-related">
              <h2>{{ $heading }}</h2>
          </div>
      </div>
      <div class="row search-product">
				@foreach($related_products as $product)
				@php
				$post_object = get_post( $product->get_id() );
			 	setup_postdata( $GLOBALS['post'] =& $post_object );
		 		@endphp
        <div class="col-xl-2 col-md-4 col-sm-6">
					@php wc_get_template( 'loop/sale-flash.php' )  @endphp
            <div class="product-box">
                <div class="img-wrapper">
                    <div class="front">
                        <a href="{{ get_permalink( $product->ID ) }}"><img src="{{ wp_get_attachment_url( $product->get_image_id() ) }}"
                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                    </div>
                    <div class="back">
                        <a href="{{ get_permalink( $product->ID ) }}"><img src="{{ wp_get_attachment_url( $product->get_image_id() ) }}" {{-- add backside --}}
                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                    </div>
                    <div class="cart-info cart-wrap">
                        <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                            title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                            data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                            title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                </div>
                <div class="product-detail">
                    {{-- <div class="rating">
                        @php for($i = 0; $i <= $product['rating']; $i++) {
                            echo '<i class="fa fa-star"></i>';
                        }
                        @endphp
                    </div> --}}
                    <a href="product-page(no-sidebar).html">
                        <h6>{{ get_the_title() }}</h6>
                    </a>
                    @if($product->get_sale_price())
										<h4><del>{!! get_woocommerce_currency_symbol() !!}{{ $product->get_regular_price() }}</del></h4>
										<h3>{!! get_woocommerce_currency_symbol() !!}{{ $product->get_sale_price() }}</h3>
										@elseif($product->get_regular_price())
										<h3>{!! $product->get_regular_price() !!}</h3>
										@endif
                    {{-- @if($product['colors'])
                    <ul class="color-variant">
                        @foreach($product['colors'] as $color)
                            <li class="bg-{{$color}}"></li>
                        @endforeach
                    </ul>
                    @endif --}}
                </div>
            </div>
				</div>
				@endforeach
      </div>
  </div>
</section>

@php wp_reset_postdata() @endphp
