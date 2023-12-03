<!DOCTYPE html>
<html lang="en">
<head>

    <title>
        @yield('title')
    </title>

    @include('layout.head')
</head>
<body>

<div class="page d-flex">

    @include('layout.sidebar')

    <div class="content w-full">


        <!-- Start Head -->
            @include('layout.header')
        <!-- End Head -->


        <h1 class="p-relative">@yield('titlePage')</h1>


        @yield('content')





    </div>
</div>
</body>
</html>
