<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Critere;
use App\Models\HeroSectionSlider;
use App\Models\SecteurActivite;
use App\Models\Street;
use App\Models\Town;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => "Steve Monthe",
            'email' => 'montheadrien@gmail.com',
            'password' => bcrypt('Strangulation1@'),
        ]);

        DB::table('users')->insert([
            'name' => "Paul Martin",
            'email' => 'paul.martin@localizeur.com',
            'password' => bcrypt('PaulMartin1@'),
        ]);

        SecteurActivite::truncate();

        HeroSectionSlider::truncate();

        Critere::truncate();

        Critere::create(
            [
                'titre' => "Accueil/orientation",
            ]
        );

        Critere::create(
            [
                'titre' => "Écoute client",
            ]
        );

        Critere::create(
            [
                'titre' => "Professionalisme",
            ]
        );

        Critere::create(
            [
                'titre' => "Célérité du service",
            ]
        );

        Critere::create(
            [
                'titre' => "Propreté des locaux",
            ]
        );

        Critere::create(
            [
                'titre' => "Design intérieur",
            ]
        );

        Critere::create(
            [
                'titre' => "Service après vente",
            ]
        );

        Critere::create(
            [
                'titre' => "Satisfaction clients",
            ]
        );

        Critere::create(
            [
                'titre' => "Accès au crédit",
            ]
        );

        Critere::create(
            [
                'titre' => "Accompagnement du client",
            ]
        );

        Critere::create(
            [
                'titre' => "Qualité des produits et services",
            ]
        );

        Critere::create(
            [
                'titre' => "Coût et accessibilité",
            ]
        );

        Country::truncate();

        Country::create(
            [
                'titre' => "Cameroun",
            ]
        );

        Country::create(
            [
                'titre' => "France",
            ]
        );

        Country::create(
            [
                'titre' => "England",
            ]
        );

        Country::create(
            [
                'titre' => "United States of America",
            ]
        );

        Town::truncate();

        Town::create(
            [
                'titre' => "Yaounde",
            ]
        );

        Town::create(
            [
                'titre' => "Douala",
            ]
        );
        Town::create(
            [
                'titre' => "Buea",
            ]
        );
        Town::create(
            [
                'titre' => "Bafoussam",
            ]
        );
        Town::create(
            [
                'titre' => "Garoua",
            ]
        );
        Town::create(
            [
                'titre' => "Maroua",
            ]
        );
        Town::create(
            [
                'titre' => "Bamenda",
            ]
        );
        Town::create(
            [
                'titre' => "Ngaoundere",
            ]
        );
        Town::create(
            [
                'titre' => "Kumba",
            ]
        );



        Street::truncate();

        Street::create(
            [
                'titre' => "Bonapriso",
            ]
        );

        Street::create(
            [
                'titre' => "Bonanjo",
            ]
        );

        Street::create(
            [
                'titre' => "Ange Raphael",
            ]
        );

        Street::create(
            [
                'titre' => "Deido",
            ]
        );

        Street::create(
            [
                'titre' => "Akwa",
            ]
        );

        Street::create(
            [
                'titre' => "Bonamoussadi",
            ]
        );

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
                'titre' => "SOCIETES D’EXPLOITATION ET EXPLORATION GAZIERE ET PETROLIERES",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "DISTRIBUTION DES PRODUITS PETROLIERS, GAZ ET DERIVES",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "CABINETS D’AUDIT ET EXPERTISE COMPTABLE",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "BANQUES",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "ASSURANCES",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "CONSEILS FISCAUX",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "MICROFINANCES",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "CIMENTERIES",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "Douanes et Transit",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "SOINS ESTHÉTIQUES",
                'description' => "COIFFURE, SOINS DE VISAGES, MASSAGES, SPAS, LIFTING",
                'icon' => "",
            ]
        );

        SecteurActivite::create(
            [
                'titre' => "SOINS ESTHÉTIQUES",
                'description' => "COIFFURE, SOINS DE VISAGES, MASSAGES, SPAS, LIFTING",
                'icon' => "",
            ]
        );
        HeroSectionSlider::create(
            [
                'titre' => "slide 1",
                'image_path' => "frontend/images/bg/6.jpg",
            ]
        );

        HeroSectionSlider::create(
            [
                'titre' => "slide 2",
                'image_path' => "frontend/images/bg/35.jpg",
            ]
        );

        HeroSectionSlider::create(
            [
                'titre' => "slide 3",
                'image_path' => "frontend/images/bg/29.jpg",
            ]
        );
    }
}
