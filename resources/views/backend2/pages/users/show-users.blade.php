@extends('backend2.layouts.app')

@section('page-title', __('Utilisateurs'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('Utilisateurs')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('Tableau de Bord')</a></li>
                <li class="breadcrumb-item active">@lang('Les Utilisateurs')</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('users.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('Ajoutez un Utilisateur')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('Liste des utilisateurs')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">Apercu</th>
                                <th scope="col">@lang('Noms')</th>
                                <th scope="col">@lang('Email')</th>
                                <th scope="col">@lang('Niveau')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row"><a href="#"><img src="{{ asset($user->profile_photo_path)}}"
                                                                     alt="{{ $user->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $user->name }}</a></td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>
                                        <form
                                            action="{{ route('users.destroy',[app()->getLocale() ,$user->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('users.show',[app()->getLocale() ,$user->id]) }}">@lang('Voir')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('users.edit',[app()->getLocale() ,$user->id]) }}">@lang('Modif.')</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="btn btn-danger" {{ Auth::user()->level > 5 ? "" : "disabled" }}>@lang('Supp.')</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
