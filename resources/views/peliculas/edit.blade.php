@extends('layout')

@section('content')
    <div class="container py-5">
        <div class="mx-auto p-4" style="max-width: 600px; background: linear-gradient(135deg, #f3e8ff, #fce7f3); border-radius: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h1 class="mb-4 text-center" style="color: #9333ea;">Editar Película</h1>

            <form action="{{ route('peliculas.update', $pelicula->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Título:</label>
                    <input type="text" name="titulo" class="form-control" value="{{ $pelicula->titulo }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción:</label>
                    <textarea name="descripcion" class="form-control" rows="4">{{ $pelicula->descripcion }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Género:</label>
                    <input type="text" name="genero" class="form-control" value="{{ $pelicula->genero }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Año:</label>
                    <input type="number" name="anio" class="form-control" value="{{ $pelicula->anio }}">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-outline-info">Actualizar 🎬</button>
                </div>
            </form>
        </div>
    </div>
@endsection