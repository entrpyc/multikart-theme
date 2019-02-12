{{--
 * Add payment method form form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-add-payment-method.php.
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
	$available_gateways = WC()->payment_gateways->get_available_payment_gateways();
@endphp

@if ( $available_gateways )
	<form id="add_payment_method" method="post">
		<div id="payment" class="woocommerce-Payment">
			<ul class="woocommerce-PaymentMethods payment_methods methods">
				@php
					// Chosen Method.
					if ( count( $available_gateways ) ) {
						current( $available_gateways )->set_current();
					}
				@endphp

				@foreach ( $available_gateways as $gateway )

					<li class="woocommerce-PaymentMethod woocommerce-PaymentMethod--{{ esc_attr( $gateway->id ) }} payment_method_{{ esc_attr( $gateway->id ) }}">
						<input id="payment_method_{{ esc_attr( $gateway->id ) }}" type="radio" class="input-radio" name="payment_method" value="{{ esc_attr( $gateway->id ) }}" @php checked( $gateway->chosen, true ) @endphp />
						<label for="payment_method_{{ esc_attr( $gateway->id ) }}"><{!!  wp_kses_post( $gateway->get_title() ) !!} {!! wp_kses_post( $gateway->get_icon() ) !!}</label>
						@if ( $gateway->has_fields() || $gateway->get_description() )
							<div class="woocommerce-PaymentBox woocommerce-PaymentBox--{{ esc_attr( $gateway->id ) }} payment_box payment_method_{{ esc_attr( $gateway->id ) }}" style="display: none;">
								{!! $gateway->payment_fields() !!}
							</div>
						@endif
					</li>
				@endforeach
			</ul>

			<div class="form-row">
				@php wp_nonce_field( 'woocommerce-add-payment-method', 'woocommerce-add-payment-method-nonce' ) @endphp
				<button type="submit" class="woocommerce-Button woocommerce-Button--alt button alt" id="place_order" value="{{ esc_attr( 'Add payment method', 'woocommerce' ) }}">{{ __( 'Add payment method', 'woocommerce' ) }}</button>
				<input type="hidden" name="woocommerce_add_payment_method" id="woocommerce_add_payment_method" value="1" />
			</div>
		</div>
	</form>
@else
	<p class="woocommerce-notice woocommerce-notice--info woocommerce-info">{{ __( 'New payment methods can only be added during checkout. Please contact us if you require assistance.', 'woocommerce' ) }}</p>
@endif
