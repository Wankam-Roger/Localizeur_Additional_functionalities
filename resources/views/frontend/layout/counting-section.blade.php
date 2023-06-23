<section class="parallax-section small-par" data-scrollax-parent="true">
    <div class="bg par-elem "  data-bg="{{ asset('frontend/images/bg/22.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
    <div class="overlay  op7"></div>
    <div class="container">
        <div class=" single-facts single-facts_2 fl-wrap">
            <!-- inline-facts -->
            <div class="inline-facts-wrap">
                <div class="inline-facts">
                    <div class="milestone-counter">
                        <div class="stats animaper">
                            <div class="num" data-content="0" data-num="{{sizeof($secteurs)}}">{{sizeof($secteurs)}}</div>
                        </div>
                    </div>
                    <h6>{{ __('menu-secteur-activite') }}</h6>
                </div>
            </div>
            <!-- inline-facts end -->
            <!-- inline-facts  -->
            <div class="inline-facts-wrap">
                <div class="inline-facts">
                    <div class="milestone-counter">
                        <div class="stats animaper">
                            <div class="num" data-content="0" data-num="{{sizeof($entreprises)}}"></div>
                        </div>
                    </div>
                    <h6>{{ __('entreprise-ref') }}</h6>
                </div>
            </div>
            <!-- inline-facts end -->
            <!-- inline-facts  -->
            <div class="inline-facts-wrap">
                <div class="inline-facts">
                    <div class="milestone-counter">
                        <div class="stats animaper">
                            <div class="num" data-content="0" data-num="{{sizeof($criteres)}}"></div>
                        </div>
                    </div>
                    <h6>{{ __('criteria-selection') }}</h6>
                </div>
            </div>
            <!-- inline-facts end -->
            <!-- inline-facts  -->
            <div class="inline-facts-wrap">
                <div class="inline-facts">
                    <div class="milestone-counter">
                        <div class="stats animaper">
                            <div class="num" data-content="0" data-num="{{$number_visits->number_visits}}">{{$number_visits->number_visits}}</div>
                        </div>
                    </div>
                    <h6>{{ __('user-visits') }}</h6>
                </div>
            </div>
            <!-- inline-facts end -->
        </div>
    </div>
</section>
