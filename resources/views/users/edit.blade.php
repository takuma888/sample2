@extends('layouts.default')
@section('title', '编辑个人资料')
@section('content')

<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>更新个人资料</h5>
        </div>
        <div class="panel-body">
            @include('shared._errors')
            <div class="gravatar_edit"><a href="http://gravatar.com/emails" target="_blank"><img src="{{$user->gravatar(200)}}" alt="" class="gravatar"></a></div>
            <form action="{{route('users.update', $user->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="form_group"><label for="name">名称：</label><input type="text" name="name" value="{{$user->name}}" class="form-control"></div>
                <div class="form_group"><label for="email">邮箱：</label><input readonly="readonly" type="text" name="email" value="{{$user->email}}" class="form-control"></div>
                <div class="form_group"><label for="password">密码：</label><input type="password" name="password" value="{{old('password')}}" class="form-control"></div>
                <div class="form_group"><label for="password_confirmation">密码：</label><input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control"></div>
                <button class="btn btn-primary" type="submit">更新</button>
            </form>
        </div>
    </div>
</div>

@stop()