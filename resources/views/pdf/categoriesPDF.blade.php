<!DOCTYPE html>
<html>
<head>
    <title>Categorias PDF</title>
    <style type="text/css">
        table{
            width: 100%;
            border:1px solid black;
        }
        td, th{
            border:1px solid black;
        }
    </style>
</head>

<body>
    <h2>Categorias de las películas al {{ $date }}</h2>
    <table>
        <thead>
            <tr>
                <th align="center" style="color:#000000; background: #95C6E5">N°</th>
                <th align="centar" style="color:#000000; background: #95C6E5">NOMBRE</th>
                <th align="centar" style="color:#000000; background: #95C6E5">DESCRIPCIÓN</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $categories as $key=>$category )
            <tr>
                <th align="center" style="color:#000000; background: #00BE67">{{ $key = $key+1 }}</th>
                <th align="center" style="color:#000000; background: #00BE67">{{ $category->name }}</th>
                <th align="center" style="color:#000000; background: #00BE67">{{ $category->description }}</th>
            </tr>
                @foreach( $category->films as $key2=>$film )
                    <tr>
                        <th align="center" >{{ $key.'.'.$key2 }}</th>
                        <th align="center" >{{ $film->name }}</th>
                        <th align="center" >
                            <img src="admin/assets/images/films/{{$film->image}}" style="width: 50px; height: 70px">
                        </th>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>

</html>