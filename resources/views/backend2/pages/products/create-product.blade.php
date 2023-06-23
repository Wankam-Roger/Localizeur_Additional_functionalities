@extends('backend2.layouts.app')

@section('page-title', __('products.create-product-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('products.create-product-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebard.nav-dashboard')</a>
                </li>
                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>
                <li class="breadcrumb-item active">@lang('products.create-product-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('products.create-product-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('products.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="col-md-6">
                                <label for="name_en" class="form-label">Name En</label>
                                <input type="text" class="form-control" name="name_en" id="name_en">
                            </div>
                            <div class="col-md-6">
                                <label for="name_fr" class="form-label">Noms Fr</label>
                                <input type="text" class="form-control" name="name_fr" id="name_fr">
                            </div>

                            <div class="col-md-6">
                                <label for="price" class="form-label">@lang('products.table-price')</label>
                                <input type="number" class="form-control" name="price" id="price">
                            </div>
                            <div class="col-md-6">
                                <label for="quantity_in_stock"
                                       class="form-label">@lang('products.table-quantity-in-stock')</label>
                                <input type="number" class="form-control" name="quantity_in_stock"
                                       id="quantity_in_stock">
                            </div>


                            <div class="col-md-12">
                                <label for="image_path" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="image_path" name="image_path">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="category_id" class="form-label">@lang('products.table-category')</label>
                                <select class="form-select" name="category_id" aria-label="Default select example">

                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="col-12">
                                <label for="short_description_en" class="form-label">Short Description En</label>
                                <textarea name="short_description_en" class="form-control" id="short_description_en"
                                          cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="short_description_fr" class="form-label">Short Description Fr</label>
                                <textarea name="short_description_fr" class="form-control" id="short_description_fr"
                                          cols="30" rows="3"></textarea>
                            </div>

                            <div class="col-12">
                                <label for="description_en" class="form-label">Description En</label>
                                <textarea name="description_en" class="tinymce-editor" id="description_en"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="description_fr" class="form-label">Description Fr</label>
                                <textarea name="description_fr" class="tinymce-editor" class="form-control"
                                          id="description_fr"></textarea>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">@lang('general.btn-submit')</button>
                                <button type="reset" class="btn btn-secondary">@lang('general.btn-reset')</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>


            <div class="col-lg-6">


            </div>

        </div>
    </section>
@endsection
