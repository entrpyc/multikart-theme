@php defined( 'ABSPATH' ) || exit; @endphp

@php
    if ( post_password_required() ) {
        echo get_the_password_form(); // WPCS: XSS ok.
        return;
    }

    global $product;
@endphp

@php
	global $post;

	$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

	if ( ! $short_description ) {
		return;
	}
@endphp

@include('boiler-loader.product-single.page-template', [
  'settings' => [
    'page_type' => $theme_settings['page_type'],
    'scroll-to-top' => true,
    // 'dark-ui' => true,
  ], 
  'sections' => [
    'description' => [ // DOCS: https://shorturl.at/ilx68
      'gallery' => $data['description_gallery'],
      'page_data' => [
        'name' => get_the_title(),
        'price' => $product->get_regular_price(),
        'sizes' => explode(', ', $product->get_attribute('size')),
        'currency' => get_woocommerce_currency_symbol(),
        'discount' => $product->get_sale_price(),
        'details' => $short_description,
      ],
    ],
    'tab' => [
      'tabs' => $data['tabs'],
    ],
    'related-products' => [
      'products' => 'woocommerce',
    ],
  ]
])