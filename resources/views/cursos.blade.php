@extends('layout')

@section('content')
     <!-- IMAGEM INICIAL -->
     <div class="container w-100 p-0 mt-3 mb-3" style="position: relative;">
            <img style="margin-top: -16px; z-index: ; max-height: 350px; object-fit:cover;" class="img-fluid d-block w-100" src="{{ asset('imgs/cursos.jpg') }}" alt="Uma broca perfurando uma superficie">
        </div>

	

<section class=" py-5" id="events">
<div class="container">
    <h2 class="text-center mb-4">Cursos Disponíveis</h2>
    <div class="row">
        <!-- Evento 1 -->
<div class="col-md-3 mb-4">
    <div class="card">
        <img src="{{ asset('imgs/cursos1.jpg') }}" class="card-img-top" alt="Desenvolvimento de Sistemas">
        <div class="card-body">
            <h5 class="card-title">Desenvolvimento de Sistemas</h5>
            <p class="card-text">Aprenda a programar, criar aplicações web e desenvolver sistemas inovadores para diversas plataformas.</p>
        </div>
    </div>
</div>
<!-- Evento 2 -->
<div class="col-md-3 mb-4">
    <div class="card">
        <img src="{{ asset('imgs/cursos2.jpg') }}" class="card-img-top" alt="Recursos Humanos">
        <div class="card-body">
            <h5 class="card-title">Recursos Humanos</h5>
            <p class="card-text">Desenvolva habilidades de gestão de pessoas, recrutamento, legislação trabalhista e cultura organizacional.</p>
        </div>
    </div>
</div>
<!-- Evento 3 -->
<div class="col-md-3 mb-4">
    <div class="card">
        <img src="{{ asset('imgs/cursos4.jpg') }}" class="card-img-top" alt="Logística">
        <div class="card-body">
            <h5 class="card-title">Logística</h5>
            <p class="card-text">Gerencie estoques, transporte, distribuição e processos logísticos para otimizar a cadeia de suprimentos.</p>
        </div>
    </div>
</div>
<!-- Evento 4 -->
<div class="col-md-3 mb-4">
    <div class="card">
        <img src="{{ asset('imgs/cursos3.jpg') }}" class="card-img-top" alt="Administração">
        <div class="card-body">
            <h5 class="card-title">Administração</h5>
            <p class="card-text">Aprenda técnicas de gestão, finanças, empreendedorismo e marketing para atuar no mundo dos negócios.</p>
        </div>
    </div>
</div>

    </div>
</div>
<style>
    .card-img-top {
    height: 200px; 
    object-fit: cover; 
    width: 100%; 
}
.card {
    height: 400px; 
    width: 100%; 
}

</style>
</section>
	
	
@endsection
