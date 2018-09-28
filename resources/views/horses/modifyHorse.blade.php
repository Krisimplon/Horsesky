@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @foreach($horses as $horse)
        <h2>{{ $horse->name_horses }}</h2>
    </div>
    <div class="col-12">
        <form method="POST" action="{{ url('horses/modifyHorse/'.$horse->id) }}">
        @csrf
            <div class="col-xs-12">
                <div class="form-group col-xs-6">
                    <label for="name_horses">Nom de l'équidé</label>
                    <input type="text" class="form-control" id="name_horses" name="name_horses" aria-describedby="nameHorse" value="{{ $horse->name_horses }}">
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group col-xs-6">
                    <label for="birthday_horses">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday_horses" name="birthday_horses" aria-describedby="birthdayHorse" value="{{ $horse->birthday_horses }}">
                </div>
                <div class="form-group col-xs-6">
                    <label for="date_start_horses">Date d'arrivée au centre équestre</label>
                    <input type="date" class="form-control" id="date_start_horses" name="date_start_horses" aria-describedby="dateStartHorse" value="{{ $horse->date_start_horses }}">
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group col-xs-6">
                    <label for="breed_horses">Race</label>
                    <input type="text" class="form-control" id="breed_horses" name="breed_horses" aria-describedby="breedHorse" value="{{ $horse->breed_horses }}">
                </div>
                <div class="form-group col-xs-6">
                    <label for="color_horses">Robe</label>
                    <input type="text" class="form-control" id="color_horses" name="color_horses" aria-describedby="colorHorse" value="{{ $horse->color_horses }}">
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group row">
                    <label for="archive_horses" class="col-4">Souhaitez-vous archiver ce cheval ?</label>
                    <input type="checkbox" onclick="dateVisible();" class="form-control col-4" id="archive_horses" name="archive_horses" aria-describedby="archiveHorse">
                </div>
                <div class="form-group row off" id="dateAsk">
                    <label for="date_end_horses" class="col-6">Date de sortie</label>
                    <input type="date" class="form-control col-6" id="date_end_horses" name="date_end_horses" aria-describedby="dateEndHorse">
                </div>
            </div>
            <div class="row justify-content-between">
                <a href="{{ route ('listHorses') }}"><img src="/images/return.svg" class="iconAdd"/></a>
                <input type="submit" value="Modifier" id="enregistrer" class="btn btn-taupeFonce btn-register"/>
            </div>
        </form>
        
    </div>
    @endforeach
</div>
@endsection

<script>
function sure()
{
    return(confirm('Etes-vous sûr de vouloir enregitrer vos modifications ?'));
}
</script>