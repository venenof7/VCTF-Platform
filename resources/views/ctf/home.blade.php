<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>VenCTF Plat</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('ctf/assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('ctf/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('ctf/assets/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ctf/assets/js/gritter/css/jquery.gritter.css')}}" />
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('ctf/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('ctf/assets/css/style-responsive.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('ctf/assets/css/to-do.css')}}">
  <link href="{{ asset('ctf/build/toastr.css')}}" rel="stylesheet" />
    <script src="{{ asset('ctf/assets/js/chart-master/Chart.js')}}"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="/home" class="logo"><b>VCTF-Plat</b></a>
            <!--logo end-->
            
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
  @yield('content')
 

  </body>
</html>

