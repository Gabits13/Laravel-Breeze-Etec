@extends('layout')

@section('content')
<!-- Carrossel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('imgs/etec-carrossel1.jpg') }}" class="d-block w-100" alt="Imagem 1">
            <div class="carousel-caption">
                <h1>Transforme seu futuro!</h1>
                <p>Explore nossos cursos e cresça profissionalmente.</p>
                <a href="{{ route('cursos') }}" class="btn btn-light">Saiba Mais</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('imgs/etec-carrossel2.jpg') }}" class="d-block w-100" id="img3" alt="Imagem 2">
            <div class="carousel-caption">
                <h1>Conecte-se com o conhecimento</h1>
                <p>Conheça nossos professores e departamentos.</p>
                <a href="{{ route('departamentos') }}" class="btn btn-light">Veja Mais</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('imgs/etec-carrossel3.jpg') }}" class="d-block w-100" alt="Imagem 3">
            <div class="carousel-caption">
                <h1>Entre em contato!</h1>
                <p>Fale conosco para mais informações sobre a Etec.</p>
                <a href="{{ route('contato') }}" class="btn btn-light">Fale Conosco</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<!-- Seção de Agendas de Eventos -->
<section class="events-section py-5" id="events">
<div class="container">
    <h2 class="text-center mb-4">Próximos Eventos</h2>
    <div class="row">
        <!-- Evento 1 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('imgs/evento1.jpg') }}" class="card-img-top" alt="Festa das Nações">
                <div class="card-body">
                    <h5 class="card-title">FESTA DAS NAÇÕES</h5>
                    <p class="card-text">Uma celebração cultural repleta de comidas típicas, apresentações artísticas e exposições sobre diferentes países. Venha conhecer e se encantar com a diversidade cultural em um evento cheio de sabor e tradição.</p>
                </div>
            </div>
        </div>
        <!-- Evento 2 -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('imgs/evento2.jpg') }}" class="card-img-top" alt="Feira Tecnológica">
                <div class="card-body">
                    <h5 class="card-title">Feira Tecnológica</h5>
                    <p class="card-text">Nos dias 29 e 30 de novembro, participe da Feira Tecnológica e explore as mais recentes inovações e avanços da tecnologia. O evento contará com exposições de projetos acadêmicos, palestras com especialistas do setor e demonstrações práticas de novas tendências. Uma oportunidade imperdível para quem deseja estar por dentro do mundo da tecnologia!</p>
                </div>
            </div>
        </div>
    <style>
         .card-img-top {
        height: 500px; /* Ajuste para um tamanho maior */
        object-fit: cover;
        width: 100%;
    }
    .card {
        height: 100%;
    }
    </style>
    </div>
</div>
</section>
@endsection
