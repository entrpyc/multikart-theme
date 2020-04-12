{{--
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 4.1.0
--}}

@php if ( !defined( 'ABSPATH' ) ) { exit; } @endphp


@php do_action( 'woocommerce_before_customer_login_form' ) @endphp

@if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' )

<div class="u-columns col2-set" id="customer_login">

	<div class="u-column1 col-1">

@endif

		<h2>{{ __( 'Login', 'woocommerce' ) }}</h2>

		<form class="woocommerce-form woocommerce-form-login login" method="post">

			@php do_action( 'woocommerce_login_form_start' ) @endphp

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">{{ __( 'Username or email address', 'woocommerce' ) }}&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="{{ ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : '' }}" />
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password">{{ __( 'Password', 'woocommerce' ) }}&nbsp;<span class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
			</p>

			@php do_action( 'woocommerce_login_form')  @endphp

			<p class="form-row">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>{{ __( 'Remember me', 'woocommerce' ) }}</span>
				</label>
				@php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ) @endphp
				<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="login" value="{{ esc_attr( 'Log in', 'woocommerce' ) }}">{{ __( 'Log in', 'woocommerce' ) }}</button>
			</p>
			<p class="woocommerce-LostPassword lost_password">
				<a href="{{ esc_url( wp_lostpassword_url() ) }}">{{ __( 'Lost your password?', 'woocommerce' ) }}</a>
			</p>

			@php do_action( 'woocommerce_login_form_end' ) @endphp

		</form>

@if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' )

	</div>

	<div class="u-column2 col-2">

		<h2>@php __( 'Register', 'woocommerce' ) @endphp</h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register" @php do_action( 'woocommerce_register_form_tag' ) @endphp >

			@php do_action( 'woocommerce_register_form_start' ) @endphp

			@if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) )

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username">{{ __( 'Username', 'woocommerce' ) }}&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="{{ ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : '' }}" />
				</p>

			@endif

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email">{{ __( 'Email address', 'woocommerce' ) }}&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="{{ ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : '' }}" />
			</p>

			@if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) )

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password">{{ __( 'Password', 'woocommerce' ) }}&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
				</p>

			@else

				<p><{!! __( 'A password will be sent to your email address.', 'woocommerce' ) !!} ?></p>

			@endif

			@php do_action( 'woocommerce_register_form' ) @endphp

			<p class="woocommerce-form-row form-row">
				@php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ) @endphp
				<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="{{ esc_attr( 'Register', 'woocommerce' ) }}">{{ __( 'Register', 'woocommerce' ) }}</button>
			</p>

			@php do_action( 'woocommerce_register_form_end' ) @endphp

		</form>

	</div>

</div>
@endif

@php do_action( 'woocommerce_after_customer_login_form' ) @endphp
