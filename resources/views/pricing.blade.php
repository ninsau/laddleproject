@extends('layouts.app')

@section('title')
 Pricing | Laddle
@endsection

@section('content')
<div class="hero is-medium is-primary">
<div class="hero-body container">
<h1 class="title is-1 has-text-white">Our Pricing Plans</h1>
</div>
</div>

<section class="section hero">
  <div class="container hero-body has-text-centered">
    <img src="/logo/1.png" alt="laddle logo" width="112" height="28">
    <h2 class="title is-1 has-text-primary">For Buyers</h2>
    <hr>
    <div class="columns">
      <div class="column">
        <h3 class="title is-4 has-text-primary">One Time Payment</h3>
        <h4 class="title is-spaced is-5">No registration required</h4>
        <p class="subtitle">Hit buy and fill the email address field. You will be redicted to our payment site to pay
        via the following available channels:</p>
        <hr class="has-background-white">
        <ul>
          <li>Card Payments</li>
          <li>Direct Bank Transfer</li>
          <li>Mobile Money Payment</li>
        </ul>
        <hr class="has-background-success">
      </div>
</div>
</section>

<section class="section hero">
  <div class="container hero-body has-text-centered">
    <img src="/logo/1.png" alt="laddle logo" width="112" height="28">
    <h2 class="title is-1 has-text-primary">For Sellers</h2>
    <hr>
    <div class="columns">
      <div class="column">
        <h3 class="title is-4 has-text-primary">10% service fee</h3>
        <h4 class="title is-spaced is-5">Automatic, per project sold</h4>
        <p class="subtitle">We charge sellers a service fee on each product sold. The deduction is instant,
           and automatic. Once your project is purchaced from the platform, your earnings are updated.
           You can review total earning on your dashboard.<br>
           Seller accounts are credited on the last day of every month. All earnings deposited in one of two ways:
        </p>
        <hr class="has-background-white">
        <ul>
          <li>Mobile Money Accounts</li>
          <li>Cashapp Accounts</li>

        </ul>
        <hr class="has-background-success">
      </div>
</div>
</section>

@endsection
