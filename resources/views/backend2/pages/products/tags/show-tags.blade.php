@extends('backend2.layouts.app')

@section('page-title', __('dash-list-tags.page-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('dash-list-tags.page-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebard.nav-dashboard')</a>
                </li>
                <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>
                <li class="breadcrumb-item active">@lang('dash-sidebard.nav-list-tags')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('dash-sidebard.nav-list-tags')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('dash-list-tags.table-name')</th>
                                <th scope="col">@lang('dash-list-tags.table-description')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <th scope="row"><a href="#">{{ $tag->codename }}</a></th>
                                    <td><a href="#" class="text-primary">{{ $tag->name }}</a></td>
                                    <td>{{ $tag->description }}</td>
                                    <td>
                                        <form action="{{ route('tags.destroy',[app()->getLocale() ,$tag->id]) }}"
                                              method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('tags.show',[app()->getLocale() ,$tag->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('tags.edit',[app()->getLocale() ,$tag->id]) }}">@lang('general.btn-edit')</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    disabled>@lang('general.btn-delete')</button>
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
