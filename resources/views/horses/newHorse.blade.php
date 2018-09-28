@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>Nouvel équidé</h2>
    </div>
    <form method="POST" action="{{ action('HorsesController@create') }}">
    @csrf
        <div class="row">
            <div class="form-group col">
                <label for="name_horses">Nom de l'équidé</label>
                <input type="text" class="form-control" id="name_horses" name="name_horses" aria-describedby="nameHorse" placeholder="Saisir le nom">
                <small id="nameHorse" class="form-text text-muted">Tous les champs sont obligatoires.</small>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="birthday_horses">Date de naissance</label>
                <input type="date" class="form-control" id="birthday_horses" name="birthday_horses" aria-describedby="birthdayHorse">
            </div>
            <div class="form-group col">
                <label for="date_start_horses">Date d'arrivée au centre équestre</label>
                <input type="date" class="form-control" id="date_start_horses" name="date_start_horses" aria-describedby="dateStartHorse">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="breed_horses">Race</label>
                <input type="text" class="form-control" id="breed_horses" name="breed_horses" aria-describedby="breedHorse" placeholder="Saisir la race">
            </div>
            <div class="form-group col">
                <label for="color_horses">Robe</label>
                <input type="text" class="form-control" id="color_horses" name="color_horses" aria-describedby="colorHorse" placeholder="Saisir la robe">
            </div>
        </div>
        <div class="row justify-content-between"> 
            <a href="{{ route ('listHorses') }}"><img src="/images/return.svg" class="iconAdd"/></a>
            <input type="submit" value="Enregistrer"  class="btn btn-taupeFonce btn-register" id="enregistrer"/>
        </div>
    </form>
</div>
@endsection