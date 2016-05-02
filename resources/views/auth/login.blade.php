<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>SPK Pinjaman Modal Usaha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'/>
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="stylesheet" href="{{ asset('css/icon-font.min.css') }}" type='text/css'/>
    <!-- //lined-icons -->
    <!--animate-->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <!-- Placed js at the end of the document so the pages load faster -->

</head>

<body>
<section>
    <body class="sign-in-up">
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-in-form">
                <div class="sign-in-form-top">
                    <p><span>BMT Agawe Makmur</span></p>
                </div>
                <div class="signin">
                    <form role="form" method="POST" action="{{ url('new-login') }}">
                        {!! csrf_field() !!}
                        <div class="log-input{{ $errors->has('username') || $errors->has(0) ? ' has-error' : '' }}">
                            <div class="log-input-left">
                                <input type="text" class="user" name="username" value="Username or Email" required
                                       onfocus="this.value = '';"
                                       onblur="if (this.value == '') {this.value = 'Username or Email';}"/>
                                @if ($errors->has('username') || $errors->has(0))
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first('username') }} {{ $errors->first(0) }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="log-input{{ $errors->has('password') || $errors->has(0)  ? ' has-error' : '' }}">
                            <div class="log-input-left">
                                <input type="password" class="lock" name="password" value="password" required
                                       onfocus="this.value = '';"
                                       onblur="if (this.value == '') {this.value = 'password';}"/>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <input type="submit" name="btn-login" value="Login">
                    </form>
                    <div class="signin-rit">
                        <p><a href="{{ url('/password/reset') }}">Forgot Password?</a></p>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <!--footer section start-->
    <footer>
        <p>&copy 2016 Agawe Makmur. All Rights Reserved <a href="https://w3layouts.com/" target="_blank">w3layouts.</a>
        </p>
    </footer>
    <!--footer section end-->
</section>

<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
