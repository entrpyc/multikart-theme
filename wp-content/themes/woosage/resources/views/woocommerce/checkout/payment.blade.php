{{--
 * Checkout Payment Section
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.3
--}}

@php if ( !defined( 'ABSPATH' ) ) { exit; } @endphp

@php
	if ( ! is_ajax() ) {
		do_action( 'woocommerce_review_order_before_payment' );
	}
@endphp

<div id="payment" class="woocommerce-checkout-payment">
	@if ( WC()->cart->needs_payment() )
		<ul class="wc_payment_methods payment_methods methods">
			@if ( ! empty( $available_gateways ) )
				@foreach ( $available_gateways as $gateway )
					@php wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) ) @endphp
				@endforeach
			@else
				<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">{!! apply_filters( 'woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? __( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) : __( 'Please fill in your details above to see available payment methods.', 'woocommerce' ) )  !!} </li>
			@endif
		</ul>
	@endif
	<div class="form-row place-order">
		<noscript>
			@php
			/* translators: $1 and $2 opening and closing emphasis tags respectively */
			printf( esc_html__( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the %1$sUpdate Totals%2$s button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce' ), '<em>', '</em>' );
			@endphp
			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="{{ esc_attr( 'Update totals', 'woocommerce' ) }}">{{ __( 'Update totals', 'woocommerce' ) }}</button>
		</noscript>

		@php wc_get_template( 'checkout/terms.php' ) @endphp

		@php do_action( 'woocommerce_review_order_before_submit' ) @endphp

		{!! apply_filters( 'woocommerce_order_button_html', '<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '">' . esc_html( $order_button_text ) . '</button>' )  !!}

		@php do_action( 'woocommerce_review_order_after_submit' ) @endphp

		@php wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' ) @endphp
	</div>
</div>
<?php
if ( ! is_ajax() ) {
	do_action( 'woocommerce_review_order_after_payment' );
}
