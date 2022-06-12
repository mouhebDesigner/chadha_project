@extends('layouts.master')

@section('content')
<div class="breadcrumb-div">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="my-driver-dashboard.html">My dashboard</a></li>
                </ol>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <h2>Contact us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="div-padding driver-dashboard-div">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="passanger-name">
                    <div class="media">
                        @if(Auth::user()->photo == null)
                        <img class="me-3" src="{{ asset('front/assets/images/avatar.png') }}" alt="partner-img">
                        @else 
                        <img class="me-3" src="{{ asset(Auth::user()->photo) }}" alt="partner-img">
                        @endif


                        <div class="media-body">
                            <h2 class="mt-0">
                                {{ Auth::user()->nom }}
                                {{ Auth::user()->prenom }}
                            </h2>
                            <p>ID 1234567890</p>
                            <a href="#">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 right-text">
                <h2>Partnership with CarrGo</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-dashboard">
                    <ul class="nav nav-tabs tab-navigation" role="tablist">

                        <li role="presentation" class="active">
                            <a href="#info" aria-controls="info" role="tab" data-toggle="tab" class="active show"
                                aria-selected="true">Information personnels</a>
                        </li>

                        <li role="presentation">
                            <a href="#vehicles" aria-controls="vehicles" role="tab" data-toggle="tab" class=""
                                aria-selected="false">Réservation</a>
                        </li>


                        <li role="presentation">
                            <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab" class=""
                                aria-selected="false">Settings</a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active show" id="info">
                            <div class="personal-info small-div">
                                <div class="div-heading">
                                    <h4 class="heading-item heading-item-1">Personal Information</h4>
                                    <p class="heading-item heading-item-2 right">
                                        <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                                    </p>
                                </div>
                                <div class="personal-details small-div-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputFirstName">Nom</label>
                                                <input type="text" readonly="" class="form-control text-muted" id="inputFirstName"
                                                     value="{{ Auth::user()->nom }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputLastName">Prénom</label>
                                                <input type="text" readonly="" class="form-control text-muted" id="inputLastName"
                                                     value="{{ Auth::user()->prenom }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputEmail">Email</label>
                                                <input type="text" readonly="" class="form-control text-muted" id="inputEmail"
                                                     value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputPhoneNumber">Numéro de téléphone</label>
                                                <input type="text" readonly="" class="form-control text-muted" id="inputPhoneNumber"
                                                    value="{{ Auth::user()->numtel }}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="vehicles">
                            <div class="vahicles-container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>Mes réservations</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                </div>
                            </div>
                        </div>


                        <div role="tabpanel" class="tab-pane" id="settings">
                            <div class="personal-info">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>Personal Information</h4>
                                    </div>
                                    <div class="col-lg-6 text-end">
                                        <a href="#"><i class="fas fa-edit"></i> Edit</a>
                                    </div>
                                </div>
                                <div class="personal-details">
                                    <div class="row">
                                       <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputFirstName">Nom</label>
                                                <input type="text" class="form-control text-muted" id="inputFirstName"
                                                     value="{{ Auth::user()->nom }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputLastName">Prénom</label>
                                                <input type="text" class="form-control text-muted" id="inputLastName"
                                                     value="{{ Auth::user()->prenom }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputEmail">Email</label>
                                                <input type="text" class="form-control text-muted" id="inputEmail"
                                                     value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputPhoneNumber">Numéro de téléphone</label>
                                                <input type="text" class="form-control text-muted" id="inputPhoneNumber"
                                                    value="{{ Auth::user()->numtel }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 offset-lg-10">
                                            <button class="w-100 btn btn-lg btn-dark" type="submit">Envoyer</button>

                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
