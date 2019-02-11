{{--
 * Pay for order form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-pay.php.
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
	$totals = $order->get_order_item_totals();
@endphp

<form id="order_review" method="post">

	<table class="shop_table">
		<thead>
			<tr>
				<th class="product-name">{{ __( 'Product', 'woocommerce' ) }}</th>
				<th class="product-quantity">{{ __( 'Qty', 'woocommerce' ) }}</th>
				<th class="product-total">{{ __( 'Totals', 'woocommerce' ) }}</th>
			</tr>
		</thead>
		<tbody>
			@if ( count( $order->get_items() ) > 0 )
				@foreach ( $order->get_items() as $item_id => $item ) : ?>
					@php
					if ( ! apply_filters( 'woocommerce_order_item_visible', true, $item ) ) {
						continue;
					}
					@endphp
					<tr class="{{ esc_attr( apply_filters( 'woocommerce_order_item_class', 'order_item', $item, $order ) ) }}">
						<td class="product-name">
							{!!  apply_filters( 'woocommerce_order_item_name', esc_html( $item->get_name() ), $item, false )  !!}

							@php
								do_action( 'woocommerce_order_item_meta_start', $item_id, $item, $order, false );

								wc_display_item_meta( $item );

								do_action( 'woocommerce_order_item_meta_end', $item_id, $item, $order, false );
							@endphp
						</td>
						<td class="product-quantity">{!! apply_filters( 'woocommerce_order_item_quantity_html', ' <strong class="product-quantity">' . sprintf( '&times; %s', esc_html( $item->get_quantity() ) ) . '</strong>', $item ) !!}</td>
						<td class="product-subtotal">{!! $order->get_formatted_line_subtotal( $item ) !!}</td>
					</tr>
				@endforeach
			@endif
		</tbody>
		<tfoot>
			@if ( $totals )
				@foreach ( $totals as $total ) : ?>
					<tr>
						<th scope="row" colspan="2">{!! $total['label'] !!}</th>
						<td class="product-total">{!! $total['value'] !!}</td>
					</tr>
				@endforeach
			@endif
		</tfoot>
	</table>

	<div id="payment">
		@if ( $order->needs_payment() )
			<ul class="wc_payment_methods payment_methods methods">
				@if( ! empty( $available_gateways ) )
					@foreach ( $available_gateways as $gateway )
						@php wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) ) @endphp
					@endforeach
				@else
					<li class="woocommerce-notice woocommerce-notice--info woocommerce-info"> {!! apply_filters( 'woocommerce_no_available_payment_methods_message', __( 'Sorry, it seems that there are no available payment methods for your location. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) ) !!}</li>
				@endif
			</ul>
		@endif
		<div class="form-row">
			<input type="hidden" name="woocommerce_pay" value="1" />

			@php wc_get_template( 'checkout/terms.php' ) @endphp

			@php do_action( 'woocommerce_pay_order_before_submit' ) @endphp

			@php echo apply_filters( 'woocommerce_pay_order_button_html', '<button type="submit" class="button alt" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '">' . esc_html( $order_button_text ) . '</button>' ) @endphp

			@php do_action( 'woocommerce_pay_order_after_submit' ) @endphp

			@php wp_nonce_field( 'woocommerce-pay', 'woocommerce-pay-nonce' ) @endphp
		</div>
	</div>
</form>
