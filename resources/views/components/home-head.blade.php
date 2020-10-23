<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="@stack('html-class')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/logo/3.png" sizes="192x192" type="image/x-icon">
    <meta name="description" content="Laddle.io is a buying and selling platform for all your programming needs. Buy and sell applications, software, websites, templates, themes, plugins, and source codes.">
    <meta name="keywords" content="sell, buy, software, website, buying and selling, buy software, buy app, sell app, get template, free template, plugin, source code">
    <meta name="author" content="Cassidy Blay" />
    <meta name="contact" content="cassidyblay@gmail.com" />
    <meta name="copyright" content="Copyright (c)2020 laddle.io" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- Scripts --}}
    @stack('head-scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    {{-- Styles --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    @stack('head-after')
</head>
<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src="/logo/6.png" alt="laddle logo" width="112" height="28">
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">

        <a class="navbar-item" href="home">
          Home
        </a>

        <a class="navbar-item" href="sell">
          Sell
        </a>

        <a class="navbar-item" href="projects">
          Projects
        </a>

        <a class="navbar-item" href="payment">
          Payment
        </a>
      </div>

      <!-- Authentication Links -->
      @guest
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            @if (Route::has('register'))
            <a class="button is-primary" href="{{ route('register') }}">
              <strong>Get Started</strong>
            </a>
            <a class="button" href="{{ route('login') }}">
              Log in
            </a>
            </div>
          @endif
          @else
          <div class="buttons">
              <a class="button is-light" href="home">{{ Auth::user()->name }}</a>
            <a class="button is-info" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
      </div>
      </div>
      @endguest
    </div>
  </nav>

<div id="app">

    @yield('content')

</div>
<script>
document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

// Add a click event on each of them
$navbarBurgers.forEach( el => {
el.addEventListener('click', () => {

// Get the target from the "data-target" attribute
const target = el.dataset.target;
const $target = document.getElementById(target);

// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
el.classList.toggle('is-active');
$target.classList.toggle('is-active');

});
});
}

});
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
(document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
  $notification = $delete.parentNode;

  $delete.addEventListener('click', () => {
    $notification.parentNode.removeChild($notification);
  });
});
});
</script>
@stack('bottom')
<footer class="footer">
  <div class="container">
    <div class="level">
      <div class="level-left">
        <div class="level-item"><a class="title has-text-primary is-4" href="/"><img src="/logo/1.png" alt="laddle logo" width="112" height="28"></a></div>
      </div>
      <div class="level-right"><a class="level-item" href="/guide">Documentation</a><a class="level-item" href="/pricing">Pricing</a><a class="level-item" href="advertise">Advertise</a><a class="level-item" href="about-us">About</a><a class="level-item" href="contact-us">Contact</a><a class="level-item" href="terms">Terms & Conditions</a>
        <a class="level-item" href="cookies">Cookie Policy</a><a class="level-item" href="/sitemap.xml">Sitemap</a></div>
    </div>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="buttons"><a class="button" target="_blank" href="https://api.whatsapp.com/send?phone=233242877574"><i class="fa fa-whatsapp"></i> </a><a class="button" target="_blank" href="https://twitter.com/laddleproject"><i class="fa fa-twitter"></i> </a><a class="button" target="_blank" href="https://instagram.com/laddle.io"><i class="fa fa-instagram"></i> </a></div>
      </div>
      <div class="column has-text-centered has-text-right-tablet">
        <a href="/" class="subtitle has-text-primary is-6">© <script>document.write(new Date().getFullYear())</script> Laddle. All right reserved.</a>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eb5c6068ee2956d739f6301/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
