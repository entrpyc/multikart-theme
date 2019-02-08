<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <div class="profile">
      @if ( is_user_logged_in() )
      <a href="{{ get_permalink( get_option('woocommerce_myaccount_page_id') ) }}" title="{{ __('My Account','woocommerce') }}">{{ __('My Account','woocommerce') }}</a>
      @else
      <a href="{{ get_permalink( get_option('woocommerce_myaccount_page_id') ) }}" title="{{ __('Login / Register','woocommerce') }}">{{ __('Login / Register','woocommerce') }}</a>
      @endif
    </div>
  </div>
</header>
