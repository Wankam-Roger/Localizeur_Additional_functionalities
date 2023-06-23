@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">
        <br>
        <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
        <br>

        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1005">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="assets/images/logo.svg" alt="" class="me-2" height="18">
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Listes des entreprises enregistrées</h4>


                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('image') }}</th>
                                <th>{{ __('raison') }}</th>



                                <th>{{ __('secteur_activite') }}</th>

                                <th>{{ __('actions') }}</th>

                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($entreprises as $entreprise)
                                <tr id="{{ $entreprise->id }}">

                                    <td>{{ $entreprise->id }}</td>
                                    <td><img src="{{ asset($entreprise->photo_path) }}" alt="{{ $entreprise->photo_path }}" class="avatar-md h-auto d-block rounded">
                                    </td>

                                    <td>{{ $entreprise->raison_social }}</td>

                                    @if($entreprise->secteur)
                                        <td>{{ $entreprise->secteur->titre }}</td>
                                    @else
                                        <td>{{ $entreprise->secteur }}</td>
                                    @endif


                                    <td><a  href="{{ route('edit-enterprise',[app()->getLocale(), $entreprise->id]) }}" class="btn btn-outline-primary btn-sm edit" title="Edit">
                                            <i class="fas fa-edit "></i>
                                        </a>
                                        <a class="btn btn-outline-success btn-sm edit" title="Edit">
                                            <i class="fas fa-eye "></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-comment-dots "></i>
                                        </a>
                                        <a href="" class="btn btn-outline-danger btn-sm edit" title="Edit">
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
