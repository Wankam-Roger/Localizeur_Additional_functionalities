@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-center">
                    <h4 class="mb-sm-0 font-size-18">Formulaire de Modification des informations d'un Pays</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center ">
            <div class="col-xl-10">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title mb-4">Form Grid Layout</h4>--}}

                        <form method="POST" action="{{ route('update-street', app()->getLocale()) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="raison_sociale" class="form-label">{{ __('identifier') }}</label>
                                <input type="text" readonly class="form-control" value="{{$street->id}}" id="id" name="street_id">
                            </div>

                            <div class="mb-3">
                                <label for="titre" class="form-label">{{ __('titre') }}</label>
                                <input type="text" class="form-control" id="titre" name="titre" value="{{$street->titre}}">
                            </div>

                            <hr>

                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('description') }}</label>
                                <textarea type="text" class="form-control" id="description" name="description" value="{{$street->description}}">
                                </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="fichier" class="form-label">{{ __('street-banner-image') }}</label>
                                <img src="{{ asset($street->banner) }}" alt="{{ $street->banner }}" class="avatar-xl h-auto d-block rounded">
                                <br>
                                <input class="form-control" type="file" id="fichier" name="fichier">
                            </div>

                            <div class="mb-3">
                                <label for="fichier" class="form-label">{{ __('street-image-1') }}</label>
                                <img src="{{ asset($street->photo_path2) }}" alt="{{ $street->photo_path2 }}" class="avatar-xl h-auto d-block rounded">
                                <input class="form-control" type="file" id="fichier" name="fichier2">
                            </div>

                            <div class="mb-3">
                                <label for="fichier" class="form-label">{{ __('street-image-2') }}</label>
                                <input class="form-control" type="file" id="fichier" name="fichier3">
                            </div>




                            <div>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->


        </div>
        <!-- end row -->


    </div> <!-- container-fluid -->
@endsection
