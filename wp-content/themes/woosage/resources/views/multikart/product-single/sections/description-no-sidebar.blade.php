<section>
  <div class="collection-wrapper">
      <div class="container">
          <div class="row">
                @include('multikart.product-single.components.gallery')
              <div class="col-lg-6 rtl-text">
                  <div class="product-right">
                      <h2 class="mb-0">Women Pink Shirt</h2>
                      <h5 class="mb-2">by <a href="#">zara</a></h5>
                      <h4><del>$459.00</del><span>55% off</span></h4>
                      <h3>$32.96</h3>
                      <ul class="color-variant">
                          <li class="bg-light0"></li>
                          <li class="bg-light1"></li>
                          <li class="bg-light2"></li>
                      </ul>
                      <div class="product-description border-product">
                        {{-- sizes component --}}
                        @include('multikart.product-single.components.product-sizes')

                        <h6 class="product-title">quantity</h6>
                        {{-- quantity box component --}}
                        @include('multikart.product-single.components.quantity-box')
                      </div>

                      <div class="product-buttons">
                            @include('multikart.components.button-solid', [
                                'text' => 'ADD TO CART',
                                'href' => '#',
                                'modal' => [
                                    'toggle' => 'modal',
                                    'target' => '#addtocart',
                                ]
                            ])

                            @include('multikart.components.button-solid', [
                                'text' => 'BUY NOW',
                                'href' => '#',
                            ])
                      </div>
                      @include('multikart.product-single.components.title-text', [
                          'title' => 'Product Details',
                          'text' => 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                      doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore
                      veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam
                      voluptatem,'
                      ])
                      
                      <div class="border-product">
                          <h6 class="product-title">share it</h6>
                          @include('multikart.product-single.components.social-icons', [
                            //   'include' => [
                            //       'facebook',
                            //       'twitter',
                            //       'instagram'
                            //     ],
                          ])
                      </div>
                      <div class="border-product">
                          <h6 class="product-title">Time Reminder</h6>
                          @include('multikart.product-single.components.timer')
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>