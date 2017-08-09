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
 <!-- <form class="form-horizontal" method="post" action="{{ url('/login') }}">
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
   <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div> 
    <div class="form-group">
        <div class="col-sm-offset-5 col-sm-10">
            <button type="submit" class="btn btn-primary">登陆</button>
        </div>
    </div>
</form>  -->
<!-- <form action="{{ url('/login') }}"> -->
<!-- <label for="inputEmail3" class="col-sm-3 control-label">邮箱</label> -->
<!-- <input type="date" class="weui_input"> -->
<!-- </form> -->
<form method="post" id="form" action="{{url('/login')}}">
{{ csrf_field() }}
<div class="page input js_show">
    <div class="page__bd">  
        <div class="weui-cells__title">报名表</div> 
        <div class="weui-cells weui-cells_form">
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label">姓名</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="name" placeholder="请输入您的姓名" type="text">
                </div>
            </div>
            <div class="weui-cell weui-cell_vcode">
                <div class="weui-cell__hd">
                    <label class="weui-label">手机号</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="mphone" placeholder="请输入手机号" type="tel">
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label">班级</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="class" placeholder="请输入您的班级" type="text">
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label">学号</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="number" pattern="[0-9]*" placeholder="请输入您的学号" type="text">
                </div>
            </div>
            <div class="weui-cells__title">性别</div>
            <div class="weui-cells weui-cells_radio">
                <label class="weui-cell weui-check__label" for="x11">
                    <div class="weui-cell__bd">
                        <p><i class="require">*</i>男</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input class="weui-check" name="radio1" id="x11" type="radio">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
                <label class="weui-cell weui-check__label" for="x12">

                    <div class="weui-cell__bd">
                        <p><i class="require">*</i>女</p>
                    </div>
                    <div class="weui-cell__ft">
                         <input name="radio1" class="weui-check" id="x12" checked="checked" type="radio"> 
                         <span class="weui-icon-checked"></span> 
                    </div>
                </label>
            </div>
            <!-- <div class="weui-cells__title">第一志愿部门</div>
            <div class="weui-cells weui-cells_radio">
                <label class="weui-cell weui-check__label" for="x21">
                    <div class="weui-cell__bd">
                        <p>综合</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input class="weui-check" name="radio1" id="x21" type="radio">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
                <label class="weui-cell weui-check__label" for="x22">
                    <div class="weui-cell__bd">
                        <p>品牌</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input class="weui-check" name="radio1" id="x22" type="radio">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
                <label class="weui-cell weui-check__label" for="x13">
                    <div class="weui-cell__bd">
                        <p>采编</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input class="weui-check" name="radio1" id="x13" type="radio">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
                <label class="weui-cell weui-check__label" for="x14">
                    <div class="weui-cell__bd">
                        <p>新媒体</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input class="weui-check" name="radio1" id="x14" type="radio">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
                <label class="weui-cell weui-check__label" for="x15">
                    <div class="weui-cell__bd">
                        <p>美工</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input class="weui-check" name="radio1" id="x15" type="radio">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
                <label class="weui-cell weui-check__label" for="x16">
                    <div class="weui-cell__bd">
                        <p>闪客</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input class="weui-check" name="radio1" id="x16" type="radio">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
                <label class="weui-cell weui-check__label" for="x17">
                    <div class="weui-cell__bd">
                        <p>程序</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input class="weui-check" name="radio1" id="x17" type="radio">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
            </div> -->
            <!-- <div class="weui-cell">
                <div class="weui-cell__hd"><label for="" class="weui-label">日期</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" value="" type="date">
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label for="" class="weui-label">时间</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" value="" placeholder="" type="datetime-local">
                </div>
            </div>
            <div class="weui-cell weui-cell_vcode">
                <div class="weui-cell__hd"><label class="weui-label">验证码</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" placeholder="请输入验证码" type="number">
                </div>
                <div class="weui-cell__ft">
                    <img class="weui-vcode-img" src="./images/vcode.jpg">
                </div>
            </div>
        </div>
        <div class="weui-cells__tips">底部说明文字底部说明文字</div>

        <div class="weui-cells__title">表单报错</div>
        <div class="weui-cells weui-cells_form">
            <div class="weui-cell weui-cell_warn">
                <div class="weui-cell__hd"><label for="" class="weui-label">卡号</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" pattern="[0-9]*" value="weui input error" placeholder="请输入卡号" type="number">
                </div>
                <div class="weui-cell__ft">
                    <i class="weui-icon-warn"></i>
                </div>
            </div>
        </div>


        <div class="weui-cells__title">开关</div>
        <div class="weui-cells weui-cells_form">
            <div class="weui-cell weui-cell_switch">
                <div class="weui-cell__bd">标题文字</div>
                <div class="weui-cell__ft">
                    <input class="weui-switch" type="checkbox">
                </div>
            </div>
            <div class="weui-cell weui-cell_switch">
                <div class="weui-cell__bd">兼容IE Edge的版本</div>
                <div class="weui-cell__ft">
                    <label for="switchCP" class="weui-switch-cp">
                        <input id="switchCP" class="weui-switch-cp__input" checked="checked" type="checkbox">
                        <div class="weui-switch-cp__box"></div>
                    </label>
                </div>
            </div>
        </div> -->
        <div class="weui-cells__title">报名部门（每人只能报两个部门）</div>
        <div class="weui-cells weui-cells_checkbox">
            <label class="weui-cell weui-check__label" for="s11">
                <div class="weui-cell__hd">
                    <input type="checkbox" class="weui-check" name="zonghe" vaule="12" id="s11" checked="checked">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>综合</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s12">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s12">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>品牌</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s13">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s13">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>采编</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s14">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s14">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>新媒体</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s15">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s15">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>美工</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s16">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s16">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>闪客</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s17">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="chengxu" class="weui-check" id="s17">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>程序</p>
                </div>
            </label>
        </div>
        <div class="weui-cells__title">个人简历</div>
        <div class="weui-cells weui-cells_form">
            <div class="weui-cell">
                <div class="weui-cell__bd">
                    <textarea class="weui-textarea" name="jianjie" placeholder="请输入文本" rows="3"></textarea>
                    <!-- <div class="weui-textarea-counter"><span>0</span>/200</div> -->
                </div>
            </div>
        </div>

        <div class="weui-cells__title">特长</div>
        <div class="weui-cells weui-cells_form">
            <div class="weui-cell">
                <div class="weui-cell__bd">
                    <textarea class="weui-textarea" name="jianjie" placeholder="请输入文本" rows="3"></textarea>
                    <!-- <div class="weui-textarea-counter"><span>0</span>/200</div> -->
                </div>
            </div>
        </div>

        <!-- <div class="weui-cells__title">选择</div>
        <div class="weui-cells">

            <div class="weui-cell weui-cell_select weui-cell_select-before">
                <div class="weui-cell__hd">
                    <select class="weui-select" name="select2">
                        <option value="1">+86</option>
                        <option value="2">+80</option>
                        <option value="3">+84</option>
                        <option value="4">+87</option>
                    </select>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" pattern="[0-9]*" placeholder="请输入号码" type="number">
                </div>
            </div>
        </div>
        <div class="weui-cells__title">选择</div>
        <div class="weui-cells">
            <div class="weui-cell weui-cell_select">
                <div class="weui-cell__bd">
                    <select class="weui-select" name="select1">
                        <option selected="" value="1">微信号</option>
                        <option value="2">QQ号</option>
                        <option value="3">Email</option>
                    </select>
                </div>
            </div>
            <div class="weui-cell weui-cell_select weui-cell_select-after">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label">国家/地区</label>
                </div>
                <div class="weui-cell__bd">
                    <select class="weui-select" name="select2">
                        <option value="1">中国</option>
                        <option value="2">美国</option>
                        <option value="3">英国</option>
                    </select>
                </div>
            </div>
        </div>

        <label for="weuiAgree" class="weui-agree">
            <input id="weuiAgree" class="weui-agree__checkbox" type="checkbox">
            <span class="weui-agree__text">
                阅读并同意<a href="javascript:void(0);">《相关条款》</a>
            </span>
        </label> -->

        <div class="weui-btn-area">
            <button class="weui-btn weui-btn_primary" type="submit">确定</button>
        </div>
    </div>
</div>
</form>
@endsection