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
<script>
    $(input).select(config);
</script>
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
<form method="post" id="form" action="{{url('/register')}}" name="frm" onsubmit="return submit1(this);">
{{ csrf_field() }}
<div class="page input js_show">
    <div class="page__bd">  
        <div class="weui-cells__title">报名表</div> 
        <div class="weui-cells weui-cells_form">
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label"><i class="require">*</i>姓名</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="name" placeholder="请输入您的姓名" type="text">
                </div>
            </div>
            <div class="weui-cell weui-cell_vcode">
                <div class="weui-cell__hd">
                    <label class="weui-label"><i class="require">*</i>手机号</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="mphone" placeholder="请输入手机号" type="tel">
                </div>
            </div>
            <div class="weui-cell weui-cell_vcode">
                <div class="weui-cell__hd">
                    <label class="weui-label"><i class="require">*</i>邮箱</label>
                </div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="email" placeholder="请输入邮箱地址" type="tel">
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label"><i class="require">*</i>班级</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="class" placeholder="请输入您的班级" type="text">
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label"><i class="require">*</i>学号</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="number" pattern="[0-9]*" placeholder="请输入您的学号" type="text">
                </div>
            </div>
            <!-- <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label"><i class="require">*</i>登录密码</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="password" placeholder="请输入您的密码" type="password">
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label"><i class="require">*</i>确认密码</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" name="password_r" placeholder="请输入您的密码" type="password">
                </div>
            </div> -->
            <div class="weui-cells__title">性别</div>
            <div class="weui-cells weui-cells_radio">
                <label class="weui-cell weui-check__label" for="x11">
                    <div class="weui-cell__bd">
                        <p><i class="require">*</i>男</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input class="weui-check" name="sex" id="x11" value="男" type="radio">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
                <label class="weui-cell weui-check__label" for="x12">

                    <div class="weui-cell__bd">
                        <p><i class="require">*</i>女</p>
                    </div>
                    <div class="weui-cell__ft">
                         <input name="sex" class="weui-check" id="x12" value="女" type="radio"> 
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
        <!-- <div class="weui-cells__title"><p><i class="require">*</i>报名部门（每人只能报两个部门）</p></div>
        <div class="weui-cells weui-cells_checkbox">
            <label class="weui-cell weui-check__label" for="s11">
                <div class="weui-cell__hd">
                    <input type="checkbox" class="weui-check" name="checkbox1[]" value="综合" id="s11">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>综合</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s12">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1[]" value="品牌" class="weui-check" id="s12">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>品牌</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s13">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1[]" value="采编" class="weui-check" id="s13">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>采编</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s14">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1[]" value="新媒体" class="weui-check" id="s14">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>新媒体</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s15">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1[]" value="美工" class="weui-check" id="s15">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>美工</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s16">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1[]" value="闪客" class="weui-check" id="s16">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>闪客</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s17">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1[]" value="程序" class="weui-check" id="s17">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>程序</p>
                </div>
            </label>
        </div> -->
        <div class="weui-cell">
        <div class="weui-cell__hd"><label for="name" class="weui-label">第一志愿部门</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="job" name="first" readonly="readonly" type="text">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="name" class="weui-label">第二志愿部门</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="jobtwo" name="second" readonly="readonly" type="text">
        </div>
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
                    <textarea class="weui-textarea" name="techang" placeholder="请输入文本" rows="3"></textarea>
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
            <input class="weui-btn weui-btn_primary" id="boot" type="submit" value="确定">
        </div>
    </div>
</div>
</form>
<br>
<br>
<div class="weui-footer">
    <p class="weui-footer__links">
        <a href="{{url('http://www.youthol.cn')}}" class="weui-footer__link">网站首页</a>
    </p>
    <p class="weui-footer__text">Copyright © 2001-2017 www.youthol.cn</p>
</div>
<!-- <div class="js_dialog" id="iosDialog2" style="opacity: 0;">
    <div class="weui-mask"></div>
    <div class="weui-dialog">
    <div class="weui-dialog__bd">请输入姓名！</div>
    <div class="weui-dialog__ft">
        <a href="javascript:;" class="weui-dialog__btn weui-dialog__btn_primary">知道了</a>
    </div>
    </div>
</div> -->
<script>
  $(function() {
    FastClick.attach(document.body);
  });
</script>
<script>
    function submit1(frm){
        if (document.frm.name.value==""){
            // alert("请输入姓名！");
            // document.frm.name.focus();
            // $("#iosDialog2").click(function(){
            //     $("div").show();
            // });
            $(document).on("click","#boot", function() {
                $.alert("姓名不能为空！", "警告！");
            });
            return false;
        }
        else if(document.frm.number.value==""){
            $(document).on("click","#boot", function() {
                $.alert("学号不能为空！", "警告！");
            });
            return false;
        }
        else if(document.frm.class.value==""){
            $(document).on("click","#boot", function() {
                $.alert("班级不能为空！", "警告！");
            });
            return false;
        }
        else if(document.frm.mphone.value==""){
            $(document).on("click","#boot", function() {
                $.alert("手机号不能为空！", "警告！");
            });
            return false;
        }
        // else if(document.frm.password.value==""){
        //     $(document).on("click","#boot", function() {
        //         $.alert("密码不能为空！", "警告！");
        //     });
        //     return false;
        // }
        return true;
    } 
</script>
<script>
    $("#job").select({
    title: "选择第一志愿部门",
    items: ["综合", "品牌", "采编", "新媒体", "美工", "闪客", "程序"],
    onChange: function(d) {
          console.log(this, d);
        },
        onClose: function() {
          console.log("close");
        },
        onOpen: function() {
          console.log("open");
        },
    });
</script>
<script>
    $("#jobtwo").select({
    title: "选择第二志愿部门",
    items: ["综合", "品牌", "采编", "新媒体", "美工", "闪客", "程序"],
    onChange: function(d) {
          console.log(this, d);
        },
        onClose: function() {
          console.log("close");
        },
        onOpen: function() {
          console.log("open");
        },
    });
</script>
@endsection