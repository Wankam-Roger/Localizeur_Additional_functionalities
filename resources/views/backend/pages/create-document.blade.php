@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-center">
                    <h4 class="mb-sm-0 font-size-18">Formulaire de Création de critère</h4>


                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center ">
            <div class="col-xl-10">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title mb-4">Form Grid Layout</h4>--}}


                        <form method="POST" action="{{ route('store-document', app()->getLocale()) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="enterprise_id"
                                       class="form-label">{{ __('entreprise') }}</label>
                                <select id="enterprise_id" name="enterprise_id" class="form-select">

                                    @foreach ($entreprises as $entreprise)
                                        <option value="{{ $entreprise->id }}">{{ $entreprise->raison_social }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="titre" class="form-label">{{ __('titre') }}</label>
                                <input type="text" class="form-control" id="titre" name="titre">
                            </div>

                            <hr>

                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('description') }}</label>
                                <textarea type="text" class="form-control" id="description" name="description">
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="fichier" class="form-label">{{ __('file') }}</label>
                                <input class="form-control" type="file" id="fichier" name="fichier">
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
