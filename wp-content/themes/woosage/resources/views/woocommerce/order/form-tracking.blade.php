{{--
 * Order tracking form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/form-tracking.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
--}}

@php if ( !defined( 'ABSPATH' ) ) { exit; } @endphp

@php
	global $post;
@endphp

<form action="{{ esc_url( get_permalink( $post->ID ) ) }}" method="post" class="track_order">

	<p>{{ __( 'To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.', 'woocommerce' ) }}</p>

	<p class="form-row form-row-first"><label for="orderid">{{ __( 'Order ID', 'woocommerce' ) }}</label> <input class="input-text" type="text" name="orderid" id="orderid" value="{{ isset( $_REQUEST['orderid'] ) ? esc_attr( wp_unslash( $_REQUEST['orderid'] ) ) : '' }}" placeholder="{{ esc_attr( 'Found in your order confirmation email.', 'woocommerce' ) }}" /></p>
	<p class="form-row form-row-last"><label for="order_email">{{ __( 'Billing email', 'woocommerce' ) }}</label> <input class="input-text" type="text" name="order_email" id="order_email" value="{{ isset( $_REQUEST['order_email'] ) ? esc_attr( wp_unslash( $_REQUEST['order_email'] ) ) : '' }}" placeholder="{{ esc_attr( 'Email you used during checkout.', 'woocommerce' ) }}" /></p>
	<div class="clear"></div>

	<p class="form-row"><button type="submit" class="button" name="track" value="{{  esc_attr( 'Track', 'woocommerce' ) }}">{{ __( 'Track', 'woocommerce' ) }}</button></p>
	@php wp_nonce_field( 'woocommerce-order_tracking', 'woocommerce-order-tracking-nonce' ) @endphp

</form>
