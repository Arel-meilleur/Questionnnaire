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
<body>


        {{-- <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Questionnaire</a>
                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel --> --}}


    <div id="right-panel" class="right-panel">



        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tableau de bord</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Tableau de bord</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> Chargement éffectué avec succes!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


                </header><!-- /header -->
                <!-- Header-->

                <div class="content mt-3">
                    <div class="animated fadeIn">
                        <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Données recoltées</strong>
                                </div>
                                <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Question1</th>
                                <th>Question2</th>
                                <th>Question3</th>
                                <th>Question4</th>
                                <th>Question5</th>
                                <th>Question6</th>
                                <th>Question7</th>
                                <th>Question8</th>
                                <th>Question9</th>
                                <th>Question10</th>
                                <th>Question11</th>
                                <th>Question12</th>
                                <th>Question13</th>
                                <th>Question14</th>
                                <th>Question15</th>
                                <th>Question16</th>
                                <th>Question17</th>
                                <th>Question18</th>
                                <th>Question19</th>
                                <th>Question20</th>
                                <th>Question21</th>
                                <th>Question22</th>
                                <th>Question23</th>
                                <th>Question24</th>
                                <th>Question25</th>
                                <th>Question26</th>
                                <th>Question27</th>
                                <th>Question28</th>
                                <th>Question29</th>
                                <th>Question30</th>
                                <th>Question31</th>
                                <th>Question32</th>
                                <th>Question33</th>
                                <th>Question34</th>
                                <th>Question35</th>
                                <th>Question36</th>
                                <th>Question37</th>
                                <th>Question38</th>
                                <th>Question39</th>
                                <th>Question40</th>
                                <th>Question41</th>
                                <th>Question42</th>
                                {{-- <th>Question43</th> --}}
                                <th>Question44</th>
                                <th>Question45</th>
                                <th>Question46</th>
                                <th>Question47</th>
                                <th>Question48</th>
                                <th>Question49</th>
                                <th>Question50</th>
                                <th>Question51</th>
                                <th>Question52</th>
                                <th>Question53</th>
                                <th>Question54</th>
                                <th>Question55</th>
                                <th>Question56</th>
                                <th>Question57</th>
                                <th>Question58</th>
                                <th>Question59</th>
                                <th>Question60</th>
                                <th>Question61</th>
                                <th>Question62</th>
                                <th>Question63</th>
                                <th>Date</th>

                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i=>$item)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $item->question1}} </td>
                                        <td>{{ $item->question2}} </td>
                                        <td>{{ $item->question3}} </td>
                                        <td>{{ $item->question4}} </td>
                                        <td>{{ $item->question5}} </td>
                                        <td>{{ $item->question6}} </td>
                                        <td>{{ $item->question7}} </td>
                                        <td>{{ $item->question8}} </td>
                                        <td>{{ $item->question9}} </td>
                                        <td>{{ $item->question10}} </td>
                                        <td>{{ $item->question11}} </td>
                                        <td>{{ $item->question13}} </td>
                                        <td>{{ $item->question14}} </td>
                                        <td>{{ $item->question15}} </td>
                                        <td>{{ $item->question16}} </td>
                                        <td>{{ $item->question17}} </td>
                                        <td>{{ $item->question18}} </td>
                                        <td>{{ $item->question19}} </td>
                                        <td>{{ $item->question20}} </td>
                                        <td>{{ $item->question21}} </td>
                                        <td>{{ $item->question22}} </td>
                                        <td>{{ $item->question23}} </td>
                                        <td>{{ $item->question24}} </td>
                                        <td>{{ $item->question25}} </td>
                                        <td>{{ $item->question26}} </td>
                                        <td>{{ $item->question27}} </td>
                                        <td>{{ $item->question28}} </td>
                                        <td>{{ $item->question29}} </td>
                                        <td>{{ $item->question30}} </td>
                                        <td>{{ $item->question31}} </td>
                                        <td>{{ $item->question32}} </td>
                                        <td>{{ $item->question33}} </td>
                                        <td>{{ $item->question34}} </td>
                                        <td>{{ $item->question35}} </td>
                                        <td>{{ $item->question36}} </td>
                                        <td>{{ $item->question37}} </td>
                                        <td>{{ $item->question38}} </td>
                                        <td>{{ $item->question39}} </td>
                                        <td>{{ $item->question40}} </td>
                                        <td>{{ $item->question41}} </td>
                                        <td>{{ $item->question42}} </td>
                                        {{-- <td>{{ $item->question43}} </td> --}}
                                        <td>{{ $item->question44}} </td>
                                        <td>{{ $item->question45}} </td>
                                        <td>{{ $item->question46}} </td>
                                        <td>{{ $item->question47}} </td>
                                        <td>{{ $item->question48}} </td>
                                        <td>{{ $item->question49}} </td>
                                        <td>{{ $item->question50}} </td>
                                        <td>{{ $item->question51}} </td>
                                        <td>{{ $item->question52}} </td>
                                        <td>{{ $item->question53}} </td>
                                        <td>{{ $item->question54}} </td>
                                        <td>{{ $item->question55}} </td>
                                        <td>{{ $item->question56}} </td>
                                        <td>{{ $item->question57}} </td>
                                        <td>{{ $item->question58}} </td>
                                        <td>{{ $item->question59}} </td>
                                        <td>{{ $item->question60}} </td>
                                        <td>{{ $item->question61}} </td>
                                        <td>{{ $item->question62}} </td>
                                        <td>{{ $item->question63}} </td>
                                        <td>{{ $item->question64}} </td>
                                        <td>{{ $item->created_at->diffForHumans()}} </td>

                                    </tr>

                                @endforeach


                            </tbody>
                          </table>
                                </div>
                            </div>
                        </div>


                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->


            </div><!-- /#right-panel -->





        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
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


</body>
</html>
