@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-center" style="color: #d63384;">🎀 Películas 🎀</h1>

        <div class="text-center mb-4">
            <a href="{{ route('peliculas.create') }}" class="btn btn-pink">💖 Añadir nueva película</a>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($peliculas as $pelicula)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm" style="border-radius: 20px; background-color: #fff0f6;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #d63384;">{{ $pelicula->titulo }} ({{ $pelicula->anio }})</h5>
                            <p class="card-text">{{ $pelicula->descripcion }}</p>
                            <p class="card-text"><strong>🎬 Género:</strong> {{ $pelicula->genero }}</p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between">
                            <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-sm btn-outline-pink">✏️ Editar</a>

                            <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST" onsubmit="return confirm('¿Eliminar esta peli linda? 😢');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">🗑️ Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .btn-pink {
            background-color: #f783ac;
            color: white;
            border-radius: 15px;
            padding: 8px 16px;
            border: none;
        }

        .btn-pink:hover {
            background-color: #e64980;
        }

        .btn-outline-pink {
            color: #d63384;
            border: 1px solid #d63384;
            border-radius: 10px;
        }

        .btn-outline-pink:hover {
            background-color: #d63384;
            color: white;
        }

        body {
            background-color: #fff5f8;
        }
    </style>
@endsection