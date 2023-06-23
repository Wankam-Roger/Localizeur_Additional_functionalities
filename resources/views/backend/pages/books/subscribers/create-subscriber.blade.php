@extends('backend.layout.app')

@section('page_title','CREATE TAG')

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
                        <form method="post"
                              action="{{ route('admin_store_book_subscriber_page',[app()->getLocale()]) }}"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class=" col-md-6 form-group mb-4">
                                    <label for="name_fr">Noms <span style="color: red">*</span></label>
                                    <input type="text" required placeholder="Noms" id="name" class="form-control"
                                           name="name">
                                </div>

                                <div class=" col-md-6 form-group mb-4">
                                    <label for="name_fr">Email <span style="color: red">*</span></label>
                                    <input type="text" required placeholder="Email" id="email" class="form-control"
                                           name="email">
                                </div>

                            </div>

                            <div class=" form-group mb-4">
                                <label for="name_fr">Telephone <span style="color: red">*</span></label>
                                <input type="text" required placeholder="Telephone" id="phonenumber"
                                       class="form-control"
                                       name="phonenumber">
                            </div>

                            <div class="form-group mb-4">
                                <label for="short_description_fr">Ouvrage <span style="color: red">*</span></label>
                                <select class="form-select mb-3" name="book_id" aria-label="Default select example">
                                    @foreach($books as $book)
                                        <option value="{{$book->id}}">{{$book->title_fr}}</option>
                                    @endforeach


                                </select>
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
