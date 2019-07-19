<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class adminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
    }
  public function auth_admin()
  {
    if(Auth::user()->name != "venenof7"){
      return view('jump')->with([
        'message'=>"sorry",
        'url' =>'/home', 
        'jumpTime'=>2,
    ]);
    exit();

    }
  }
    public function seetask(Request $request)
    {
      $this->auth_admin();
        $task=DB::table('task')->get();
        return view('adminpage.task')->with('task',$task);
          
    }
    public function delete(Request $request,$id)
    {
      $this->auth_admin();
        $success=DB::table('task')->where('id',$id)->delete();
        if($success){
          $mess="删除题目成功";
        }else{
          $mess="因为某些原因失败";
        }
        return view('jump')->with([
          'message'=>$mess,
          'url' =>'/ctfadmin/task', 
          'jumpTime'=>1,
      ]);
          
    }
    public function index(Request $request)
    {
      $this->auth_admin();
        $tasknum=DB::table('task')->select('id')->count();
        $people=DB::table('users')->select('id')->count();
        $submit=DB::table('submit_flag')->select('id')->count();
        $scorep=DB::table('solvedtask')->select('id')->count();
        return view('adminpage.index')->with(['tasknum'=>$tasknum,'people'=>$people,'submit'=>$submit,'scorep'=>$scorep]);
          
    }
    public function hintadd(Request $request)
    {
      $this->auth_admin();
      if($request->isMethod('get')){
        $task=DB::table('task')->get();
        return view('adminpage.hint')->with('task',$task);
        }elseif($request->isMethod('post')){
        $taskname=$request->input('taskid');
        $taskdata=base64_encode($request->input('hintdata'));
        $success=DB::table('hint')->insert(
          ['taskid' => $taskname, 'hintdata' => $taskdata, 'addtime'=>date("Y-m-d H:i:s")]
        );
        if($success){
          $mess="添加hint成功";
        }else{
          $mess="因为某些原因失败";
        }
        return view('jump')->with([
          'message'=>$mess,
          'url' =>'/ctfadmin/task/hint', 
          'jumpTime'=>2,
      ]);
  }
          
    }
     public function addtask(Request $request)
    {
      $this->auth_admin();
        if($request->isMethod('get')){
          return view('adminpage.addtask');
          }elseif($request->isMethod('post')){
          $taskname=$request->input('taskname');
          $type=$request->input('type');
          $score=$request->input('score');
          $flag=$request->input('flag');
          $taskdata=base64_encode($request->input('taskdata'));
          $check=$request->input('check');
          $success=DB::table('task')->insert(
            ['taskname' => $taskname, 'typetask' => $type, 'taskdata' => $taskdata, 'check' => $check, 'fbuserid'=>0,'flag'=> $flag, 'score'=> $score, 'addtime'=>date("Y-m-d H:i:s")]
          );
          if($success){
            $mess="添加成功";
          }else{
            $mess="因为某些原因失败";
          }
          return view('jump')->with([
            'message'=>$mess,
            'url' =>'/ctfadmin/task/add', 
            'jumpTime'=>2,
        ]);
    }
  }

}
