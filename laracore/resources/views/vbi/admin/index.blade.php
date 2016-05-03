<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Vespa Balap Indonesia - Indonesian Vespa Racing</title>
        <link rel="icon" href="{{URL::asset('favicon.ico')}}">

        <!-- Bootstrap core CSS -->
        {!! Html::style('/layout/admin/css/bootstrap.min.css') !!}
        
        {!! Html::style('/layout/admin/css/AdminLTE.min.css') !!}
        {!! Html::style('/layout/admin/css/font-awesome.min.css') !!}
        {!! Html::style('/layout/admin/plugins/iCheck/square/blue.css') !!}

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b> VBI Official</a>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg">Selalu semangat terus om om</p>
                <form action="../../index2.html" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- Javascript -->
        {!! Html::script('/layout/js/jquery-1-11-3.js') !!}
        {!! Html::script('/layout/admin/js/bootstrap.min.js') !!}

        <!-- Javascript Costom -->
        {!! Html::script('/layout/admin/plugins/jQuery/jQuery-2.1.4.min.js') !!}
        {!! Html::script('/layout/admin/plugins/iCheck/icheck.min.js') !!}
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </script>
</body>
</html>
