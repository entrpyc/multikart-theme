<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
   {{-- @php do_action('get_header') @endphp --}}
    {{-- @include('partials.header') --}}
    @include('multikart.layout.header')
    {{-- breadcrumb --}}
    @include('multikart.layout.breadcrumb', [
      'title' => get_the_title()
    ])
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @include('multikart.layout.footer')
    @php do_action('get_footer') @endphp
    {{--@include('partials.footer') --}}
    @php wp_footer() @endphp
  </body>
</html>
