@yield('header-php')
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>
    @include('layout.meta-essentials')
    @yield('meta-dynamic')
    @include('layout.styles')
    @include('layout.favicons')
    @include('layout.fonts')
    @include('layout.header-scripts')
  </head>

  <body id="{{ $body_id }}" class="{{ $body_class }}">

    @include('layout.nav')

    <main role="main" class="container">
      @yield('content')
    </main>    
    
    @include('layout.footer-scripts')
    @yield('page-footer-scripts')

  </body>
</html>