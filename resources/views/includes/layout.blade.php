<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/atbu-logo.jpg') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ATBU Photo Album
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


  <!-- <link rel="stylesheet" type='text/css' media='all' href="{{ asset('css/webslides.css') }}"> -->
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <!-- <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Laravel default style placed ontop so that custom and others can overright defaults -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/now-ui-kit.css?v=1.2.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('demo/demo.css') }}" rel="stylesheet" />
  <!-- Photoswipe links -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css'>

</head>
<style>
.twitter-typeahead > input {
  width: 100%;
  height: 50px;
  background-color: white !important;
}

.twitter-typeahead, .tt-hint, .tt-input, .tt-menu { 
  width: 100%;
   }
   #scrollable-dropdown-menu .tt-menu {
   max-height: 150px;
   overflow-y: auto;
   background-color: red; 
 }
 .my-gallery {
  width: 100%;
  float: left;
}
.my-gallery img {
  /* width: 100%;
  height: auto; */
    width: 80px;
    height: 80px;
    margin-left: 3px;
}
.my-gallery figure {
  display: block;
  float: left;
  /* margin: 0 5px 5px 0;
  width: 150px; */
}
.my-gallery figcaption {
  display: none;
} 

.datepicker .day div,
.datepicker th {
z-index: -1 !important;
}

@-webkit-keyframes zoom {
  from {
    -webkit-transform: scale(1, 1);
  }
  to {
    -webkit-transform: scale(1.5, 1.5);
  }
}

@keyframes zoom {
  from {
    transform: scale(1, 1);
  }
  to {
    transform: scale(1.5, 1.5);
  }
}

.carousel-inner .item > img {
  -webkit-animation: zoom 20s;
  animation: zoom 20s;
} 

.section {
    padding: 70px 0;
    position: relative;
    background: white;
}
a#next {
    right: 3.2rem !important;
}

a#next, a#previous {
    border-radius: .4rem;
    cursor: pointer;
    font-size: 2.4rem;
    height: 4rem;
    padding: .8rem;
    position: absolute;
    text-align: center;
    width: 4rem;
    text-decoration: none;
}

/* #counter {
  display: block;
  line-height: 4.8rem;
  margin-left: auto;
  margin-right: auto;
  position: relative;
  text-align: center;
  width: 10rem; }
  #counter a:hover {
    padding: .8rem; }

    #navigation a,
  #counter {
    display: none !important; }   

    #counter {
    display: none; } 

    #counter {
  color: #abc; } */

</style>

<body class="index-page sidebar-collapse">
  @include('includes.navigation')
  @yield('content')
  <!-- @include('includes.footer') -->
  @include('includes.login_modal')
    <!--   Core JS Files   -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{ asset('js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src=" {{ asset('js/now-ui-kit.js?v=1.2.0') }}" type="text/javascript"></script>
  <!-- Typeahead.js Bundle -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <!-- photoswipe -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js'></script>
  <script  src="{{ asset('js/photoswipeJS.js') }}"></script>
  <script  src="{{ asset('js/profileImage.js') }}"></script>
  <!-- tinymce -->
  <script>tinymce.init({ selector:'textarea' });</script>
  <script src="{{ asset('js/webslides.js') }}"></script>
  <script>
    window.ws = new WebSlides();
  </script>
  <script>
    jQuery(document).ready(function($) {

    var engine = new Bloodhound({
        remote: {
          url: "/album/search?q=%QUERY%",
          wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
    });

    

    $("#search_input ").typeahead({
        hint: true,
        highlight: true,
        limit: 15,
        minLength: 2
    }, {
        source: engine.ttAdapter(),
        name: 'albumList',
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item" style="color:red">Nothing found.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<a href="/album/' + data.id + '/cover" class="list-group-item" style="height: 60px"><img class="img-fluid rounded float-left" src="' + data.cover_image_url + '" alt="" width="60px" height="60px"><p > ' + data.name + '</p></a>'
      }
        }
    });
    });
  </script>
  
</body>
</html>


, 