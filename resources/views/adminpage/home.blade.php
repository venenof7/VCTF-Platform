<!doctype html>
<html>
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VCTF-admin</title>
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{ asset('admin/assets/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admin/assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/admin.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css')}}"></head>
  
  <body data-type="generalComponents">
    <header class="am-topbar am-topbar-inverse admin-header">
      <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
          <img src="{{ asset('admin/assets/img/logo.png')}}" alt=""></a>
      </div>
      <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right"></div>
      <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}">
        <span class="am-sr-only">µ¼º½ÇÐ»»</span>
        <span class="am-icon-bars"></span>
      </button>
    </header>
  @yield('content')
   <script src="{{ asset('admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/amazeui.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/iscroll.js')}}"></script>
    <script src="{{ asset('admin/assets/js/app.js')}}"></script>
  </body>

</html>
