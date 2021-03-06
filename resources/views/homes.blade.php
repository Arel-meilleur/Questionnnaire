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
        <!-- Left Panel -->

    {{-- <aside id="left-panel" class="left-panel">
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
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel --> --}}

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">



        <div class="breadcrumbs">
            <div class="col-sm-11">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>ENQUETTE</h1>
                    </div>

                </div>
                <div class="text-center">
                    <a href="index.html">
                        {{-- <img class="align-content" src="images/logo.png" alt=""> --}}
                        <img src="{{ asset('admin/images/logo_ds_redi.png')}} ">
                    </a>
                </div>
            </div>
            <div class="col-sm-1">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Questionnaire</a></li>
                            {{-- <li class="active">I- Profil du r??pondant</li> --}}
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-left: 5%; margin-right: 5%">
            <div class="card">
              <div class="card-header" style="justify-content: center" ><strong style="margin-left:17%;">QUESTIONNAIRE DESTIN?? AU PERSONNEL DE SANTE/ STAGIAIRES EN CHARGE DU COVID-19 OU/ET </strong><br/>
                <strong style="margin-left:30%;">AYANT ETE EN CONTACT AVEC UN PATIENT TEST?? POSITIF </strong>
            </div>
              <div class="card-body card-block" style="display: inline-block">
                    <strong>THEME </strong><p style="margin-left:27%;">VULNERABILITE DU PERSONNEL DE SANTE FACE AU COVID-19 AU CAMEROUN : </p>
                    <p style="margin-left:38%;">ANALYSE DE LA SITUATION DE BAFOUSSAM</p>
              </div>
            </div>
          </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div>
                  <div style="margin-left: 10%; margin-right: 10%">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title" style="color:red;">NB : * Reprsente les champs obligatoires</strong>
                        </div>
                        <div class="card-body">

                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <div class="card-title">
                                      <h3 class="text-center">I- Profil du r??pondant</h3>
                                  </div>
                                  <hr>
                                  <form action="/submit" method="POST" novalidate="novalidate">

                                    {{ csrf_field() }}

                                    {{-- <div class="row form-group ">
                                        <div class="col col-md-6"><label class=" form-control-label">Q01- Quel est votre sexe ? <strong style="color:red;">  *</strong></label></div>
                                        <div class="col col-md-6">
                                          <div class="form-check">
                                            <div class="radio">
                                              <label for="radio1" class="form-check-label ">
                                                <input type="radio" id="radio1" name="" value="option1" class="form-check-input">Masculin
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label for="radio2" class="form-check-label ">
                                                <input type="radio" id="radio2" name="" value="option2" class="form-check-input">F??minin
                                              </label>
                                            </div>

                                          </div>
                                        </div>
                                      </div> --}}

                                      <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q01- Quel est votre sexe ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question1'))
                                            <span class="text-danger">{{ $errors->first('question1') }}</span>
                                            @endif</div>

                                        <select name="question1" data-placeholder="Choisir votre sexe..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Masculin">Masculin</option>
                                            <option value="F??minin">F??minin</option>

                                        </select>

                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q02- Quelle est votre tranche d?????ge ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question2'))
                                            <span class="text-danger">{{ $errors->first('question2') }}</span>
                                            @endif
                                        </div>

                                        <select name="question2" data-placeholder="Choisir votre tranche d ??ge..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="moins de 20 ans">moins de 20 ans</option>
                                            <option value="entre 20 -25 ans"> entre 20 -25 ans</option>
                                            <option value="entre 26-30 ans">entre 26-30 ans</option>
                                            <option value="entre 31-35 ans">entre 31-35 ans</option>
                                            <option value="entre 36-40 ans">entre 36-40 ans</option>
                                            <option value="entre 41- 45 ans">entre 41- 45 ans</option>
                                            <option value="entre 46-50 ans">entre 46-50 ans</option>
                                            <option value="entre 51- 55 ans">entre 51- 55 ans</option>
                                            <option value="entre 56- 60 ans">entre 56- 60 ans</option>
                                            <option value="61 ans et plus">61 ans et plus</option>

                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q03- Quel est votre d??partement d???origine ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question3'))
                                            <span class="text-danger">{{ $errors->first('question3') }}</span>
                                            @endif
                                        </div>

                                        <select name="question3" data-placeholder="Choisir votre d??partement d'origine..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Wouri">Wouri </option>
                                            <option value="Mifi">Mifi  </option>
                                            <option value="Menoua">Menoua  </option>
                                            <option value="Koung-khi">Koung-khi </option>
                                            <option value="Hauts-plateaux">Hauts-plateaux </option>
                                            <option value="Mayo-louti">Mayo-louti </option>
                                            <option value="Autre">Autre </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q04- Quel est votre niveau d???instruction ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question4'))
                                            <span class="text-danger">{{ $errors->first('question4') }}</span>
                                            @endif
                                        </div>

                                        <select name="question4" data-placeholder="Choisir votre niveau d'instruction..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Primaire">Primaire</option>
                                            <option value="Secondaire">Secondaire</option>
                                            <option value="Universitaire">Universitaire</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q05- Quel est votre quartier de r??sidence ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question5'))
                                            <span class="text-danger">{{ $errors->first('question5') }}</span>
                                            @endif
                                        </div>

                                        <select name="question5" data-placeholder="Choisir votre votre quartier de r??sidence..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Tyo">Tyo </option>
                                            <option value="Djeleng">Djeleng</option>
                                            <option value="Ngouache">Ngouache</option>
                                            <option value="Kamkop">Kamkop</option>
                                            <option value="Toungan">Toungan</option>
                                            <option value="Ndze">Ndze</option>
                                            <option value="Kouoguo">Kouoguo</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q06- Quel est votre Situation matrimoniale ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question6'))
                                            <span class="text-danger">{{ $errors->first('question6') }}</span>
                                            @endif
                                        </div>

                                        <select name="question6" data-placeholder="Choisir votre situation matrimoniale..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Mari??">Mari??</option>
                                            <option value="C??libataire">C??libataire</option>
                                            <option value="Divorc??(e)">Divorc??(e)</option>
                                            <option value="Veuf (ve)">Veuf (ve)</option>
                                            <option value="En concubinage">En concubinage</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q07- Quel est le nombre de personnes ?? votre charge ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question7'))
                                            <span class="text-danger">{{ $errors->first('question7') }}</span>
                                            @endif
                                        </div>

                                        <select name="question7" data-placeholder="Choisir le nombre de personnes a votre charge..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="moins de 2">moins de 2</option>
                                            <option value="2 ?? 4">2 ?? 4</option>
                                            <option value="4 ?? 6">4 ?? 6</option>
                                            <option value="6 et plus">6 et plus</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q08- Quel est votre mode de d??placement pour vous rendre au travail ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question8'))
                                            <span class="text-danger">{{ $errors->first('question8') }}</span>
                                            @endif
                                        </div>

                                        <select name="question8" data-placeholder="Choisir mode de d??placement pour vous rendre au travail..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Transport en commun (taxi)">Transport en commun (taxi)</option>
                                            <option value="Transport personnel">Transport personnel</option>
                                            <option value="?? pied">?? pied</option>
                                            <option value="?? moto">?? moto</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q09- Avec qui cohabitez-vous ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question9'))
                                            <span class="text-danger">{{ $errors->first('question9') }}</span>
                                            @endif
                                        </div>

                                        <select name="question9" data-placeholder="Choisir avec qui vous cohabitez..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Parent">Parent</option>
                                            <option value="Tuteur">Tuteur  </option>
                                            <option value="Seul">Seul</option>
                                            <option value="Avec un ami">Avec un ami</option>
                                            <option value="Avec qui cohabitez">Avec qui cohabitez</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q10- Dans quel type d?????tablissement de sant?? travaillez-vous ?  <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question10'))
                                            <span class="text-danger">{{ $errors->first('question10') }}</span>
                                            @endif
                                        </div>

                                        <select name="question10" data-placeholder="Choisir type d?????tablissement de sant??..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Public">Public</option>
                                            <option value="Priv??">Priv??  </option>
                                        </select>
                                    </div>
                                      <hr>
                                      <div class="card-title">
                                        <h3 class="text-center">II-	Environnement de travail et pratiques (contexte physique, organisation et ??quipement)</h3>
                                      </div>
                                      <hr> <br/>
                                      <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q11- Quel Poste occup?? au sein de la structure hospitali??re ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question11'))
                                            <span class="text-danger">{{ $errors->first('question11') }}</span>
                                            @endif
                                        </div>

                                        <select name="question11" data-placeholder="Choisir votre poste occup?? au sein de la structure hospitali??re..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Infirmi??re">Infirmi??re</option>
                                            <option value="Laborantin">Laborantin</option>
                                            <option value="M??decin">M??decin</option>
                                            <option value="Stagiaire">Stagiaire</option>
                                            <option value="Autre">Autre</option>

                                        </select>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q12- Quel est votre r??le au sein de la structure hospitali??re ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question12'))
                                            <span class="text-danger">{{ $errors->first('question12') }}</span>
                                            @endif
                                        </div>

                                        <select name="question12" data-placeholder="Choisir votre votre r??le au sein de la structure hospitali??re..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Prise de param??tres">Prise de param??tres </option>
                                            <option value="Consultations">Consultations  </option>
                                            <option value="Administration des soins">Administration des soins  </option>
                                            <option value="Analyses de pr??l??vements ">Analyses de pr??l??vements </option>
                                            <option value="Autre">Autre </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q13- quel est votre long??vit?? au poste ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question13'))
                                            <span class="text-danger">{{ $errors->first('question13') }}</span>
                                            @endif
                                        </div>

                                        <select name="question13" data-placeholder="Choisir votre long??vit?? au poste..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Moins d???un an">Moins d???un an</option>
                                            <option value="Un ?? 5 ans"Un ?? 5 ans></option>
                                            <option value="6 ?? 10 ans">6 ?? 10 ans</option>
                                            <option value="11 ?? 15 ans">11 ?? 15 ans</option>
                                            <option value="16 ?? 20 ans">16 ?? 20 ans</option>
                                            <option value="21 ans et plus">21 ans et plus</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q14- Comment caract??riseriez-vous votre environnement de soin ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question14'))
                                            <span class="text-danger">{{ $errors->first('question14') }}</span>
                                            @endif
                                        </div>

                                        <select name="question14" data-placeholder="Choisir Une caract??ristiques..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Peu s??curis?? ">Peu s??curis??  </option>
                                            <option value="Assez s??curis??">Assez s??curis?? </option>
                                            <option value="Bien s??curis??">Bien s??curis?? </option>
                                            <option value="Parfait">Parfait</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q15- Votre structure de sant?? est-elles agr??e pour la prise en charge des malades de covid-19 ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question15'))
                                            <span class="text-danger">{{ $errors->first('question15') }}</span>
                                            @endif</div>


                                        <select name="question15" data-placeholder="Choisir agr??gation" class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui, les cas simples et mod??r??s">Oui, les cas simples et mod??r??s</option>
                                            <option value="Oui, les cas critiques et n??cessitant une assistance respiratoire ">Oui, les cas critiques et n??cessitant une assistance respiratoire </option>
                                            <option value="Non, les tests uniquement">Non, les tests uniquement</option>
                                            <option value="Non, pas de test ni de prise en charge">Non, pas de test ni de prise en charge</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q16-a- Si oui comment faites-vous lorsqu???apr??s consultation vous vous rendez-compte que le patient serait malade de covid-19 ou est positif au test ? </label>

                                        </div>

                                        <select name="question16" data-placeholder="Choisir " class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Isolement et prise en charge">Isolement et prise en charge</option>
                                            <option value="Signalement et r??f??rence ?? un h??pital agr??e pour la prise en charge">Signalement et r??f??rence ?? un h??pital agr??e pour la prise en charge</option>
                                            <option value="Prise en charge ?? domicile accompagn??e par le m??decin">Prise en charge ?? domicile accompagn??e par le m??decin</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q16-b- Quel est la principale mesure prise dans ce cas pour les soignants expos??s ?</label>


                                        </div>

                                        <select name="question17" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Test sur le personnel ayant ??t?? en contact avec le patient infect??">Test sur le personnel ayant ??t?? en contact avec le patient infect??</option>
                                            <option value="Isolement temporaire du personnel de sant?? ayant ??t?? en contact avec le patient infect?? jusqu????? confirmation du test">Isolement temporaire du personnel de sant?? ayant ??t?? en contact avec le patient infect?? jusqu????? confirmation du test</option>
                                            <option value="Poursuite des activit??s de l???h??pital sans r??el changement">Poursuite des activit??s de l???h??pital sans r??el changement</option>
                                            <option value="Renforcement des mesures communautaires au sein de l???h??pital">Renforcement des mesures communautaires au sein de l???h??pital</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q17- Quel est le nombre moyen de patients test??s positifs avec lesquels vous ??tes /ou avez ??t?? en contact par jour ? </label></div>

                                        <select name="question18" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Un patient">Un patient</option>
                                            <option value="Deux ?? 5 patients">Deux ?? 5 patients  </option>
                                            <option value="6 ?? 10 patients">6 ?? 10 patients</option>
                                            <option value="11 ?? 15 patients">11 ?? 15 patients</option>
                                            <option value="16 ?? 20 patients">16 ?? 20 patients</option>
                                            <option value="21 patients et plus">21 patients et plus</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q18- ??tes-vous en quelconque contact avec des pr??l??vements et liquides de patients atteints de Covid-19 ? (sang, sueurs, urines???) <strong style="color:red;">  *</strong> </label>
                                            @if ($errors->has('question19'))
                                            <span class="text-danger">{{ $errors->first('question19') }}</span>
                                            @endif
                                        </div>

                                        <select name="question19" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui">Oui</option>
                                            <option value="Non">Non   </option>
                                        </select>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q19- Avez-vous re??u des formations suppl??mentaires pour la prise en charge de la covid-19 ? (s??minaires, conf??rences, petites formations au sein de la structure???) <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question20'))
                                            <span class="text-danger">{{ $errors->first('question20') }}</span>
                                            @endif
                                        </div>

                                        <select name="question20" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui">Oui</option>
                                            <option value="Non">Non   </option>
                                            <option value="Insuffisamment">Insuffisamment</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q20- Avez-vous ??t?? victime de contamination au covid-19 ? <strong style="color:red;">  *</strong> </label>
                                            @if ($errors->has('question21'))
                                            <span class="text-danger">{{ $errors->first('question21') }}</span>
                                            @endif
                                        </div>

                                        <select name="question21"  data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui">Oui</option>
                                            <option value="Non">Non   </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q20-a- Si oui source de contamination soup??onn??e  </label></div>

                                        <select name="question22" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Contact direct avec un patient atteint">Contact direct avec un patient atteint </option>
                                            <option value="D??ficit en l?????quipement de protection">D??ficit en l?????quipement de protection   </option>
                                            <option value="Contact avec les liquides corporels du patient">Contact avec les liquides corporels du patient</option>
                                            <option value="Communaut??, hors de l???h??pital (proches, voisins, connaissances???)">Communaut??, hors de l???h??pital (proches, voisins, connaissances???)</option>
                                        </select>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q21- Connaissez-vous un(e) coll??gue qui a ??t?? contamin?? de la covid-19 ? <strong style="color:red;">  *</strong>  </label>
                                            @if ($errors->has('question23'))
                                            <span class="text-danger">{{ $errors->first('question23') }}</span>
                                            @endif
                                        </div>

                                        <select name="question23" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui">Oui</option>
                                            <option value="Non">Non   </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q22- Connaissez-vous un(e) coll??gue qui est d??c??d?? des suites de covid-19 ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question24'))
                                            <span class="text-danger">{{ $errors->first('question24') }}</span>
                                            @endif
                                        </div>

                                        <select name="question24" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui">Oui</option>
                                            <option value="Non">Non   </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q23- Avez-vous peur d?????tre contamin?? ? <strong style="color:red;">  *</strong> </label>
                                            @if ($errors->has('question25'))
                                            <span class="text-danger">{{ $errors->first('question25') }}</span>
                                            @endif
                                        </div>

                                        <select name="question25" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui tr??s peur">Oui tr??s peur </option>
                                            <option value="Oui un peu">Oui un peu   </option>
                                            <option value="Oui quand m??me">Oui quand m??me </option>
                                            <option value="Non pas du tout">Non pas du tout  </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q24- Combien d???heures de travail avez-vous par jour ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question26'))
                                            <span class="text-danger">{{ $errors->first('question26') }}</span>
                                            @endif
                                        </div>

                                        <select name="question26" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Moins de 8 heures">Moins de 8 heures </option>
                                            <option value="8 ?? 12 heures">8 ?? 12 heures   </option>
                                            <option value="Plus de 12 heures">Plus de 12 heures </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q25- Comment caract??riseriez-vous vos heures actuelles de travail ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question27'))
                                            <span class="text-danger">{{ $errors->first('question27') }}</span>
                                            @endif
                                        </div>

                                        <select name="question27" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Normales">Normales </option>
                                            <option value="Un peu excessives">Un peu excessives   </option>
                                            <option value="Excessives">Excessives </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q26- Comment caract??riseriez-vous vos heures de travail avant la p??riode covid ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question28'))
                                            <span class="text-danger">{{ $errors->first('question28') }}</span>
                                            @endif
                                        </div>

                                        <select name="question28" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Normales">Normales </option>
                                            <option value="Un peu excessives">Un peu excessives   </option>
                                            <option value="Excessives">Excessives </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q27- Comment caract??riseriez-vous vos heures de travail pendant la p??riode de la flamb??e subite de la maladie ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question29'))
                                            <span class="text-danger">{{ $errors->first('question29') }}</span>
                                            @endif
                                        </div>

                                        <select name="question29" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Normales">Normales </option>
                                            <option value="Un peu excessives  ">Un peu excessives   </option>
                                            <option value="Excessives">Excessives </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q28- ??tes-vous satisfait de la p??riodicit?? de travail ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question30'))
                                            <span class="text-danger">{{ $errors->first('question30') }}</span>
                                            @endif
                                        </div>

                                        <select name="question30" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Pas du tout satisfait">Pas du tout satisfait  </option>
                                            <option value="Peu satisfait">Peu satisfait    </option>
                                            <option value="Satisfait">Satisfait </option>
                                            <option value="Tr??s satisfait">Tr??s satisfait  </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q29- Avez-vous d??j?? eu ?? faire des heures suppl??mentaires durant la p??riode covid ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question31'))
                                            <span class="text-danger">{{ $errors->first('question31') }}</span>
                                            @endif
                                        </div>

                                        <select name="question31" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui">Oui </option>
                                            <option value="Non">Non </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q29- a- Pour quelle raison ?   </label></div>

                                        <select name="question32" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Personnel insuffisant">Personnel insuffisant </option>
                                            <option value="Travail abondant">Travail abondant </option>
                                            <option value="M??fiance des coll??gues dans les t??ches ?? effectuer (peur du patient)">M??fiance des coll??gues dans les t??ches ?? effectuer (peur du patient) </option>
                                            <option value="Personnel insuffisant et travail abondant">Personnel insuffisant et travail abondant </option>
                                            <option value="Situation d???urgence">Situation d???urgence  </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q30- Quelle a ??t?? votre r??action au premier contact avec un patient atteint de covid-19 ou anciennement atteint ? </label>


                                        </div>

                                        <select name="question33" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Panique">Panique  </option>
                                            <option value="Peur de rapprochements">Peur de rapprochements </option>
                                            <option value="Doute (sur son ??tat ou sa r??mission)">Doute (sur son ??tat ou sa r??mission) </option>
                                            <option value="Engagement ?? respecter son serment en prenant soin du patient">Engagement ?? respecter son serment en prenant soin du patient </option>
                                            <option value="Piti??">Piti??   </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q31- Avez-vous b??n??fici?? d???une formation sp??cifique en gestion d?????pid??mie mortelle avant la survenue de la COVID-19 ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question34'))
                                            <span class="text-danger">{{ $errors->first('question34') }}</span>
                                            @endif
                                        </div>

                                        <select name="question34" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui partiellement">Oui partiellement   </option>
                                            <option value="Oui compl??tement">Oui compl??tement </option>
                                            <option value="Jamais b??n??fici??">Jamais b??n??fici?? </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q32- Et pendant la covid-19 ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question35'))
                                            <span class="text-danger">{{ $errors->first('question35') }}</span>
                                            @endif
                                        </div>

                                        <select name="question35" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui partiellement">Oui partiellement   </option>
                                            <option value="Oui compl??tement">Oui compl??tement </option>
                                            <option value="Jamais b??n??fici??">Jamais b??n??fici?? </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q33- Quel est l?????tat du mat??riel utilis?? ? <strong style="color:red;">  *</strong>   </label>
                                            @if ($errors->has('question36'))
                                            <span class="text-danger">{{ $errors->first('question36') }}</span>
                                            @endif
                                        </div>

                                        <select name="question36" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Un peu vieux">Un peu vieux  </option>
                                            <option value="Inad??quat">Inad??quat </option>
                                            <option value="Trop vieux">Trop vieux </option>
                                            <option value="Nouveau">Nouveau </option>
                                            <option value="Ad??quat">Ad??quat </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q34- Quel est l?????tat des lieux des proc??dures de pr??vention de base habituellement appliqu??s dans votre centre hospitalier ? <strong style="color:red;">  *</strong>  </label>
                                            @if ($errors->has('question37'))
                                            <span class="text-danger">{{ $errors->first('question37') }}</span>
                                            @endif
                                        </div>

                                        <select name="question37" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Pas du tout satisfaisantes">Pas du tout satisfaisantes   </option>
                                            <option value="Un peu satisfaisantes">Un peu satisfaisantes  </option>
                                            <option value="Satisfaisantes">Satisfaisantes </option>
                                            <option value="Tr??s satisfaisantes">Tr??s satisfaisantes </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q35- Selon vous, l???environnement de soin est-il s??curisant pour les patients et pour les professionnels soignants ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question38'))
                                            <span class="text-danger">{{ $errors->first('question38') }}</span>
                                            @endif
                                        </div>

                                        <select name="question38" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Pas du tout satisfaisantes">Pas du tout satisfaisantes   </option>
                                            <option value="Un peu satisfaisantes">Un peu satisfaisantes  </option>
                                            <option value="Satisfaisantes">Satisfaisantes </option>
                                            <option value="Tr??s satisfaisantes">Tr??s satisfaisantes </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q36- Selon vous, l???environnement de soin a-t-il contribu?? ?? la forte l??talit?? enregistr??e au cours de l?????pid??mie actuelle ? <strong style="color:red;">  *</strong>  </label>

                                            @if ($errors->has('question39'))
                                            <span class="text-danger">{{ $errors->first('question39') }}</span>
                                            @endif
                                        </div>

                                        <select name="question39" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui, les surfaces souill??es ont peut-??tre contribu?? ?? infecter certaines personnes">Oui, les surfaces souill??es ont peut-??tre contribu?? ?? infecter certaines personnes   </option>
                                            <option value="Oui, ?? l???h??pital tous sont ?? risque">Oui, ?? l???h??pital tous sont ?? risque  </option>
                                            <option value="Non, la communaut??, les march??s, lieux publics??? sont les principaux responsables">Non, la communaut??, les march??s, lieux publics??? sont les principaux responsables </option>
                                            <option value="Tr??s satisfaisantes">Tr??s satisfaisantes </option>
                                        </select>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q37- Disposez-vous, (chaque personnel de sant??) des ??quipements de protection individuel et collectif pour exercer votre travail dans votre structure de sant?? ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question40'))
                                            <span class="text-danger">{{ $errors->first('question40') }}</span>
                                            @endif</div>

                                        <select name="question40" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui, en quantit?? suffisante">Oui, en quantit?? suffisante  </option>
                                            <option value="Oui, mais il manque beaucoup d?????l??ments indispensables">Oui, mais il manque beaucoup d?????l??ments indispensables  </option>
                                            <option value="Non, je n???ai rien re??u">Non, je n???ai rien re??u </option>
                                        </select>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q38- D???o?? provient ce mat??riel ? </label>


                                        </div>

                                        <select name="question41" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="De la structure sanitaire (directeur, responsables de la structure)">De la structure sanitaire (directeur, responsables de la structure)   </option>
                                            <option value="D???efforts personnels (avec vos propres moyens)">D???efforts personnels (avec vos propres moyens)  </option>
                                            <option value="Des dons d???acteurs externes (particuliers, ONG???)">Des dons d???acteurs externes (particuliers, ONG???)</option>
                                            <option value="Du District de sant??">Du District de sant??</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q39- Qu???est ce qui manque ?   </label>

                                        </div>

                                        <select  name="question42" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Gants">Gants  </option>
                                            <option value="Masque">Masque  </option>
                                            <option value="D??sinfectants, gels hydro alcooliques">D??sinfectants, gels hydro alcooliques   </option>
                                            <option value="Combinaisons">Combinaisons</option>
                                            <option value="Surblouses, surchaussures">Surblouses, surchaussures</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>

                                     {{-- <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q39-a Qu???est ce qui manque ?   </label></div>

                                        <select  name="question43" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Gants">Gants  </option>
                                            <option value="Masque">Masque  </option>
                                            <option value="D??sinfectants, gels hydro alcooliques">D??sinfectants, gels hydro alcooliques   </option>
                                            <option value="Combinaisons">Combinaisons</option>
                                            <option value="Surblouses, surchaussures">Surblouses, surchaussures</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div> --}}

                                    <div class="row form-group">
                                        <div class="col col-md-4"><label for="textarea-input" class=" form-control-label">Q40- Quelles solutions proposez-vous pour combler le vide ?</label></div>
                                        <div class="col-12 col-md-8"><textarea  name="question44" id="textarea-input" rows="6" placeholder="Ecrire ici..." class="form-control"></textarea></div>
                                      </div>
                                      <hr>
                                      <div class="card-title">
                                        <h3 class="text-center">III- Prestation de soin (techniques de soin, engagement professionnel, s??curit?? et prise de risque) </h3>
                                      </div>
                                      <hr> <br/>
                                      <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q41- Que pensez-vous des mesures de protection mises ?? votre disposition ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question45'))
                                            <span class="text-danger">{{ $errors->first('question45') }}</span>
                                            @endif
                                        </div>

                                        <select  name="question45" data-placeholder="Choisir votre poste occup?? au sein de la structure hospitali??re..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Pas du tout satisfaisantes">Pas du tout satisfaisantes</option>
                                            <option value="Peu satisfaisantes">Peu satisfaisantes</option>
                                            <option value="Satisfaisantes">Satisfaisantes</option>
                                            <option value="Tr??s satisfaisantes">Tr??s satisfaisantes</option>

                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q42- Comment appr??ciez-vous la communication sous ??quipement de protection individuelle ? (masque, combinaison???) <strong style="color:red;">  *</strong></label>
                                        @if ($errors->has('question46'))
                                            <span class="text-danger">{{ $errors->first('question46') }}</span>
                                            @endif</div>

                                        <select  name="question46" data-placeholder="Choisir votre votre r??le au sein de la structure hospitali??re..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Bonne">Bonne  </option>
                                            <option value="Etouffante">Etouffante  </option>
                                            <option value="Difficile">Difficile </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q43- Comment appr??ciez-vous l???administration des soins sous ??quipement de protection individuelle ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question47'))
                                            <span class="text-danger">{{ $errors->first('question47') }}</span>
                                            @endif
                                        </div>

                                        <select  name="question47" data-placeholder="Choisir votre long??vit?? au poste..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Pas du tout satisfaisante (communication difficile limitant ainsi l???accompagnement psychologique du patient)">Pas du tout satisfaisante (communication difficile limitant ainsi l???accompagnement psychologique du patient)</option>
                                            <option value="Peu satisfaisante">Peu satisfaisante</option>
                                            <option value="Satisfaisante">Satisfaisante </option>
                                            <option value="Tr??s satisfaisante">Tr??s satisfaisante</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q44- Pouvez-vous nous d??crire vos ressentis par rapport aux risques mortels encourus lors de l???administration des soins aux patients suspects ? <strong style="color:red;">  *</strong> </label>

                                        @if ($errors->has('question48'))
                                        <span class="text-danger">{{ $errors->first('question48') }}</span>
                                        @endif
                                    </div>

                                        <select  name="question48" data-placeholder="Choisir Une caract??ristiques..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Le stress, c???est une maladie particuli??rement dangereuse donc il faut ??tre minutieux dans l???administration des soins">Le stress, c???est une maladie particuli??rement dangereuse donc il faut ??tre minutieux dans l???administration des soins  </option>
                                            <option value="La peur">La peur  </option>
                                            <option value="L???anxi??t??">L???anxi??t?? </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q45- Avez-vous ??t?? victime de surmenage durant cette p??riode ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question49'))
                                            <span class="text-danger">{{ $errors->first('question49') }}</span>
                                            @endif
                                        </div>

                                        <select  name="question49" data-placeholder="Choisir agr??gation" class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui, plusieurs fois">Oui, plusieurs fois</option>
                                            <option value="Non, jamais">Non, jamais</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q46- Pensez-vous que le risque de contamination pourrait influencer votre engagement professionnel ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question50'))
                                            <span class="text-danger">{{ $errors->first('question50') }}</span>
                                            @endif
                                        </div>

                                        <select  name="question50" data-placeholder="Choisir " class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui">Oui</option>
                                            <option value="Parfois, en cas de risque trop ??lev??">Parfois, en cas de risque trop ??lev??</option>
                                            <option value="Non, jamais">Non, jamais</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q47- Avez-vous subi des pressions/ harc??lements/ violence de vos patients, amis, coll??gues et parents pouvant limiter votre engagement d???offre des soins en contexte d?????pid??mie de covid-19 ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question51'))
                                            <span class="text-danger">{{ $errors->first('question51') }}</span>
                                            @endif
                                        </div>

                                        <select  name="question51" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui, patient agressif ne croyant pas au r??sultat du test">Oui, patient agressif ne croyant pas au r??sultat du test</option>
                                            <option value="Oui, la famille ??tait sceptique ayant peur du risque encouru au quotidien">Oui, la famille ??tait sceptique ayant peur du risque encouru au quotidien </option>
                                            <option value="Non, jamais subi">Non, jamais subi</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q48- Quel est votre point de vue personnel concernant le risque d???infection ?? covid-19 ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question52'))
                                            <span class="text-danger">{{ $errors->first('question52') }}</span>
                                            @endif
                                        </div>

                                        <select name="question52" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Risque grand et impr??visible">Risque grand et impr??visible</option>
                                            <option value="Risque maitris??">Risque maitris?? </option>
                                            <option value="Environnement toujours douteux et limitant l???envie de s???engager d???avantage dans la lutte">Environnement toujours douteux et limitant l???envie de s???engager d???avantage dans la lutte</option>

                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q49- Quelles sont les difficult??s que vous rencontrez dans la prise en charge des patients atteints de covid-19 ? </label>


                                        </div>

                                        <select name="question53" data-placeholder="Choisir..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Rupture de stock en ??quipement de protection individuelle">Rupture de stock en ??quipement de protection individuelle</option>
                                            <option value="Patients particuli??rement m??fiants et doutant de la capacit?? du personnel de sant?? ?? leur offrir des soins fiables">Patients particuli??rement m??fiants et doutant de la capacit?? du personnel de sant?? ?? leur offrir des soins fiables   </option>
                                            <option value="Les deux premi??res propositions sont justes">Les deux premi??res propositions sont justes   </option>
                                            <option value="Trop de pression au travail">Trop de pression au travail   </option>
                                            <option value="Absence de formation suffisante sur le sujet">Absence de formation suffisante sur le sujet   </option>
                                            <option value="Toutes les propositions sont justes">Toutes les propositions sont justes</option>
                                            <option value="Aucune difficult?? apparente">Aucune difficult?? apparente</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-4"><label for="textarea-input" class=" form-control-label">Q50- Que proposez-vous comme solutions ?? ces difficult??s ? </label>

                                        </div>
                                        <div class="col-12 col-md-8"><textarea name="question54" id="textarea-input" rows="6" placeholder="Ecrire ici..." class="form-control"></textarea></div>
                                      </div>

                                      <hr>
                                      <div class="card-title">
                                        <h3 class="text-center">IV-	Satisfaction au soin (participation aux soins et bien-??tre r??ciproque)</h3>
                                      </div>
                                      <hr> <br/>
                                      <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q51- Pouvez-vous nous donner les impressions de vos responsables, coll??gues, ainsi que votre entourage sur votre d??termination professionnelle ?? administrer de soins aux patients ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question55'))
                                            <span class="text-danger">{{ $errors->first('question55') }}</span>
                                            @endif
                                        </div>

                                        <select name="question55" data-placeholder="Choisir votre poste occup?? au sein de la structure hospitali??re..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Pas encourageantes">Pas encourageantes</option>
                                            <option value="Encourageantes">Encourageantes</option>
                                            <option value="Tr??s encourageantes">Tr??s encourageantes</option>

                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q52- Est-il des situations de travail durant cette p??riode ??pid??mique o?? il y???a une difficult?? de conciliation travail- obligations familiales ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question56'))
                                            <span class="text-danger">{{ $errors->first('question56') }}</span>
                                            @endif
                                        </div>

                                        <select name="question56" data-placeholder="Choisir votre votre r??le au sein de la structure hospitali??re..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui">Oui</option>
                                            <option value="Souvent">Souvent</option>
                                            <option value="Non">Non</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q53- Quelle a ??t?? la r??action de vos proches par rapport ?? votre situation au travail ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question57'))
                                            <span class="text-danger">{{ $errors->first('question57') }}</span>
                                            @endif
                                        </div>

                                        <select name="question57" data-placeholder="Choisir votre long??vit?? au poste..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Accord">Accord</option>
                                            <option value="Refus">Refus</option>
                                            <option value="Isolement">Isolement </option>
                                            <option value="Stigmatisation">Stigmatisation</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q54- B??n??ficiez-vous de primes de risque/ cong??s pay??s ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question58'))
                                            <span class="text-danger">{{ $errors->first('question58') }}</span>
                                            @endif
                                        </div>

                                        <select name="question58" data-placeholder="Choisir Une caract??ristiques..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui">Oui</option>
                                            <option value="Non">Non</option>
                                        </select>
                                    </div>

                                    <hr>
                                      <div class="card-title">
                                        <h3 class="text-center">V- M??sures pr??ventives et de contr??le (application effective des mesures et respect des proc??dures, politiques et m??thode de soin)</h3>
                                      </div>
                                      <hr> <br/>

                                      <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q55- Les dispositions actuelles de pr??vention et de lutte contre la COVID-19 vous rassurent-elles ?? vous engager davantage dans les soins lors d???une nouvelle flamb??e ??pid??mique ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question59'))
                                            <span class="text-danger">{{ $errors->first('question59') }}</span>
                                            @endif
                                        </div>

                                        <select name="question59" data-placeholder="Choisir votre poste occup?? au sein de la structure hospitali??re..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Oui">Oui</option>
                                            <option value="Non">Non</option>

                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q56- Quelles sont les directives/ instructions re??ues de vos sup??rieurs hi??rarchiques dans la prise en charge des patients atteints de covid-19 ? <strong style="color:red;">  *</strong>  </label>

                                            @if ($errors->has('question60'))
                                            <span class="text-danger">{{ $errors->first('question60') }}</span>
                                            @endif
                                        </div>

                                        <select name="question60" data-placeholder="Choisir votre votre r??le au sein de la structure hospitali??re..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Respect des mesures et protocoles pr??ventifs">Respect des mesures et protocoles pr??ventifs</option>
                                            <option value="Aucune directive pr??cise">Aucune directive pr??cise</option>
                                            <option value="S???engager et s???activer d???avantage pour lutter contre la maladie">S???engager et s???activer d???avantage pour lutter contre la maladie</option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q57- Quelles sont vos pr??cautions personnelles contre cette ??pid??mie ? <strong style="color:red;">  *</strong>  </label>

                                            @if ($errors->has('question61'))
                                            <span class="text-danger">{{ $errors->first('question61') }}</span>
                                            @endif
                                        </div>

                                        <select name="question61" data-placeholder="Choisir votre long??vit?? au poste..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Respect des mesures pr??ventives">Respect des mesures pr??ventives</option>
                                            <option value="Eau chaude tous les soirs">Eau chaude tous les soirs</option>
                                            <option value="Recours ?? la m??decine traditionnelle">Recours ?? la m??decine traditionnelle </option>
                                        </select>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q58- Que pensez-vous de l???action de l???Etat camerounais dans la lutte contre cette pand??mie ?? votre endroit ? <strong style="color:red;">  *</strong> </label>

                                            @if ($errors->has('question62'))
                                            <span class="text-danger">{{ $errors->first('question62') }}</span>
                                            @endif
                                        </div>

                                        <select name="question62" data-placeholder="Choisir Une caract??ristiques..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Pas du tout satisfaisante">Pas du tout satisfaisante   </option>
                                            <option value="Peu satisfaisante">Peu satisfaisante  </option>
                                            <option value="Satisfaisante">Satisfaisante  </option>
                                            <option value="Tr??s satisfaisante">Tr??s satisfaisante </option>
                                        </select>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-4"><label for="textarea-input" class=" form-control-label">Q59- Que souhaitez-vous que le gouvernement fasse pour vous ? <strong style="color:red;">  *</strong></label>

                                            @if ($errors->has('question63'))
                                            <span class="text-danger">{{ $errors->first('question63') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-12 col-md-8"><textarea name="question63" id="textarea-input" rows="6" placeholder="Ecrire ici..." class="form-control"></textarea></div>
                                      </div>

                                      <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Q60- Vous ??tes pour ou contre le vaccin ? </label><strong style="color:red;">  *</strong> </strong>

                                            @if ($errors->has('question64'))
                                            <span class="text-danger">{{ $errors->first('question64') }}</span>
                                            @endif
                                        </div>

                                        <select name="question64" data-placeholder="Choisir Une caract??ristiques..." class="standardSelect" tabindex="1">
                                            <option value=""></option>
                                            <option value="Pour">Pour</option>
                                            <option value="Contre">Contre</option>
                                            <option value="Fiabilit?? douteuse">Fiabilit?? douteuse</option>
                                        </select>
                                    </div>

                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            {{-- <i class="fa fa-lock fa-lg"></i>&nbsp; --}}
                                            <span id="payment-button-amount">Terminer</span>
                                            <span id="payment-button-sending" style="display:none;">Sending???</span>
                                        </button>
                                    </div>
                                  </form>
                              </div>
                          </div>

                        </div>
                    </div> <!-- .card -->

                    <div class="text-center">
                        <p>&copy; Copyright Lesline Keubou 2021 </p>
                    </div>

                    <div class ="icon-circle ml-4 mt-1" id ="meilleur">
                        <a id="back-to-top" href="#">
                        <i class="fa fa-arrow-circle-up" style="color: red;"></i>
                        </a>
                     </div>



    <style>
        #meilleur{
            position: fixed;
            right: 80px;
            bottom: 30px;
            font-size: 30px;
            /* background-color: transparent; */
        }


}
    </style>


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

