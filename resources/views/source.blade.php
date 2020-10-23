@component('components.home-head')
@section('title')
Upload Project Source | Laddle
@endsection

@section('content')
<section class="hero is-large">
  <div class="hero-body">
    <div class="container has-text-centered">
<h1 class="title is-1 has-text-primary">Upload .zip file of your project source</h1>
<form action="/file-upload" class="dropzone" id="my-awesome-dropzone">
    @csrf
</form><hr>
<small class="has-text-danger">Please wait till progress bar disappears before you hit the button below</small><br>
<a href="home" class="button">Return</a>
 </div>
  </div>

</section>
<script>
Dropzone.options.myAwesomeDropzone = {
maxFilesize: 222,
dictDefaultMessage: "Drop file here or click to upload",
maxFiles: 1,
acceptedFiles: ".zip",
}
</script>
@endsection
@endcomponent
