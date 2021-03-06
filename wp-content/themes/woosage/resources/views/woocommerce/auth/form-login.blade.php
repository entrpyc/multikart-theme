{{--
 * Auth form login
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/auth/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Auth
 * @version 3.4.0
--}}

@php if ( !defined( 'ABSPATH' ) ) { exit; } @endphp

@php
	wc_get_template( 'auth/header.php' ); //do_action( 'woocommerce_auth_page_header' )
@endphp

<h1>
	@php
	/* translators: %s: app name */
	printf( esc_html__( '%s would like to connect to your store', 'woocommerce' ), esc_html( $app_name ) );
	@endphp
</h1>

@php wc_print_notices() @endphp

<p>
	{!!  wp_kses_post( sprintf( __( 'To connect to %1$s you need to be logged in. Log in to your store below, or <a href="%2$s">cancel and return to %1$s</a>', 'woocommerce' ), esc_html( wc_clean( $app_name ) ), esc_url( $return_url ) ) )	!!}
</p>

<form method="post" class="wc-auth-login">
	<p class="form-row form-row-wide">
		<label for="username">{{ __( 'Username or email address', 'woocommerce' ) }}&nbsp;<span class="required">*</span></label>
		<input type="text" class="input-text" name="username" id="username" value="{{ ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : '' }}" />
	</p>
	<p class="form-row form-row-wide">
		<label for="password">{{ __( 'Password', 'woocommerce' ) }}&nbsp;<span class="required">*</span></label>
		<input class="input-text" type="password" name="password" id="password" />
	</p>
	<p class="wc-auth-actions">
		@php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ) @endphp
		<button type="submit" class="button button-large button-primary wc-auth-login-button" name="login" value="{{ esc_attr( 'Login', 'woocommerce' ) }}">{{ __( 'Login', 'woocommerce' ) }}</button>
		<input type="hidden" name="redirect" value="{{ esc_url( $redirect_url ) }}" />
	</p>
</form>

@php
	wc_get_template( 'auth/footer.php' ); //do_action( 'woocommerce_auth_page_footer' )
@endphp
