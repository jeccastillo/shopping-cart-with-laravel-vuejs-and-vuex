<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Kalo Nutrition</title>
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap -->    
    <link href="{{ asset('css/tobii.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />    
    <link href="{{ asset('css/datepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animations-delay.css') }}" rel="stylesheet" />
    <link href="https://unicons.iconscout.com/release/v3.0.6/css/line.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/demos/restaurant.css') }}" rel="stylesheet" type="text/css" />

</head>
<body>
    <div id="app">
        {{-- <nav class="py-5 px-10">
            <ul class="flex">
                <li class="mr-5 font-semibold"><router-link :to="{name : 'products.index'}">Accueil</router-link></li>
                <li class="font-semibold"><router-link :to="{name: 'products.shopping'}">Mon Panier <span v-text="this.$store.state.cart.length"></span></router-link></li>
            </ul>
        </nav> --}}
        <router-view></router-view>
    </div>
    
    
    <!-- javascript -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>    
    <script src="{{ asset('js/typed.js') }}"></script>    
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/shuffle.min.js') }}"></script>            
    <script src="{{ asset('js/tobii.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>        
    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/feather.min.js') }}"></script>            
    <!-- Main Js -->
    <script src="js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('js/stapp.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    
</body>
</html>
