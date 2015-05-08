<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Sushiitto</title>
    {{ HTML::style('admin_assets/css/style.default.css') }}

    {{ HTML::script('admin_assets/js/plugins/jquery-1.7.min.js') }}

    {{ HTML::script('admin_assets/js/plugins/jquery-ui-1.8.16.custom.min.js') }}

    {{ HTML::script('admin_assets/js/plugins/jquery.cookie.js') }}

    {{ HTML::script('admin_assets/js/plugins/jquery.uniform.min.js') }}

    {{ HTML::script('admin_assets/js/custom/general.js') }}

    {{ HTML::script('admin_assets/js/custom/index.js') }}


    <!--[if IE 9]>
        {{ HTML::style('admin_assets/css/style.ie9.css')}}
    <![endif]-->
    <!--[if IE 8]>
        {{ HTML::style('admin_assets/css/style.ie8.css')}}
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<body class="loginpage">

	<div class="loginbox">
    	<div class="loginboxinner">

            <div class="logo">
            	<h1><img src="{{asset('images/logo_sushiitto.png')}}" alt="" style="width: 255px; margin-right: 5px;"/></h1>
                <p>Site administration</p>
            </div><!--logo-->

            <br clear="all" /><br />

            <div class="nousername">
				<div class="loginmsg">The password you entered is incorrect.</div>
            </div><!--nousername-->

            <div class="nopassword">
				<div class="loginmsg">The password you entered is incorrect.</div>
                <div class="loginf">
                    <div class="thumb"><img alt="" src="{{ asset('admin_assets/images/thumbs/avatar1.png') }}" /></div>
                    <div class="userlogged">
                        <h4></h4>
                        <a href="index.html">Not <span></span>?</a>
                    </div>
                </div><!--loginf-->
            </div><!--nopassword-->

            {{ Form::open(array('id'=>'login')) }}

                <div class="username">
                	<div class="usernameinner">
                    	<input type="text" name="email" id="username" />
                    </div>
                </div>

                <div class="password">
                	<div class="passwordinner">
                    	<input type="password" name="password" id="password" />
                    </div>
                </div>
                <button>Sign In</button>

            {{ Form::close() }}

        </div><!--loginboxinner-->
    </div><!--loginbox-->
</body>
</html>
