@extends('layouts.app')

@section('content')
<div id="bladeHorse">
@foreach($horses as $horse)
    <div class="container infosHorse">
        <div class="row justify-content-center">
            <h2>{{ $horse->name_horses }}</h2>
        </div>
        <div class="row justify-content">
            <div class="col-12 specHorse">
                Date de naissance : {{ $horse->birthday_horses }}
            </div>
            <div class="col-12 specHorse">
                Date d'arrivée : {{ $horse->date_start_horses }}
            </div>
            <div class="col-12 specHorse">
                Race : {{ $horse->breed_horses }}
            </div>
            <div class="col-12 specHorse">
                Robe : {{ $horse->color_horses }}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-6">
                <a href="{{ route ('listHorses') }}"><img src="/images/return.svg" class="iconAdd"/></a>
            </div>
            <div class="col-6 iconsPageBottom">
                <a href="{{ url('horses/modifyHorse/'.$horse->id) }}"><img src="/images/edit.svg" class="iconAdd"/></a>
                <a href="{{ url('/deleteHorse/'.$horse->id) }}" onclick="return sure();"><img src="/images/trash.svg" class="iconAdd"/></a>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection

<script>
function sure()
{
    return(confirm("Etes-vous sûr de vouloir supprimer cet équidé ?"));
}
</script>