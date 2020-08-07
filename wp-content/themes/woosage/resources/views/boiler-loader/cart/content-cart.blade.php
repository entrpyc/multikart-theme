{{--
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
--}}

@php defined( 'ABSPATH' ) || exit; @endphp

@php do_action( 'woocommerce_before_cart' ) @endphp

<form class="woocommerce-cart-form" action="{{ esc_url( wc_get_cart_url() ) }}" method="post">
	@php do_action( 'woocommerce_before_cart_table' ) @endphp

	<!--section start-->
	<section class="cart-section">
		<div class="container">
			<div class="table flex flex-column">
				<div class="table-desktop">
					<div class="table-head table-row flex">
						<div class="table-col head-label image-head flex jc-center ai-center" scope="col">{{  __( 'IMAGE', 'woocommerce' ) }}</div>
						<div class="table-col head-label name-head product  flex jc-center ai-center" scope="col">{{  __( 'PRODUCT NAME', 'woocommerce' ) }}</div>
						<div class="table-col head-label price-head flex jc-center ai-center" scope="col">{{  __( 'Price', 'woocommerce' ) }}</div>
						<div class="table-col head-label qty-head flex jc-center ai-center" scope="col">{{  __( 'Quantity', 'woocommerce' ) }}</div>
						<div class="table-col head-label remove-head flex jc-center ai-center" scope="col">{{  __( 'ACTION', 'woocommerce' ) }}</div>
						<div class="table-col head-label subtotal-head flex jc-center ai-center" scope="col">{{  __( 'Subtotal', 'woocommerce' ) }}</div>
					</div>
					<div class="table-body flex flex-wrap">
						@php  do_action( 'woocommerce_before_cart_contents' ) @endphp
	
						@foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item )
							@php
							$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
							$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
							@endphp
			
							@if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) )
								@php
								$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
								@endphp
							<div class="table-row flex {{ esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ) }}">
									<div class="table-col flex jc-center ai-center product-image">
										<a href="{{$product_permalink}}"><img src="{{get_the_post_thumbnail_url($product_id)}}" alt=""></a> 
									</div>
									<div class="table-col flex jc-center ai-center product-name" data-title="{{ __( 'Product', 'woocommerce' ) }}">
										@if ( ! $product_permalink )
										{!! wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' )  !!}
										@else
										{!! wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) ) !!}
										@endif
	
										@php do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key ); @endphp
	
										{!! wc_get_formatted_cart_item_data( $cart_item )  !!}
	
										@if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) )
										{!! wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) ) !!}
										@endif
									</div>
									<div class="table-col flex jc-center ai-center product-price" data-title="{{ esc_attr( 'Price', 'woocommerce' ) }}">
										<h2>{!! apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ) !!}</h2>
									</div>
									<div class="table-col flex jc-center ai-center product-quantity" data-title="{{ esc_attr( 'Quantity', 'woocommerce' ) }}">
										@php
										if ( $_product->is_sold_individually() ) {
											$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
										} else {
											$product_quantity = woocommerce_quantity_input(
												array(
													'input_name'   => "cart[{$cart_item_key}][qty]",
													'input_value'  => $cart_item['quantity'],
													'max_value'    => $_product->get_max_purchase_quantity(),
													'min_value'    => '0',
													'product_name' => $_product->get_name(),
												),
												$_product,
												false
											);
										}
										@endphp
			
											{!! apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ) !!}
									</div>
									<div class="table-col flex jc-center ai-center product-remove">
										{!! apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
											'woocommerce_cart_item_remove_link',
											sprintf(
												'<a href="%s" class=" icon" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="ti-close"></i></a>',
												esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
												esc_html__( 'Remove this item', 'woocommerce' ),
												esc_attr( $product_id ),
												esc_attr( $_product->get_sku() )
											),
											$cart_item_key
										)  !!}
									</div>
									<div class="table-col flex jc-center ai-center product-subtotal" data-title="{{ esc_attr( 'Subtotal', 'woocommerce' ) }}">
										<h2 >{!! apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ) !!}</h2> <!-- total --> 
									</div>
							</div>
							@endif
							@endforeach
							@php do_action( 'woocommerce_cart_contents' ) @endphp
	
					</div>
				</div>
				<div class="table-mobile">
					<div class="table-body flex flex-wrap">
						@php  do_action( 'woocommerce_before_cart_contents' ) @endphp
	
						@foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item )
							@php
							$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
							$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
							@endphp
			
							@if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) )
								@php
								$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
								@endphp
							<div class="table-row flex {{ esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ) }}">
									<div class="table-col flex jc-center ai-center product-image">
										<a href="{{$product_permalink}}"><img src="{{get_the_post_thumbnail_url($product_id)}}" alt=""></a> 
									</div>
									<div class="rest">
										<div class="table-col flex jc-center ai-center product-name" data-title="{{ __( 'Product', 'woocommerce' ) }}">
											@if ( ! $product_permalink )
											{!! wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' )  !!}
											@else
											{!! wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) ) !!}
											@endif
		
											@php do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key ); @endphp
		
											{!! wc_get_formatted_cart_item_data( $cart_item )  !!}
		
											@if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) )
											{!! wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) ) !!}
											@endif
										</div>
										<div class="table-col flex jc-center ai-center product-price" data-title="{{ esc_attr( 'Price', 'woocommerce' ) }}">
											<h2>{!! apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ) !!}</h2>
										</div>
										<div class="table-col flex jc-center ai-center product-quantity" data-title="{{ esc_attr( 'Quantity', 'woocommerce' ) }}">
											@php
											if ( $_product->is_sold_individually() ) {
												$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
											} else {
												$product_quantity = woocommerce_quantity_input(
													array(
														'input_name'   => "cart[{$cart_item_key}][qty]",
														'input_value'  => $cart_item['quantity'],
														'max_value'    => $_product->get_max_purchase_quantity(),
														'min_value'    => '0',
														'product_name' => $_product->get_name(),
													),
													$_product,
													false
												);
											}
											@endphp
				
												{!! apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ) !!}
										</div>
										<div class="table-col flex jc-center ai-center product-remove">
											{!! apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
												'woocommerce_cart_item_remove_link',
												sprintf(
													'<a href="%s" class=" icon" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="ti-close"></i></a>',
													esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
													esc_html__( 'Remove this item', 'woocommerce' ),
													esc_attr( $product_id ),
													esc_attr( $_product->get_sku() )
												),
												$cart_item_key
											)  !!}
										</div>
										<div class="table-col flex jc-center ai-center product-subtotal" data-title="{{ esc_attr( 'Subtotal', 'woocommerce' ) }}">
											<h2 class="flex ai-center"><span>{{ __( 'Total:', 'woocommerce' ) }}</span>{!! apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ) !!}</h2> <!-- total --> 
										</div>
									</div>
							</div>
							@endif
							@endforeach
							@php do_action( 'woocommerce_cart_contents' ) @endphp
	
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--section end-->

	@php do_action( 'woocommerce_after_cart_table' ) @endphp
