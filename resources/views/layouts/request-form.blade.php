<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UK-Dion Online Investment Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('request-form/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('request-form/css/style.css')}}">

    <style type="text/css">
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;

}



    </style>
</head>
<body>
    @yield('content')
    <!-- JS -->
    <script src="{{asset('request-form/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('request-form/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('request-form/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{asset('request-form/vendor/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('request-form/js/main.js')}}"></script>
</body>
</html>
