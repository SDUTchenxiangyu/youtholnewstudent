@extends('layouts.app')

@section('content')
<div class="weui-msg">
  <div class="weui-msg__icon-area"><i class="weui-icon-success weui-icon_msg"></i></div>
  <div class="weui-msg__text-area">
    <h2 class="weui-msg__title">报名成功</h2>
     <p class="weui-msg__desc">欢迎你,{{ isset($name) ? $name : '' }}！请等待专人电话通知</p> 
  </div>
  <!-- <div class="weui-msg__opr-area">
    <p class="weui-btn-area">
      <a href="javascript:;" class="weui-btn weui-btn_primary">推荐操作</a>
      <a href="javascript:;" class="weui-btn weui-btn_default">辅助操作</a>
    </p>
  </div> -->
  <div class="weui-msg__extra-area">
    <div class="weui-footer">
    <p class="weui-footer__links">
        <a href="{{url('http://www.youthol.cn')}}" class="weui-footer__link">网站首页</a>
    </p>
    <p class="weui-footer__text">Copyright © 2001-2017 www.youthol.cn</p>
</div>
  </div>
</div>
@endsection
