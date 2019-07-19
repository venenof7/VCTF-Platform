@extends('adminpage.home')
@section('content')
<div class="tpl-page-container tpl-page-header-fixed">
    <div class="tpl-left-nav tpl-left-nav-hover">
    <div class="tpl-left-nav-title">Amaze UI 列表</div>
    <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">
        <li class="tpl-left-nav-item">
            <a href="/ctfadmin/home" class="nav-link">
            <i class="am-icon-home"></i>
            <span>首页</span></a>
        </li>
        <li class="tpl-left-nav-item">
                <a href="/ctfadmin/task" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-bars"></i>
                    <span>题目列表</span></a>
        </li>
        <li class="tpl-left-nav-item">
                <a href="/ctfadmin/task/add" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-flag"></i>
                    <span>题目添加</span></a>
        </li>
        
        
        <li class="tpl-left-nav-item">
            <!-- 打开状态 a 标签添加 active 即可 -->
            <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
            <i class="am-icon-wpforms"></i>
            <span>Notice</span>
            <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转 -->
            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
            </a>
            <!-- 打开状态 添加 display:block-->
            <ul class="tpl-left-nav-sub-menu">
            <li>
                <a href="/ctfadmin/task/hint active" >
                <i class="am-icon-angle-right"></i>
                <span>题目hint</span>
                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                </a>
            </li>
            <li>
                <a href="/ctfadmin/notice" class="nav-link tpl-left-nav-link-list">
                <i class="am-icon-angle-right"></i>
                <span>相关公告</span></a>
            </a>
            </li>
            </ul>
        </li>
        <li class="tpl-left-nav-item">
            <a href="login.html" class="nav-link tpl-left-nav-link-list">
            <i class="am-icon-key"></i>
            <span>登出</span></a>
        </li>
        </ul>
    </div>
    </div>
      <div class="tpl-content-wrapper">
        <div class="tpl-content-page-title">Add Task</div>
        <ol class="am-breadcrumb">
          <li>
            <a href="#" class="am-icon-home">首页</a></li>
          
        <div class="tpl-portlet-components">
          <div class="portlet-title">
            <div class="caption font-green bold">
              <span class="am-icon-code"></span>题目hint添加</div>
          </div>
          <div class="tpl-block">
            <div class="am-g">
              <div class="tpl-form-body tpl-form-line">
                <form action="{{url('ctfadmin/task/hint')}}" class="am-form tpl-form-line-form" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                  <div class="am-form-group">
                    <label for="user-phone" class="am-u-sm-3 am-form-label">题目名称
                      <span class="tpl-form-line-small-title">taskname</span></label>
                    <div class="am-u-sm-9">
                      <select name="taskid" data-am-selected="{searchBox: 1}">
                        @foreach($task as $task_info)
                        <option value="{{$task_info->id}}">{{$task_info->typetask}}:{{$task_info->taskname}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                 
                  <div class="am-form-group">
                    <label for="user-intro" class="am-u-sm-3 am-form-label">题目hint</label>
                    <div class="am-u-sm-9">
                      <textarea class="" rows="10" name="hintdata" placeholder="请输入题目内容"></textarea>
                    </div>
                  </div>
                  <div class="am-form-group">
                    <div class="am-u-sm-9 am-u-sm-push-3">
                      <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
