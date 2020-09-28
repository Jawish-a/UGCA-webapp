<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.auth.partials.head')

</head>

<body>
    {{-- Begin page --}}
    <div id="wrapper">
        @yield('content')
    </div>
    @include('layouts.auth.partials.scripts')

</body>

</html>
