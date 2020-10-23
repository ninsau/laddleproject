@component('components.home-head')
@section('title')
{{ Auth::user()->name }}'s Dashboard | Laddle
@endsection

@section('content')
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <h1 class="title is-1 has-text-primary">Activity Overview</h1><hr>

      <div class="columns">
        <div class="column">
          <a href="projects">
            <div class="card block">
            <div class="card-content">
              <div class="media">
                <div class="media-content">
                  <h3 class="title is-5 has-text-primary"><i class="fa is-3 fa-download has-text-info"></i> Projects
                    <small class="has-background-primary is-pulled-right has-text-white number">{{count($activities)}}</small></h3>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>
        <div class="column">
          <div class="card block">
            <div class="card-content">
              <div class="media">
                <div class="media-content">
                  <h3 class="title is-5 has-text-primary"><i class="fa is-3 fa-eye has-text-info"></i> Clicks <small class="has-background-primary is-pulled-right has-text-white number">{{ $clicks }}</small></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card block">
            <div class="card-content">
              <div class="media">
                <div class="media-content">
                  <h3 class="title is-5 has-text-primary"><i class="fa is-3 fa-shopping-bag has-text-info"></i> Total Sold <small class="has-background-primary is-pulled-right has-text-white number">{{ $sold }}</small></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card block">
            <div class="card-content">
              <div class="media">
                <div class="media-content">
                  <h3 class="title is-5 has-text-primary"><i class="fa is-3 fa-money has-text-info"></i> Total Earnings <small class="has-background-primary is-pulled-right has-text-white number">${{$earned}}</small></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
</div>

</section>
@endsection
@endcomponent
