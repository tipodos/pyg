@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Imagenes</h1>
@stop

@section('content')
<div class="form-container">
    <h2>Editar Imagen</h2>
    <form action="{{ route('imagen.update',['id'=>$imagen->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="nombre">Nombre de la Imagen</label>
        <input type="text" name="nombre" id="nombre" placeholder="Escribe el nombre de la Imagen" value="{{$imagen->nombre}}" required>

        <label for="categoria">Categoria</label>
        <select name="categoria_id" id="categoria" required>
            <option selected disabled>Selecciona una categoría</option>
            @foreach ($categoria as $cate)
            <option value="{{ $cate->id }}" {{ $imagen->categoria_id == $cate->id ? 'selected' : '' }}>{{ $cate->nombre }}</option>
            @endforeach
        </select>
        <div class="form-group">
            <label for="imagen">Subir Imagen</label>
            <input type="file" name="img" id="imagen" accept="image/*" class="form-control" onchange="previewImage(event)">
        </div>
        <div class="image-preview" style="margin-top: 10px;">
            <img id="imageDisplay" src="" alt="Previsualización de imagen" style="display: none; max-width: 200px; max-height: 200px; border: 1px solid #ddd; padding: 5px;">
        </div>
        <input type="submit" value="Enviar">
    </form>
</div>
<!-- Tabla para mostrar categorías -->
<div class="mt-4">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Imagen</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($img as $imgs)
                <tr>
                    <td>{{ $imgs->id }}</td>
                    <td>{{ $imgs->nombre }}</td>
                    <td>{{ $imgs->categoria->nombre }}</td>
                    <td><img src="{{asset('img/'.$imgs->img)}} " alt="" width="70px"></td>
                    <td>
                        <a href="{{ route('imagen.edit', ['id' => $imgs->id]) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('imagen.destroy', ['id' => $imgs->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta categoría?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('css')
<style>
    .form-container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 0 auto;
    }

    .form-container h2 {
        font-size: 24px;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .form-container label {
        font-size: 16px;
        color: #555;
        display: block;
        margin-top: 10px;
    }

    .form-container input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 5px;
        font-size: 16px;
        color: #333;
    }

    .form-container input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        margin-top: 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .form-container input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
@stop

@section('js')
    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();
    
            reader.onload = function(){
                var imageDisplay = document.getElementById('imageDisplay');
                imageDisplay.src = reader.result;
                imageDisplay.style.display = 'block';
            };
    
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop