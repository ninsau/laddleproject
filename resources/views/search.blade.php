@extends('layouts.app')

@section('title')
Find {{ $stitle }} | Laddle
@endsection

@section('content')

<section class="hero is-medium">
<div class="hero-body">
<div class="container has-text-centered">

  <div class="field">
    <h1 class="title is-bold is-1 has-text-primary">Search For Project</h1>
    <form method="get" action="{{ route('search') }}">
      <div class="field is-grouped">
        <p class="control is-expanded">
          <input class="input" name="find" type="text" placeholder="Find what you're looking for...">
        </p>
        <p class="control">
          <button class="button is-primary" type="submit">
            Search
          </button>
        </p>
      </div>
    </form>
  </div><hr>
    @if(count($results) > 0)
    <div class="notification is-success">
      Showing {{count($results)}} results for {{ $stitle }}.
    </div><br>
      <div class="columns field is-grouped is-grouped-multiline">
    @foreach ($results as $result)
    <div class="column is-one-third">
  <div class="card">
    <a href="description?identifier={{ $result->identifier }}">
  <div class="card-content">

    <div class="card-image">
      <figure class="image is-4by3">
        <img src="{{ $result->image }}" alt="{{ $result->title }} image">
      </figure>
    </div>
    <br>

    <div class="media field">

      <div class="media-left">
        <small class="number">${{ $result->price }}</small>
      </div>

      <div class="media-content">
        <p class="field control title is-4">{{ $result->title }}</p>
        <p class="control has-text-grey">
          <i>
            Added by: {{ $result->name }}
          </i>
        </p>
        <hr>
        <p class="control field">
        <i class="has-text-grey">Tags: @foreach ($tags as $tag)  <button class="button is-info is-small">  {{ $tag->tag }} </button>  @endforeach </i>
        </p>
         <p class="control field">
         <i class="has-text-grey">Language: @foreach ($languages as $language)  <button class="button is-warning is-small">  {{ $language->language }}  </button>  @endforeach </i>
        </p>
        <hr>

        <p class="control has-text-grey">
          <i>
            views: {{ $result->views }}
          </i>
        </p>
        <p class="control has-text-grey">
          <i>
            Added: <time class="has-text-black" datetime="2016-1-1">{{ $result->dte }}</time>
          </i>
        </p>

      </div>
    </div>

</div>

  </a>
  </div>
</div>
@endforeach
</div>

<div class="container">
{{ $results->links() }}<hr>
</div>
@else
<div class="notification is-danger">
No results found.
</div>
@endif

</div>
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
</section>
@endsection
