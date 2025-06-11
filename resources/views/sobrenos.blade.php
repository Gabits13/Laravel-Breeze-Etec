@extends('layout')

@section('content')
     <!-- IMAGEM INICIAL -->
     <div class="container w-100 p-0 mt-3 mb-3" style="position: relative;">
            <img style="margin-top: -16px; z-index: ; max-height: 350px; object-fit:cover;" class="img-fluid d-block w-100" src="{{ asset('imgs/sobrenos.jpeg') }}" alt="Uma broca perfurando uma superficie">
        </div>

	
        <!-- PRIMEIRO CONTAINER -->
        <div class="container w-100 mt-3 mb-3">
 <div class="container mt-4 mb-5">
    <h2 class="mb-4"><b><i>NOSSA HISTÓRIA</i></b></h2>
    <p style="font-size: 24px; text-align: justify;  hyphens: auto; -webkit-hyphens: auto; word-spacing: -0.05em;"> Somos a  <i translate="no">Etec Zona Leste</i>, fundada em 2000, que rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.

Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.

Além da excelência acadêmica, a <span translate='no'>Etec Zona Leste</span> também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade. </p>
</div>
</div>
    <!-- SEGUNDO CONTAINER -->
	
   <div class="container w-100 mt-3 mb-3 fade-in-sectionx2">
   <div class="container w-100 mt-3 mb-3">
        <div class="row">
		 <div class="col-lg-6">
                <div class="imagem">
                    <img src="{{ asset('imgs/sobrenos2.jpg') }}" style="max-height: 500px;  max-width: 50 0px;  border-radius: 50%" alt="Imagem 2" class="w-100 mb-3 mt-5 img-fluid">
                </div>
            </div>
            <div class="col-lg-6 mt-2 mx-auto">
                <h2>O que a <span translate ="no">Etec Zona Leste</span> pode fazer por você?</h2>
                <p style="font-size: 20px; text-align: justify;  hyphens: auto; -webkit-hyphens: auto; word-spacing: -0.05em;">Sabemos que às vezes pensar no futuro pode parecer assustador. Traçamos carreiras e planos profissionais a todo momento em nossos pensamentos, numa busca constante pelo caminho que nos trará o melhor. Mas saiba que a <span translate="no">ETEC Zona Leste</span> conhece os seus anseios e, está aqui, disposta a te apresentar um novo caminho! O futuro não precisa ser assustador. Suas habilidades técnicas e profissionais podem ser desenvolvidas enquanto você aprende com a gente. Em nossa instituição, nós valorizamos os pequenos passos. Dê o seu primeiro passo hoje em direção ao futuro. Faça parte da ETEC!</p>
                <a href="{{ route('contato') }}" class="btn btn-danger">Fale Conosco</a>
            </div>
           
        </div>
    </div>
	</div>
	
	
@endsection
