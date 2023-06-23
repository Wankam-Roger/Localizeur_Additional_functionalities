@extends('backend2.layouts.app')

@section('page-title', __('Videos Publicitaire'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('Nos videos Publicitaires')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('Tableau de Bord')</a></li>
                <li class="breadcrumb-item active">@lang('Les Videos')</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('advideos.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('Ajoutez une Vidéo')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('Liste des videos')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">Apercu</th>
                                <th scope="col">@lang('Noms')</th>
                                <th scope="col">@lang('Description')</th>
                                <th scope="col">@lang('Entreprise')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($advideos as $advideo)
                                <tr>
                                    <th scope="row"><a href="#"><img src="{{ asset($advideo->image_path)}}"
                                                                     alt="{{ $advideo->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $advideo->name_fr }}</a></td>
                                    <td>{{ $advideo->short_description_fr }}</td>
                                    <td>{{ $advideo->enterprise->raison_social }}</td>
                                    <td>
                                        <form
                                            action="{{ route('advideos.destroy',[app()->getLocale() ,$advideo->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('advideos.show',[app()->getLocale() ,$advideo->id]) }}">@lang('Voir')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('advideos.edit',[app()->getLocale() ,$advideo->id]) }}">@lang('Modif.')</a>
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
