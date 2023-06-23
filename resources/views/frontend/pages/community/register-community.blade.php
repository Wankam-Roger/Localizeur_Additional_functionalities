@extends('frontend.layout.main-layout')
@section('page-title', 'Add Community')

@section('content')

    <!--  section  -->
    <section class="parallax-section single-par" data-scrollax-parent="true">
        <div class="bg par-elem " data-bg="/frontend/images/bg/38.jpg"
             data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay op7"></div>
        <div class="container">
            <div class="section-title center-align big-title">
                <h2><span>@lang("Rejoignez la communauté")</span></h2>
                <span class="section-separator"></span>
                <div class="breadcrumbs fl-wrap"><a href="#">@lang("Accueil")</a><span>@lang("Communauté")</span></div>
            </div>
        </div>
        <div class="header-sec-link">
            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
        </div>
    </section>
    <!--  section  end-->
    <!--  section  -->
    <section id="sec1" data-scrollax-parent="true">
        <div class="container">
            <!--about-wrap -->
            <div class="about-wrap">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ab_text-title fl-wrap">
                            <h3>@lang("Nous sommes déjà des centaines")</h3>
                            <span class="section-separator fl-sec-sep"></span>
                        </div>
                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap block_box">
                            <div class="box-widget">
                                <div class="box-widget-content bwc-nopad">
                                    <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                        <ul class="no-list-style">
                                            <li><span><i class="fal fa-map-marker"></i>@lang( "Adresse :")</span> <a
                                                    href="#singleMap" class="custom-scroll-link">CMR Bonanjo Derriere
                                                    Camair-co</a></li>
                                            <li><span><i class="fal fa-phone"></i>@lang(" Téléphone :")</span> <a href="#">+(237)
                                                    697 88 55 12</a>
                                            </li>"
                                            <li><span><i class="fal fa-envelope"></i> Email :</span> <a href="#">info@localizeur.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                        <ul class="no-list-style">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->
                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap" style="margin-top:20px;">
                            <div class="banner-wdget fl-wrap">
                                <div class="overlay op4"></div>
                                <div class="bg" data-bg="images/bg/18.jpg"></div>
                                <div class="banner-wdget-content fl-wrap">
                                    <h4>@lang("Participate in our loyalty program. Refer a friend and get a discount.")</h4>
                                    <a href="#" class="color-bg">@lang("Read ")</a>
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->
                    </div>

                    @if (session('success'))
                        <div class="col-md-8">
                            <div class="ab_text">
                                <div class="ab_text-title fl-wrap">
                                    <h3>@lang("Merci de vous être inscrit à notre plateforme")</h3>
                                    <span class="section-separator fl-sec-sep"></span>
                                </div>
                                <p></p>

                                <!-- contact form  end-->
                            </div>
                        </div>

                    @else
                        <div class="col-md-8">
                            <div class="ab_text">
                                <div class="ab_text-title fl-wrap">
                                    <h3>@lang("Remplissez le Formulaire ci dessous")</h3>
                                    <span class="section-separator fl-sec-sep"></span>
                                </div>
                                <p></p>
                                <div id="contact-form">
                                    <div id="message"></div>

                                    <form class="custom-form" method="Post"
                                          action="{{ route('admin_store_journal_page',[app()->getLocale()]) }}"
                                          enctype="multipart/form-data"
                                          name="contactform">
                                        @csrf
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><i class="fal fa-user"></i></label>
                                                    <input type="text" name="title_fr" id="name"
                                                           placeholder="Votre Noms *" value=""/>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><i class="fal fa-envelope"></i> </label>
                                                    <input type="email" name="email" id="email"
                                                           placeholder="Email Address*"
                                                           value=""/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="phonenumber"><i class="fal fa-envelope"></i></label>
                                                    <input type="text" placeholder="Telephone" id="phonenumber"
                                                           class="form-control" name="phonenumber">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="entreprise"></label>
                                                    <input type="text" placeholder="Entreprise" id="entreprise"
                                                           class="form-control" name="enterprise_name">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label><i class="fal fa-map-marker"></i> </label>
                                                    <input type="text" name="address" id="address"
                                                           placeholder="Adresse*"
                                                           value=""/>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                <textarea id="comments" cols="40" rows="3" name="short_description_fr"
                                                          placeholder="Votre Bio:"></textarea>
                                                </div>

                                            </div>
                                            <br>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="formFile" class="form-label">@lang("Photo de profil")</label>
                                                    <input class="form-control" type="file" id="formFile" name="banner">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <button class="btn float-btn color2-bg" id="submit">@lang("Inscription")<i
                                                class="fal fa-paper-plane"></i></button>
                                    </form>


                                </div>
                                <!-- contact form  end-->
                            </div>
                        </div>
                    @endif

                </div>
            </div>
            <!-- about-wrap end  -->
        </div>
    </section>

    <section class="no-padding-section">
        <div class="map-container">
            <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"
                 data-mapTitle="Our Location"></div>
        </div>
    </section>

@endsection
