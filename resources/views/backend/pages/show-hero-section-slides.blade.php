@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Listes des Secteurs D'activité enregistré</h4>


                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('slide') }}</th>
                                <th>{{ __('titre') }}</th>
                                <th>{{ __('description') }}</th>
                                <th>{{ __('actions') }}</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($slides as $slide)
                                <tr>

                                    <td>{{ $slide->id }}</td>
                                    <td><img src="{{ asset($slide->image_path) }}" alt="{{ $slide->image_path }}"
                                             class="avatar-md h-auto d-block rounded">
                                    </td>
                                    <td>{{ $slide->titre }}</td>
                                    <td>{{ $slide->description }}</td>
                                    <td>
                                        <a class="btn mb-3 btn-outline-primary btn-sm edit"
                                           data-bs-slide-titre="{{ $slide->titre }}" data-bs-slide-id="{{ $slide->id }}"
                                           data-bs-slide-image="{{ asset($slide->image_path) }}" data-bs-toggle="modal"
                                           data-bs-target="#slideUpdateModal" title="Edit">
                                            <i class="fas fa-edit "></i>
                                        </a>
                                        &nbsp;
                                        <button class="btn mb-3 btn-outline-danger btn-sm edit"
                                                data-bs-slide-titre="{{ $slide->titre }}"
                                                data-bs-slide-id="{{ $slide->id }}"
                                                data-bs-slide-image="{{ asset($slide->image_path) }}"
                                                data-bs-toggle="modal" data-bs-target="#slideUpdateModal"
                                                title="Delete">
                                            <i class="fas fa-trash-alt  "></i>
                                        </button>
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

    <div id="slideUpdateModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center ">
                        <div class="col-xl-12">

                            <div class="card-body">
                                {{--<h4 class="card-title mb-4">Form Grid Layout</h4>--}}

                                <form method="POST" action="{{ route('store-secteur', app()->getLocale()) }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="titre" class="form-label">{{ __('titre') }}</label>
                                        <input type="text" class="form-control" id="titre_slide" name="titre">
                                    </div>


                                    <div class="mb-3">
                                        <label for="description" class="form-label">{{ __('description') }}</label>
                                        <textarea type="text" class="form-control" id="description_slide"
                                                  name="description">
                                        </textarea>
                                    </div>

                                    <hr>
                                    <div class="mb-3">
                                        <img src="" alt="" id="image_slide" class="d-block rounded" height="170">
                                    </div>

                                    <div class="mb-3">
                                        <label for="fichier" class="form-label">{{ __('secteur-banner-image') }}</label>
                                        <input class="form-control" type="file" id="fichier" name="fichier">
                                    </div>


                                </form>

                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection




