
@php
    $slickSlides = App::composeSlickSlides($images);

    $route = 'boiler-loader.product-single.components.gallery.'.$display;
@endphp

@include($route, [
    'slickSlides' => $slickSlides
])
