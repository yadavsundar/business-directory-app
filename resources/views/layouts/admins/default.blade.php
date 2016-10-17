<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta charset="utf-8">
        <title>
            Admin Panel : Niramoy Business Directory  
        </title>
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport"><!-- bootstrap & fontawesome -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"><!-- page specific plugin styles -->
        <!-- text fonts -->
        <link href="/assets/fonts/fonts.googleapis.com.css" rel="stylesheet">
        <!-- ace styles -->
        <link class="ace-main-stylesheet" href="/assets/css/ace.admin.min.css" id="main-ace-style" rel="stylesheet">
        
    </head>
    <body class="no-skin">
        @include('layouts.admins.partials.navbar')
        <div class="main-container" id="main-container">
            @include('layouts.admins.partials.sidebar')
            <div class="main-content">
                <div class="main-content-inner">
                @include('layouts.admins.partials.breadcrumbs')
                    <div class="page-content">
                        <div class="row">
                            @yield('content')
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
        </div>
        @include('layouts.admins.partials.footer')
    </body>
</html>