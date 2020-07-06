{{--
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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
    global $product;

    // Ensure visibility.
    if ( empty( $product ) || ! $product->is_visible() ) {
        return;
    }

    $link = esc_url(apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product ));
@endphp

<li @php wc_product_class('', $product); @endphp>

    @php
    /**
     * Hook: woocommerce_before_shop_loop_item.
     * Simple a href with $link
     * @hooked woocommerce_template_loop_product_link_open - 10
     *
     * do_action( 'woocommerce_before_shop_loop_item' );
     */

    /**
     * Hook: woocommerce_before_shop_loop_item_title.
     *
     * @hooked woocommerce_show_product_loop_sale_flash - 10
     * @hooked woocommerce_template_loop_product_thumbnail - 10
     *
     * do_action( 'woocommerce_before_shop_loop_item_title' );
     */

    /**
     * Hook: woocommerce_shop_loop_item_title.
     *
     * @hooked woocommerce_template_loop_product_title - 10
     *
     * do_action( 'woocommerce_shop_loop_item_title' );
     */

    /**
     * Hook: woocommerce_after_shop_loop_item_title.
     *
     * @hooked woocommerce_template_loop_rating - 5
     * @hooked woocommerce_template_loop_price - 10
     *
     * do_action( 'woocommerce_after_shop_loop_item_title' );
     */

    /**
     * Hook: woocommerce_after_shop_loop_item.
     *
     * @hooked woocommerce_template_loop_product_link_close - 5 - just closing a tag
     * @hooked woocommerce_template_loop_add_to_cart    (10) => loop/add-to-cart.php
     *
     *  do_action( 'woocommerce_after_shop_loop_item' );
     */
    @endphp

    @php wc_get_template( 'loop/sale-flash.php' )  // OnSale Sign @endphp
    @php woocommerce_template_loop_product_thumbnail() // Image @endphp

    <h2 class="woocommerce-loop-product__title">
        <a href="{{ $link }}">{{ get_the_title() }}</a>
    </h2>

    @php wc_get_template( 'loop/rating.php' ) @endphp
    @php wc_get_template( 'loop/price.php' ) @endphp

    @php woocommerce_template_loop_add_to_cart() // Add to cart button - loop/add-to-cart.php @endphp
    
</li>
