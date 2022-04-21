@extends('layouts.master')

@section('title', 'Page de connexion')

@section('content')
    <div class="div-padding p-t-0 signin-div user-access-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-access sign-in">
                        
                        
                        <div class="tab-content">
                            
                            <div role="tabpanel" class="tab-pane active show" id="driver">
                                <form class="mb-4" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-floating">
                                      <input type="email"  name="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                                      <label for="floatingInputEmail">Email address</label>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="form-floating">
                                      <input type="password" name="password" class="form-control" id="floatingPass" placeholder="Password">
                                      <label for="floatingPass">Password</label>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                                    <div class="checkbox mb-3">
                                      <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                      </label>
                                    </div>
                                    <button type="submit" class="w-100 btn btn-lg btn-dark" type="submit">Connecter</button>
 
                                  </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection