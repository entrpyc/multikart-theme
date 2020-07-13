<section class="section-b-space ratio_asos">
  <div class="collection-wrapper">
      <div class="container">
          <div class="row">
              <div class="col-sm-3 collection-filter">
                  <!-- side-bar colleps block stat -->
                  @include('boiler-loader.product-single.components.accordeon', [
                      'tabs' => [
                        'brand' => [
                          'type' => 'select',
                          'zara' => false,
                          'vera moda' => false,
                          'forever 21' => false,
                          'roadster' => false,
                          'only' => false,
                        ],
                        'color' => [
                          'type' => 'color',
                          '1' => 'active',
                          '2' => false,
                          '3' => false,
                          '4' => false,
                          '5' => false,
                          '6' => false,
                          '7' => false,
                        ],
                        'price' => [
                          'type' => 'select',
                          '$10 - $100' => false,
                          '$100 - $200' => false,
                          '$200 - $300' => false,
                          '$300 - $400' => false,
                          '$400 ABOVE' => false,
                        ],
                      ],
                    ])
                  <!-- silde-bar colleps block end here -->
                  <!-- side-bar single product slider start -->
                  @include('boiler-loader.product-single.components.accordeon', [
                    'products' => $products_new
                  ])
                  <!-- side-bar single product slider end -->
                  <!-- side-bar banner start here -->
                  <div class="collection-sidebar-banner">
                      <a href="#"><img src="{{$image_sidebar}}" class="img-fluid blur-up lazyload" alt=""></a>
                  </div>
                  <!-- side-bar banner end here -->
              </div>
              <div class="collection-content col">
                  <div class="page-main-content">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="top-banner-wrapper">
                                  <a href="#"><img src="{{$image_top}}" class="img-fluid blur-up lazyload" alt=""></a>
                                  <div class="top-banner-content small-section">
                                      {!! $category_description !!}
                                  </div>
                              </div>
                              <div class="collection-product-wrapper">
                                  <div class="product-top-filter">
                                      <div class="row">
                                          <div class="col-xl-12">
                                              <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i class="fa fa-filter"
                                                          aria-hidden="true"></i> Filter</span></div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-12">
                                              <div class="product-filter-content">
                                                  <div class="search-count">
                                                      <h5>Showing Products 1-24 of 10 Result</h5>
                                                  </div>
                                                  <div class="collection-view">
                                                      <ul>
                                                          <li><i class="fa fa-th grid-layout-view"></i></li>
                                                          <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                      </ul>
                                                  </div>
                                                  <div class="collection-grid-view">
                                                      <ul>
                                                          <li><img src="../assets/images/icon/2.png" alt="" class="product-2-layout-view"></li>
                                                          <li><img src="../assets/images/icon/3.png" alt="" class="product-3-layout-view"></li>
                                                          <li><img src="../assets/images/icon/4.png" alt="" class="product-4-layout-view"></li>
                                                          <li><img src="../assets/images/icon/6.png" alt="" class="product-6-layout-view"></li>
                                                      </ul>
                                                  </div>
                                                  <div class="product-page-per-view">
                                                      <select>
                                                          <option value="High to low">24 Products Par Page
                                                          </option>
                                                          <option value="Low to High">50 Products Par Page
                                                          </option>
                                                          <option value="Low to High">100 Products Par Page
                                                          </option>
                                                      </select>
                                                  </div>
                                                  <div class="product-page-filter">
                                                      <select>
                                                          <option value="High to low">Sorting items</option>
                                                          <option value="Low to High">50 Products</option>
                                                          <option value="Low to High">100 Products</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="product-wrapper-grid">
                                      <div class="row margin-res">
                                          <div class="col-xl-3 col-6 col-grid-box">
                                            @foreach($products as $product)
                                            @include('boiler-loader.product-listing.components.product-box')
                                            @endforeach
                                          </div>
                                      </div>
                                  </div>
                                  <div class="product-pagination">
                                      <div class="theme-paggination-block">
                                          <div class="row">
                                              <div class="col-xl-6 col-md-6 col-sm-12">
                                                  <nav aria-label="Page navigation">
                                                      <ul class="pagination">
                                                          <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                                                      aria-hidden="true"><i
                                                                          class="fa fa-chevron-left"
                                                                          aria-hidden="true"></i></span> <span
                                                                      class="sr-only">Previous</span></a></li>
                                                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                          <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i
                                                                          class="fa fa-chevron-right"
                                                                          aria-hidden="true"></i></span> <span
                                                                      class="sr-only">Next</span></a></li>
                                                      </ul>
                                                  </nav>
                                              </div>
                                              <div class="col-xl-6 col-md-6 col-sm-12">
                                                  <div class="product-search-count-bottom">
                                                      <h5>Showing Products 1-24 of 10 Result</h5>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>