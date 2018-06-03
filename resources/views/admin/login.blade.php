<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    @include("admin/static")
    <link rel="stylesheet" href="{{asset('css/admin/login.css')}}" media="all" />
</head>
<body>
<div class="video_mask"></div>
<div class="login">
    <h1>管理登录</h1>
    <form class="layui-form" action="login" method="post">
        <div class="layui-form-item">
            <input class="layui-input" name="username" value="{{old('username','')}}" placeholder="用户名" lay-verify="required" type="text" autocomplete="off">
        </div>
        <div class="layui-form-item">
            <input class="layui-input" name="password" value="{{old('password','')}}" placeholder="密码" lay-verify="required" type="password" autocomplete="off">
        </div>
        <div class="layui-form-item form_code">
            <input class="layui-input" name="code" value="" placeholder="验证码" lay-verify="required" type="text" autocomplete="off">
            <div class="code"><img src="code" width="116" height="36"></div>
        </div>
        <button class="layui-btn login_btn" lay-submit="" lay-filter="login">登录</button>
        <div class="layui-bg-red" style="text-align: center;margin-top:5px;">
            {!! $errors->first() !!}
        </div>
    </form>
</div>

</body>
</html>