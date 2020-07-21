<section class="section-b-space">
  <div class="collection-wrapper">
      <div class="container">
          <div class="row">
              <div class="col-sm-3 collection-filter">
                  @include('boiler-loader.product-single.components.accordeon', [
                    'tabs' => [
                      'brand' => [
                        'type' => 'link',
                        'clothing' => '#',
                        'bags' => '#',
                        'footwear' => '#',
                        'watches' => '#',
                        'accessories' => '#',
                      ],
                    ],
                  ])
                  @include('boiler-loader.product-single.components.promotion-box', [
                    'boxes' => [
                      'Free Shipping' => [
                        'info' => 'Free Shipping World Wide',
                        'icon' => 'truck',
                      ],
                      '24 X 7 Service' => [
                        'info' => 'Online Service For New Customer',
                        'icon' => 'clock24',
                      ],
                      'Festival Offer' => [
                        'info' => 'New Online Special Festival Offer',
                        'icon' => 'megaphone',
                      ],
                      'Online Payment' => [
                        'info' => 'Contrary To Popular Belief.',
                        'icon' => 'credit-card',
                      ],
                    ],
                  ])
                  <!-- side-bar single product slider start -->
                  @include('boiler-loader.product-single.components.new-product')
                  <!-- side-bar single product slider end -->
              </div>
              <div class="col-lg-9 col-sm-12 col-xs-12">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-xl-12">
                              <div class="filter-main-btn mb-2"><span class="filter-btn"><i class="fa fa-filter"
                                          aria-hidden="true"></i> filter</span></div>
                          </div>
                      </div>
                      <div class="row">
                        {{-- gallery component --}}
                        @if($gallery)
                          @include('boiler-loader.product-single.router.gallery', [
                            'images' => $gallery,
                            'display' => 'no-sidebar',
                          ])
                        @endif
                
                        <div class="col-lg-6 rtl-text">
                          <div class="product-right">
                            @if($page_data['name'])<h2 class="mb15">{{ $page_data['name'] }}</h2>@endif
                            @if($page_data['publisher'])<h5 class="mb-2">by <a href="#">{{ $page_data['publisher'] }}</a></h5>@endif
                            @if($page_data['discount'])
                            <h4><del>{!! $page_data['currency'] !!}{{ $page_data['price'] }}</del><span>{{ round(100 - (100 / (intval($page_data['price']) / intval($page_data['discount'])))) }}% off</span></h4>
                            <h3>{!! $page_data['currency'] !!}{{ $page_data['discount'] }}</h3>
                            @elseif($page_data['price'])
                            <h3>{!! $page_data['price'] !!}</h3>
                            @endif
                            {{-- <ul class="color-variant">
                              <li class="bg-light0"></li>
                              <li class="bg-light1"></li>
                              <li class="bg-light2"></li>
                            </ul> --}}
                            <div class="product-description border-product">
                              
                              <h6 class="product-title size-text">select size <span><a href="" data-toggle="modal"
                                data-target="#sizemodal">size chart</a></span></h6>
                            <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sheer Straight Kurta</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body"><img src="@asset('images/size-chart.jpg')" alt=""
                                        class="img-fluid blur-up lazyload"></div>
                            </div>
                            </div>
                            </div>
                              {{-- sizes component --}}
                              @if($page_data['sizes'])
                              @include('boiler-loader.product-single.components.product-sizes', [
                                'sizes' => $page_data['sizes'],
                                ]
                              )
                              @endif
                
                              {{-- <h6 class="product-title">quantity</h6> --}}
                              {{-- quantity box component --}}
                              {{-- @include('boiler-loader.product-single.components.quantity-box') --}}
                              <div class="product-buttons">
                                <h6 class="product-title">quantity</h6>
                                @php
                                  do_action('woocommerce_' . $product->get_type() . '_add_to_cart');
                                @endphp
                              </div>
                            </div>
                
                
                            {{-- <div class="product-buttons">
                              button
                              @include('boiler-loader.components.button-solid', [
                                'text' => 'ADD TO CART',
                                'href' => '#',
                                'modal' => [
                                  'toggle' => 'modal',
                                  'target' => '#addtocart',
                                ]
                              ])
                
                              button
                              @include('boiler-loader.components.button-solid', [
                                'text' => 'BUY NOW',
                                'href' => '#',
                              ])
                            </div> --}}
                
                            {{-- title and text --}}
                            @if($page_data['details'])
                              @include('boiler-loader.product-single.components.title-text', [
                                'title' => 'Product Details',
                                'text' => $page_data['details'],
                              ])
                            @endif
                
                            <div class="border-product">
                              <h6 class="product-title">share it</h6>
                              <div class="product-icon">
                                {{-- list icons --}}
                                @include('boiler-loader.product-single.components.social-icons', [
                                  'include' => [
                                    'facebook',
                                    'twitter',
                                    'instagram'
                                  ],
                                ])
                                {{-- add to wishlist component --}}
                                @include('boiler-loader.product-single.components.add-to-wishlist')
                              </div>
                            </div>
                            <div class="border-product">
                              <h6 class="product-title">Time Reminder</h6>
                              {{-- timer component --}}
                              @include('boiler-loader.product-single.components.timer')
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  @if($tab)
                    @include('boiler-loader.product-single.sections.tab', [
                      'tabs' => $tab['tabs'],
                    ])
                  @endif
              </div>
          </div>
      </div>
  </div>
</section>