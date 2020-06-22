{{-- @include('../multikart/product-single/page-product-single-no-sidebar') --}}
@include('multikart.product-single.page-product-single', [
    'settings' => [
        'page_type' => 'no-sidebar', 
        'tab' => 1, 
        'related_products' => 1,
    ],
])