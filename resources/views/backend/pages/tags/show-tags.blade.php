@extends('backend.layout.app')

@section('page_title','SHOW TAGS')

@section('content')

    {{--<div class="row mb-4">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary bg-animation w-lg waves-effect waves-light d-grid">Add Post</button>
        </div>
    </div>--}}

    <div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Liste des Tags</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="tagList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <a type="button" href="{{ route('admin_create_tag_page',[app()->getLocale()]) }}" class="btn btn-primary bg-animation w-lg waves-effect waves-light d-grid">Ajouter un Tag</a>

                                        {{--<button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button>--}}
                                        {{--<button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>--}}
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="text" class="form-control search" placeholder="Search...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="tagTable">
                                    <thead class="table-light">
                                    <tr>

                                        <th class="sort" data-sort="name">Nom</th>
                                        <th class="sort" data-sort="description">Description</th>
                                        <th class="sort" data-sort="added_by">Ajouter Par</th>
                                        <th class="sort" data-sort="created_at">Date d'ajout</th>
                                        <th class="sort" data-sort="action">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list form-check-all">

                                    @foreach ($tags as $tag)
                                        <tr>

                                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">{{ $tag->id }}</a></td>
                                            <td class="name">{{ $tag->name_fr }}</td>
                                            <td class="description">{{ $tag->short_description_fr }}</td>
                                            <td class="added_by">{{ $tag->added_by }}</td>
                                            <td class="created_at">{{ date('d-m-Y', strtotime($tag->created_at)) }}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <button class="btn btn-sm btn-success edit-item-btn"
                                                                data-bs-toggle="modal" data-bs-target="#edittagModal"
                                                                data-bs-tag-id="{{ $tag->id }}"
                                                                data-bs-tag-des="{{ $tag->short_description_fr }}"
                                                                data-bs-tag-name="{{ $tag->name_fr }}" >Modifier</button>
                                                    </div>
                                                    <div class="remove">
                                                        <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deletetagModal"
                                                                data-bs-tag-id="{{ $tag->id }}">Supprimer</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach



                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                   colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                        </lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We have searched more than 150+ Orders We did not find any
                                            orders for you search.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0">

                                    </ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
    </div>
    <br>
    <br>
    <div></div>

    <div class="modal fade" id="edittagModal" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                </div>
                <form method="post" action="{{ route('admin_update_tag_page',[app()->getLocale()]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <div class="mb-3" id="modal-id" style="display: none;">
                            <label for="id-field" class="form-label">ID</label>
                            <input aria-readonly="true" type="text" id="id-field" name="id" class="form-control" placeholder="ID" readonly />
                        </div>

                        <div class="mb-3">
                            <label for="name-field" class="form-label">Nom du Tag</label>
                            <input type="text" id="name-field" name="name_fr" class="form-control" placeholder="Enter Name" required />
                        </div>

                        <div class="mb-3">
                            <label for="description-field" class="form-label">description</label>
                            <textarea  id="description-field" name="short_description_fr" rows="5" class="form-control" placeholder="Description" ></textarea>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>

                            <button type="submit" class="btn btn-success" id="edit-btn">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade zoomIn" id="deletetagModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                   colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Voulez vous vraiment supprimer cette categorie?<br> Cette action est irreversible</p>
                        </div>
                    </div>
                    <form method="post" action="{{ route('admin_delete_tag_page',[app()->getLocale()]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3" id="modal-id" style="display: none;">
                            <label for="id-field" class="form-label">ID</label>
                            <input aria-readonly="true" type="text" id="id-field-delete" name="id" class="form-control" placeholder="ID" readonly />
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn w-sm btn-danger " id="delete-record">Oui, Supprimer</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--end modal -->

    <script src="{{ asset('backend/js/pages/listjs.init.js')}}"></script>

    <script type="text/javascript">
        var edittagModal = document.getElementById("edittagModal");
        edittagModal.addEventListener("show.bs.modal", function (t) {
            var id = t.relatedTarget.getAttribute("data-bs-tag-id"), name = t.relatedTarget.getAttribute("data-bs-tag-name");
                var description = t.relatedTarget.getAttribute("data-bs-tag-des");

                var modal_title = edittagModal.querySelector(".modal-title");

                var id_input = document.getElementById("id-field");
                var name_input = document.getElementById("name-field");
                var des_input = document.getElementById("description-field");

            modal_title.textContent = "Modifier les information du tag " ,
                id_input.value = id;
            name_input.value = name;
            des_input.value = description;

        });


        var deletetagModal = document.getElementById("deletetagModal");
        deletetagModal.addEventListener("show.bs.modal", function (t) {
            var id = t.relatedTarget.getAttribute("data-bs-tag-id");
            var id_input = document.getElementById("id-field-delete");
                id_input.value = id;

        });
    </script>


    <!-- listjs init -->


    <!-- Sweet Alerts js -->
    <script src="{{ asset('backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>
@endsection
