@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Listes des Critères de Notations D'entreprises</h4>

                        <a href="{{ route('admin_create_subscriber_mail_page', app()->getLocale()) }}" type="button"
                           class="button  btn btn-primary w-md"> Ajouter </a>
                        <br>
                        <br>

                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('email') }}</th>
                                <th>{{ __('ip_sender') }}</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($subscriber_mails as $subscriber_mail)
                                <tr>

                                    <td>{{ $subscriber_mail->id }}</td>
                                    <td>{{ $subscriber_mail->email }}</td>
                                    <td>{{ $subscriber_mail->ip_sender }}</td>

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
