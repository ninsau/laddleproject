@extends('layouts.app')

@section('content')
    @component('components.full-page-section')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div id="text">
		<h1>Congratulations, You have successfully listed your project!</h1>
		<p>
			Now, sit back and relax while we do the heavy listing for you. Your project is now on sale and visible to all buyers on the laddle platform.</p>

        @endcomponent
    @endcomponent
@endsection
