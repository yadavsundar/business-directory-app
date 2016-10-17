<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"
    name="viewport">
    <title>index</title><!--Bootstrap CSS v3.3.4-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
    rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/component.css" rel="stylesheet" type="text/css">
    <link href="/css/home.css" rel="stylesheet" type="text/css">
    <script src="/js/modernizr.custom.js">
    </script><!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    @include('layouts.users.partials.navbar_access')
    <div class="container">
        <div class="col-md-10 col-md-offset-1">            
            @yield('content')
        </div>
    </div> 
    @include('layouts.users.partials.footer_access')   
</body>
</html>