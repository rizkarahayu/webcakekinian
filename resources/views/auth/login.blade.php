<html>
    <head>
        <title>Cake-kinian - Login</title>
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

            form p {
                color: darkgoldenrod;
            }
        #login form input {
          height: 50px;
        }

        #login form input[type="text"], input[type="password"], input[type="email"] {
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

              <div id="login">
                
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    @if ($errors->has('email'))
                        <p class="">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                    @if ($errors->has('password'))
                        <p class="">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                  <fieldset class="clearfix">

                    <p><span class="fa fa-user"></span><input type="email" name="email" placeholder="Email" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> 
                    <p><span class="fa fa-lock"></span><input type="password" name="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> 
                      
                    <p><input type="submit" value="Sign In"></p>

                  </fieldset>
                </form>

                <p>Not a member? <a href={{ url('/register') }}>Sign up now</a><span class="fontawesome-arrow-right"></span></p>
                <p><a href={{ url('/') }}>Back to Site</a><span class="fontawesome-arrow-right"></span></p>

              </div> <!-- end login -->

        </div>
    </body>
</html>
    


