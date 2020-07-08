@include('boiler-loader.product-single.page-template', [
  'settings' => [
    'page_type' => $data['page_type'],
  ], 
  'description' => [ // DOCS: https://shorturl.at/ilx68
    'gallery' => $data['description_gallery'],
    'page_data' => [
      'name' => $data['name'],
      'publisher' => $data['publisher'],
      'price' => $product->get_price_html(),
      'discount' => $data['product_price']['discount'],
      'sizes' => $data['product_sizes'],
      'details' => $data['product_details'],
    ],
  ],
  'tab' => [
    'tabs' => $data['product_tabs'],
  ],
  'related-products' => [
    'products' => 'woocommerce',
  ],
])

{{-- @include('woocommerce.content-single-product') --}}