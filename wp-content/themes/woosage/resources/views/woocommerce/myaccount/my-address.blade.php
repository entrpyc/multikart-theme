{{--
 * My Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
--}}

@php if ( !defined( 'ABSPATH' ) ) { exit; } @endphp

@php
	$customer_id = get_current_user_id();

	if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
		$get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
			'billing' => __( 'Billing address', 'woocommerce' ),
			'shipping' => __( 'Shipping address', 'woocommerce' ),
		), $customer_id );
	} else {
		$get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
			'billing' => __( 'Billing address', 'woocommerce' ),
		), $customer_id );
	}

	$oldcol = 1;
	$col    = 1;
@endphp

<p>
	{!! apply_filters( 'woocommerce_my_account_my_address_description', __( 'The following addresses will be used on the checkout page by default.', 'woocommerce' ) )  !!}
</p>

@if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() )
	<div class="u-columns woocommerce-Addresses col2-set addresses">
@endif

@foreach ( $get_addresses as $name => $title )

	<div class="u-column{{ ( ( $col = $col * -1 ) < 0 ) ? 1 : 2 }} col-{{  ( ( $oldcol = $oldcol * -1 ) < 0 ) ? 1 : 2 }} woocommerce-Address">
		<header class="woocommerce-Address-title title">
			<h3>{{ $title }}</h3>
			<a href="{{ esc_url( wc_get_endpoint_url( 'edit-address', $name ) ) }}" class="edit">{{ __( 'Edit', 'woocommerce' ) }}</a>
		</header>
		<address>@php
			$address = wc_get_account_formatted_address( $name );
			echo $address ? wp_kses_post( $address ) : __( 'You have not set up this type of address yet.', 'woocommerce' );
		@endphp</address>
	</div>

@endforeach

@if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() )
	</div>
@endif
