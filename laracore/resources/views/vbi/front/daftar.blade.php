@extends('vbi/template/head')
@section('container')

<script>
    function cekPass() {
        var pass = $('#pass').val();
        var repass = $('#rePass').val();

        if (pass != repass) {
            $('#resPass').html('<b style="color:red">Password Tidak Sama</b>');
        } else {
            $('#resPass').html('');
        }
    }

    function cekEmail() {
        var email = $('#email').val();
        var emailFormat = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if (!emailFormat.test(email)) {
            $('#resEmail').html('<b style="color:red">Bukan Email</b>');
        } else {
            $('#resEmail').html('');
        }
    }
</script>

<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form ng-submit="submit()" ng-controller="daftarCtrl" accept-charset="UTF-8" role="form" class="form-signin" method="POST" action="daftar">
                        <fieldset>
                            <label class="panel-login">
                                <div class="login_result"></div>
                            </label>
                            <input id="email" name="emailTxt" class="form-control" placeholder="Email Kamu" type="email" required="" onkeyup="cekEmail();">
                            <input name="fNameTxt"class="form-control" placeholder="Nama Depan Kamu" type="text" required="">
                            <input name="lNameTxt"class="form-control" placeholder="Nama Belakang Kamu" type="text" required="">
                            <input name="telponTxt"class="form-control" placeholder="Nomor Telepon Kamu" type="tel" required="">
                            <input id="pass" name="passTxt"class="form-control" placeholder="Password" type="password" required="">
                            <input id="rePass" name="rePassTxt"class="form-control" placeholder="Re Password" type="password" required="" onkeyup="cekPass();">
                            <input name="_token" hidden value="{!! csrf_token() !!}" />
                            <i id="resPass"></i>
                            <i id="resEmail"></i>
                            </br>
                            <br>
                            <input name="loginBtn" class="btn btn-lg btn-success btn-block" type="submit" value="Daftar »">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
