<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Enquete</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    {{-- <link rel="shortcut icon" href="{{ asset('others') }}/{{ $shareData['favicon'] }}"> --}}

    <link rel="stylesheet" href="{{ asset('admin/assets/css/normalize.css') }} ">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/themify-icons.css' ) }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/flag-icon.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/cs-skin-elastic.css' ) }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('admin/assets/scss/style.css' ) }}">
    <link href="{{ asset('admin/assets/css/lib/vector-map/jqvmap.min.css ') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
     <script src="{{asset('admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
     <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/chosen/chosen.min.css') }} ">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>


<div style="margin-left: 20%; margin-right: 20%; margin-top:10%;" >
    <div class="card">
      <div class="card-header"><strong>By</strong><small> Lesline Keubou</small></div>
      <div class="card-body card-block">
        <div class="form-group"><h1 style="text-align: center;">Merci pour votre particaition!</h1></div>
      </div>
    </div>
  </div>



  <script src="{{asset('admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{asset('admin/assets/js/plugins.js')}}"></script>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>


  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>

     <script src="{{ asset('admin/assets/js/popper.min.js ') }}"></script>

    <script src="{{asset('admin/assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/assets/js/widgets.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
   <script src="{{asset('admin/assets/js/lib/chosen/chosen.jquery.min.js')}}"></script>


    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "45%"
            });
        });
    </script>
