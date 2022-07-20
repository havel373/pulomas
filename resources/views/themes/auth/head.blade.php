<head>
    <meta charset="utf-8" />
    <title>Login | {{config('app.name') . ': ' .$title ?? config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- third party css -->
    <link href="{{asset('assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- App css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css" integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/confirm.css')}}" rel="stylesheet" type="text/css" />
    <style>
        body {
            background-image: url({{asset('assets/images/bg-pattern-light.svg')}});
            background-size:cover;
            background-position:center;
        }
    </style>
</head>