@component('components.home-head')
@section('title')
{{ Auth::user()->name }}'s Projects | Laddle
@endsection

@section('content')
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <h1 class="title is-1 has-text-primary">Your Projects</h1><hr>
      <div class="columns field is-grouped is-grouped-multiline">
          @if(count($projects) > 0)
          @foreach ($projects as $project)
          <div class="column is-half">
          <div class="field">
            <div class="notification is-success is-light">
              <p class="control">Title: <strong>{{ $project->title }}</strong></p>
              <p class="control">Sold: <strong>{{ $project->sold }}</strong></p>
              <p class="control">Earned: <strong>${{ $project->earned }}</strong></p>
              <p class="control">Status: <strong>{{ $project->status }}ed</strong></p>
              <p class="control">Views: <strong>{{ $project->views }}</strong></p>
              <p class="control">Clicks: <strong>{{ $project->clicks }}</strong></p>
              <p class="control">
                <a href="?delete={{ $project->identifier }}" class="button is-danger"><i class="fa fa-remove"></i>  Delete</a>
                <a href="?reserve={{ $project->identifier }}" class="button is-warning"><i class="fa fa-save"></i> Reserve</a>
                <a href="?publish={{ $project->identifier }}" class="button is-info"><i class="fa fa-refresh"></i> Undo Reserve</a>
              </p>
            </div>
          </div>
        </div>
          @endforeach
          <div class="container">
          {{ $projects->links() }}<hr>
          </div>
          @else
          <div class="notification is-info">
          You do not have any projects yet.
          </div>
          @endif
      </div>
    </div>
  </div>

</section>
@endsection
@endcomponent
