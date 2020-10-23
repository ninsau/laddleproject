@extends('layouts.app')

@section('title')
Laddle.io: Buy and sell websites, softwares, templates, source code
@endsection

@section('content')

<section class="hero is-medium">
<div class="hero-body">
<div class="container has-text-centered">
  <div class="columns">

    <div class="column">
      <h1 class="title is-bold is-1">Where market and developers meet</h1>
      <p class="subtitle is-4">Buy and sell applications, softwares, templates, source code, and more.</p>
      <div class="columns">
        <div class="column"></div>
        <div class="column">
          <form method="get" action="{{ route('search') }}">
            <div class="field is-grouped">
              <p class="control is-expanded">
                <input class="input is-medium" name="find" type="text" placeholder="Find what you're looking for...">
              </p>
              <p class="control">
                <button class="button is-medium is-primary" type="submit">
                  Search
                </button>
              </p>
            </div>
          </form>
          <a href="/welcome?find=" class="subtitle is-pulled-left is-6 is-bold is-light">See all product listings <i class="fa fa-arrow-right"></i> </a>
        </div>
        <div class="column"></div>
      </div>
    </div>
    </div><hr>
      <div class="columns">
        <div class="column"></div>
        <div class="column">
          <div class="field is-grouped is-grouped-multiline">
      <p class="control">
        <a class="button" href="/business">
          Website
        </a>
      </p>
      <p class="control">
        <a class="button is-primary" href="/welcome?find=css">
          CSS
        </a>
      </p>
      <p class="control">
        <a class="button is-primary" href="/welcome?find=template">
          Template
        </a>
      </p>
      <p class="control">
        <a class="button" href="/shop">
          E-commerce
        </a>
      </p>
    </div>
        </div>
        <div class="column"></div>
      </div>
      <div class="columns">
        <div class="column is-3"></div>
        <div class="column">
          <div class="control">
            <lottie-player src="/animations/d/drawkit-grape-animation-4-LOOP.json" background="transparent" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="column is-3"></div>
      </div>
      </div>

      <div class="columns">
        <div class="column is-2"></div>
        <div class="column is-2">
          <div class="notification is-primary is-light">
          <h3 class="title is-bold is-4"> <i class="fa fa-building has-text-primary"></i> Develop</h3>
          <p class="subtitle is-bold is-5">Build your product at your own pace till it's as powerful as you want.</p>
          </div>
        </div>
        <div class="column is-2">
          <div class="notification is-primary is-light">
          <h3 class="title is-bold is-4"> <i class="fa fa-cloud-upload has-text-primary"></i> Upload</h3>
          <p class="subtitle is-bold is-5">Upload a .zip version of your product onto Laddle.</p>
        </div>
        </div>
        <div class="column is-2">
          <div class="notification is-primary is-light">
          <h3 class="title is-bold is-4"> <i class="fa fa-shopping-cart has-text-primary"></i> Sell</h3>
          <p class="subtitle is-bold is-5">List your product for the whole world to see and purchase.</p>
        </div>
        </div>
        <div class="column is-2">
          <div class="notification is-primary is-light">
          <h3 class="title is-bold is-4"> <i class="fa fa-line-chart has-text-primary"></i> Grow</h3>
          <p class="subtitle is-bold is-5">Sit back and watch the clicks and purchases.</p>
        </div>
        </div>
        <div class="column is-2"></div>
      </div>

  </div>
      </section>

      <section class="hero">
        <div class="hero-body">
        <div class="container has-text-centered">
          <div class="columns">
            <div class="column is-2"></div>
            <div class="column">
              <h2 class="title is-bold is-1">Develop, upload and sell applications with Laddle.</h2>
              <a href="/about-us"><strong class="subtitle is-bold is-4 has-text-primary">Click here to see how you can sell and buy <i class="fa fa-arrow-right"></i></strong></a>
            </div>
            <div class="column is-2"></div>
          </div>
        </div>
      </div>
        </section>

    <section class="hero is-light">
      <div class="hero-body">
      <div class="container has-text-centered">

      <div class="columns">
        <div class="column is-half">
          <div class="container">
            <div class="control">
              <lottie-player src="/animations/a/drawkit-grape-animation-1-LOOP.json" background="transparent" loop autoplay></lottie-player>
            </div>
            <p class="control subtitle is-4">Sell your source codes, templates, themes, projects, etc. here on Laddle and start earning some money
            for your hard work. Your project will be listed on our platform for your customers to see and purchase.
          Sign in to your dashboard and start selling now.</p>
            <p class="control field"><a class="button is-primary is-light" href="sell">Start selling</a></p>
          </div>
        </div>
        <div class="column is-half"></div>
      </div>

      <div class="columns">
        <div class="column is-half"></div>
        <div class="column is-half">
          <div class="container">
            <div class="control">
              <lottie-player src="/animations/e/drawkit-grape-animation-5-LOOP.json" background="transparent" loop autoplay></lottie-player>
            </div>
            <p class="control subtitle is-4">Browse through our inventory of projects and fing what you want.
              Quickly find what you are looking for by searching titles and keywords.
             Buy everything from source codes to full blown projects from developers all over. Read the descriptions and explore demos. Then proceed to
           purchase a compressed version of the project with full instructions.</p>
           <p class="control field"><a class="button is-primary is-light" href="welcome?find=">Browse and Buy</a></p>
          </div>
        </div>
      </div>


      <div class="columns">
        <div class="column is-half">
          <div class="container">
            <div class="control">
              <lottie-player src="/animations/i/drawkit-grape-animation-9-LOOP.json" background="transparent" loop autoplay></lottie-player>
            </div>
            <p class="control subtitle is-4">Can't find the project you want? Worry not. Using the request feature on the platform, you can request
            a project to be built custom to your specifications. Upload an instruction manual and create your post. Sit back and relax knowing there's
          a developer out there working on your project for you.</p>
          <p class="control field"><a class="button is-primary is-light" onclick="addRequest();">Request</a></p>
          </div>
        </div>
        <div class="column is-half"></div>
      </div>

    </div>
  </div>
