@extends('layouts.layout-login')

@section('content')
<div class="div-padding p-t-0 signin-div user-access-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h1 class="h3 mb-3 fw-normal">Page d'inscription</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-access sign-in">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#passager" class="active" aria-controls="rider" role="tab"
                                data-toggle="tab">Passager</a>
                        </li>
                        <li role="presentation">
                            <a href="#conducteur" aria-controls="driver" role="tab" data-toggle="tab">Conducteur</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="passager">
                            <form class="mb-4" action="register" method="post">
                                @csrf
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nom" id="nom"
                                        placeholder="Saisir votre nom">
                                    <label for="nom">Nom</label>
                                    @error('nom')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenom" id="prenom"
                                        placeholder="Saisir votre nom">
                                    <label for="prenom">Prénom</label>
                                    @error('nom')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Adresse email</label>
                                    @error('email')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="numtel" id="numtel"
                                        placeholder="Saisir votre numéro de téléphone">
                                    <label for="numtel">Numéro de téléphone</label>
                                    @error('numtel')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password">
                                    <label for="password">Mot de passe</label>
                                    @error('password')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password_confirmation"
                                        id="password" placeholder="Password">
                                    <label for="password">Confirmer Mot de passe</label>
                                </div>

                                <button class="w-100 btn btn-lg btn-dark" type="submit">Envoyer</button>

                            </form>
                            <p class="acclink">Avez-vous déjà un compte?
                                <a href="{{ url('login') }}">Se connecter
                                    <i class="icofont">double_right</i>
                                </a>
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="conducteur">
                            <form class="mb-4" action="register" method="post">
                                @csrf
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nom" id="nom"
                                        placeholder="Saisir votre nom">
                                    <label for="nom">Nom</label>
                                    @error('nom')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prenom" id="prenom"
                                        placeholder="Saisir votre nom">
                                    <label for="prenom">Prénom</label>
                                    @error('nom')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Adresse email</label>
                                    @error('email')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="numtel" id="numtel"
                                        placeholder="Saisir votre numéro de téléphone">
                                    <label for="numtel">Numéro de téléphone</label>
                                    @error('numtel')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="city" id="city"
                                        placeholder="Saisir gouvernorat">
                                    <label for="city">Gouvernorat</label>
                                    @error('city')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="codePostal" id="codePostal"
                                        placeholder="Saisir code postal">
                                    <label for="codePostal">Code postal</label>
                                    @error('codePostal')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password">
                                    <label for="password">Mot de passe</label>
                                    @error('password')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password_confirmation"
                                        id="password" placeholder="Password">
                                    <label for="password">Confirmer Mot de passe</label>
                                </div>

                                <button class="w-100 btn btn-lg btn-dark" type="submit">Envoyer</button>

                            </form>
                            <p class="acclink">Avez-vous déjà un compte?
                                <a href="{{ url('login') }}">Se connecter
                                    <i class="icofont">double_right</i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
