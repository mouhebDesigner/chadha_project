@extends('admin.layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
    <div class="wrapper">
        
        @include('admin.includes.header')
        @include('admin.includes.aside')
        <div class="content-wrapper" style="min-height: 257px">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                       
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                @include('admin.includes.error-message')

                    <div class="row">
                        <div class="col-12">
                            
                            <!-- /.card -->

                            <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="m-0">Liste des reservations</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Source
                                                        </th>
                                                        <th>
                                                            Destination
                                                        </th>
                                                        <th>
                                                            Nom de passager
                                                        </th>
                                                        <th>
                                                            Email
                                                        </th>
                                                        <th>
                                                            Téléphone
                                                        </th>
                                                        <th>
                                                            Status
                                                        </th>
                                                        <th>
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($trajets as $trajet)
                                                        @foreach($trajet->reservations()->get() as $reservation)
                                                        <tr>
                                                            <td>{{ $trajet->source }}</td>
                                                            <td>{{ $trajet->destination }}</td>
                                                            <td>{{ $reservation->nom }} {{ $reservation->prenom }}</td>
                                                            <td>{{ $reservation->email }}</td>
                                                            <td>{{ $reservation->numtel }}</td>
                                                            <td>{{ $reservation->pivot->status }}</td>
                                                            @if($reservation->pivot->status == "attente")
                                                            <td>

                                                                <div class="d-flex justify-content-around">
                                                                    <button type="submit" style="width:max-content; padding: 10px 10px; line-height: 10px" class="btn-delete accepter-confirm" data-model="réservation" title="Accepter réservation" data-url="{{ route('conducteur.reservations.accepter', ['reservation' => $reservation->pivot->id]) }}" >
                                                                        Accepter
                                                                    </button>
                                                                    <a href="javascript:void(0)" data-url="{{ route('conducteur.reservations.refuser', ['reservation' =>$reservation->pivot->id]) }}" style="width:  max-content; padding: 10px 10px" data-model="réservation" title="Réfuser réservation" class="refuser-confirm btn-edit">
                                                                        Refuser
                                                                    </a>
                                                                    
                                                                </div>
                                                            </td>
                                                            @else 
                                                            <td>
                                                                @if($reservation->pivot->status == "accepter")
                                                                    <span style="color: green" >Déjà accepté</span>
                                                                @else 
                                                                    <span style="color: red" >Déjà refusé</span>
                                                                @endif
                                                            </td>
                                                            @endif
                                                        </tr>
                                                        @endforeach
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="d-flex justify-content-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection
