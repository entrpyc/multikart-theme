@php
$icons = App::setIconList($exlude, $include);
@endphp
@if($icons)
<ul class="product-social">
  @foreach($icons as $icon)
    @include('multikart.components.fa-icon', ['icon' => $icon])
  @endforeach
</ul>
@endif