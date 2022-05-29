@extends('admin.layouts.master')


@section('titre', 'Modifier un trajet')
@section('content')
<div class="wrapper">
    @include('admin.includes.header')
    @include('admin.includes.aside')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Modifier un trajet
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Formulaire d'ajout</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('conducteur.trajets.update', ['trajet' => $trajet]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="source">Source</label>
                                    <input type="text" class="form-control" name="source" value="{{ $trajet->source }}"
                                        id="source" placeholder="Saisir source de concours">
                                    @error('source')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="destination">destination</label>
                                    <input type="text" class="form-control" name="destination" value="{{ $trajet->destination }}"
                                        id="destination" placeholder="Saisir destination de concours">
                                    @error('destination')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            
                                <div class="form-group">
                                    <label for="date">Date de départ</label>
                                    <input type="date" class="form-control" name="date"
                                        value="{{ $trajet->date }}" id="date"
                                        placeholder="Saisir date de concours">
                                    @error('date')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="heure">Heure de départ</label>
                                    <input type="time" class="form-control" name="heure"
                                        value="{{ $trajet->heure }}" id="heure"
                                        placeholder="Saisir heure de concours">
                                    @error('heure')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="prix">Prix</label>
                                    <input type="number" class="form-control" name="prix" value="{{ $trajet->prix }}"
                                        id="prix" placeholder="Saisir prix de trajet">
                                    @error('prix')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                <button type="reset" class="btn btn-info">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>



    @endsection
