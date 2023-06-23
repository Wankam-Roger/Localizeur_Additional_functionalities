@extends('backend2.layouts.app')

@section('page-title', __('Utilisateurs'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('Ajouter un Utilisateur')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('Tableau de Bord')</a></li>
                <li class="breadcrumb-item active">@lang('Ajouter un Utilisateur')</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('Ajouter un Utilisateur')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('users.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="col-md-6">
                                <label for="name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Couriel</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>


                            <div class="col-md-6">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>

                            <div class="col-md-6">
                                <label for="level" class="form-label">@lang('Niveau D\'accès')</label>
                                <select class="form-select" name="level" aria-label="Default select example">

                                    @for($i = 0; $i<=10; $i++ )
                                        <option value="{{ $i }}">{{$i }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="status" class="form-label">@lang('Statut')</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="0">Inactif</option>
                                    <option value="1">Actif</option>

                                </select>
                            </div>


                            <div class="col-md-12">
                                <label for="photo_path" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="photo_path" name="photo_path">
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


        </div>
    </section>
@endsection
