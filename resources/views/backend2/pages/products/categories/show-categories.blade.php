@extends('backend2.layouts.app')

@section('page-title', __('categories.show-categories-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('categories.show-categories-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('dash-sidebar.nav-show-category')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('dash-sidebard.nav-list-categories')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('categories.table-name')</th>
                                <th scope="col">@lang('categories.table-description')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($pcategories as $category)
                                <tr>
                                    <th scope="row"><a href="#">{{ $category->codename }}</a></th>
                                    <td><a href="#" class="text-primary">{{ $category->name }}</a></td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        <form
                                            action="{{ route('pcategories.destroy',[app()->getLocale() ,$category->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('pcategories.show',[app()->getLocale() ,$category->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('pcategories.edit',[app()->getLocale() ,$category->id]) }}">@lang('general.btn-edit')</a>
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
