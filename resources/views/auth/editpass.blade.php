<html>
    <head>
        <title>Cakekinian - Register</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ url('bower_components/font-awesome/css/font-awesome.min.css') }}">
                <style>
                /* CSS Document */
        /* ---------- FONTAWESOME ---------- */
        /* ---------- http://fortawesome.github.com/Font-Awesome/ ---------- */
        /* ---------- http://weloveiconfonts.com/ ---------- */
        @import url(http://weloveiconfonts.com/api/?family=fontawesome);
        /* ---------- ERIC MEYER'S RESET CSS ---------- */
        /* ---------- http://meyerweb.com/eric/tools/css/reset/ ---------- */
        @import url(http://meyerweb.com/eric/tools/css/reset/reset.css);
        /* ---------- FONTAWESOME ---------- */
        [class*="fontawesome-"]:before {
          font-family: 'FontAwesome', sans-serif;
        }

        /* ---------- GENERAL ---------- */
        * {
          -moz-box-sizing: border-box;
               box-sizing: border-box;
        }
        *:before, *:after {
          -moz-box-sizing: border-box;
               box-sizing: border-box;
        }

        body {
          background: #2c3338;
          color: #606468;
          font: 87.5%/1.5em 'Open Sans', sans-serif;
          margin: 0;
        }

        a {
          color: #eee;
          text-decoration: none;
        }

        a:hover {
          text-decoration: underline;
        }

        input {
          border: none;
          font-family: 'Open Sans', Arial, sans-serif;
          font-size: 14px;
          line-height: 1.5em;
          padding: 0;
          -webkit-appearance: none;
        }

        p {
          line-height: 1.5em;
        }

        .clearfix {
          *zoom: 1;
        }
        .clearfix:before, .clearfix:after {
          content: ' ';
          display: table;
        }
        .clearfix:after {
          clear: both;
        }

        .container {
          left: 50%;
          position: fixed;
          top: 50%;
          -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
                  transform: translate(-50%, -50%);
        }

        /* ---------- LOGIN ---------- */
        #login {
          width: 280px;
        }

        #login form span {
          background-color: #363b41;
          border-radius: 3px 0px 0px 3px;
          color: #606468;
          display: block;
          float: left;
          height: 50px;
          line-height: 50px;
          text-align: center;
          width: 50px;
        }

        #login form input {
          height: 50px;
        }

        #login form input[type="text"], input[type="password"] {
          background-color: #3b4148;
          border-radius: 0px 3px 3px 0px;
          color: #606468;
          margin-bottom: 1em;
          padding: 0 16px;
          width: 230px;
        }

        #login form input[type="submit"] {
          border-radius: 3px;
          -moz-border-radius: 3px;
          -webkit-border-radius: 3px;
          background-color: #ea4c88;
          color: #eee;
          font-weight: bold;
          margin-bottom: 2em;
          text-transform: uppercase;
          width: 280px;
        }

        #login form input[type="submit"]:hover {
          background-color: #d44179;
        }

        #login > p {
          text-align: center;
        }

        #login > p span {
          padding-left: 5px;
        }

    </style>
</head>
<body>

    <div class="container">
       <div class="container">

      <div id="login">

        <form method="POST" action="{{ route('#') }}">

          <fieldset class="clearfix">
            <p>Masukkan Password Lama</p>
            <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p>
            <p>Masukkan Password Baru</p>
            <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Ubah Password"></p>

          </fieldset>

        </form>

      </div> <!-- end login -->

    </div>

  </body>
</html>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
