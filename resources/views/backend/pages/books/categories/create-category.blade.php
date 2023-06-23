@extends('backend.layout.app')

@section('page_title','CREATE CATEGORY')

@section('content')



    <div class="card border card-border-primary">
        <div class="card-header">
            The Elements with * are mandatory!!!!!
        </div>

        <div class="card-body">

            <div class="row"></div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <form method="post" action="{{ route('admin_store_book_category_page',[app()->getLocale()]) }}"
                              enctype="multipart/form-data">
                            @csrf


                            <div class="form-group mb-4">
                                <label for="name_fr">Noms <span style="color: red">*</span></label>
                                <input type="text" required placeholder="Titre" id="name_fr" class="form-control"
                                       name="name_fr">
                            </div>

                            <div class="form-group mb-4">
                                <label for="short_description_fr">Description de la Categorie <span
                                        style="color: red"></span></label>
                                <textarea id="short_description_fr" class="form-control" name="short_description_fr"
                                          rows="5">

                            </textarea>
                            </div>


                            <div class="form-group mb-4">
                                <button type="submit" class="form-control btn btn-primary ">Creer</button>
                            </div>

                        </form>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>

        </div>


    </div>

    <script src="//cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
