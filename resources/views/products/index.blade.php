<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIENDA CAMILO TRIANA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h1> BIENVENIDO</h1>
                            </div>
                            <div class="col-md-2">
                                <a href="{{route('products.create')}}" class="btn btn-primary btn-md">NUEVO PRODUCTO</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('info'))
                            <div class="alert alert-success">
                                {{session('info')}}
                            </div>
                        @endif
                        <h2>PRODUCTOS</h2>
                        <table class="table table-hover table-sm">
                            <thead>
                                <th>NOMBRE</th>
                                <th>PRECIO</th>
                            </thead>
                            <tbody>
                                @foreach ($listproducts as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
