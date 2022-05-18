<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
        <title>Spotlight</title>
        <link href="{{ asset('frontend/images/spotlight.ico')}}" type="image/x-icon" rel="icon"/>
        <link href="{{ asset('frontend/images/spotlight.ico')}}" type="image/x-icon" rel="shortcut icon"/>
        
        <link rel="stylesheet" href="{{ asset('frontend/fronpage css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('frontend/fronpage css/style-old.css?q=60820317') }}"/>
        <link rel="stylesheet" href="{{ asset('frontend/fronpage css/style.css?q=60820317') }}"/>
        <link rel="stylesheet" href="/frontend/css/media-style.css"/>

        <script src="/frontend/js/jquery-3.1.1.min.js"></script>
        <script src="/usermgmt/js/ajaxValidation.js?q=60820317"></script>
        <script>var urlForJs = "{{url('/')}}";</script>
    </head>
    <body class="login">
        <div class="wrapper-page-1">
    <div class="card full-height-login m-2">
        <div class="card-body ">
            <h3 class="text-center m-0">
                <a class="logo logo-admin" href="{{url('/')}}"><img src="{{ asset('frontend/images/logo.png')}}" height="50" alt="logo"/></a>
            </h3>
            <div class="p-3">
                <h4 class="text-muted font-18 m-0 text-center">Sign In</h4>
                <p class="text-muted text-center">with your social account</p>
                    <div class="form-group">
        <ul class="social social-login">
                                 <button id="login-google" class="google flaticon-googleplus button" style="width:100%;background-color: transparent;border: none;" onclick ="javascript:isLogin('gmail');return false;" >
                        <!-- <i class=" flaticon-google-plus-symbol"></i><span>Sign in with Google</span> -->
                        <img src="{{ asset('frontend/images/btn_google_signin.png')}}" height="50" alt="logo"/>                    </button>
                </li>
                                </ul>
    </div>
<form method="post" accept-charset="utf-8" id="login-form" class="form-horizontal m-t-30" data-link="login" action="/login"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="d9c4b0a484ba034974d56cab265d64908ec2b5f8dd1c7f83044a9f577f482bf80c98dff9ffadf707c72320794370a064a01c2c13f8b4f941bffc9efc94250234"/></div>                <div class="form-group text-center">OR</div>
                <div class="message">
    </div>
                                <div class="form-group">
                    <label for="users-email">Email/Username</label>
                    <div class="input text"><input type="text" name="Users[email]" placeholder="Enter Email/Username" class="form-control" autocomplete="off" maxlength="100" id="users-email"/></div>                </div>
                <div class="form-group">
                    <label for="users-password">Password</label>
                    <div class="input password"><input type="password" name="Users[password]" placeholder="Enter Password" class="form-control" autocomplete="off" id="users-password"/></div>                </div>
                <div class="form-group row m-t-20">
                                        <div class="col-6">
                        <div class="custom-control custom-checkbox">
                            <div class="input checkbox"><input type="hidden" name="Users[remember]" value="0"/><input type="checkbox" name="Users[remember]" value="1" class="custom-control-input" id="customControlInline"></div>                        </div>
                    </div>
                                        <div class="col-6 text-right">
                        <button type="submit" class="btn btn-dark-blue w-md " id="login-submit">Login</button>
                    </div>
                </div>
                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20">
                        <a href="{{url('/forgotPassword')}}" title="Forgot Password" class="text-muted"><i class="mdi mdi-lock"></i>Forgot your password?</a>                    </div>
                </div>
                <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="81a51766956cd56d15fcca95780518cab49cf512%3A"/><input type="hidden" name="_Token[unlocked]" autocomplete="off" value=""/></div></form>            </div>
        </div>
    </div>
</div><script src="/frontend/js/common.js"></script><script src="/frontend/js/login.js"></script><script src="/frontend/js/form.submit.js?q=60820317"></script>            </body>
</html>
