
@php
    $slickSlides = App::composeSlickSlides($images);

    $route = 'multikart.product-single.components.gallery.'.$display;
@endphp

@include($route, [
    'slickSlides' => $slickSlides
])
