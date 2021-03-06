@extends('layouts.main')

@section('content')
    <div class="container pt-5">
        <h1>Small Form Factor Cases</h1>
        @foreach($cases as $case)
            @if($loop->first || $loop->iteration % 4 === 1) <div class="row"> @endif
            @include('partials.item', ['case' => $case])
            @if($loop->last || $loop->iteration % 4 === 0) </div> @endif
        @endforeach
    </div>
@endsection
