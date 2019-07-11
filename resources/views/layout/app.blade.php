<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventbrote</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}" type="text/css">
</head>
<body>
    @include('layout.partials._nav')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-{{session()->get('type')}}">
                {{session()->get('message')}}
            </div>
        @endif
        @yield('content')
    </div>
    
</body>
</html>