@if($products)
<div class="theme-card">
  <h5 class="title-border">new product</h5>
  <div class="offer-slider slide-1">
    <div>
      @foreach($products as $product)
      @if($counter % 3 == 0)
      </div>
      <div>
      @endif
        <div class="media">
            <a href=""><img class="img-fluid blur-up lazyload"
                    src="{{$product['image']}}" alt=""></a>
            <div class="media-body align-self-center">
                {{-- <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                        class="fa fa-star"></i></div> --}}
                <a href="product-page(no-sidebar).html">
                  <h6>{{$product['name']}}</h6>
                </a>
                <h4>{!! $product['currency'] !!}{{$product['price']}}</h4>
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endif