@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categoria</h1>
@stop

@section('content')
<div class="form-container">
    <h2>Actualizar Texto</h2>
    <form action="{{ route('texto.update',['id'=>$texto->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="campo">Nombre del campo</label>
        <input type="text" name="campo" id="campo" placeholder="Escribe el nombre de la categoría" value="{{$texto->campo}}" required>

        <label for="campo">Nombre del titulo</label>
        <input type="text" name="titulo" id="titulo" placeholder="Escribe el titulo del texto" value="{{$texto->titulo}}" required>

        <label for="texto">Nombre del texto</label>
        <textarea name="texto" id="texto" cols="30" rows="10">{{$texto->texto}}</textarea>
        <input type="submit" value="Actualizar">
    </form>
</div>
<!-- Tabla para mostrar categorías -->
<div class="mt-4">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Campo</th>
                <th>Texto</th>
                <th>titulo</th>
                <th>Fecha de Creación</th>
                <th>acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($textos as $txt)
                <tr>
                    <td>{{ $txt->id }}</td>
                    <td>{{ $txt->campo }}</td>
                    <td>{{ $txt->titulo }}</td>
                    <td>{{ Str::limit($txt->texto, 50) }}</td>
                    <td>{{ $txt->created_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>

                        <form action="#" method="POST" style="display:inline;">
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
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop