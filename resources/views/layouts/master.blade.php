<!DOCTYPE html>
<html>
<head>
    <title>Atkins Engineering</title>
    <meta charset='utf-8'>
       <script src="{{ asset('js/app.js') }}" defer></script>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="/js/scripts.js" type='text/javascript' rel='stylesheet'>
    <link href="/css/styles.css" type='text/css' rel='stylesheet'>

        <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @stack('head')
</head>
<body class="bg-dark">
    <div id="container">
        <div id="inner">
            <section>
                @yield('content')
            </section>

            @include('footer')

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="/js/bootstrap.min.js"></script>
            
            @stack('body')
        </div>
    </div>
</body>
</html>
