<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SIMPEG UNB | Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('assets/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    {{-- <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"> --}}
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <body style="background:url('images/bg.png');">
        <style>
            body {
                background-image: url('images/sas.png')"
            }
            </style>
            
            <nav class="navbar navbar-inverse" role="navigation" style="margin-bottom: 10">

                    <div class="container">
                        <div class="navbar-header">
                           
                        </div>
                        <!-- start:navbar-header -->
                        <div class="navbar-header">
                            <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <strong>
                                    <i class="fa fa-bars"></i> Menu Perpustakaan
                                </strong>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav navbar-right top-menu" role="navigation">
                                    <li class="">
                                        <a href="https://unb.ac.id/">
                                            <div class="text-center">
                                                <i class="fa fa-globe"></i> WEB
                                            </div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="cv">
                                            <div class="text-center">
                                                <i class="fa fa-phone"></i> Contact Me
                                            </div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="http://maps.google.com">
                                            <div class="text-center">
                                                <i class="fa fa-map"></i> Maps
                                            </div>
                                        </a>
                                    </li>
                                    <li class="hidden-xs">
                                            <a>
                                                <i class="fa fa-clock-o"></i> <span id="jamweke">11:18:35</span>
                                                <script type="text/javascript">
                                                    <!--
                                                    function startTime() {
                                                        var today=new Date(),
                                                            curr_hour=today.getHours(),
                                                            curr_min=today.getMinutes(),
                                                            curr_sec=today.getSeconds();
                                                     curr_hour=checkTime(curr_hour);
                                                        curr_min=checkTime(curr_min);
                                                        curr_sec=checkTime(curr_sec);
                                                        document.getElementById('jamweke').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
                                                    }
                                                    function checkTime(i) {
                                                        if (i<10) {
                                                            i="0" + i;
                                                        }
                                                        return i;
                                                    }
                                                    setInterval(startTime, 500);
                                                    //-->
                                                </script>
                                            </a>
                                        </li>
                                    <li class="active">
                                        <a href="/internal/login">
                                            <div class="text-center">
                                                <i class="fa fa-user"></i> Admin
                                            </div>
                                        </a>
                                    </li>
            </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <p class="text-center" style="margin-top: 50px">
                    <img src="{{ asset('images/hmm1.png') }}" alt="SIMPEG UNB" width="250" />
                </p>
                <p class="text-center" style="margin-left:500px ; margin-top: 50px">
                <div class="panel panel-default" >
                    <div class="panel-heading" >
                        <h3 class="panel-title">Login Karyawan</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Panduan Penggunaan</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      <ul class="timeline">
                                        <li>
                                          <div class="timeline-badge primary"><i class="fa fa-user"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Login</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <small>Isi <b>Nomor Induk Karyawan</b> dan <b>Password</b></small>
                                                </div>
                                            </div>
                                          </li>
                                          <li class="timeline-inverted">
                                              <div class="timeline-badge warning"><i class="fa fa-print  "></i>
                                              </div>
                                              <div class="timeline-panel">
                                                  <div class="timeline-heading">
                                                      <h4 class="timeline-title">Slip Gaji</h4>
                                                  </div>
                                                  <div class="timeline-body">
                                                    <small>Slip gaji yang muncul hanya yang sudah di <i><b>Published</b></i> oleh Bag. Keuangan</small>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="timeline-badge success"><i class="fa fa-check"></i>
                                              </div>
                                              <div class="timeline-panel">
                                                  <div class="timeline-heading">
                                                      <h4 class="timeline-title">Selesai</h4>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <small>Jangan lupa untuk Logout jika sudah selesai</small>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($errors->has('notification'))
                          <div class="alert alert-danger" role="alert">Nomor Induk Karyawan atau Password salah!</div>
                        @endif
                        <form action="{{ route('karyawan.login.store') }}" method="post">
                            <fieldset>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" placeholder="NIK" name="nik" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-primary btn-block"><i class="fa fa-sign-in-alt"></i> Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('assets/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('assets/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>
