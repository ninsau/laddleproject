@component('components.home-head')
@section('title')
Get your reward | Laddle
@endsection

@section('content')
<section class="hero is-large">
  <div class="hero-body">
    <div class="container has-text-centered">
<h1 class="title is-1 has-text-primary">Thank you for your purchase!</h1>
<p class="subtitle is-4">Click the button below to download the zip file of your project.</p>

@foreach ($source as $file)
<small class="has-background-primary">Developer's Email: {{ $file->email }}</small>
<hr>
<a href="/storage/{{ $file->file }}" download class="button"> <i class="fa fa-download"></i> Download Project Source</a>
@endforeach
 </div>
  </div>

</section>

@endsection
@endcomponent
