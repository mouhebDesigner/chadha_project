@extends('layouts.layout-login')

@section('content')
<div class="div-padding p-t-0 signin-div user-access-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h1 class="h3 mb-3 fw-normal">Page de connexion</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-access sign-in">
                    
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="passager">
                            <form class="mb-4" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Adresse email</label>
                                    @error('email')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password">
                                    <label for="password">Mot de passe</label>
                                    @error('password')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                               

                                <button class="w-100 btn btn-lg btn-dark" type="submit">Envoyer</button>

                            </form>
                            <p class="acclink">Vous n'avez pas un compte?
                                <a href="{{ url('register') }}">S'inscrire
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
