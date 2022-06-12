@extends('layouts.master')

@section('content')
<div class="div-padding signin-div user-access-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h1 class="h3 mb-3 fw-normal">Page de réservation de trajet</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-access sign-in">
                    
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="passager">
                            <form class="mb-4" action="{{ route('reserver') }}" method="post">
                                @csrf
                                <input type="hidden" name="trajet_id" value="{{ $trajet_id }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="form-floating">
                                    <input type="text" name="destination" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Destination</label>
                                    @error('destination')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="nbrPassager" id="nbrPassager"
                                        placeholder="Nombre de passager">
                                    <label for="nbrPassager">Nombre de passager</label>
                                    @error('nbrPassager')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                               

                                <button class="w-100 btn btn-lg btn-dark" type="submit">
                                    Réserver
                                </button>

                            </form>
                           
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
