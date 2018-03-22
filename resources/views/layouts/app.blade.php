<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="language" content="en" />
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset("images/logo_mobile.jpg") }}" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset("images/logo_mobile.jpg") }}" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset("images/logo_mobile.jpg") }}" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset("images/logo_mobile.jpg") }}" />
        
        <link rel="icon" type="image/png" href="{{ asset("logo.ico") }}"/>
        
        <script src="{{ asset("js/jquery-1.11.3.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/bootstrap-3.3.5/js/bootstrap.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/jquery-ui.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/angular.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/ui-bootstrap-2.5.0.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/ui-bootstrap-tpls-2.5.0.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/moment-with-locales.min.js")}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
        <script src="{{ asset("js/angular-cookies.min.js")}}"></script>
        <script src="{{ asset("js/app/main.js") }}" type="text/javascript"></script>
        
        <script src="{{ asset("js/app/controllers/LoginController.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/app/controllers/FitBookingsController.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/app/controllers/FormsController.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/app/controllers/SafetyContractController.js") }}" type="text/javascript"></script>
        
        <script src="{{ asset("js/app/models/tourguideModel.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/app/models/fitbookingsModel.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/app/models/fitTransportsModel.js") }}" type="text/javascript"></script>
        
        <link href="{{ asset("css/font-awesome.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("js/bootstrap-3.3.5/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("css/components.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("css/bootstrap-extend.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("js/jquery-ui.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("js/ui-lightness/jquery-ui-1.8.16.custom.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("css/main.css") }}" rel="stylesheet" type="text/css"/>
        
        <!--<link href="<?php //echo Yii::app()->request->baseUrl; ?>/css/common.css" rel="stylesheet" type="text/css"/>-->
        <title>JetWings International Pte Ltd - @yield('title')</title>
    </head>
    <body>
        <div class="container-fluid">

            <div id="header">
                <div id="logo" class="img-responsive">
                    <a href="{{ url("/") }}">
                        <img src="{{ asset("images/Jetwings_logo.jpg") }}" alt=""/>
                    </a>
                </div>
                
                @if(Auth::check())
                <div class="settings">
                    <a href="{{url("/logout")}}">Logout</a>
                </div>
                @endif
                
            </div><!-- header -->
            
            <div class="clear"></div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>