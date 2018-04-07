@extends('layouts.default')
@section('title', '登录')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>登录</h5>
            </div>
            <div class="panel-body">@include('shared._errors')
                <form action="{{route('login')}}" method="POST">{{csrf_field()}}
                    <div class="form-group"><label for="email">邮箱：</label><input type="text" name="email" value="{{old('email')}}" class="form-control"></div>
                    <div class="form-group"><label for="password">密码（<a href="{{route('password.request')}}">忘记密码</a>）：</label><input type="password" class="form-control" name="password"></div>
                    <div class="checkbox"><label><input type="checkbox" name="remember">记住我</input></label></div>
                    <button class="btn btn-primary" type="submit">登录</button>
                </form>
                <hr>
                <p>还没账号？<a href="{{route('signup')}}">现在注册！</a></p>
            </div>
        </div>
    </div>
@stop