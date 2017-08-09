@extends('layouts.app')
@section('content')
@if(session('msg'))
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>{{ session('errors') }}</strong>
</div>
@endif
<form class="form-horizontal" method="post" action="{{ url('/register') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">你的真实姓名</label>
        <div class="col-sm-5">
            <input type="name" class="form-control" name="name" id="input" placeholder="name">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">你的邮箱</label>
        <div class="col-sm-5">
            <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">班级</label>
        <div class="col-sm-5">
            <input type="name" class="form-control" name="class" id="input" placeholder="name">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">你的手机</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="mphone" id="input" placeholder="phone">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
        <div class="col-sm-5">
            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-3 control-label">确认密码</label>
        <div class="col-sm-5">
            <input type="password" name="password_r" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>
  <!-- <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div> -->
    <div class="form-group">
        <div class="col-sm-offset-5 col-sm-10">
            <button type="submit" class="btn btn-primary">登陆</button>
        </div>
    </div>
</form>
@endsection