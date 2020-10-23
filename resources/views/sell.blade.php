@component('components.home-head')
@section('title')
{{ Auth::user()->name }}'s Sell | Laddle
@endsection

@section('content')
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <h1 class="title is-1 has-text-primary">Sell Your Project</h1><hr>
      <small> See guide <a href="/guide" target="_blank">here</a> .</small>
      <hr>
      <form method="post" action="{{ route('draft') }}" enctype="multipart/form-data">
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input id="title" type="text" class="input @error('title') is-danger @enderror" name="title" placeholder="Name your product" required autofocus>
            </div>
            @error('title')
                <p class="help is-danger" role="alert">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="field">
          <label class="label">Description</label>
          <div class="control">
            <textarea class="textarea @error('description') is-invalid @enderror"  name="description" type="text" autofocus placeholder="Tell us something description your product. "></textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong class="has-text-danger">{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>


        <div class="field">
          <label class="label">Tag</label>
          <div class="control">
            <select class="input tag select is-multiple" multiple name="tag[]" type="text" autofocus>
              <option value="web"> Web </option>
              <option value="system">System</option>
              <option value="android">Android</option>
              <option value="ios">iOS</option>
              <option value="ecommerce">eCommerce</option>
              <option value="template">Template</option>
              <option value="source code">Source Code</option>
              <option value="command prompt">Command prompt</option>
              <option value="saas">Saas Application</option>
              <option value="game">Game</option>
              <option value="website">Website</option>
              <option value="integration">Integration</option>
              <option value="financial">Financial</option>
              <option value="blockchain">Blockchain</option>
              <option value="api">API</option>
              <option value="framework">Framework</option>
              <option value="ai">AI</option>
              <option value="data science">Data Science</option>
            </select>
          </div>
        </div>

        <div class="field">
          <label class="label">Language</label>
          <div class="control">
            <select class="input language select is-multiple" multiple name="language[]" type="text" autofocus>
              <option value="javascript"> Javascript </option>
              <option value="php">PHP</option>
              <option value="c">C</option>
              <option value="c++">C++</option>
              <option value="c#">C#</option>
              <option value="java">Java</option>
              <option value="typescript">Typescript</option>
              <option value="go">Go</option>
              <option value="objective-c">Objective-C</option>
              <option value="swift">Swift</option>
              <option value="pyton">Pyton</option>
              <option value="html">HTML</option>
              <option value="css">CSS</option>
              <option value="mysql">MySQL</option>
              <option value="kotlin">Kotlin</option>
              <option value="dart">Dart</option>
              <option value=".net">.Net</option>
              <option value="erlang">Erlang</option>
            </select>
          </div>
        </div>

        <div class="field">
            <label class="label" for="url">Live Preview URL or Video URL</label>
            <div class="control">
                <input type="text" class="input @error('url') is-danger @enderror" name="url" placeholder="https://www.urltodemo.com/example" required autofocus>
            </div>
            @error('url')
                <p class="help is-danger" role="alert">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="field">
            <label class="label" for="url">Price (in USD)</label>
            <div class="control">
                <input type="number" class="input @error('price') is-danger @enderror" name="price" placeholder="15" min="1" required autofocus>
            </div>
            @error('price')
                <p class="help is-danger" role="alert">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="field">
            <label class="label" for="file">Upload Product Image</label>
            <div class="control">
                <input type="file" accept="image/jpeg, image/x-png, .png, .jpg, .svg" class="input @error('file') is-danger @enderror" name="file" required autofocus>
            </div>
            @error('file')
                <p class="help is-danger" role="alert">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="field">
            <label class="label" for="guide">User Guide</label>
            <div class="control">
                <input type="file" accept="application/pdf, application/msword, text/plain" class="input @error('guide') is-danger @enderror" name="guide" required autofocus>
            </div>
            @error('guide')
                <p class="help is-danger" role="alert">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button type="submit" class="button is-info">Next</button>
          </div>
        </div>

      </form>
    </div>
  </div>

</section>


<script>
$(document).ready(function() {
  $('.tag').select2({
    placeholder: 'Please select at least one tag.'
  });
  $('.language').select2({
    placeholder: 'Please select a programming language.'
  });
});
</script>
@endsection
@endcomponent
