@extends('layout')

@section('content')
     <!-- IMAGEM INICIAL -->
     <div class="container w-100 p-0 mt-3 mb-3" style="position: relative;">
            <img style="margin-top: -16px; max-height: 350px; object-fit:cover;" class="img-fluid d-block w-100" src="{{ asset('imgs/departamentos.jpg') }}" alt="Imagem representativa dos departamentos">
        </div>

<section class="py-5" id="departamentos">
<div class="container">
    <h2 class="text-center mb-4">Departamentos</h2>
    <div class="row">
        <!-- Secretaria Acadêmica -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('imgs/secretaria.jpeg') }}" class="card-img-top" alt="Secretaria Acadêmica">
                <div class="card-body">
                    <h5 class="card-title">Secretaria Acadêmica</h5>
                    <p class="card-text">Responsável pelo atendimento aos alunos, matrículas, históricos e documentos acadêmicos.</p>
                    <p><strong>Horário de Funcionamento:</strong><br>Seg - Sex: 08h - 18h</p>
                </div>
            </div>
        </div>
        <!-- Diretoria -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('imgs/direcao.jpeg') }}" class="card-img-top" alt="Diretoria">
                <div class="card-body">
                    <h5 class="card-title">Diretoria</h5>
                    <p class="card-text">Administra e supervisiona todas as operações da instituição, garantindo qualidade e excelência acadêmica.</p>
                    <p><strong>Horário de Funcionamento:</strong><br>Seg - Sex: 08h - 17h</p>
                </div>
            </div>
        </div>
        <!-- Coordenação de Cursos -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('imgs/coordenacao.jpg') }}" class="card-img-top" alt="Coordenação de Cursos">
                <div class="card-body">
                    <h5 class="card-title">Coordenação de Cursos</h5>
                    <p class="card-text">Gerencia os cursos, elabora grades curriculares e acompanha o desempenho acadêmico dos alunos.</p>
                    <p><strong>Horário de Funcionamento:</strong><br>Seg - Sex: 09h - 19h</p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card-img-top {
        height: 250px; /* Ajuste para um tamanho maior */
        object-fit: cover;
        width: 100%;
    }
    .card {
        height: 100%;
    }
</style>
</section>
@endsection