</section>

<section class="hero is-medium">
  <div class="hero-body">
  <div class="container has-text-centered">

    <h4 class="title is-1">In-House Products</h4>

    <div class="columns">
      <div class="column is-2"></div>
      <div class="column">
        <div class="notification is-primary is-light">
        <h5 class="title is-2"> Laddle Stores</h5>
        <p class="subtitle is-4">Fully functional, elegantly crafted E-commerce website made for you.</p>
        <h6 class="title is-4">Selling at $700</h6>
        <p class="is-pulled-right"><a class="button" href="/shop">Know more</a></p>
      </div>
      </div>
      <div class="column">
        <div class="notification is-primary is-light">
        <h5 class="title is-2"> Laddle Business</h5>
        <p class="subtitle is-4">Professional, powerful websites made for businesses.</p>
        <h6 class="title is-4">Selling at $700</h6>
        <p class="is-pulled-left"><a class="button" href="/business">Know more</a></p>
      </div>
      </div>
      <div class="column is-2"></div>
    </div>

    <div class="columns">
      <div class="column is-2"></div>
      <div class="column">
        <div class="notification is-primary is-light">
        <h5 class="title is-2"> Laddle Church</h5>
        <p class="subtitle is-4">Fully operational, modern websites made for churches.</p>
        <h6 class="title is-4">Selling at $700</h6>
        <p class="is-pulled-right"><a class="button" href="/church">Know more</a></p>
      </div>
      </div>
      <div class="column is-2"></div>
    </div>

  </div>
  </div>
</section>

<section class="hero is-light">
<div class="hero-body">
<div class="container has-text-centered">

  <div class="columns">
    <div class="column is-1"></div>
    <div class="column">
          <img class="is-centered" src="/illustrationtwo/k.svg" alt="man on phone lock screen">
    </div>
    <div class="column">
      <div class="container">
        <p class="control subtitle is-4">Do you need us to build an app, a software, or a product, for your personal use or for your business? We have a team of developers on standby to do just that.
          Get in touch with us and we will give you a quote.</p>
        <p class="control is-pulled-right field"><a class="button is-primary is-light" href="https://tawk.to/chat/5eb5c6068ee2956d739f6301/default" target="_blank" rel=noreferrer>Chat With Us Now</a></p>
      </div>
    </div>
    <div class="column is-1"></div>
  </div>


    </div>
  </div>
</section>
@endsection
