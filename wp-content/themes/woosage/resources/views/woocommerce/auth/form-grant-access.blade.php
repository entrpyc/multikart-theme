{{--
 * Auth form grant access
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/auth/form-grant-access.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates/Auth
 * @version 2.4.0
--}}

@php if ( !defined( 'ABSPATH' ) ) { exit; } @endphp


@php do_action( 'woocommerce_auth_page_header' ) @endphp

<h1>@php printf( __( '%s would like to connect to your store', 'woocommerce' ), esc_html( $app_name ) ) @endphp</h1>

@php wc_print_notices() @endphp

<p>@php printf( __( 'This will give "%1$s" %2$s access which will allow it to:', 'woocommerce' ), '<strong>' . esc_html( $app_name ) . '</strong>', '<strong>' . esc_html( $scope ) . '</strong>' ) @endphp</p>

<ul class="wc-auth-permissions">
	@foreach ( $permissions as $permission )
		<li><{{ esc_html( $permission ) }}</li>
	@endforeach
</ul>

<div class="wc-auth-logged-in-as">
	{!! get_avatar( $user->ID, 70 ) !!}
	<p>@php printf( __( 'Logged in as %s', 'woocommerce' ), esc_html( $user->display_name ) ) @endphp <a href="{{ esc_url( $logout_url ) }}" class="wc-auth-logout">{{ __( 'Logout', 'woocommerce' ) }}</a>
</div>

<p class="wc-auth-actions">
	<a href="{{ esc_url( $granted_url ) }}" class="button button-primary wc-auth-approve">{{ __( 'Approve', 'woocommerce' ) }}</a>
	<a href="{{ esc_url( $return_url ) }}" class="button wc-auth-deny">{{ __( 'Deny', 'woocommerce' ) }}</a>
</p>

@php do_action( 'woocommerce_auth_page_footer' ) @endphp
