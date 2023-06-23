@extends('backend.layout.app')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-center">
                    <h4 class="mb-sm-0 font-size-18">Formulaire d'ajout d'entreprise</h4>


                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center ">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title mb-4">Form Grid Layout</h4>--}}

                        <form method="POST" action="{{ route('store-enterprise', app()->getLocale())  }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="raison_sociale" class="form-label">{{ __('raison') }}</label>
                                                <input type="text" class="form-control" id="raison_sociale" name="raison_social">
                                            </div>
                                            <div class="mb-3">
                                                <label for="slogan" class="form-label">{{ __('slogan') }}</label>
                                                <input type="text" class="form-control" id="slogan" name="slogan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="short_description" class="form-label">{{ __('short_description') }}</label>
                                                <textarea name="short_description" id="short_description" class="form-control"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">{{ __('description') }}</label>
                                                <textarea name="description" id="description" class="form-control"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="services" class="form-label">{{ __('services') }}</label>
                                                <textarea name="services" id="services" class="form-control"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="produits" class="form-label">{{ __('produits') }}</label>
                                                <textarea name="produits" id="produits" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="registre_comm" class="form-label">{{ __('registre') }}</label>
                                                        <input type="text" class="form-control" id="registre_comm"
                                                               name="registre_commerce">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="contribuable" class="form-label">{{ __('contribuable') }}</label>
                                                        <input type="text" class="form-control" id="contribuable"
                                                               name="carte_contribuable">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="chiffres_affaires"
                                                               class="form-label">{{ __('chiffre-affaire') }}</label>
                                                        <input type="text" name="chiffres_affaires" class="form-control"
                                                               id="chiffres_affaires">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="nombre_employees"
                                                               class="form-label">{{ __('nombre_employees') }}</label>
                                                        <input type="text" class="form-control" id="nombre_employees"
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

                                                {{--<div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="secteur_activite"
                                                               class="form-label">{{ __('secteur_activite') }}</label>
                                                        <select id="secteur_activite" name="secteur_activite" class="form-select">
                                                            <option selected>Choisissez...</option>
                                                            <option>Restaurant et Snack</option>
                                                            <option>Aeroport</option>
                                                            <option>Cinema</option>
                                                            <option>Soins Estétique</option>
                                                            <option>Hotes</option>
                                                            <option>Centres de Santé</option>
                                                            <option>Supermarché</option>
                                                            <option>Vente et Location Automobile</option>
                                                            <option>Location des bureaux</option>
                                                            <option>Activité Touristique</option>
                                                            <option>Transport et Logistique</option>
                                                            <option>Sécurité et Surveillance</option>
                                                            <option>Conseils Fiscaux et Financier</option>
                                                            <option>Architecte et Cabinet BTP</option>
                                                            <option>Solutions Numérique</option>
                                                            <option>Nettoyage Industriel et Domestique</option>
                                                            <option>Centres de Jeux et Loisirs</option>
                                                            <option>Douanes et Transit</option>
                                                            <option>Laboratoire D'analyse</option>
                                                            <option>Professionel du Droit</option>
                                                            <option>Centres de Formations</option>
                                                            <option>Experts Financiers</option>
                                                            <option>Fabrication Métallique et Plastique</option>
                                                            <option>Dermatologue</option>
                                                            <option>Opticien</option>
                                                            <option>Bijouterie</option>

                                                        </select>
                                                    </div>
                                                </div>--}}

                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="secteur_activite"
                                                               class="form-label">{{ __('secteur_activite') }}</label>
                                                        <select id="secteur_activite" name="secteur_activite" class="form-select">
                                                            @foreach ($secteurs as $secteur)
                                                                <option value="{{ $secteur->id }}">{{ $secteur->titre }}</option>
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
                                                                <option value="{{ $country->id }}">{{ $country->titre }}</option>
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
                                                                <option value="{{ $town->id }}">{{ $town->titre }}</option>
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
                                                                <option value="{{ $street->id }}">{{ $street->titre }}</option>
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

                                                        <input type="text" class="form-control" id="localisation_adresse"
                                                               name="localisation_adresse">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class=" mb-3">
                                                        <label for="localisation_bp"
                                                               class="form-label">{{ __('localisation_bp') }}</label>

                                                        <input type="text" class="form-control" id="localisation_bp"
                                                               name="localisation_bp">

                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class=" mb-3">
                                                        <label for="localisation_tel"
                                                               class="form-label">{{ __('localisation_tel') }}</label>

                                                        <input type="text" class="form-control" id="localisation_tel"
                                                               name="localisation_tel">

                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class=" mb-3">
                                                        <label for="localisation_tel"
                                                               class="form-label">{{ __('localisation_tel_2') }}</label>

                                                        <input type="text" class="form-control" id="localisation_tel_2"
                                                               name="localisation_tel_2">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class=" mb-3">
                                                        <label for="localisation_email"
                                                               class="form-label">{{ __('localisation_email') }}</label>

                                                        <input type="text" class="form-control" id="localisation_email"
                                                               name="localisation_email">

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class=" mb-3">
                                                        <label for="localisation_siteweb"
                                                               class="form-label">{{ __('localisation_siteweb') }}</label>

                                                        <input type="text" class="form-control" id="localisation_siteweb"
                                                               name="localisation_siteweb">

                                                    </div>
                                                </div>


                                            </div>

                                        </div>
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
                                               name="social_media_facebook">

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" mb-3">
                                        <label for="social_media_linkedin"
                                               class="form-label">{{ __('social_media_linkedin') }}</label>

                                        <input type="text" class="form-control" id="social_media_linkedin"
                                               name="social_media_linkedin">

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" mb-3">
                                        <label for="social_media_whatsapp"
                                               class="form-label">{{ __('social_media_whatsapp') }}</label>

                                        <input type="text" class="form-control" id="social_media_whatsapp"
                                               name="social_media_whatsapp">

                                    </div>
                                </div>
                            </div>

                            <hr style="color: red">

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
