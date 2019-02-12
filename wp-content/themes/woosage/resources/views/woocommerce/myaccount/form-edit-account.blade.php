{{--
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
--}}

@php if ( !defined( 'ABSPATH' ) ) { exit; } @endphp

@php do_action( 'woocommerce_before_edit_account_form' ) @endphp

<form class="woocommerce-EditAccountForm edit-account" action="" method="post" @php do_action( 'woocommerce_edit_account_form_tag' ) @endphp >

	@php do_action( 'woocommerce_edit_account_form_start' ) @endphp

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="account_first_name">{{ __( 'First name', 'woocommerce' ) }}&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" autocomplete="given-name" value="{{ esc_attr( $user->first_name ) }}" />
	</p>
	<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
		<label for="account_last_name">{{ __( 'Last name', 'woocommerce' ) }}&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="{{ esc_attr( $user->last_name )  }}" />
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_display_name">{{ __( 'Display name', 'woocommerce' ) }}&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="{{ esc_attr( $user->display_name ) }}" /> <span><em>{{ __( 'This will be how your name will be displayed in the account section and in reviews', 'woocommerce' ) }}</em></span>
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_email">{{ __( 'Email address', 'woocommerce' ) }}&nbsp;<span class="required">*</span></label>
		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="{{ esc_attr( $user->user_email ) }}" />
	</p>

	<fieldset>
		<legend>{{ __( 'Password change', 'woocommerce' ) }}</legend>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_current">{{ __( 'Current password (leave blank to leave unchanged)', 'woocommerce' ) }}</label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_1">{{ __( 'New password (leave blank to leave unchanged)', 'woocommerce' ) }}</label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_2">{{ __( 'Confirm new password', 'woocommerce' ) }}</label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off" />
		</p>
	</fieldset>
	<div class="clear"></div>

	@php do_action( 'woocommerce_edit_account_form' ) @endphp

	<p>
		@php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ) @endphp
		<button type="submit" class="woocommerce-Button button" name="save_account_details" value="{{ esc_attr( 'Save changes', 'woocommerce' ) }}">{{ __( 'Save changes', 'woocommerce' ) }}</button>
		<input type="hidden" name="action" value="save_account_details" />
	</p>

	@php do_action( 'woocommerce_edit_account_form_end' ) @endphp
</form>

@php do_action( 'woocommerce_after_edit_account_form' ) @endphp
