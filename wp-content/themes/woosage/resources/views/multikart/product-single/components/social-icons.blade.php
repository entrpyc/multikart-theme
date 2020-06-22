@php
function setIconList($exlude, $include) {
    $icons = ['facebook', 'google-plus', 'twitter', 'instagram', 'rss'];
    if($include) {
      $icons = $include;
    }
    if($exclude) {
      $icons = array_diff($icons, $exclude);
    }
      
    return $icons;
}
$icons = setIconList($exlude, $include);
@endphp
@if($icons)
<div class="product-icon">
  <ul class="product-social">
    @foreach($icons as $icon)
      @include('multikart.components.fa-icon', ['i' => $icon])
    @endforeach
  </ul>
  {{-- add to wishlist component --}}
  @include('multikart.product-single.components.add-to-wishlist')
</div>
@endif