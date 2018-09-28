@extends('layouts.app')

@section('content')
<div class="container bladeListHorses">
    <div class="row justify-content-center">
        <h2>Listes des équidés</h2>
    </div>
@foreach ($horses as $horse)
    <a class="row justify-content-center listLinkHorse" href="{{ url('horses/horse/'.$horse->id) }}">
        <div class="col-xs-12 col-sm-7">
            {{ $horse->name_horses }}
        </div>
        <div class="col-xs-12 col-sm-5">
            Date de naissance : {{ $horse->birthday_horses }}
        </div>
    </a>
@endforeach
</div>
<div class="container">
    <div class="row">
        <a href="{{ route ('newHorse') }}"><img src="/images/add.svg" class="iconAdd"/></a>
        <a href="#"><img src="/images/printer.svg" class="iconAdd"/></a>
    </div>
</div>
@endsection

<script>
function sure()
{
    return(confirm('Etes-vous sûr de vouloir enregitrer vos modifications ?'));
}
</script>