@extends('admin.layouts.master')

@section('content')
    <div class="wrapper">
        
        @include('admin.includes.header')
        @include('admin.includes.aside')
        <div class="content-wrapper" style="min-height: 257px">
            <div class="content-header">
                <div class="container-fluid">
                    @include('admin.includes.error-message')
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Liste des passagers</h1>
                        </div><!-- /.col -->
                       
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>

                                <div class="card-tools">
                                
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered table-striped table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>nom</th>
                                        <th>prenom</th>
                                        <th>email</th>
                                        <th>numéro de téléphone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($passagers as $passager)
                                    <tr>
                                        <td>{{ $passager->nom }}</td>
                                        <td>{{ $passager->prenom }}</td>
                                        <td>{{ $passager->email }}</td>
                                        <td>{{ $passager->role }}</td>
                                        <td>{{ $passager->numtel }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ url('admin/passagers/'.$passager->id.'/approuver') }}" class="btn btn-success"  onclick="
                                                            return confirm('Voulez-vous approuver cet utilisateur');
                                                        ">Approuver</a>
                                                <form action="{{ url('admin/passagers/'.$passager->id) }}" method='post'>
                                                    @csrf
                                                    @method('delete')
                                                        <button type="submit" class="btn-hidden" onclick="
                                                            return confirm('Voulez-vous suprimer cet utilisateur');
                                                        ">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
