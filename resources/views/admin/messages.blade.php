@component('components.admin-head')
@slot('title')
Admin-Messages | Laddle
@endslot

@section('content')
@if(session('adminLogin'))
<section class="section">
  <div class="container">
    <h2 class="title has-text-primary">Customer Messages</h2><hr>
    <div class="block">
      @if(count($messages) > 0)
      @foreach ($messages as $uu)
      <div class="card block">
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <h3 class="title is-5 has-text-primary">{{ $uu->subject }}</h3>
              <p class="subtitle is-6">{{ $uu->message }}</p>
                <p class="subtitle is-6 has-text-primary">From: <strong>{{ $uu->fromname }}</strong> | Email :<strong>{{ $uu->email }}</strong> | Phone:<strong>{{ $uu->tel }}</strong></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      {{ $messages->links() }}
      @else
      <div class="card block">
        <div class="card-content">
              <h3 class="title is-5 has-text-primary">No messages for now. Messages will appear here when received.</h3>
        </div>
      </div>
      @endif

    </div>
  </div>
</section>
@else
<h1>Unauthorized</h1>
@endif
@endsection
@endcomponent
