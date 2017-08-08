@extends('layouts.app')
@section('content')
<!-- <style>
    .login_box{
        margin-top:100px;
    }
</style> -->
@if(session('msg'))
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>{{ session('msg') }}</strong>
</div>
@endif
<form class="form-horizontal" method="post" action="{{ url('/login') }}">
    {{ csrf_field() }}
    <div class="form-group login_box">
        <label for="inputEmail3" class="col-sm-3 control-label">邮箱</label>
        <div class="col-sm-5">
            <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
        <div class="col-sm-5">
            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
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