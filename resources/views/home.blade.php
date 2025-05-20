@extends('layouts.app')


@section('styles')
<style>
    
    .welcome-card {
        background: rgb(255, 233, 248);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(200, 100, 255, 0.4);
        width: 90%;
        max-width: 1000px;
        transition: transform 0.3s;
        margin: 0 auto;
        border: 2px dashed #d63384;
    }

     h1, h2 {
        font-weight: 700;
        text-align: center;
    }

    .feature-section {
        background: rgb(255, 233, 248);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(200, 100, 255, 0.4);
        width: 90%;
        max-width: 1000px;
        transition: transform 0.3s;
        margin: 0 auto;
        border: 2px dashed #d63384;
    }

    .feature-section:hover {
        transform: translateY(-5px);
    }

    .feature-icon {
        font-size: 2.5rem;
        color: #d63384;
    }

    .btn-girly {
        background-color: #f783ac;
        color: white;
        border-radius: 20px;
        padding: 10px 20px;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-girly:hover {
        background-color: #e64980;
    }

    @media (max-width: 768px) {
        .feature-section {
            width: 95%;
        }
    }
</style>
@endsection

@section('content')
<div class="container py-5">

    <div class="welcome-card mb-5 text-center" data-aos="fade-up">
        <h1 class="mb-1">¡Hola {{ Auth::user()->name }}💖!</h1>
        <p class="lead">Ve y agrega tus películas favoritas :3</p>
    </div>

    <div class="d-flex flex-column gap-4 align-items-center">

        {{-- Ver Películas --}}
        <div class="col-md-4" data-aos="fade-right">
            <div class="feature-section text-center">
                <div class="feature-icon mb-3"></div>
                <h4>🎀 Ver Películas 🎀</h4>
                <p>Explora el mundo que tenemos para ti.</p>
                <a href="{{ route('peliculas.index') }}" class="btn btn-girly">Ir al Catálogo</a>
            </div>
        </div>

        {{-- Agregar Película --}}
        <div class="col-md-4" data-aos="fade-up">
            <div class="feature-section text-center">
                <div class="feature-icon mb-3"></div>
                <h4>🎀 Agregar Película 🎀</h4>
                <p>Crea tu lista de favoritos.</p>
                <a href="{{ route('peliculas.create') }}" class="btn btn-girly">Añadir Nueva</a>
            </div>
        </div>

    </div>
</div>
@endsection
