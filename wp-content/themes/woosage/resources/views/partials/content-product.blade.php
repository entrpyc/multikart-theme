@include('multikart.product-single.page-template', [
  'settings' => [
    'page_type' => $data['page_type'],
  ],
  'description' => [
    'gallery' => $data['description_gallery'],
    'page_data' => [
      'name' => $data['name'],
      'publisher' => $data['publisher'],
      'price' => $data['product_price']['value'],
      'discount' => $data['product_price']['discount'],
      'sizes' => $data['product_sizes'],
      'details' => $data['product_details'],
    ],
  ],
  'tab' => [
    'tabs' => $data['product_tabs'],
  ],
  'related_products' => [
    'products' => $data['related_products'],
  ],
])

{{-- @include('woocommerce.content-single-product') --}}