@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Listes des Critères de Notations D'entreprises</h4>


                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('titre') }}</th>
                                <th>{{ __('description') }}</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($criteres as $critere)
                                <tr>

                                    <td>{{ $critere->id }}</td>
                                    <td>{{ $critere->titre }}</td>
                                    <td>{{ $critere->description }}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
@endsection
