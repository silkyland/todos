@extends('layout.master')
@section('content')
<div class="row" style="margin-top:50px;">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    โปรดเข้าสู่ระบบ
                </h4>
            </div>
            <div class="panel-body">
                <form action="/login">
                    <div class="form-group">
                        <label for="inputUsername">USERNAME: </label>
                        <input type="text" name="username" placeholder="กรอก username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputUsername">PASSWORD: </label>
                        <input type="password" name="password" placeholder="กรอก password" class="form-control">
                    </div>
                    <button class="btn btn-primary"><i class="fa fa-key"></i> เข้าสู่ระบบ</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
