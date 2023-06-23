@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-center">
                    <h4 class="mb-sm-0 font-size-18">Formulaire des Souscripteurs</h4>


                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center ">
            <div class="col-xl-10">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title mb-4">Form Grid Layout</h4>--}}

                        <input type="hidden" class="form-control" name=">subscriber_mail_id"
                               value="{{$suscriber_mail->email}}"/>


                        <div class="mb-3">
                            <label for="titre" class="form-label">{{ __('email') }}</label>
                            <input type="text" class="form-control" id="email" name="email"
                                   value="{{$suscriber_mail->email}}"/>
                        </div>

                        <hr>

                        <div class="mb-3">
                            <label for="description" class="form-label">{{ __('ip_sender') }}</label>
                            <input type="text" class="form-control" id="ip_sender"
                                   name="ip_sender" {{$suscriber_mail->ip_sender}}/>

                        </div>


                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->


        </div>
        <!-- end row -->


    </div> <!-- container-fluid -->
@endsection
