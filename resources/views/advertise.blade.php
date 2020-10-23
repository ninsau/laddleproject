@extends('layouts.app')

@section('title')
Advertising | Laddle
@endsection

@section('content')
<div class="hero is-medium is-primary">
<div class="hero-body container">
<h1 class="title is-1 has-text-white">Advertise with Staunch</h1>
</div>
</div>
<section class="hero is-medium">
  <div class="hero-body has-text-centered conatiner">
    <img src="/staunch.png" alt="laddle logo" width="112" height="28">
    <p class="subtitle">Staunch Advertising is an intergrated brand experience and advertising agency. Laddle partners with Staunch
     to create Ads and Promos that drive business growth of Laddle software owners. <br>
     You do not have a logo yet? Do not worry. Staunch has got you. Staunch advertising will assist you to design logos and flyers that put your brand on the top.
      Work alongside creative directors from Staunch to draw up an advertising plan perfect for you.</p>
  <a href="http://staunchadvertising.com" target="_blank" class="button is-info is-large">Visit Their Website</a>
  </div>
</section>
<script>
VANTA.HALO({
  el: "#halo",
  mouseControls: true,
  touchControls: true,
  minHeight: 200.00,
  minWidth: 200.00,
  baseColor: 0x1c725d,
  backgroundColor: 0x40202b,
  amplitudeFactor: 3.00
})
</script>
@endsection
