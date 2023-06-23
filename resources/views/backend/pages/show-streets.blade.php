@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Listes des Quartiers Enregistrés</h4>


                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('image') }}</th>
                                <th>{{ __('titre') }}</th>
                                <th>{{ __('description') }}</th>
                                <th>{{ __('number_entreprises') }}</th>
                                <th>{{ __('action') }}</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($streets as $street)
                                <tr>

                                    <td>{{ $street->id }}</td>
                                    <td><img src="{{ asset($street->photo_path) }}" alt="{{ $street->photo_path }}" class="avatar-md h-auto d-block rounded"></td>

                                    <td>{{ $street->titre }}</td>
                                    <td>{{ $street->description }}</td>
                                    <td>{{ sizeof($street->enterprises) }}</td>
                                    <td><a  href="{{ route('edit-street',[app()->getLocale(), $street->id]) }}" class="btn btn-outline-primary btn-sm edit" title="Edit">
                                            <i class="fas fa-edit "></i>
                                        </a>
                                        <a class="btn btn-outline-danger btn-sm edit" title="Delete">
                                            <i class="fas fa-trash-alt  "></i>
                                        </a>
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
