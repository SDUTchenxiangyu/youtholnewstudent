@extends('layouts.app')
@section('content')
<!-- <style>
    .login_box{
        margin-top:100px;
    }
</style> -->
<form class="form-horizontal" method="post" action="{{ url('/login') }}">
  <div class="form-group login_box">
    <label for="inputEmail3" class="col-sm-3 control-label">邮箱</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
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
      <button type="submit" class="btn btn-default">登陆</button>
    </div>
  </div>
</form>
@endsection