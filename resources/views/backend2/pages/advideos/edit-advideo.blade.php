@extends('backend2.layouts.app')

@section('page-title', __('Videos Publicitaire'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('Modifier une Video Publicitaires')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('Tableau de Bord')</a></li>
                <li class="breadcrumb-item active">@lang('Modifier une Video')</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('Modifier une Video')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('advideos.update', [app()->getLocale(), $advideo->id])  }}"
                              enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="col-md-6">
                                <label for="name_en" class="form-label">Name En</label>
                                <input type="text" class="form-control" name="name_en" id="name_en"
                                       value="{{ $advideo->name_en }}">
                            </div>
                            <div class="col-md-6">
                                <label for="name_fr" class="form-label">Noms Fr</label>
                                <input type="text" class="form-control" name="name_fr" id="name_fr"
                                       value="{{ $advideo->name_fr }}">
                            </div>
                            <div class="col-12">
                                <label for="description_en" class="form-label">Description En</label>
                                <textarea name="short_description_en" class="form-control" id="short_description_en"
                                          cols="30" rows="3">{{ $advideo->short_description_en }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="description_fr" class="form-label">Description Fr</label>
                                <textarea name="short_description_fr" class="form-control" id="short_description_fr"
                                          cols="30" rows="3">{{ $advideo->short_description_fr }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="youtube_link" class="form-label">Lien Youtube de la Video</label>
                                <input type="url" class="form-control" name="youtube_link" id="youtube_link"
                                       value="{{ $advideo->youtube_link }}">
                            </div>

                            <div class="col-md-6">
                                <label for="company_id" class="form-label">@lang('Entreprise')</label>
                                <select class="form-select" name="company_id" aria-label="Default select example">

                                    @foreach ($enterprises as $enterprise)

                                        <option
                                            {{ $advideo->enterprise && $advideo->enterprise->id == $enterprise->id ? "selected" : "" }} value="{{$enterprise->id}}">{{$enterprise->raison_social }}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="status" class="form-label">@lang('Statut')</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="0" {{ !$advideo->status ? "selected" : '' }}>Inactif</option>
                                    <option value="1" {{ $advideo->status ? "selected" : '' }}>Actif</option>

                                </select>
                            </div>


                            <div class="col-md-12">
                                <img src="{{ asset($advideo->image_path)}}" alt="{{ $advideo->id }}" width="250">
                                <br>
                                <label for="image_path" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="image_path" name="image_path">
                                </div>
                            </div>


                            <div class="text-center">
                                <button type="submit"
                                        class="btn btn-primary btn-primary-custom">@lang('Soumettre')</button>
                                <button type="reset" class="btn btn-secondary">@lang('Reinitialiser')</button>
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