</form>

@php do_action( 'woocommerce_before_cart_collaterals' ); @endphp

<div class="cart-collaterals">
	<div class="container flex ai-start jc-end">
		<div class="wrapper flex flex-wrap  ai-start jc-sb {{ ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : '' }}">
	
			@php do_action( 'woocommerce_before_cart_totals' ) @endphp
			<div class="other">
				<a href="{{ esc_url( wc_get_checkout_url() ) }}" class="to-shopping btn btn-solid">
					{{ __( 'continue shopping', 'woocommerce' ) }}
				</a>
			</div>
			<div class="right flex flex-column ai-end">
				<div class="cart totals totals-table flex flex-column jc-start ai-start">
		
					<div class="table-row flex ai-center jc-end jc-end cart-subtotal">
						<p class="label">{{ __( 'Subtotal', 'woocommerce' )  }}:</p>
						<p class="amount" data-title="{{ esc_attr( 'Subtotal', 'woocommerce' ) }}">@php wc_cart_totals_subtotal_html() @endphp</p>
					</div>
			
					@foreach ( WC()->cart->get_coupons() as $code => $coupon )
						<div class="table-row flex ai-center jc-end cart-discount coupon-{{ esc_attr( sanitize_title( $code ) ) }}">
							<p class="coupon">@php wc_cart_totals_coupon_label( $coupon ) @endphp</p>
							<p class="coupon name" data-title="{{ esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ) }}">@php wc_cart_totals_coupon_html( $coupon ) @endphp</p>
						</div>
					@endforeach
			
					@if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() )
			
						@php do_action( 'woocommerce_cart_totals_before_shipping' ) @endphp
			
						@php wc_cart_totals_shipping_html() @endphp
			
						@php do_action( 'woocommerce_cart_totals_after_shipping' ) @endphp
			
					@elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) )
			
						<div class="table-row flex ai-center jc-end shipping">
							<p class="label">{{ __( 'Shipping', 'woocommerce' ) }}:</p>
							<p class="amount" data-title="{{ esc_attr( 'Shipping', 'woocommerce' ) }}">@php woocommerce_shipping_calculator() @endphp</p>
						</div>
			
					@endif
			
					@foreach ( WC()->cart->get_fees() as $fee )
						<div class="table-row flex ai-center jc-end fee">
							<p class="label">{{  $fee->name }}:</p>
							<p class="amount" data-title="{{ esc_attr( $fee->name ) }}">@php wc_cart_totals_fee_html( $fee ) @endphp</p>
						</div>
					@endforeach
			
					@if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() )
						@php
							$taxable_address = WC()->customer->get_taxable_address();
							$estimated_text  = '';
							if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
								/* translators: %s location. */
								$estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
							}
						@endphp
			
						@if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) )
							@foreach ( WC()->cart->get_tax_totals() as $code => $tax )
								<div class="table-row flex ai-center jc-end tax-rate tax-rate-{{ esc_attr(sanitize_title( $code )) }}">
									<p class="label">{{ $tax->label }}{!! $estimated_text  !!}:</p>
									<p class="amount" data-title="{{ esc_attr( $tax->label ) }}">{!! wp_kses_post( $tax->formatted_amount ) !!}</p>
								</div>
							@endforeach
						@else
							<div class="table-row flex ai-center jc-end tax-total">
								<p class="label">{{ WC()->countries->tax_or_vat()  }} {!! $estimated_text  !!}:</p>
								<p class="amount" data-title="{{ esc_attr( WC()->countries->tax_or_vat() ) }}">@php wc_cart_totals_taxes_total_html() @endphp</p>
							</div>
						@endif
					@endif
			
					@php do_action( 'woocommerce_cart_totals_before_order_total' ) @endphp
			
					<div class="table-row flex ai-center jc-end order-total">
						<p class="label">{{ __( 'Total', 'woocommerce' )  }}:</p>
						<p class="amount" data-title="{{ esc_attr( 'Total', 'woocommerce' ) }}">@php wc_cart_totals_order_total_html() @endphp</p>
					</div>
			
					@php do_action( 'woocommerce_cart_totals_after_order_total' ) @endphp
			
				</div>
			
				<div class="proceed-to-checkout">
					<a href="{{ esc_url( wc_get_checkout_url() ) }}" class="checkout-button btn btn-solid">
						{{ __( 'Checkout', 'woocommerce' ) }}
					</a>
				</div>
			
				@php do_action( 'woocommerce_after_cart_totals' ) @endphp
			</div>	
		</div>
	</div>
</div>


@php do_action( 'woocommerce_after_cart' ) @endphp

