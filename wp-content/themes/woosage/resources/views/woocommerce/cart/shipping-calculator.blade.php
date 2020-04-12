{{--
 * Shipping Calculator
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/shipping-calculator.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 4.0.0
--}}

@php defined( 'ABSPATH' ) || exit; @endphp

@php do_action( 'woocommerce_before_shipping_calculator' ) @endphp

<form class="woocommerce-shipping-calculator" action="{{ esc_url( wc_get_cart_url() ) }}" method="post">

	@php printf( '<a href="#" class="shipping-calculator-button">%s</a>', esc_html( ! empty( $button_text ) ? $button_text : __( 'Calculate shipping', 'woocommerce' ) ) ) @endphp

	<section class="shipping-calculator-form" style="display:none;">

		@if ( apply_filters( 'woocommerce_shipping_calculator_enable_country', true ) )
			<p class="form-row form-row-wide" id="calc_shipping_country_field">
				<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select" rel="calc_shipping_state">
					<option value="">{{ __( 'Select a country / region&hellip;', 'woocommerce' ) }}</option>
					@foreach ( WC()->countries->get_shipping_countries() as $key => $value )
						<option value="{{ $key }}" {!!  selected( WC()->customer->get_shipping_country(), esc_attr( $key ), false ) !!}>{{ $value }}</option>
					@endforeach
				</select>
			</p>
		@endif

		@if ( apply_filters( 'woocommerce_shipping_calculator_enable_state', true ) )
			<p class="form-row form-row-wide" id="calc_shipping_state_field">
				@php
				$current_cc = WC()->customer->get_shipping_country();
				$current_r  = WC()->customer->get_shipping_state();
				$states     = WC()->countries->get_states( $current_cc );
				@endphp

				@if ( is_array( $states ) && empty( $states ) )
					<input type="hidden" name="calc_shipping_state" id="calc_shipping_state" placeholder="{{ esc_attr( 'State / County', 'woocommerce' ) }}" />
				@elseif ( is_array( $states ) )
					<span>
						<select name="calc_shipping_state" class="state_select" id="calc_shipping_state" data-placeholder="{{ esc_attr( 'State / County', 'woocommerce' ) }}">
							<option value="">{{ esc_html( 'Select an option&hellip;', 'woocommerce' ) }}</option>
							@foreach ( $states as $ckey => $cvalue )
							<option value="{{ $ckey }}" {!!  selected( $current_r, $ckey, false ) !!}>{{ $value }}</option>
							@endforeach
						</select>
					</span>
				@else
					<input type="text" class="input-text" value="{{ esc_attr( $current_r ) }}" placeholder="{{ esc_attr( 'State / County', 'woocommerce' ) }}" name="calc_shipping_state" id="calc_shipping_state" />
				@endif
			</p>
		@endif

		@if ( apply_filters( 'woocommerce_shipping_calculator_enable_city', true ) )
			<p class="form-row form-row-wide" id="calc_shipping_city_field">
				<input type="text" class="input-text" value="{{ esc_attr( WC()->customer->get_shipping_city() ) }}" placeholder="{{ esc_attr( 'City', 'woocommerce' ) }}" name="calc_shipping_city" id="calc_shipping_city" />
			</p>
		@endif

		@if ( apply_filters( 'woocommerce_shipping_calculator_enable_postcode', true ) )
			<p class="form-row form-row-wide" id="calc_shipping_postcode_field">
				<input type="text" class="input-text" value="{{ esc_attr( WC()->customer->get_shipping_postcode() ) }}" placeholder="{{ esc_attr( 'Postcode / ZIP', 'woocommerce' ) }}" name="calc_shipping_postcode" id="calc_shipping_postcode" />
			</p>
		@endif

		<p><button type="submit" name="calc_shipping" value="1" class="button">{{ esc_html( 'Update', 'woocommerce' ) }}</button></p>
		@php wp_nonce_field( 'woocommerce-shipping-calculator', 'woocommerce-shipping-calculator-nonce' ) @endphp
	</section>
</form>

@php do_action( 'woocommerce_after_shipping_calculator' ) @endphp
