{{--
 * Show messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/success.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.9.0
--}}

@php if ( !defined( 'ABSPATH' ) ) { exit; } @endphp

@php
	if ( ! $notices ) {
		return;
	}
@endphp


@foreach ( $notices as $notice )
	<div class="woocommerce-message" {!! wc_get_notice_data_attr( $notice ) !!} role="alert">
		{!!  wc_kses_notice( $notice['notice'] ) !!}
	</div>
@endforeach
