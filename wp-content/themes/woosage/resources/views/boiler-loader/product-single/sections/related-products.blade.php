<section class="section-b-space ratio_asos">
  <div class="container">
      <div class="row">
          <div class="col-12 product-related">
              <h2>related products</h2>
          </div>
      </div>
      <div class="row search-product">
        @foreach($products as $product)
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="product-box">
                <div class="img-wrapper">
                    <div class="front">
                        <a href="#"><img src="{{$product['picture']}}"
                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                    </div>
                    <div class="back">
                        <a href="#"><img src="{{$product['picture']}}" {{-- add backside --}}
                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                    </div>
                    <div class="cart-info cart-wrap">
                        <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                            title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                            data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                            title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                </div>
                <div class="product-detail">
                    <div class="rating">
                        @php for($i = 0; $i <= $product['rating']; $i++) {
                            echo '<i class="fa fa-star"></i>';
                        }
                        @endphp
                    </div>
                    <a href="product-page(no-sidebar).html">
                        <h6>{{$product['product_name']}}</h6>
                    </a>
                    <h4>${{$product['price']}}</h4>
                    @if($product['colors'])
                    <ul class="color-variant">
                        @foreach($product['colors'] as $color)
                            <li class="bg-{{$color}}"></li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
      </div>
  </div>
</section>