<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Index</title>
        <meta name="description" content="top menu &amp; navigation" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />               
        <link rel="stylesheet" href="/assets/css/jquery-ui.min.css" />
        <link rel="stylesheet" href="/assets/font-awesome/4.2.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/assets/fonts/fonts.googleapis.com.css" />        
        <link rel="stylesheet" href="/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="/assets/css/colorbox.min.css" />        
        <link rel="stylesheet" href="/assets/css/bootstrap-duallistbox.min.css" />
        <link rel="stylesheet" href="/assets/css/bootstrap-multiselect.min.css" />
        <link rel="stylesheet" href="/assets/css/bootstrap-timepicker.min.css" />
        <link rel="stylesheet" href="/assets/css/chosen.min.css" />
        <link href="/guests/css/home.css" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" type="text/css" href="/users/css/custom.css">

        <script src="/guests/js/modernizr.custom.js"></script>
              
              

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="/assets/css/ace-ie.min.css" />
        <![endif]-->



        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="/assets/js/html5shiv.min.js"></script>
        <script src="/assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="no-skin">

        @include('layouts.guests.partials.nav') 

        <div class="container">

            <div class="col-md-10 col-md-offset-1 userzone">    
                @if(!Auth::guest()) 
                    @include('layouts.users.partials.sidebar')    
                @endif
                <div class="main-content">
                    <div class="main-content-inner">
                        @yield('content')
                    </div>
                </div><!-- /.main-content -->
                 
            </div><!-- /.main-container -->
        </div>
        @include('layouts.users.partials.footer')        

    </body>
</html>