@extends('adminpage.home')
@section('content')
<div class="tpl-page-container tpl-page-header-fixed">
    <div class="tpl-left-nav tpl-left-nav-hover">
    <div class="tpl-left-nav-title">Amaze UI 列表</div>
    <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">
        <li class="tpl-left-nav-item">
            <a href="/ctfadmin/home" class="nav-link" active>
            <i class="am-icon-home"></i>
            <span>首页</span></a>
        </li>
        <li class="tpl-left-nav-item">
                <a href="/ctfadmin/task" class="nav-link tpl-left-nav-link-list ">
                    <i class="am-icon-tags"></i>
                    <span>题目列表</span></a>
        </li>
        <li class="tpl-left-nav-item">
                <a href="/ctfadmin/task" class="nav-link tpl-left-nav-link-list">
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
                <a href="/ctfadmin/task/hint" >
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
    <div class="tpl-content-page-title">
       Manage CTF
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">Manage</a></li>
        <li><a href="#">CTF</a></li>
       
    </ol>


    <div class="row">
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="am-icon-comments-o"></i>
                </div>
                <div class="details">
                    <div class="number"> {{$tasknum}} </div>
                    <div class="desc"> 题目 </div>
                </div>
                <a class="more" href="#">
            <i class="m-icon-swapright m-icon-white"></i>
        </a>
            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="am-icon-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number"> {{$people}} </div>
                    <div class="desc"> 注册人数 </div>
                </div>
                <a class="more" href="#"> 
            <i class="m-icon-swapright m-icon-white"></i>
        </a>
            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="am-icon-apple"></i>
                </div>
                <div class="details">
                    <div class="number"> {{$submit}} </div>
                    <div class="desc"> 提交flag次数 </div>
                </div>
                <a class="more" href="#"> 
            <i class="m-icon-swapright m-icon-white"></i>
        </a>
            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat purple">
                <div class="visual">
                    <i class="am-icon-android"></i>
                </div>
                <div class="details">
                    <div class="number"> {{$scorep}} </div>
                    <div class="desc"> 得分人数 </div>
                </div>
                <a class="more" href="#"> 
            <i class="m-icon-swapright m-icon-white"></i>
        </a>
            </div>
        </div>



    </div>

    <div class="tpl-content-scope">
        <div class="note note-info">
            <h3>基于La的轻量CTF平台
                <span class="close" data-close="note"></span>
            </h3>
            <p> By Venenof7@Nu1L</p>
            <p><span class="label label-danger">提示:</span> http://nu1l-ctf.com
            </p>
        </div>
    </div>


@endsection