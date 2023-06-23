@extends('backend2.layouts.app')

@section('page-title', __('categories.edit-category-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('categories.edit-category-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebard.nav-dashboard')</a>
                </li>
                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>
                <li class="breadcrumb-item active">@lang('categories.edit-category-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('dash-sidebard.nav-add-category')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('categories.update', [app()->getLocale(), $category->id])  }}">

                            @csrf
                            @method('PUT')

                            <div class="col-md-6">
                                <label for="name_en" class="form-label">Name En</label>
                                <input type="text" class="form-control" name="name_en" id="name_en"
                                       value="{{$category->getTranslation('name', 'en')}}">
                            </div>
                            <div class="col-md-6">
                                <label for="name_fr" class="form-label">Noms Fr</label>
                                <input type="text" class="form-control" name="name_fr" id="name_fr"
                                       value="{{$category->getTranslation('name', 'fr')}}">
                            </div>
                            <div class="col-12">
                                <label for="description_en" class="form-label">Description En</label>
                                <textarea name="description_en" class="form-control" id="description_en" cols="30"
                                          rows="3">{{$category->getTranslation('description', 'en')}}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="description_fr" class="form-label">Description Fr</label>
                                <textarea name="description_fr" class="form-control" id="description_fr" cols="30"
                                          rows="3">{{$category->getTranslation('description', 'fr')}}</textarea>
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
