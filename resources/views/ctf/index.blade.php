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
 <body onload="getTime()">
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
            <aside>
                              <div id="sidebar"  class="nav-collapse ">
                                  <!-- sidebar menu start-->
                                  <ul class="sidebar-menu" id="nav-accordion">
                                  
                                        <p class="centered"><a href="profile.html"><img src="{{ asset('ctf/assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
                                        <h5 class="centered">VCTF</h5>
                                            
                                      <li class="mt">
                                          <a class="active" href="/home">
                                              <i class="fa fa-dashboard"></i>
                                              <span>Dashboard</span>
                                          </a>
                                      </li>
                    
                                      <li class="sub-menu">
                                          <a href="/challenges" >
                                              <i class="fa fa-flag"></i>
                                              <span>Challenges</span>
                                          </a>
                                          
                                      </li>
                    
                                      <li class="sub-menu">
                                          <a href="/scoreboard" >
                                              <i class="fa fa-book"></i>
                                              <span>scoreboard</span>
                                          </a>
                                          
                                      </li>
                                     
                                      <li class="sub-menu">
                                          <a  href="/about" >
                                              <i class=" fa fa-bar-chart-o"></i>
                                              <span>About</span>
                                          </a>
                                          
                                      </li>
                    
                                  </ul>
                                  <!-- sidebar menu end-->
                              </div>
                          </aside>

	<div class="container">
	  	
	  		<div id="showtime"></div>
	  			<div class="col-lg-4 col-lg-offset-4">
	  				<div class="lock-screen">
		  				<h2><a data-toggle="modal" href="#myModal"><i class="fa fa-flag"></i></a></h2>
		  				<h2><a href="#">Nu1L</a></h2>
		  				
				          <!-- Modal -->
				          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
				              <div class="modal-dialog">
				                  <div class="modal-content">
				                      <div class="modal-header">
				                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                          <h4 class="modal-title">Enjoy CTF:)</h4>
				                      </div>
				                     
				                    
				                  </div>
				              </div>
				          </div>
				          <!-- modal -->
		  				
		  				
	  				</div><! --/lock-screen -->
	  			</div><!-- /col-lg-4 -->
	  	
	  	</div><!-- /container -->

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->

      <!--main content end-->
      <!--footer start-->
     
      <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster --> 
  <script src="{{ asset('ctf/assets/js/jquery.js')}}"></script> 
  <script src="{{ asset('ctf/assets/js/bootstrap.min.js')}}"></script> 
  <script class="include" type="text/javascript" src="{{ asset('ctf/assets/js/jquery.backstretch.min.js')}}"></script> 
       <script>
           $.backstretch("{{ asset('ctf/assets/img/veneno.jpg')}}", {speed: 500});
       </script>
	
	 <script>
        function getTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('showtime').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){getTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
	

  </body>
</html>