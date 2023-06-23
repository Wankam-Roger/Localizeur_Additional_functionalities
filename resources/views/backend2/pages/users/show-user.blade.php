@extends('backend2.layouts.app')

@section('page-title', __('Utilisateurs'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('Modifier les informations d\'un Utilisateur')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('Tableau de Bord')</a></li>
                <li class="breadcrumb-item active">@lang('Modifier un Utilisateur')</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('Modifier un Utilisateur')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3"
                              enctype="multipart/form-data">


                            <div class="col-md-6">
                                <label for="name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}"
                                       readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Couriel</label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="{{$user->email}}" readonly>
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
                                <img src="{{ asset($user->profile_photo_path)}}" alt="{{ $user->id }}" width="250">
                                <br>

                            </div>


                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>


        </div>
    </section>

@endsection
