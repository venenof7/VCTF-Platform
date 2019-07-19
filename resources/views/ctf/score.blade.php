@extends('ctf.home')
  @section('content') 
            <aside>
                              <div id="sidebar"  class="nav-collapse ">
                                  <!-- sidebar menu start-->
                                  <ul class="sidebar-menu" id="nav-accordion">
                                  
                                        <p class="centered"><a href="profile.html"><img src="{{ asset('ctf/assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
                                        <h5 class="centered">VCTF</h5>
                                            
                                      <li class="mt">
                                          <a href="/home">
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
                                          <a class="active" href="/scoreboard" >
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
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Scoreboard</h3>

                    <div class="row">
                    
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Rank Page </h4>
									<div class="card-header-right-icon">
										<ul>
											<li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
											<li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
												<ul class="card-option-dropdown dropdown-menu">
													<li><a href="#"><i class="ti-loop"></i> Update data</a></li>
													<li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
													<li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
													<li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
												</ul>
											</li>
											<li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
										</ul>
									</div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Score</th>
                                   
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($ranklist as $rank) 
                                         <tr>
                                           <td width="50">{{$loop->index}}</td>
                                           <td width="100">{{$rank->username}}</td>
                                           <td>
                                           @php $taskli=json_decode($rank->taskid,true);@endphp
                                           @foreach($task as $taskid)
                                             @php if(in_array($taskid->id,$taskli)){
                                             if(Auth::user()->id == $taskid->fbuserid){
                                             echo '<font color="#68dff0"><i title="'.$taskid->taskname.'" class="fa fa-circle"></i></font>';}else{
                                               echo '<i title="'.$taskid->taskname.'" class="fa fa-circle"></i> ';}}else{
                                               echo '<i title="'.$taskid->taskname.'"class="fa fa-circle-o"></i> ';}
                                               @endphp
                                           @endforeach
                                          
                                           <td width="50">{{$rank->score}}</td>
                                           
                                         @endforeach
                                         
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /# column -->
                      
					</div><!-- /# row -->     </div>
		  	
		  

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
     
      <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster --> 
  <script src="{{ asset('ctf/assets/js/jquery.js')}}"></script> 
  <script src="{{ asset('ctf/assets/js/bootstrap.min.js')}}"></script> 
  <script class="include" type="text/javascript" src="{{ asset('ctf/assets/js/jquery.dcjqaccordion.2.7.js')}}"></script> 
  <script src="{{ asset('ctf/assets/js/jquery.scrollTo.min.js')}}"></script> 
  <script src="{{ asset('ctf/assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script> 
  <!--common script for all pages--> 
  <script src="{{ asset('ctf/assets/js/common-scripts.js')}}"></script> 

  @endsection