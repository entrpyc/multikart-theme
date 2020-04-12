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

@php do_action( 'woocommerce_before_single_product' ); @endphp

@php
    if ( post_password_required() ) {
        echo get_the_password_form(); // WPCS: XSS ok.
        return;
    }

    global $product;
@endphp

<div id="product-{{ the_ID() }}" @php wc_product_class('', $product); @endphp>

    @php
        /**
         *   woocommerce_before_single_product_summary
         *   THE TEMPLATES HOOKED (+priority order number)  => corresponding template file name:
         *   @hooked woocommerce_show_product_sale_flash     (10) => single-product/sale-flash.php
         *   @hooked woocommerce_show_product_images      (20) => single-product/product-image.php
         *
         *   do_action( 'woocommerce_before_single_product_summary' );
        */

        wc_get_template( 'single-product/product-image.php' );
        wc_get_template( 'single-product/sale-flash.php' );
    @endphp

    <div class="summary entry-summary">
        @php
            /**
             *   woocommerce_single_product_summary
             *   THE TEMPLATES HOOKED (+priority order number)  => corresponding template file name:
             *   @hooked woocommerce_template_single_title       (5) => single-product/title.php
             *   @hooked woocommerce_template_single_rating     (10) => single-product/rating.php
             *   @hooked woocommerce_template_single_price      (10) => single-product/price.php
             *   @hooked woocommerce_template_single_excerpt    (20) => single-product/short-description.php
             *   @hooked woocommerce_template_single_add_to_cart(30) => single-product/add-to-cart/ (6 files depending on product type)
             *   @hooked woocommerce_template_single_meta       (40) => single-product/review-meta.php
             *   @hooked woocommerce_template_single_sharing    (50) => single-product/share.php
             *
             *   do_action( 'woocommerce_single_product_summary' );
            */

            wc_get_template( 'single-product/title.php' );
            wc_get_template( 'single-product/rating.php' );
            wc_get_template( 'single-product/price.php' );
            wc_get_template( 'single-product/short-description.php' );

            do_action('woocommerce_' . $product->get_type() . '_add_to_cart');

            wc_get_template( 'single-product/meta.php' );
            wc_get_template( 'single-product/review-meta.php' );
            wc_get_template( 'single-product/share.php' );
        @endphp
    </div>

    @php
        /**
         *   woocommerce_after_single_product_summary
         *   THE TEMPLATES HOOKED (+priority order number)  => corresponding template file name:
         *   @hooked woocommerce_output_product_data_tabs     (10) => single-product/tabs/tabs.php
         *   @hooked woocommerce_upsell_display               (15) => single-product/up-sells.php
         *   @hooked woocommerce_output_related_products      (20) => single-product/related.php
         *
         *   do_action( 'woocommerce_after_single_product_summary' );
        */

        wc_get_template( 'single-product/tabs/tabs.php' );
        woocommerce_upsell_display();
        woocommerce_output_related_products();
    @endphp

</div>

@php do_action( 'woocommerce_after_single_product' ); @endphp


