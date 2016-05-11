@extends('vbi/template/head')
@section('container')
<script>
    function posts() {
        consol.log(0);
    }
</script>

<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" class="form-signin">
                        <fieldset>
                            <label class="panel-login">
                                <div class="login_result"></div>
                            </label>
                            <input id="emailTx" class="form-control" placeholder="Email Kamu" type="email" required="">
                            <input id="passTx" class="form-control" placeholder="Password" type="password" required="">
                            <br></br>
                            <input onclick="posts();" class="btn btn-lg btn-success btn-block" type="submit" id="loginBtn" value="Daftar »">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
