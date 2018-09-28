@extends('layouts.app')

@section('content')
<div id="bladeHorse">
@foreach($horses as $horse)

    <div class="container infosHorse">
        <span class="dateArchive">Date d'archivage : {{ $horse->date_end_horses }}</span>
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
        <div class="row justify-content-end">
        <a href="{{ route ('listHorsesArchive') }}"><img src="/images/return.svg" class="iconAdd"/></a>
        <a href="{{ url('/deleteHorse/'.$horse->id) }}"><img src="/images/trash.svg" class="iconAdd" onclick="return sure();"/></a>
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