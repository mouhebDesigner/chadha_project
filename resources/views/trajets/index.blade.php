@extends('layouts.master')

@section('title', 'Page d\'acceuil')

@section('content')
<div class="breadcrumb-div">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <ol class="breadcrumb">
                    <li><a href="#">Voyager avec CarGo</a></li>
                </ol>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <h2>Les trajets</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="div-padding our-vehicles-div">
    <div class="container">
        <div class="row">

            <div class="col-12">
                @if(session('reserved'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4> {{ session('reserved') }}	</h4>
                    
                </div>              
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="div-title text-center">Les trajets</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">


                <div class="tab-content vehicle-tab-content">
                    <div role="tabpanel" class="tab-pane active" id="all">
                        <div class="row">
                            @foreach(App\Models\Trajet::all() as $trajet)
                            <div class="col-lg-3 col-md-6">
                                <div class="single-vehicle-box">
                                    <div class="single-vehilce-img">
                                        <img src="{{ asset($trajet->user->car_photo) }}" alt="vehicle img">
                                    </div>
                                    <div class="vehicle-box-hover">
                                        <h4>
                                            {{ $trajet->user->nom }}
                                            {{ $trajet->user->prenom }}
                                        </h4>
                                        <p>
                                            Source: {{ $trajet->source }}<br> 
                                            Destination: {{ $trajet->destination }}<br> 
                                            Nombre de passager: {{ $trajet->nbr_passager_max }}<br> 
                                            Date de départ : {{ $trajet->date }} {{ $trajet->time }}<br>
                                            Prix: {{ $trajet->prix }}DT</p>
                                        <a href="{{ url('reserver/'.$trajet->id) }}" class="button button-dark big">Réserver ici</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="page navigation" class="page-navigation">

                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
