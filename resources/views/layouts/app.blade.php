<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="@stack('html-class')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/logo/3.png" type="image/x-icon">
    <meta name="title" content="@yield('title')">
    <meta name="description" content="Laddle.io is a buying and selling platform for all your programming needs. Buy and sell applications, software, websites, templates, themes, plugins, and source codes.">
    <meta name="keywords" content="sell, buy, software, website, buying and selling, buy software, buy app, sell app, get template, free template, plugin, source code">
    <meta name="author" content="Cassidy Blay" />
    <meta name="contact" content="cassidyblay@gmail.com" />
    <meta name="copyright" content="Copyright (c)2020 laddle.io" />

    <meta property="og:site_name" content="Laddle">
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="Laddle.io is a buying and selling platform for all your programming needs. Buy and sell applications, software, websites, templates, themes, plugins, and source codes." />
<meta property="og:image" itemprop="image" content="https://www.laddle.io/logo/3.png">
<meta property="og:type" content="website" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.laddle.io/">
<meta property="og:title" content="@yield('title')">
<meta property="og:description" content="Laddle.io is a buying and selling platform for all your programming needs. Buy and sell applications, software, websites, templates, themes, plugins, and source codes.">
<meta property="og:image" content="https://www.laddle.io/2.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://www.laddle.io/">
<meta property="twitter:title" content="@yield('title')">
<meta property="twitter:description" content="Laddle.io is a buying and selling platform for all your programming needs. Buy and sell applications, software, websites, templates, themes, plugins, and source codes.">
<meta property="twitter:image" content="https://www.laddle.io/2.jpg">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96580657-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96580657-5');
</script>-->

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Laddle",
  "image" : "https://www.laddle.io/logo/6.png",
  "telephone" : "0242877574",
  "email" : "hi@laddle.io",
  "address" : {
    "@type" : "PostalAddress",
    "addressLocality" : "Accra",
    "addressCountry" : "Ghana"
  },
  "openingHoursSpecification" : {
    "@type" : "OpeningHoursSpecification",
    "dayOfWeek" : {
      "@type" : "DayOfWeek",
      "name" : "Monday-Friday"
    }
  },
  "url" : "https://www.laddle.io/",
  "priceRange" : "One-time payments"
}
</script>


    @stack('head-after')
</head>
<body>
  <link itemprop="thumbnailUrl" href="url_image">
<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
<link itemprop="url" href="https://www.laddle.io/logo/3.png">
</span>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src="/logo/6.png" alt="laddle logo">
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="/welcome?find=">
          Browse
        </a>
        <a class="navbar-item" href="/pricing">
          Pricing
        </a>
        <a class="navbar-item" href="/about-us">
          How it works
        </a>
        <a class="navbar-item" onclick="addRequest();">
          Request
        </a>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            In-House Products
          </a>

          <div class="navbar-dropdown">
            <a class="navbar-item" href="/shop">
              Online Store Website
            </a>
            <a class="navbar-item" href="/church">
              Church Website
            </a>
            <a class="navbar-item" href="/business">
              Business Page Website
            </a>
          </div>
        </div>
      </div>

      <!-- Authentication Links -->
      @guest
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            @if (Route::has('register'))
            <a class="button is-primary" href="{{ route('register') }}">
              <strong>Sell Project</strong>
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
        <div class="buttons"><a class="button" target="_blank" rel=noreferrer href="https://api.whatsapp.com/send?phone=233242877574"><i class="fa fa-whatsapp"></i> </a><a class="button" target="_blank" rel=noreferrer href="https://twitter.com/laddle_io"><i class="fa fa-twitter"></i> </a><a class="button" target="_blank" rel=noreferrer href="https://instagram.com/laddle.io"><i class="fa fa-instagram"></i> </a></div>
      </div>
      <div class="column has-text-centered has-text-right-tablet">
        <a href="/" class="subtitle has-text-primary is-6">© <script>document.write(new Date().getFullYear())</script> Laddle. All right reserved.</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


<div class="modal" id="request">
  <div class="modal-background" onclick="closeRequest();"></div>
  <div class="modal-card">
    <header class="modal-card-head has-background-primary">
      <p class="subtitle">Here, you can request for projects to be added if you do not find what it is you want on the platform. Developers frequent this space to review requests and then develop and sell on this platform.</p>
      <a class="delete" onclick="closeRequest();" aria-label="close"></a>
    </header>
    <section class="modal-card-body">
      <form method="Post" action="{{ route('makerequest') }}" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
      <div class="control field">
          <input type="email" class="input" name="email" placeholder="example@example.com" required autofocus>
      </div>
      <div class="control field">
          <input type="text" class="input" name="title" placeholder="angular template" required autofocus>
      </div>
      <div class="control field">
        <input type="file" accept="application/pdf, application/msword, text/plain" class="input" name="file" required autofocus>
      </div>
     <button class="button is-primary is-light is-medium" type="submit"><i class="fa fa-plus-circle fa-lg"></i>  Create Post</button><hr>
</form>
<h3 class="subtitle">Requests</h3>
<div class="columns field is-grouped is-grouped-multiline">
    @if(count($added) > 0)
    @foreach ($added as $show)
    <div class="column is-half">
    <div class="field">
      <div class="notification is-primary is-light">
        <p class="control"><strong>{{ $show->title }}</strong></p>
        <p class="control"><a href="/storage/{{ $show->item }}" target='_blank' rel=noreferrer>Read doc...</a></p>
      </div>
    </div>
  </div>
    @endforeach
    @else
    <div class="notification is-info">
    No requests at this moment. Check back later.
    </div>
    @endif


    </section>
  </div>
</div>
</div>

<script type="text/javascript">
  function addRequest() {
    var element = document.getElementById("request");
    element.classList.add("is-active");
  }
</script>

<script type="text/javascript">
  function closeRequest() {
    var element = document.getElementById("request");
    element.classList.remove("is-active");
  }
</script>

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

<!--Start of Tawk.to Script-->
<!--
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
</script>-->
<!--End of Tawk.to Script  <link rel="stylesheet" href=”https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script> -->
</body>
</html>
