@extends('layouts.app')

@section('content')
<div class="container bladeListHorses">
    <div class="row justify-content-center">
        <h2>Archives des équidés</h2>
    </div>
@foreach ($horses as $horse)
    <a class="row justify-content-center listLinkHorse" href="{{ url('horses/horseArchive/'.$horse->id) }}">
        <div class="col-xs-12 col-sm-8">
            {{ $horse->name_horses }}
        </div>
        <div class="col-xs-12 col-sm-4">
            Date de sortie : {{ $horse->date_end_horses }}
        </div>
    </a>
@endforeach
</div>
@endsection