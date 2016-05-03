@extends('vbi/template/head')
@section('container')

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
                                    <input class="form-control" placeholder="Email Kamu" type="email" required="">
                                    <input class="form-control" placeholder="Nama Depan Kamu" type="text" required="">
                                    <input class="form-control" placeholder="Nama Belakang Kamu" type="text" required="">
                                    <input class="form-control" placeholder="Nomor Telepon Kamu" type="tel" required="">
                                    <input class="form-control" placeholder="Password" type="password" required="">
                                    <br></br>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Daftar »">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop
