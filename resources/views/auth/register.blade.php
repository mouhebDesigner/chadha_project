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
                        @if ((old('role') == "passager") || $errors->any() == false)
                            <li role="presentation" class="active">
                                <a href="#passager" class="active" aria-controls="rider" role="tab"
                                    data-toggle="tab">Passager</a>
                            </li>
                        @else 
                            <li role="presentation" >
                                <a href="#passager" aria-controls="rider" role="tab"
                                    data-toggle="tab">Passager</a>
                            </li>
                        @endif
                        @if ((old('role') == "conducteur"))

                            <li role="presentation" class="active">
                                
                                <a href="#conducteur" aria-controls="driver" class="active" role="tab" data-toggle="tab">Conducteur</a>
                            </li>
                        @else 
                            <li role="presentation">
                                
                                <a href="#conducteur" aria-controls="driver" role="tab" data-toggle="tab">Conducteur</a>
                            </li>

                        @endif
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane                             
                            @if ((old('role') == "passager") || $errors->any() == false)
                                active
                            @endif" id="passager">
                            <form class="mb-4" action="register" method="post">
                                @csrf
                                <input type="hidden" name="role" value="passager">
                                <div class="form-floating">
                                    <input type="text" class="form-control" 
                                        @if(old('role') == "passager")
                                        value="{{ old('nom') }}"
                                        @endif
                                        name="nom" id="nom"
                                        placeholder="Saisir votre nom">
                                    <label for="nom">Nom</label>
                                    @if (old('role') == "passager")
                                    
                                    @error('nom')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                    @endif
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" 
                                        @if(old('role') == "passager")
                                        value="{{ old('prenom') }}"
                                        @endif
                                        name="prenom" id="prenom"
                                        placeholder="Saisir votre nom">
                                    <label for="prenom">Prénom</label>
                                    @if (old('role') == "passager")
                                    
                                    @error('prenom')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                    @endif
                                </div>
                                <div class="form-floating">
                                    <input type="email" 
                                        @if(old('role') == "passager")
                                        value="{{ old('email') }}"
                                        @endif
                                        name="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Adresse email</label>
                                    @if (old('role') == "passager")
                                        @error('email')
                                        <p class="invalid-feedback d-block">{{ $message }}</p>
                                        @enderror
                                    @endif
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" 
                                        @if(old('role') == "passager")
                                        value="{{ old('numtel') }}"
                                        @endif
                                        name="numtel" id="numtel"
                                        placeholder="Saisir votre numéro de téléphone">
                                    <label for="numtel">Numéro de téléphone</label>
                                    @if (old('role') == "passager")
                                    
                                    @error('numtel')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                    @endif
                                </div>
                                
                                <div class="form-floating">
                                    <input type="password" class="form-control" 
                                        @if(old('role') == "passager")
                                        value="{{ old('password') }}"
                                        @endif
                                        name="password" id="password"
                                        placeholder="Password">
                                    <label for="password">Mot de passe</label>
                                    @if (old('role') == "passager")
                                    
                                    @error('password')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                    @endif
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
                        <div role="tabpanel" class="tab-pane
                            @if ((old('role') == "conducteur"))
                                active
                            @endif" id="conducteur">
                            <form class="mb-4" action="register" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="role" value="conducteur">
                                <div class="form-floating">
                                    <input type="text" class="form-control" 
                                        @if(old('role') == "conducteur")
                                        value="{{ old('nom') }}"
                                        @endif
                                        name="nom" id="nom"
                                        placeholder="Saisir votre nom">
                                    <label for="nom">Nom</label>
                                    @if (old('role') == "conducteur")
                                        @error('nom')
                                        <p class="invalid-feedback d-block">{{ $message }}</p>
                                        @enderror
                                    @endif
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" 
                                        @if(old('role') == "conducteur")
                                        value="{{ old('prenom') }}"
                                        @endif
                                        name="prenom" id="prenom"
                                        placeholder="Saisir votre nom">
                                    <label for="prenom">Prénom</label>
                                    @if (old('role') == "conducteur")
                                        @error('prenom')
                                        <p class="invalid-feedback d-block">{{ $message }}</p>
                                        @enderror
                                    @endif
                                </div>
                                <div class="form-floating">
                                    <input type="email" 
                                        @if(old('role') == "conducteur")
                                        value="{{ old('email') }}"
                                        @endif
                                        
                                        name="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Adresse email</label>
                                    @if (old('role') == "conducteur")
                                    
                                        @error('email')
                                        <p class="invalid-feedback d-block">{{ $message }}</p>
                                        @enderror
                                    @endif
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" 
                                        @if(old('role') == "conducteur")
                                        value="{{ old('numtel') }}"
                                        @endif
                                        
                                        name="numtel" id="numtel"
                                        placeholder="Saisir votre numéro de téléphone">
                                    <label for="numtel">Numéro de téléphone</label>
                                    @if (old('role') == "conducteur")
                                    
                                        @error('numtel')
                                        <p class="invalid-feedback d-block">{{ $message }}</p>
                                        @enderror
                                    @endif
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" 
                                        @if(old('role') == "conducteur")
                                        value="{{ old('city') }}"
                                        @endif
                                        name="city" id="city"
                                        placeholder="Saisir gouvernorat">
                                    <label for="city">Gouvernorat</label>
                                    @if (old('role') == "conducteur")
                                    
                                        @error('city')
                                        <p class="invalid-feedback d-block">{{ $message }}</p>
                                        @enderror
                                    @endif
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" 
                                        @if(old('role') == "conducteur")
                                        value="{{ old('codePostal') }}"
                                        @endif
                                        
                                        name="codePostal" id="codePostal"
                                        placeholder="Saisir code postal">
                                    <label for="codePostal">Code postal</label>
                                    @if (old('role') == "conducteur")
                                    
                                        @error('codePostal')
                                        <p class="invalid-feedback d-block">{{ $message }}</p>
                                        @enderror
                                    @endif
                                </div>
                                <div class="form-floating">
                                    <input type="file" class="form-control" 
                                        @if(old('role') == "conducteur")
                                        value="{{ old('car_photo') }}"
                                        @endif
                                        
                                        name="car_photo" id="car_photo"
                                        placeholder="Saisir code postal">
                                    <label for="car_photo">Image de voiture</label>
                                    @if (old('role') == "conducteur")
                                    
                                        @error('car_photo')
                                        <p class="invalid-feedback d-block">{{ $message }}</p>
                                        @enderror
                                    @endif
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" 
                                        @if(old('role') == "conducteur")
                                        value="{{ old('password') }}"
                                        @endif
                                        
                                        name="password" id="password"
                                        placeholder="Password">
                                    <label for="password">Mot de passe</label>
                                    @if (old('role') == "conducteur")
                                    
                                        @error('password')
                                        <p class="invalid-feedback d-block">{{ $message }}</p>
                                        @enderror
                                    @endif
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
