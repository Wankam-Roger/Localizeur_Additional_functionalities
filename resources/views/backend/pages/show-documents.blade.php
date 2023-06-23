@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Listes des Documents D'entreprises</h4>


                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('entreprise') }}</th>
                                <th>{{ __('titre') }}</th>
                                <th>{{ __('description') }}</th>
                                <th>{{ __('document') }}</th>

                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($documents as $document)
                                <tr>

                                    <td>{{ $document->id }}</td>
                                    <td>{{ $document->enterprise->raison_social }}</td>
                                    <td>{{ $document->titre }}</td>
                                    <td>{{ $document->description }}</td>
                                    <td>
                                    <a href="../{{ $document->chemin }}"> Link</a>
                                    </td>

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
