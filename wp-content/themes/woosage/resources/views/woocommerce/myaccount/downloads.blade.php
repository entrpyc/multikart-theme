{{--
 * Downloads
 *
 * Shows downloads on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/downloads.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.2.0
--}}

@php if ( !defined( 'ABSPATH' ) ) { exit; } @endphp

@php
$downloads     = WC()->customer->get_downloadable_products();
$has_downloads = (bool) $downloads;

do_action( 'woocommerce_before_account_downloads', $has_downloads ) @endphp

@if ( $has_downloads )

	@php do_action( 'woocommerce_before_available_downloads' ) @endphp

	@php do_action( 'woocommerce_available_downloads', $downloads ) @endphp

	@php do_action( 'woocommerce_after_available_downloads' ) @endphp

@else
	<div class="woocommerce-Message woocommerce-Message--info woocommerce-info">
		<a class="woocommerce-Button button" href="{{ esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ) }}">
			{{ __( 'Go shop', 'woocommerce' ) }}
		</a>
		{{ __( 'No downloads available yet.', 'woocommerce' ) }}
	</div>
@endif

@php do_action( 'woocommerce_after_account_downloads', $has_downloads ) @endphp
