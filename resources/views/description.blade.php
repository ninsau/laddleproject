@extends('layouts.app')

@section('title')
@foreach ($descriptions as $describe)
{{ $describe->title }}'s description | Laddle
@endforeach
@endsection

@section('content')

<section class="hero is-fullheight">
<div class="hero-body">
<div class="container">
<h3 class="title is-3 has-text-primary">Product Description For @foreach ($descriptions as $describe) {{ $describe->title }} @endforeach</h3><hr>

@if(count($descriptions) > 0)
@foreach ($descriptions as $describe)
<section class="section">
  <div class="container">
    <div class="columns is-desktop is-vcentered">
      <div class="column is-6-desktop"><img src="{{ $describe->image }}" alt="{{ $describe->title }} image"></div>
      <div class="column is-6-desktop">
        <h2 class="title has-text-primary is-spaced">{{ $describe->title }}</h2>
        <p class="subtitle is-5 has-text-primary"> <strong>${{ $describe->price }}</strong></p>
        <p class="control has-text-grey">
          <i>
            Added by: {{ $describe->name }}
          </i>
        </p>
        <p class="subtitle">{{ $describe->description }}</p>
        <p class="field control">
          <a class="button is-success" onclick="sendPay();">
            <i class="fa fa-plus"></i>   Buy
          </a>
          <a class="button" target="_blank" href="{{ $describe->guide }}">
            <i class="fa fa-book"></i>   User Guide
          </a>
          <a class="button" target="_blank" href="{{ $describe->url }}">
            <i class="fa fa-globe"></i>   Demo
          </a>
        </p>
        <p>Written in: @foreach ($languages as $language) <span class="has-text-info">  {{ $language->language }}  </span> @endforeach</p>
        <hr>
        <div class="level is-mobile">
            <div class="level-left">
              <div class="level-item has-text-primary">Tags:   <strong> @foreach ($tags as $tag) <span class="has-text-info"> #{{ $tag->tag }} </span> @endforeach </strong></div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="modal" id="sendPay">
  <div class="modal-background"></div>
  <a class="delete" onclick="close();" aria-label="close"></a>
<div class="modal-card">
    <header class="modal-card-head"> 
      <p class="modal-card-title">Pay for {{ $describe->title }}</p>
    </header>
    <section class="modal-card-body">
<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8">
      <div class="control field">
          <input type="email" class="input" name="email" placeholder="example@example.com" required autofocus>
      </div>
  <input hidden name="amount" value="{{ $describe->price }}">
  <input hidden name="quantity" value="600">
  <input hidden name="currency" value="GHS">
  <input hidden name="metadata" value="{{ $describe->identifier }}" >
  <input hidden name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
  {{ csrf_field() }}

   <input type="hidden"  name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

   <p class="subtitle is-bold is-6">By clicking 'Pay Now!' button, I understand that I will be charged ${{ $describe->price }} today for a one-time payment for {{ $describe->title }}.
   I have read, understood, and agreed to the <a href="terms">terms</a> associated with transactions on the Laddle platform. </p>

     <button class="button is-success" type="submit"><i class="fa fa-plus-circle fa-lg"></i>  Pay Now!</button><hr>
</form>
    </section>
  </div>
</div>
@endforeach
@else
<h3 class="notification is-danger title is-3">Product Description For @foreach ($descriptions as $describe) {{ $describe->title }} @endforeach not found!</h3><hr>
</div>
</div>
@endif
</section>

<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
e.preventDefault();
let handler = PaystackPop.setup({
  key: 'pk_live_21180c479f47f6400392758755d1d6785b9bb00f', // Replace with your public key
  email: document.getElementById("email-address").value,
  amount: document.getElementById("amount").value * 100,
  firstname: document.getElementById("first-name").value,
  currency: 'GHS',
  lastname: document.getElementById("first-name").value,
  ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
  // label: "Optional string that replaces customer email"
  onClose: function(){
    alert('Window closed.');
  },
  callback: function(response){
    let message = 'Payment complete! Reference: ' + response.reference;
    alert(message);
  }
});
handler.openIframe();
}
</script>

<script type="text/javascript">
  function sendPay() {
    var element = document.getElementById("sendPay");
    element.classList.add("is-active");
  }
</script>

<script type="text/javascript">
  function close() {
    var element = document.getElementById("sendPay");
    element.classList.add("is-active");
  }
</script>

@endsection
