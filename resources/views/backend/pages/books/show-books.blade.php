@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Listes des Livres</h4>

                        <a href="{{ route('admin_create_book_page', app()->getLocale()) }}" type="button"
                           class="button  btn btn-primary w-md"> Ajouter un Livre</a>
                        <br>
                        <br>

                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('image') }}</th>
                                <th>{{ __('title') }}</th>
                                <th>{{ __('number_visits') }}</th>
                                <th>{{ __('demandes') }}</th>
                                <th>{{ __('action') }}</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($books as $book)
                                <tr id="{{ $book->id }}">

                                    <td>{{ $book->id }}</td>
                                    <td><img src="{{ asset($book->image_path) }}" alt="{{ $book->image_path }}"
                                             class="avatar-md h-auto d-block rounded">
                                    </td>
                                    <td>{{ $book->title_fr }}</td>
                                    <td>{{ $book->number_visits }}</td>
                                    <td>{{ sizeof($book->subscribers) }}</td>
                                    <td><a href="{{ route('admin_edit_book_page',[app()->getLocale(), $book->id]) }}"
                                           class="btn btn-outline-primary btn-sm edit" title="Edit">
                                            <i class="fas fa-edit "></i>
                                        </a>
                                        <a class="btn btn-outline-success btn-sm edit" title="View">
                                            <i class="fas fa-eye "></i>
                                        </a>

                                        <a href="" class="btn btn-outline-danger btn-sm edit" title="Delete">
                                            <i class="fas fa-trash-alt  "></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
@endsection
