
  @extends('ctf.home')
  @section('content') 
  <aside> 
   <div id="sidebar" class="nav-collapse "> 
    <!-- sidebar menu start--> 
    <ul class="sidebar-menu" id="nav-accordion"> 
  
      <p class="centered"><a href="profile.html"><img src="{{ asset('ctf/assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
      <h5 class="centered">VCTF</h5>
     <li class="mt"> <a href="/home"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a> </li> 
     <li class="sub-menu"> <a class="active" href="/challenges"> <i class="fa fa-flag"></i> <span>Challenges</span> </a> </li> 
     <li class="sub-menu"> <a href="/scoreboard"> <i class="fa fa-book"></i> <span>scoreboard</span> </a> </li> 
     <li class="sub-menu"> <a href="/about"> <i class=" fa fa-bar-chart-o"></i> <span>About</span> </a> </li> 
    </ul> 
    <!-- sidebar menu end--> 
   </div> 
  </aside> 

  <section id="main-content"> 
   <section class="wrapper"> 
    <h3><i class="fa fa-angle-right"></i> To-Do Lists</h3> 
    <!-- SIMPLE TO DO LIST --> 
    <div class="col-lg-3 ds"> 
     <!--COMPLETED ACTIONS DONUTS CHART--> 
     <h3>NOTIFICATIONS</h3> 
     <!-- First Action --> 
     @foreach($hint as $hint_info)
     <div class="desc"> 
      <div class="thumb"> 
       <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span> 
      </div> 
      <div class="details"> 
       <p>
        <muted>
         {{$hint_info->addtime}}
        </muted><br /> <a href="#">{{$hint_info->taskname}}</a></br> @php echo base64_decode($hint_info->hintdata);@endphp </p> 
      </div> 
     </div> 
    @endforeach
     <!-- CALENDAR--> 
     <div id="calendar" class="mb"> 
      <div class="panel green-panel no-margin"> 
       <div class="panel-body"> 
        <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;"> 
         <div class="arrow"></div> 
         <h3 class="popover-title" style="disadding: none;"></h3> 
         <div id="date-popover-content" class="popover-content"></div> 
        </div> 
        <div id="my-calendar"></div> 
       </div> 
      </div> 
     </div>
     <!-- / calendar --> 
    </div>
    <!-- /col-lg-3 --> 
    <div class="row"> 
     <div class="col-md-8">
       @if($web->count()>0) 
      <section class="task-panel tasks-widget"> 
       <div class="panel-heading"> 
        <div class="pull-left">
         <h5><i class="fa fa-tasks"></i> Todo List - Complex Style</h5>
        </div> 
        <br /> 
       </div> 
       <div class="panel-body"> 
        <div class="task-content"> 
         <ul class="task-list"> 
          <li> 
           <div class="task-title"> 
            <div id="accordion" class="panel-group">
              @foreach($web as $web_info) 
             <div class="panel panel-default"> 
              <div class="panel-heading"> 
               <h4 class="panel-title"> <a href="#{{$web_info->id}}" data-parent="#accordion" class="collapsed" data-toggle="collapse"> {{$web_info->taskname}}   </a>
               @php if(in_array($web_info->id,$hinttask)) echo '<button type="button" class="btn btn-danger btn-xs"><i class="fa fa-bullhorn"></i>Hint</button>';@endphp
               @php if(in_array($web_info->id,$solved)) echo '<button type="button" class="btn btn-success btn-xs"><i class="fa fa-flag"></i>Done</button>';@endphp
             </h4> 

              </div> 
              <div class="panel-collapse collapse" id="{{$web_info->id}}"> 
               <div class="panel-body">
                 @php echo base64_decode($web_info->taskdata); @endphp 
                 <hr>
                      @foreach($hint as $hint_info)
                      @if($hint_info->taskid == $web_info->id)
                        <p>Hint:{{$hint_info->addtime}}
                          <div class="alert alert-success alert-dismissable"> @php echo base64_decode($hint_info->hintdata);@endphp</div></p>
                          @endif    
                      @endforeach
               </div> 
               <div class="form-group "> 
                <div class="col-lg-10"> 
                 <form id="login_form" action="" method="POST"> 
                  <input id="flag{{$web_info->id}}" name="flag" type="text" placeholder="flag" class="form-control" /> 
                  <input id="id{{$web_info->id}}" type="hidden" name="id" value="{{$web_info->id}}" /> 
                 </form>
                </div> 
                <a id="login_btn{{$web_info->id}}" class="btn btn-success btn-sm pull-left">Submit flag</a> 
               </div> 
              </div> 
             </div> @endforeach 
            </div> 
           </div> </li> 
         </ul> 
        </div> 
        <div class=" add-task-row"> 
         <a class="btn btn-success btn-sm pull-left" href="todo_list.html#"><i class="fa fa-tags" aria-hidden="true">WEB TASK</i></a> 
        </div> 
       </div> 
      </section> @endif @if($pwn->count()>0) 
      <section class="task-panel tasks-widget"> 
       <div class="panel-heading"> 
        <div class="pull-left">
         <h5><i class="fa fa-tasks"></i> Todo List - Complex Style</h5>
        </div> 
        <br /> 
       </div> 
       <div class="panel-body"> 
        <div class="task-content"> 
         <ul class="task-list"> 
          <li> 
           <div class="task-title"> 
            <div id="accordion" class="panel-group">
              @foreach($pwn as $pwn_info) 
             <div class="panel panel-default"> 
              <div class="panel-heading"> 
               <h4 class="panel-title"> <a href="#{{$pwn_info->id}}" data-parent="#accordion" class="collapsed" data-toggle="collapse"> {{$pwn_info->taskname}} </a>
               @php if(in_array($pwn_info->id,$hinttask)) echo '<button type="button" class="btn btn-danger btn-xs"><i class="fa fa-bullhorn"></i>Hint</button>';@endphp
               
                @php if(in_array($pwn_info->id,$solved)) echo '<button type="button" class="btn btn-success btn-xs"><i class="fa fa-flag"></i>Done</button>';@endphp
                
             </h4> 
              </div> 
              <div class="panel-collapse collapse" id="{{$pwn_info->id}}"> 
               <div class="panel-body">
                 @php echo base64_decode($pwn_info->taskdata); @endphp 
                 <hr>
                      @foreach($hint as $hint_info)
                      @if($hint_info->taskid == $pwn_info->id)
                        <p>Hint:{{$hint_info->addtime}}
                          <div class="alert alert-success alert-dismissable"> @php echo base64_decode($hint_info->hintdata);@endphp</div></p>
                          @endif    
                      @endforeach
               </div> 
               <div class="form-group "> 
                <div class="col-lg-10"> 
                <form id="login_form" action="" method="POST"> 
                  <input id="flag{{$pwn_info->id}}" name="flag" type="text" placeholder="flag" class="form-control" /> 
                  <input id="id{{$pwn_info->id}}" type="hidden" name="id" value="{{$pwn_info->id}}" /> 
                 </form>
                </div> 
                <a id="login_btn{{$pwn_info->id}}" class="btn btn-success btn-sm pull-left">Submit flag</a>
             </div> 
              </div> 
             </div> @endforeach 
            </div> 
           </div> </li> 
         </ul> 
        </div> 
        <div class=" add-task-row"> 
         <a class="btn btn-success btn-sm pull-left" href="todo_list.html#"><i class="fa fa-tags" aria-hidden="true">PWN TASK</i></a> 
        </div> 
       </div> 
      </section> @endif @if($re->count()>0) 
      <section class="task-panel tasks-widget"> 
       <div class="panel-heading"> 
        <div class="pull-left">
         <h5><i class="fa fa-tasks"></i> Todo List - Complex Style</h5>
        </div> 
        <br /> 
       </div> 
       <div class="panel-body"> 
        <div class="task-content"> 
         <ul class="task-list"> 
          <li> 
           <div class="task-title"> 
            <div id="accordion" class="panel-group">
              @foreach($re as $re_info) 
             <div class="panel panel-default"> 
              <div class="panel-heading"> 
               <h4 class="panel-title"> <a href="#{{$re_info->id}}" data-parent="#accordion" class="collapsed" data-toggle="collapse"> {{$re_info->taskname}} </a> 
               @php if(in_array($re_info->id,$hinttask)) echo '<button type="button" class="btn btn-danger btn-xs"><i class="fa fa-bullhorn"></i>Hint</button>';@endphp
               @php if(in_array($re_info->id,$solved)) echo '<button type="button" class="btn btn-success btn-xs"><i class="fa fa-flag"></i>Done</button>';@endphp
             </h4> 
              </div> 
              <div class="panel-collapse collapse" id="{{$web_re_infoinfo->id}}"> 
               <div class="panel-body">
                 @php echo base64_decode($re_info->taskdata); @endphp 
                 <hr>
                      @foreach($hint as $hint_info)
                      @if($hint_info->taskid == $re_info->id)
                        <p>Hint:{{$hint_info->addtime}}
                          <div class="alert alert-success alert-dismissable"> @php echo base64_decode($hint_info->hintdata);@endphp</div></p>
                          @endif    
                      @endforeach
               </div> 
               <div class="form-group "> 
                <div class="col-lg-10"> 
                <form id="login_form" action="" method="POST"> 
                  <input id="flag{{$re_info->id}}" name="flag" type="text" placeholder="flag" class="form-control" /> 
                  <input id="id{{$re_info->id}}" type="hidden" name="id" value="{{$re_info->id}}" /> 
                 </form>
                </div> 
                <a id="login_btn{{$re_info->id}}" class="btn btn-success btn-sm pull-left">Submit flag</a>
               </div> 
              </div> 
             </div> @endforeach 
            </div> 
           </div> </li> 
         </ul> 
        </div> 
        <div class=" add-task-row"> 
         <a class="btn btn-success btn-sm pull-left" href="todo_list.html#"><i class="fa fa-tags" aria-hidden="true">Re TASK</i></a> 
        </div> 
       </div> 
      </section> @endif @if($misc->count()>0) 
      <section class="task-panel tasks-widget"> 
       <div class="panel-heading"> 
        <div class="pull-left">
         <h5><i class="fa fa-tasks"></i> Todo List - Complex Style</h5>
        </div> 
        <br /> 
       </div> 
       <div class="panel-body"> 
        <div class="task-content"> 
         <ul class="task-list"> 
          <li> 
           <div class="task-title"> 
            <div id="accordion" class="panel-group">
              @foreach($misc as $misc_info) 
             <div class="panel panel-default"> 
              <div class="panel-heading"> 
               <h4 class="panel-title"> <a href="#{{$misc_info->id}}" data-parent="#accordion" class="collapsed" data-toggle="collapse"> {{$misc_info->taskname}} </a> 
               @php if(in_array($misc_info->id,$hinttask)) echo '<button type="button" class="btn btn-danger btn-xs"><i class="fa fa-bullhorn"></i>Hint</button>';@endphp
               @php if(in_array($misc_info->id,$solved)) echo '<button type="button" class="btn btn-success btn-xs"><i class="fa fa-flag"></i>Done</button>';@endphp
             </h4> 
              </div> 
              <div class="panel-collapse collapse" id="{{$misc_info->id}}"> 
               <div class="panel-body">
                 <hr>
                      @foreach($hint as $hint_info)
                      @if($hint_info->taskid == $misc_info->id)
                        <p>Hint:{{$hint_info->addtime}}
                          <div class="alert alert-success alert-dismissable"> @php echo base64_decode($hint_info->hintdata);@endphp</div></p>
                          @endif    
                      @endforeach
               </div> 
               <div class="form-group "> 
                <div class="col-lg-10"> 
                <form id="login_form" action="" method="POST"> 
                  <input id="flag{{$misc_info->id}}" name="flag" type="text" placeholder="flag" class="form-control" /> 
                  <input id="id{{$misc_info->id}}" type="hidden" name="id" value="{{$misc_info->id}}" /> 
                 </form>
                </div> 
                <a id="login_btn{{$misc_info->id}}" class="btn btn-success btn-sm pull-left">Submit flag</a>
               </div> 
              </div> 
             </div> @endforeach 
            </div> 
           </div> </li> 
         </ul> 
        </div> 
        <div class=" add-task-row"> 
         <a class="btn btn-success btn-sm pull-left" href="todo_list.html#"><i class="fa fa-tags" aria-hidden="true">MISC TASK</i></a> 
        </div> 
       </div> 
      </section> @endif @if($crypto->count()>0) 
      <section class="task-panel tasks-widget"> 
       <div class="panel-heading"> 
        <div class="pull-left">
         <h5><i class="fa fa-tasks"></i> Todo List - Complex Style</h5>
        </div> 
        <br /> 
       </div> 
       <div class="panel-body"> 
        <div class="task-content"> 
         <ul class="task-list"> 
          <li> 
           <div class="task-title"> 
            <div id="accordion" class="panel-group">
              @foreach($crypto as $crypto_info) 
             <div class="panel panel-default"> 
              <div class="panel-heading"> 
               <h4 class="panel-title"> <a href="#{{$crypto_info->id}}" data-parent="#accordion" class="collapsed" data-toggle="collapse"> {{$crypto_info->taskname}} </a> 
               @php if(in_array($crypto_info->id,$hinttask)) echo '<button type="button" class="btn btn-danger btn-xs"><i class="fa fa-bullhorn"></i>Hint</button>';@endphp
               
               @php if(in_array($crypto_info->id,$solved)) echo '<button type="button" class="btn btn-success btn-xs"><i class="fa fa-flag"></i>Done</button>';@endphp
             </h4> 
              </div> 
              <div class="panel-collapse collapse" id="{{$crypto_info->id}}"> 
               <div class="panel-body">
                <hr>
                      @foreach($hint as $hint_info)
                      @if($hint_info->taskid == $crypto_info->id)
                        <p>Hint:{{$hint_info->addtime}}
                          <div class="alert alert-success alert-dismissable"> @php echo base64_decode($hint_info->hintdata);@endphp</div></p>
                          @endif    
                      @endforeach
               </div> 
               <div class="form-group "> 
                <div class="col-lg-10"> 
                <form id="login_form" action="" method="POST"> 
                  <input id="flag{{$crypto_info->id}}" name="flag" type="text" placeholder="flag" class="form-control" /> 
                  <input id="id{{$crypto_info->id}}" type="hidden" name="id" value="{{$crypto_info->id}}" /> 
                 </form>
                </div> 
                <a id="login_btn{{$crypto_info->id}}" class="btn btn-success btn-sm pull-left">Submit flag</a>
               </div> 
              </div> 
             </div> @endforeach 
            </div> 
           </div> </li> 
         </ul> 
        </div> 
        <div class=" add-task-row"> 
         <a class="btn btn-success btn-sm pull-left" href="todo_list.html#"><i class="fa fa-tags" aria-hidden="true">Crypto TASK</i></a> 
        </div> 
       </div> 
      </section> @endif 
     </div> 
    </div>
    <!-- /row --> 
    <!-- SORTABLE TO DO LIST --> 
   </section>
   <!-- --/wrapper ----> 
  </section>
  <!-- /MAIN CONTENT --> 
  <!--main content end--> 
  <!--footer start-->  
  <!-- js placed at the end of the document so the pages load faster --> 
  <script src="{{ asset('ctf/assets/js/jquery.js')}}"></script> 
  <script src="{{ asset('ctf/assets/js/bootstrap.min.js')}}"></script> 
  <script class="include" type="text/javascript" src="{{ asset('ctf/assets/js/jquery.dcjqaccordion.2.7.js')}}"></script> 
  <script src="{{ asset('ctf/assets/js/jquery.scrollTo.min.js')}}"></script> 
  <script src="{{ asset('ctf/assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script> 
  <!--common script for all pages--> 
  <script src="{{ asset('ctf/assets/js/common-scripts.js')}}"></script> 
  <!--script for this page--> 
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
  <script src="{{ asset('ctf/assets/js/tasks.js')}}" type="text/javascript"></script> 
  <script>
  jQuery(document).ready(function() {
      TaskList.initTaskWidget();
  });

  $(function() {
      $( "#sortable" ).sortable();
      $( "#sortable" ).disableSelection();
  });

</script> 
  <script>
  //custom select box

  $(function(){
      $('select.styled').customSelect();
  });

</script>  
  <script typet="text/javascript" src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script> 
  <script src="{{ asset('ctf/build/toastr.min.js')}}"></script> 
  <script type="text/javascript">
      toastr.options.positionClass = 'toast-top-right';
</script> 
 <script type="text/javascript">
 function register (i) {
        $("#login_btn" + i).click(function () {
            var flag = $.trim($("#flag"+i).val());
            var id = $.trim($("#id"+i).val());
            var data= {_token:"{{csrf_token()}}",flag:flag,id:id};
            $.ajax({
                    type:"POST",
                    url:"/flag/submit",
                    data:data,
                    success:function(msg){
                        if(msg==1){
                        toastr.success('Right flag:)');  
                        }else if(msg==2){
                        toastr.warning('Already submit!');
                        }else{
                            toastr.error('Wrong flag:(');
                        }
                    }
                });
        });
    }
    $(function () {
        for (var i = 0; i < 20; i++) {
            register(i)
        }
        ;
    })
</script>
 
@endsection
