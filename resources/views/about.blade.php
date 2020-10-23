@extends('layouts.app')

@section('title')
About Us | Laddle
@endsection

@section('content')

<section class="hero is-medium is-primary">
  <div class="hero-body has-text-centered conatiner">
    <img src="/logo/1.png" alt="laddle logo" width="112" height="28">
    <h1 class="title has-text-white is-bold is-1">What is Laddle?</h1>
    <p class="subtitle is-4 control field">
      Laddle is an all-in-one website for developers to take their projects to market. Buy and sell anything programming. From advanced
      software products to minimal templates, laddle is the one-stop market place for developers, individuals, and businesses.
      Move quickly on your next project by incorporating the components you need. <br>
      For developers, Laddle is an easy way to earn some money whiles doing what you do best. Sell the your projects to other developers who need components
      like the one you have.<br>
      Buy or list a project today with just a few clicks.
    </p>
  </div>
</section>
<section class="hero is-medium has-background-light">
  <div class="container hero-body has-text-centered">
    <h2 class="title is-1 has-text-primary">How It Works - Buying</h2>
    <div class="columns is-multiline is-centered">
      <div class="column is-8 is-4-widescreen">
        <h4 class="title"><small class="number has-background-primary">1</small> Find</h4>
        <p>Find the project you want to buy by searching titles or tags.</p>
      </div>
      <div class="column is-8 is-4-widescreen">
        <h4 class="title"><small class="number has-background-primary">2</small> Browse</h4>
        <p>Broswe through our listings till you find what you're looking for.</p>
      </div>
      <div class="column is-8 is-4-widescreen">
        <h4 class="title"><small class="number has-background-primary">3</small> Discover</h4>
        <p>Get all the details on your selected item and discover all it's features. Read the User Guide and Explore the Demo, even before you make a decision.</p>
      </div>
      <div class="column is-8 is-4-widescreen">
        <h4 class="title"><small class="number has-background-primary">4</small> Make Payment</h4>
        <p>Proceed to check out your item by providing your email address. Pay via, Credit Cards, Direct Bank Transfer, Or Mobile Money.</p>
      </div>
      <div class="column is-8 is-4-widescreen">
        <h4 class="title"><small class="number has-background-primary">5</small> Ta Da!</h4>
        <p>A .zip file of your new project will be made available for you to download...and that's all!</p>
      </div>
</div>
<a href="/welcome?find=" class="subtitle button has-background-primary is-pulled-right is-6 is-bold is-light">See all productt listings <i class="fa fa-arrow-right"></i> </a>
</div>
</section>

<section class="hero is-medium">
  <div class="container hero-body has-text-centered">
    <h2 class="title is-1 has-text-primary">How It Works - Selling</h2>
    <div class="columns is-multiline is-centered">
      <div class="column is-8 is-4-widescreen">
        <h4 class="title"><small class="number has-background-primary">1</small> Register</h4>
        <p>Register for an account with us by providing your name, email, and password.</p>
      </div>
      <div class="column is-8 is-4-widescreen">
        <h4 class="title"><small class="number has-background-primary">2</small> Verify Email</h4>
        <p>Verify your email address and navigate to the sell.</p>
      </div>
      <div class="column is-8 is-4-widescreen">
        <h4 class="title"><small class="number has-background-primary">3</small> Add Listing</h4>
        <p>Fill in the form to add your listing.</p>
      </div>
      <div class="column is-8 is-4-widescreen">
        <h4 class="title"><small class="number has-background-primary">4</small> Upload Project and Get Listed!</h4>
        <p>Proceed to upload .zip file of your project and get your project listed instantly!</p>
      </div>
      <div class="column is-8 is-4-widescreen">
        <h4 class="title"><small class="number has-background-primary">5</small> Activity</h4>
        <p>Review your activity from your dashboard and see how your listing is fairing.</p>
      </div>
</div>
<a href="/sell" class="subtitle button has-background-primary is-pulled-right is-6 is-bold is-light">Start selling <i class="fa fa-arrow-right"></i> </a>
</div>
</section>

@endsection
