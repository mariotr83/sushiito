<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="image/png" href="{{ asset('img/fav-icon-pepe.png') }}" />
<title>Sushiitto | Administration</title>
{{ HTML::style('admin_assets/css/style.default.css') }}
{{ HTML::style('css/bootstrap/bootstrap.min.css') }}
{{ HTML::style('css/min/admin.css') }}

<!-- {{ HTML::script('admin_assets/js/plugins/jquery-1.7.min.js') }} -->
{{ HTML::script('//code.jquery.com/jquery-1.10.2.js') }}
{{ HTML::script('admin_assets/js/custom/general.js') }}

<!-- jQuery UI -->
{{ HTML::style('//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css') }}
{{ HTML::script('//code.jquery.com/ui/1.11.2/jquery-ui.js') }}

{{ HTML::script('js/admin/form_ajax.js') }}

<!--[if IE 9]>
    {{ HTML::style('admin_assets/css/style.ie9.css')}}
<![endif]-->
<!--[if IE 8]>
    {{ HTML::style('admin_assets/css/style.ie8.css')}}
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<script>
    var base_url = "{{ URL::to('admin') }}";
</script>
<style>
    .vernav, .vernav2{
        top: 180px !important;
    }
</style>

</head>

<body class="withvernav">

<div class="bodywrapper">
   <div class="topheader">
       <div class="left">
           <h1 class="logo">sushiitto.<span>web</span></h1>
           <span class="slogan">Page administration</span>
           <br clear="all" />
       </div><!--left-->
       <div class="right">
           <div class="userinfo">
            <img src="{{ asset('admin_assets/images/thumbs/avatar.jpg') }}" style="width: 25px; height: 25px;" alt="" />
               <span>{{ Auth::user()->first_name.' '.Auth::user()->last_name  }}</span>
           </div><!--userinfo-->

           <div class="userinfodrop">
            <div class="avatar">
                <a href=""><img src="{{ asset('admin_assets/images/thumbs/avatarbig.jpg') }}" style="width: 95px; height: 95px;" alt="" /></a>
            </div><!--avatar-->
            <div class="userdata">
                <h4>{{ Auth::user()->first_name.' '.Auth::user()->last_name  }}</h4>
                <span class="email">{{ Auth::user()->email }}</span>
                <ul>
                    <li><a href="#">Edit Profile</a></li>
                    {{--<li><a href="{{ URL::route('sign_out') }}">Sign Out</a></li>--}}
                </ul>
            </div><!--userdata-->
           </div><!--userinfodrop-->
       </div><!--right-->
   </div><!--topheader-->

   <div class="header">
    <ul class="headermenu">

        <li><a href="{{ URL::route('admin_slider') }}"><span class="icon icon-flatscreen"></span>Home Slider</a></li>
        <li><a href="{{ URL::route('admin_online_order') }}"><span class="icon icon-pencil"></span>Pedidos en Linea</a></li>
        <li><a href="{{ URL::route('admin_menu') }}"><span class="icon icon-pencil"></span>Menu</a></li>
          {{-- <li><a href="{{ URL::route('admin_fan_club') }}"><span class="icon icon-pencil"></span>Fan Club</a></li>
        <li><a href="{{ URL::route('admin_biography') }}"><span class="icon icon-speech"></span>Biography</a></li>
        <li><a href="{{ URL::route('admin_videos') }}"><span class="icon icon-flatscreen"></span>Videos</a></li>
        <li><a href="{{ URL::route('map') }}"><span class="icon icon-flatscreen"></span>Map</a></li>
        <li><a href="{{ URL::route('admin_users') }}"><span class="icon icon-flatscreen"></span>Users</a></li>--}}
    </ul>
   </div><!--header-->
    @yield('content')
    @yield('scripts')
</div><!--bodywrapper-->
</body>
</html>
