@extends('layouts.master')

@section('title', 'Page d\'acceuil')

@section('content')

<div class="breadcrumb-div">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <ol class="breadcrumb">
                    <li><a href="#">Voyager avec Carrgo</a></li>
                </ol>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <h2>Contactez nous</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="div-padding contact-info-div">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-info text-center">
                    <img src="assets/images/icon/contact_info.png" alt="icon">
                    <h4>Address</h4>
                    <p>Address : #1153, St No. 58, Hashtag Company Noida, Delhi, India.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-info text-center">
                    <img src="assets/images/icon/contact_info-2.png" alt="icon">
                    <h4>Phone number</h4>
                    <p>Phone : +911234567890, +919581236897</p>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-0 col-sm-6 offset-sm-3">
                <div class="single-contact-info text-center">
                    <img src="assets/images/icon/contact_info-3.png" alt="icon">
                    <h4>E-mail</h4>
                    <p>Email : Gambol943@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="div-padding contact-form-div p-t-0">
    <div class="container">
        <div class="row">

            <div class="col-12">
                @if(session('success'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4> {{ session('success') }}	</h4>
                    
                </div>              
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('contacts.store') }}" method="post">
                    @csrf 
                    <h2>Enovyez nous un Email</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="firstName" id="name" placeholder="Nom" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="lastName" id="name" placeholder="Prénom" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="email" id="email" placeholder="E-mail" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="phone" id="phone" placeholder="Numéro de téléphone" class="form-control">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="subject" id="subject" placeholder="Sujet" class="form-control">
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control" name="message" id="text-content"
                                placeholder="Contenue de message"></textarea>
                        </div>
                    </div>
                    <button class="button button-dark tiny" type="submit">Send</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
