<!DOCTYPE html>
<html>
<head>
    <title>Suscribe Message</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- font-awesome icons -->
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Righteous&amp;subset=latin-ext" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet" />
</head>
<body>
<div class="main">
    <h1>Suscribe To Us Message</h1>
    <div class="w3_agile_main_grid">
        <h3> Nuevo suscriptor: </h3> <strong> {{ $email }} </strong>
        @foreach( $categories as $category )
            <p>{{ $category->name }}</p>
            <br>
            <p>{{ $category->description }}</p>
            <br>
        @endforeach

    </div>

</div>
</body>
</html>
