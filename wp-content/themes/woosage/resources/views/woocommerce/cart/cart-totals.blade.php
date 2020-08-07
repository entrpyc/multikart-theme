{{--
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
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
 * @version     2.3.6
--}}

@php defined( 'ABSPATH' ) || exit; @endphp

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

