@component('components.admin-head')
@slot('title')
Admin | Laddle
@endslot

@section('content')
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      @if(count($see) > 0)
      <h2 class="title has-text-primary">Sold Projects</h2><hr>
    <div class="block">
    @foreach ($see as $uu)
      <div class="card block">
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <h3 class="title is-5 has-text-primary">Customer Email: {{ $uu->customer_email }}</h3>
              <p class="subtitle is-6">id-{{ $uu->identifier}}</p>
                <p class="subtitle is-6 has-text-primary">Amount: <strong>{{ $uu->amount }}</strong></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    {{ $see->links() }}
    @else
    <h2 class="title has-text-primary">Sold Products will appear here</h2><hr>
    @endif
  </div>
</div>
</section><hr>

<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      @if(count($choose) > 0)
      <h2 class="title has-text-primary">Pay Devs</h2><hr>
    <div class="block">
    @foreach ($choose as $reach)
      <div class="card block">
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <h3 class="title is-5 has-text-primary">Dev Email: {{ $reach->email }}</h3>
                <p class="subtitle is-6 has-text-primary">Momo: <strong>{{ $reach->momo }}</strong> | Cashapp: <strong>{{ $reach->cashapp}}</strong></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    {{ $choose->links() }}
    @else
    <h2 class="title has-text-primary">Devs needed to be credited will appear here.</h2><hr>
    @endif
  </div>
</div>
</section><hr>

@if(count($users) > 0)
<section class="hero is-medium">
<div class="hero-body container">
  <h1 class="title is-3 is primary">Registered Users</h1>
  <div class="block">
  @foreach ($users as $u)
    <div class="card block">
      <div class="card-content">
        <div class="media">
          <div class="media-content">
            <h3 class="title is-6 has-text-primary">{{ $u->name }}</h3>
            <p class="subtitle is-6">{{ $u->email }}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
{{ $users->links() }}
</div>
</section>
@endif
@endsection
@endcomponent
