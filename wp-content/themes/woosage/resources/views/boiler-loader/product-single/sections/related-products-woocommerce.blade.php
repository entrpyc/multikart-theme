{{--
The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
--}}

@php defined( 'ABSPATH' ) || exit; @endphp


@php
    if ( post_password_required() ) {
        echo get_the_password_form(); // WPCS: XSS ok.
        return;
    }

    global $product;
@endphp


@php
  /**
   *
   *   @hooked woocommerce_output_related_products      (20) => single-product/related.php
   *   do_action( 'woocommerce_after_single_product_summary' );
  */

  woocommerce_output_related_products();
@endphp