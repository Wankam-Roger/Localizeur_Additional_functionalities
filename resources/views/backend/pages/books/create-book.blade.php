@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-center">
                    <h4 class="mb-sm-0 font-size-18">Formulaire d'Ajout de Livre</h4>


                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center ">
            <div class="col-xl-10">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title mb-4">Form Grid Layout</h4>--}}

                        <form method="POST" action="{{ route('admin_store_book_page', app()->getLocale()) }}"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-4">
                                <label for="formFile" class="form-label">Image de Bannière</label>
                                <input class="form-control" type="file" id="formFile" name="banner">
                            </div>

                            <div class="form-group mb-4">
                                <label for="formFile" class="form-label">Image 01<span style="color: red">*</span>
                                </label>
                                <input class="form-control" type="file" id="formFile" name="image_path" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="formFile" class="form-label">Image 02<span style="color: red">*</span>
                                </label>
                                <input class="form-control" type="file" id="formFile" name="image_path2">
                            </div>

                            <div class="form-group mb-4">
                                <label for="title_fr">Titre <span style="color: red">*</span></label>
                                <input type="text" placeholder="Titre" id="title_fr" class="form-control"
                                       name="title_fr">
                            </div>

                            <div class="form-group mb-4">
                                <label for="title_fr">Auteur <span style="color: red">*</span></label>
                                <input type="text" placeholder="Auteur" id="author" class="form-control" name="author"
                                       required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="short_description_fr">Résumé du Livre <span
                                        style="color: red">*</span></label>
                                <textarea id="short_description_fr" class="form-control" name="short_description_fr"
                                          rows="5">
                                </textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="">Contenu </label>
                                <textarea class="ckeditor form-control" name="description_fr"></textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="title_fr">Temps de lecture <span style="color: red">*</span></label>
                                <input type="number" placeholder="Temps de lecture" id="post_read_time"
                                       class="form-control" name="post_read_time">
                            </div>

                            <div class="form-group mb-4">
                                <label for="short_description_fr">Categorie <span style="color: red">*</span></label>
                                <select class="form-select mb-3" name="category_id" aria-label="Default select example">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name_fr}}</option>
                                    @endforeach


                                </select>
                            </div>

                            <div class="form-group mb-4">
                                <label for="short_description_fr">Tags <span style="color: red">*</span></label>
                                <select class="form-select mb-3" multiple name="tags[]"
                                        aria-label="multiple Default select example">
                                    @foreach($tags ?? '' as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name_fr}}</option>
                                    @endforeach


                                </select>
                            </div>

                            <div class="form-group mb-4">
                                <label for="formFile" class="form-label">Livre</label>
                                <input class="form-control" type="file" id="formFile" name="book_path">
                            </div>


                            <div>
                                <button type="submit" class="btn btn-primary w-md">Enregistrer</button>
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

<script src="//cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
