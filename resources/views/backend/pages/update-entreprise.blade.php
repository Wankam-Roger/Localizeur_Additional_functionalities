@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-center">
                    <h4 class="mb-sm-0 font-size-18">Formulaire de modification d'entreprise</h4>


                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center ">
            <div class="col-xl-10">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title mb-4">Form Grid Layout</h4>--}}

                        <form method="POST" action="{{ route('update-enterprise', app()->getLocale())  }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="raison_sociale" class="form-label">{{ __('identifier') }}</label>
                                <input type="text" readonly class="form-control" value="{{$enterprise->id}}" id="id" name="enterprise_id">
                            </div>
                            <div class="mb-3">
                                <label for="raison_sociale" class="form-label">{{ __('raison') }}</label>
                                <input type="text" class="form-control" value="{{$enterprise->raison_social}}" id="raison_sociale" name="raison_social">
                            </div>
                            <div class="mb-3">
                                <label for="slogan" class="form-label">{{ __('slogan') }}</label>
                                <input type="text" class="form-control" value="{{$enterprise->slogan}}" id="slogan" name="slogan">
                            </div>
                            <div class="mb-3">
                                <label for="short_description" class="form-label">{{ __('short_description') }}</label>
                                <textarea name="short_description" id="short_description" class="form-control">{{$enterprise->short_description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('description') }}</label>
                                <textarea name="description" id="description"  class="form-control">{{$enterprise->description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="services" class="form-label">{{ __('services') }}</label>
                                <textarea name="services" id="services"  class="form-control">{{$enterprise->services}}</textarea>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="registre_comm" class="form-label">{{ __('registre') }}</label>
                                        <input type="text" class="form-control" id="registre_comm" value="{{$enterprise->registre_commerce}}"
                                               name="registre_commerce">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="contribuable" class="form-label">{{ __('contribuable') }}</label>
                                        <input type="text" class="form-control" id="contribuable" value="{{$enterprise->carte_contribuable}}"
                                               name="carte_contribuable">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="chiffres_affaires"
                                               class="form-label">{{ __('chiffre-affaire') }}</label>
                                        <input type="text" name="chiffres_affaires" class="form-control" value="{{$enterprise->chiffres_affaires}}"
                                               id="chiffres_affaires">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nombre_employees"
                                               class="form-label">{{ __('nombre_employees') }}</label>
                                        <input type="text" class="form-control" id="nombre_employees" value="{{$enterprise->nombre_employees}}"
                                               name="nombre_employees">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="formrow-inputState" class="form-label">{{ __('statut-j') }}</label>
                                        <select id="statut-j" name="statut_juridique" class="form-select">
                                            <option selected>Choisissez...</option>
                                            <option>ETS</option>
                                            <option>SARL</option>
                                            <option>SA</option>
                                            <option>CONSULTANT INDIVIDUEL</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="type-entreprise"
                                               class="form-label">{{ __('type-entreprise') }}</label>
                                        <select id="type-entreprise" name="type_entreprise" class="form-select">
                                            <option selected>Choisissez...</option>
                                            <option>TPE</option>
                                            <option>PE</option>
                                            <option>PME</option>
                                            <option>PMI</option>
                                            <option>GE</option>

                                        </select>
                                    </div>
                                </div>



                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="secteur_activite"
                                               class="form-label">{{ __('secteur_activite') }}</label>
                                        <select id="secteur_activite" name="secteur_activite" class="form-select">
                                            @foreach ($secteurs as $secteur)

                                                @if($enterprise->secteur->id == $secteur->id )
                                                    <option selected value="{{ $secteur->id }}">{{ $secteur->titre }}</option>
                                                @else
                                                    <option value="{{ $secteur->id }}">{{ $secteur->titre }}</option>
                                                @endif

                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <hr>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="localisation_pays"
                                               class="form-label">{{ __('localisation_pays') }}</label>

                                        <select id="localisation_pays" name="localisation_pays" class="form-select">
                                            @foreach ($countries as $country)

                                                @if($enterprise->country->id == $country->id )
                                                    <option selected value="{{ $country->id }}">{{ $country->titre }}</option>
                                                @else
                                                    <option value="{{ $country->id }}">{{ $country->titre }}</option>
                                                @endif

                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="localisation_ville"
                                               class="form-label">{{ __('localisation_ville') }}</label>

                                        <select id="localisation_ville" name="localisation_ville" class="form-select">
                                            @foreach ($towns as $town)

                                                @if($enterprise->town->id == $town->id )
                                                    <option selected value="{{ $town->id }}" >{{ $town->titre }}</option>
                                                @else
                                                    <option value="{{ $town->id }}">{{ $town->titre}}</option>
                                                @endif

                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="localisation_ville"
                                               class="form-label">{{ __('localisation_street') }}</label>

                                        <select id="localisation_street" name="localisation_street" class="form-select">
                                            @foreach ($streets as $street)

                                                @if($enterprise->street->id == $street->id )
                                                    <option selected value="{{ $street->id }}">{{ $street->titre }}</option>
                                                @else
                                                    <option value="{{ $street->id }}">{{ $street->titre }}</option>
                                                @endif

                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-lg-12">
                                    <div class=" mb-3">
                                        <label for="localisation_adresse"
                                               class="form-label">{{ __('localisation_adresse') }}</label>

                                        <input type="text" class="form-control" id="localisation_adresse" value="{{$enterprise->localisation_adresse}}"
                                               name="localisation_adresse">

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class=" mb-3">
                                        <label for="localisation_bp"
                                               class="form-label">{{ __('localisation_bp') }}</label>

                                        <input type="text" class="form-control" id="localisation_bp"  value="{{$enterprise->localisation_bp}}"
                                               name="localisation_bp">

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" mb-3">
                                        <label for="localisation_tel"
                                               class="form-label">{{ __('localisation_tel') }}</label>

                                        <input type="text" class="form-control" id="localisation_tel" value="{{$enterprise->localisation_tel}}"
                                               name="localisation_tel">

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" mb-3">
                                        <label for="localisation_tel"
                                               class="form-label">{{ __('localisation_tel_2') }}</label>

                                        <input type="text" class="form-control" id="localisation_tel_2" value="{{$enterprise->localisation_tel_2}}"
                                               name="localisation_tel_2">

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class=" mb-3">
                                        <label for="localisation_email"
                                               class="form-label">{{ __('localisation_email') }}</label>

                                        <input type="text" class="form-control" id="localisation_email" value="{{$enterprise->localisation_email}}"
                                               name="localisation_email">

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class=" mb-3">
                                        <label for="localisation_siteweb"
                                               class="form-label">{{ __('localisation_siteweb') }}</label>

                                        <input type="text" class="form-control" id="localisation_siteweb" value="{{$enterprise->localisation_siteweb}}"
                                               name="localisation_siteweb">

                                    </div>
                                </div>


                            </div>



                            <hr style="border: 1px solid deepskyblue;">

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class=" mb-3">
                                        <label for="social_media_facebook"
                                               class="form-label">{{ __('social_media_facebook') }}</label>

                                        <input type="text" class="form-control" id="social_media_facebook"
                                               value="{{$enterprise->social_media_facebook}}" name="social_media_facebook">

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" mb-3">
                                        <label for="social_media_linkedin"
                                               class="form-label">{{ __('social_media_linkedin') }}</label>

                                        <input type="text" class="form-control" id="social_media_linkedin"
                                               value="{{$enterprise->social_media_linkedin}}" name="social_media_linkedin">

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" mb-3">
                                        <label for="social_media_whatsapp"
                                               class="form-label">{{ __('social_media_whatsapp') }}</label>

                                        <input type="text" class="form-control" id="social_media_whatsapp"
                                               value="{{$enterprise->social_media_whatsapp}}" name="social_media_whatsapp">

                                    </div>
                                </div>
                            </div>

                            <hr style="color: red">

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="formrow-inputState" class="form-label">{{ __('top_10') }}</label>
                                        <select id="top_10" name="top_10" class="form-select">
                                            @if($enterprise->top_10)
                                                <option value="true" selected>{{ __('yes') }}</option>
                                                <option value="false" >{{ __('no') }}</option>
                                            @else
                                                <option value="false" selected>{{ __('no') }}</option>
                                                <option value="true" >{{ __('yes') }}</option>
                                            @endif

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="formrow-inputState" class="form-label">{{ __('top_30') }}</label>
                                        <select id="top_30" name="top_30" class="form-select">
                                            @if($enterprise->top_30)
                                                <option value="true" selected>{{ __('yes') }}</option>
                                                <option value="false" >{{ __('no') }}</option>
                                            @else
                                                <option value="false" selected>{{ __('no') }}</option>
                                                <option value="true" >{{ __('yes') }}</option>
                                            @endif

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="formrow-inputState" class="form-label">{{ __('top_50') }}</label>
                                        <select id="top_50" name="top_50" class="form-select">
                                            @if($enterprise->top_50)
                                                <option value="true" selected>{{ __('yes') }}</option>
                                                <option value="false" >{{ __('no') }}</option>
                                            @else
                                                <option value="false" selected>{{ __('no') }}</option>
                                                <option value="true" >{{ __('yes') }}</option>
                                            @endif

                                        </select>
                                    </div>
                                </div>


                            </div>

                            <hr>

                            <div class="mb-3">
                                <label for="logo" class="form-label">{{ __('logo') }}</label>
                                <input class="form-control" type="file" id="logo" name="logo" accept="image/*"/>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier" name="fichier" accept="image/*"/>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier2" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier2" name="fichier2">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier3" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier3" name="fichier3">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier4" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier4" name="fichier4">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier5" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier5" name="fichier5">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier6" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier6" name="fichier6">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier7" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier7" name="fichier7">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier8" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier8" name="fichier8">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier9" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier9" name="fichier9">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier10" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier10" name="fichier10">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier11" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier11" name="fichier11">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier12" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier12" name="fichier12">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier13" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier13" name="fichier13">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier14" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier14" name="fichier14">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="fichier15" class="form-label">{{ __('company-image') }}</label>
                                        <input class="form-control" type="file" id="fichier15" name="fichier15">
                                    </div>
                                </div>
                            </div>


                            <div>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
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
