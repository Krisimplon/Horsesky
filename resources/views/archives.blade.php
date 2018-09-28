@extends('layouts.app')

@section('content')
<div class="container archivesCard">
    <div class="row justify-content-center">
        <h2>Archives</h2>
    </div>
    <div class="row justify-content-center cardArchives">
        <a href="{{ route ('listHorsesArchive') }}">
            <img src="/images/horse-hover.svg" class="iconArchives"/>
            <h3>Equidés</h3>
        </a>
    </div>
    <div class="row justify-content-center cardArchives">
        <a href="#">
            <img src="/images/riders-hover.svg" class="iconArchives"/>
            <h3>Cavaliers</h3>
        </a>
    </div>
</div>
@endsection