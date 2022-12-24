<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Home page')</title>
     <!-- Bootstrap CSS -->
     @include('admin.layouts.css')
     <style>
        .container {
            margin: 10px auto;
        }
        .search{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
   {{-- Header --}}
    @include('admin.layouts.header')
 
    {{-- menu --}}
    @include('admin.layouts.menu')

    {{-- content --}}
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    
    @include('admin.layouts.footer')
</body>
</html>