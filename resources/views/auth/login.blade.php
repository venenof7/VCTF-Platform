<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('ctf/assets/lineicons/style.css')}}">    
    <!-- Custom styles for this template -->
    <link href="{{ asset('ctf/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('ctf/assets/css/style-responsive.css')}}" rel="stylesheet">

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
            <a href="index.html" class="logo"><b>VCTF-Plat</b></a>
            <!--logo end-->
           
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              <p class="centered"><a href="profile.html"><img src="{{ asset('ctf/assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
                                        <h5 class="centered">VCTF</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-flag"></i>
                          <span>Challenges</span>
                      </a>
                      
                  </li>

                
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>scoreboard</span>
                      </a>
                      
                  </li>
                 
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>About</span>
                      </a>
                      
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
    </section>
    <div id="login-page">
        <div class="container">
        
            <form class="form-login" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
              <h2 class="form-login-heading">sign in now</h2>
              <div class="login-wrap">
                  <input type="text" class="form-control" placeholder="Username" name="email" autofocus>
                   @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                  @endif
                  <br>
                  <input type="password" class="form-control" placeholder="Password" name="password">
                   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                  @endif
               <hr>
                  <button class="btn btn-theme btn-block"type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                  <hr>
                  <div class="registration">
                      Don't have an account yet?<br/>
                      <a class="" href="{{ route('register') }}">
                          Create an account
                      </a>
                  </div>
      
              </div>
      
      
            </form>	  	
        
        </div>
    </div>

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->



       <script src="{{ asset('ctf/assets/js/jquery.js')}}"></script>
    
    <script src="{{ asset('ctf/assets/js/bootstrap.min.js')}}"></script>
       <!--BACKSTRETCH-->
       <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
       <script type="text/javascript" src="{{ asset('ctf/assets/js/jquery.backstretch.min.js')}}"></script>
       <script>
           $.backstretch("{{ asset('ctf/assets/img/login-bg.jpg')}}", {speed: 500});
       </script>
   
	
	
	
       

  </body>
</html>
