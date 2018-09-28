@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>Mon compte</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            Nom : {{ Auth::user()->name }}
        </div>
        <div class="col">
            Prénom : {{ Auth::user()->surname }}
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            Fonction : {{ Auth::user()->role }}
        </div>
        <div class="col">
            Pseudo : {{ Auth::user()->pseudo }}
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            E-mail : {{ Auth::user()->email }}
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection