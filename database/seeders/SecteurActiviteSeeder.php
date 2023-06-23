<?php

namespace Database\Seeders;

use App\Models\SecteurActivite;
use Illuminate\Database\Seeder;

class SecteurActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SecteurActivite::create(
            [
                'titre' => "Restaurant et Snack",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "Aeroport",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "Laboratoire D'analyse",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "Professionel du Droit",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "Centres de Formations",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "Experts Financiers",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "Fabrication Métallique et Plastique",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "Dermatologue",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "Opticien",
                'icon' => "mdi-sunglasses",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "Bijouterie",
                'icon' => "mdi-ring",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "Douanes et Transit",
                'icon' => "",
            ]
        );
    }

    /*
     *  {{--<div class="col-lg-4">
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
                                </div>--}}*/
}
