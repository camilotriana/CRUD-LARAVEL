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
                        <h1>CREAR PRODUCTO</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('products.save')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nombre:</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Precio:</label>
                                <input type="number" class="form-control" name="price">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">AGREGAR</button>
                            <a href="{{route('products')}}" class="btn btn-danger">CANCELAR</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
