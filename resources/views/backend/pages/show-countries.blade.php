@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Listes des Pays Enregistrés</h4>


                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('image') }}</th>
                                <th>{{ __('titre') }}</th>
                                <th>{{ __('description') }}</th>
                                <th>{{ __('action') }}</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($countries as $country)
                                <tr>

                                    <td>{{ $country->id }}</td>
                                    <td><img src="{{ asset($country->photo_path) }}" alt="{{ $country->photo_path }}" class="avatar-md h-auto d-block rounded"></td>

                                    <td>{{ $country->titre }}</td>
                                    <td>{{ $country->description }}</td>
                                    <td><a  href="{{ route('edit-country',[app()->getLocale(), $country->id]) }}" class="btn btn-outline-primary btn-sm edit" title="Edit">
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

{{--    <div id="secteurDeleteModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                --}}{{--<h4 class="card-title mb-4">Form Grid Layout</h4>--}}{{--

                                <form method="POST" action="{{ route('delete-secteur', app()->getLocale()) }}"
                                      enctype="multipart/form-data" id="delete-secteur-form">
                                    @csrf
                                    <input type="hidden" id="id_secteur" name="id">
                                    <div class="mb-3">
                                        <label for="titre" class="form-label">{{ __('titre') }}</label>
                                        <input type="text" class="form-control" id="titre_secteur" name="titre">
                                    </div>


                                    <div class="mb-3">
                                        <label for="description" class="form-label">{{ __('description') }}</label>
                                        <textarea type="text" class="form-control" id="description_secteur"
                                                  name="description">
                                        </textarea>
                                    </div>

                                    <hr>

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
                    <button type="button" onclick="document.getElementById('delete-secteur-form').submit()" class="btn btn-primary waves-effect waves-light">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>--}}


    {{--<script type="text/javascript">

        var secteurDeleteModal = document.getElementById("secteurDeleteModal");
        secteurDeleteModal.addEventListener("show.bs.modal", function (e) {
            var titre = e.relatedTarget.getAttribute("data-bs-secteur-titre"),
                description = e.relatedTarget.getAttribute("data-bs-secteur-des"),
                id = e.relatedTarget.getAttribute("data-bs-secteur-id"),
                a = secteurDeleteModal.querySelector(".modal-title"),
                input_id = document.getElementById('id_secteur'),
                input_titre = document.getElementById('titre_secteur');
            input_des = document.getElementById('description_secteur');
            input_id.value = id;

            input_titre.value = titre;
            input_des.value = description;

            a.textContent = "Etes vous sure de vouloir Supprimé ce secteur d'activité? " ;
        });

    </script>--}}
@endsection