<script>
    $("#devise").on('change', function (){
        var devise = this.value;
        var p1 = '';
        var p2 = '';
        var p3 = '';

        switch(devise) {
          case "XAF":
            p1 = '100 Fcfa';
            p2 = '200 Fcfa';
            p3 = '500 Fcfa';

            break;
          case "CAD":
            p1 = '1 $CAD';
            p2 = '2 $CAD';
            p3 = '4 $CAD';
            break;
          case "USD":
            p1 = '1 USD';
            p2 = '2 USD';
            p3 = '4 USD';
            break;
          case "Euro":
            p1 = '1 ???';
            p2 = '2 ???';
            p3 = '4 ???';
            break;
          case "autre":
            p1 = '1 USD';
            p2 = '2 USD';
            p3 = '4 USD';
            break;
        }

        $("#p1").text(p1);
        $("#p2").text (p2);
        $("#p3").text (p3);

    });


  /* code javascript pour faire basculer d'un point qu'econque de la page pour le haut*/

  (function ($) {

     /*--Faire d??filer vers le haut et afficher le bouton--*/

     $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
           $('#back-to-top').fadeIn();
        } else {
           $('#back-to-top').fadeOut();
        }
     });

     //Cliquez sur l'??v??nement faites d??filer jusqu'au bouton sup??rieur jquery

     $('#back-to-top').click(function(){
        $('html, body').animate({scrollTop : 0},600);
        return false;
     });

     })(jQuery);


  /* Fin du code pour baculer vers le haut de page*/

</script>


</body>
</html>
