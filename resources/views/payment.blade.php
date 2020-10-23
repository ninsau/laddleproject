@component('components.home-head')
@section('title')
{{ Auth::user()->name }}'s Payment | Laddle
@endsection

@section('content')
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <h1 class="title is-1 has-text-primary">Payment Details</h1><hr>
      @if(session()->get('message11'))
          <div class="notification is-success is-light subtitle is-4">
            <button class="delete"></button>
             {{ session()->get('message11') }}
          </div>
      @endif
      <form method="post" action="{{ route('momo') }}" enctype="multipart/form-data">
        @csrf
        <div class="field">
            <label class="label" for="momo">Mobile Money Number</label>
            <div class="control">
              @if(count($accounts) > 0)
              @foreach ($accounts as $account)
                <input type="tel" class="input @error('momo') is-danger @enderror" value="{{ $account->momo }}" name="momo" placeholder="0200000000" autofocus>
              @endforeach
              @else
              <input type="tel" class="input @error('momo') is-danger @enderror" name="momo" placeholder="0200000000" autofocus>
              @endif
            </div>
            @error('momo')
                <p class="help is-danger" role="alert">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="field">
            <label class="label" for="cashapp">Cashapp Account ID</label>
            <div class="control">
              @if(count($accounts) > 0)
              @foreach ($accounts as $account)
                <input type="text" class="input @error('cashapp') is-danger @enderror" value="{{ $account->cashapp }}" name="cashapp" autofocus>
                @endforeach
                @else
                <input type="text" class="input @error('cashapp') is-danger @enderror" name="cashapp" autofocus>
                @endif
            </div>
            @error('cashapp')
                <p class="help is-danger" role="alert">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="field">
          <div class="control">
            <small class="has-text-danger">Only add the account from which your payments should go at a given time. Type NULL into the account not used.</small>
          </div>
        </div>


        <div class="field is-grouped">
          <div class="control">
            <button type="submit" class="button is-info">Add</button>
          </div>
        </div>
      </form><hr>

    </div>
  </div>

</section>
@endsection
@endcomponent
