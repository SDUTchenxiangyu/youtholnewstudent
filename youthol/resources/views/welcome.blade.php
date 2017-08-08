@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">欢迎访问</div>

                <div class="panel-body">
                    欢迎访问青春在线报名管理系统
                </div>
            </div>
        </div>
    </div> -->
    <div class="jumbotron">
        <h1>欢迎你，{{ $name }}同学！</h1>
        <p>介绍文字占位</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">加入我们</a></p>
    </div>
</div>
@endsection
