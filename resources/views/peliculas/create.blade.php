@extends('layout')

@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #f8edeb, #e0bbec);
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }

        .form-container {
            background: linear-gradient(145deg, #fde2e4, #fbcfe8);
            max-width: 600px;
            margin: 3rem auto;
            padding: 2rem 3rem;
            border-radius: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            color: #6b21a8;
        }

        .form-container h1 {
            text-align: center;
            color: #a855f7;
            margin-bottom: 2rem;
            font-size: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #7e22ce;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.7rem 1rem;
            border: none;
            border-radius: 20px;
            background: #fff0f6;
            box-shadow: inset 0 1px 4px rgba(0,0,0,0.1);
            font-size: 1rem;
        }

        .form-group textarea {
            resize: none;
        }

        .submit-btn {
            display: block;
            width: 100%;
            background-color: #f472b6;
            color: white;
            border: none;
            padding: 0.75rem;
            border-radius: 30px;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #ec4899;
        }
    </style>

    <div class="form-container">
        <h1>Añadir Película 🎬✨</h1>

        <form action="{{ route('peliculas.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="genero">Género:</label>
                <input type="text" name="genero" id="genero">
            </div>

            <div class="form-group">
                <label for="anio">Año:</label>
                <input type="number" name="anio" id="anio">
            </div>

            <button type="submit" class="submit-btn">Guardar 💾</button>
        </form>
    </div>
@endsection