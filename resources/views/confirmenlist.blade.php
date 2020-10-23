@extends('layouts.app')

@section('title')
Complete Payment | Laddle Interviews
@endsection

@section('content')

<div class="modal is-active">
  <div class="modal-background"></div>
  <a class="delete" onclick="close();" aria-label="close"></a>
<div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Complete Payment</p>
    </header>
    <section class="modal-card-body">
<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8">
  <div class="field">
    <label class="label">Email</label>
      <div class="control">
          <input type="email" class="input" value="{{ $email }}" name="email" placeholder="example@example.com" required autofocus>
      </div>
      <div class="field">
        <label class="label">Payment Plan</label>
      <div class="control">
        <select class="input select" name="amount" autofocus>
          <option value="2"> Basic - $2 </option>
          <option value="5"> Regular - $5 </option>
          <option value="10"> Captain - $10 </option>
          <option value="30"> Premium - $30 </option>
        </select>
   </div>
 </div>
  <input hidden name="quantity" value="600">
  <input hidden name="currency" value="GHS">
  <input hidden name="metadata" value="5555555555" >
  <input hidden name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
  {{ csrf_field() }}

   <input type="hidden"  name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

   <p class="subtitle is-bold is-6">By clicking 'Pay Now!' button, I understand that I will be charged today for a one-time payment for enlistment.
   I have read, understood, and agreed to the <a href="/terms">terms</a> associated with transactions on the Laddle platform. </p>

     <button class="button is-success" type="submit"><i class="fa fa-plus-circle fa-lg"></i>  Pay Now!</button><hr>
</form>
    </section>
  </div>
</div>

@endsection
