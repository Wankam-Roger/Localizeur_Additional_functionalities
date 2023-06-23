@extends('backend.layout.app')

@section('page_title','SHOW JOURNALS')

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
                        <h4 class="card-title mb-0">List des Profiles</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <a type="button" href="{{ route('admin_create_journal_page',[app()->getLocale()]) }}" class="btn btn-primary bg-animation w-lg waves-effect waves-light d-grid">Ajouter un Profile</a>

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
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                    <tr>
                                        <th>Image</th>
                                        
                                        <th class="sort" data-sort="title">Titre</th>
                                        <th class="sort" data-sort="author">Auteur</th>
                                        <th class="sort" data-sort="category">Category</th>

                                        <th class="sort" data-sort="status">Status</th>
                                        <th class="sort" data-sort="action">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                    @foreach($posts as $post)
                                        <tr>
                                            <th scope="row">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset($post->banner) }}" class="rounded img-fluid"
                                                         style="height: 60px;" alt="">
                                                </div>
                                            </th>
                                            <td class="title">{{ $post->title_fr }}</td>
                                            <td class="author">{{ $post->author }}</td>
                                            <td class="category">{{ $post->category ? $post->category->name_fr :  "" }}</td>

                                            @if($post->status == 1)
                                                <td class="status"><span
                                                        class="badge badge-soft-success text-uppercase">Active</span>
                                                </td>
                                            @else
                                                <td class="status"><span class="badge badge-soft-danger text-uppercase">Inactive</span>
                                                </td>
                                            @endif

                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="view">
                                                        <a class="btn btn-sm btn-blue " href="{{ route('admin_show_journal_page',[app()->getLocale(), $post->id]) }}">Voir</a>
                                                    </div>
                                                    <div class="edit">
                                                        <a class="btn btn-sm btn-success edit-item-btn" href="{{ route('admin_edit_journal_page',[app()->getLocale(), $post->id]) }}">Modifier</a>
                                                    </div>
                                                    <div class="remove">
                                                        <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deletePostModal" data-bs-post-id="{{ $post->id }}">Supprimer</button>
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
                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                            orders for you search.</p>
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

    <!-- Modal -->
    <div class="modal fade zoomIn" id="deletePostModal" tabindex="-1" aria-hidden="true">
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
                            <p class="text-muted mx-4 mb-0">Voulez vous vraiment supprimer ce poste?<br> Cette action est irreversible</p>
                        </div>
                    </div>
                    <form method="post" action="{{ route('admin_delete_journal_page',[app()->getLocale()]) }}" enctype="multipart/form-data">
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

<script type="text/javascript">
    var deletePostModal = document.getElementById("deletePostModal");
    deletePostModal.addEventListener("show.bs.modal", function (t) {
    var id = t.relatedTarget.getAttribute("data-bs-post-id");
    var id_input = document.getElementById("id-field-delete");
    id_input.value = id;

    });
</script>

@endsection
