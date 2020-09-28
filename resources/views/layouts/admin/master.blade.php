<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.admin.partials.head')
</head>
{{-- Begin page --}}
<div id="wrapper">
    @include('layouts.admin.partials.topbar')
    @include('layouts.admin.partials.sidebar')
    {{-- ============================================================== --}}
    {{-- Start right Content here --}}
    {{-- ============================================================== --}}
    <div class="content-page">
        {{-- Start content --}}
        <div class="content">
            @yield('content')
        </div>
        {{-- content --}}
        @include('layouts.admin.partials.footer')
    </div>
    {{-- ============================================================== --}}
    {{-- End Right content here --}}
    {{-- ============================================================== --}}
</div>
{{-- END wrapper --}}

@include('layouts.admin.partials.scripts')

<body>

</body>

</html>
