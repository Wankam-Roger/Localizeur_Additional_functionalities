

@extends('backend2.layouts.app')

@section('page-title', __('enterprises'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('Nos Entreprises')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('Tableau de Bord')</a></li>
                <li class="breadcrumb-item active">@lang('Les Entreprises')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('enterprises.create', app()->getLocale())  }}" class="btn btn-primary"><i
                        class="bi bi-bag-plus me-1"></i> @lang('Ajouter une entreprise')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('Listes des entreprises')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>

                                <th scope="col">@lang('Apercu')</th>
                                <th scope="col">@lang('Raison Sociale')</th>

                                <th scope="col">@lang("Secteur")</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($enterprises as $enterprise)
                                <tr>

                                    <th scope="row"><a href="#"><img src="{{ asset($enterprise->photo_path)}}"
                                                                     alt="{{ $enterprise->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $enterprise->raison_social }}</a></td>
                                    <td>{{  $enterprise->secteur ? $enterprise->secteur->titre : ''  }}</td>
                                    <td>
                                        <form
                                            action="{{ route('enterprises.destroy',[app()->getLocale() ,$enterprise->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('enterprises.show',[app()->getLocale() ,$enterprise->id]) }}"><i
                                                    class="bi bi-eye"></i></a>

                                            <a class="btn btn-warning"
                                               href="{{ route('enterprises.edit',[app()->getLocale() ,$enterprise->id]) }}"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                            ><i class="bi bi-trash"></i></button>
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
