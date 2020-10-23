@extends('layouts.app')

@section('title')
Online Store Website | Laddle
@endsection

@section('content')

<section class="hero is-large">
<div class="hero-body">
<div class="container has-text-centered">
  <div class="columns">
    <div class="column is-2"></div>
    <div class="column">
      <lottie-player src="/animations/g/drawkit-grape-animation-7-LOOP.json" background="transparent" loop autoplay></lottie-player>
    </div>
    <div class="column">
      <h1 class="title is-bold is-1">Thank You For Purchasing Our Website</h1>
      <p class="subtitle is-4">Our technical expert will contact you shortly to begin the next steps. </p>
      </div>
    <div class="column is-2"></div>
    </div><hr>
      <div class="columns">
        <div class="column is-3"></div>
        <div class="column">
          <div class="field is-grouped is-grouped-multiline">
      <p class="control">
        <a class="button" href="https://tawk.to/chat/5eb5c6068ee2956d739f6301/default" target="_blank" rel=noreferrer>
        <i class="fa fa-question"></i>  Ask a question
        </a>
      </p>
    </div>
        </div>
        <div class="column"></div>
      </div>
    </div>
  </div>
</section>

@endsection
