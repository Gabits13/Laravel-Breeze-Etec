@extends('layout')

@section('content')

<div class="container w-100 p-0 mt-3 mb-0">
    
    <img style="margin-top: -16px; max-height: 450px; object-fit: cover; pointer-events: none;" class="d-block w-100" src="{{ asset('imgs/contato.jpg') }}" alt="Imagem">

</div>

<!--Contato-->
<div class="container w-100 mt-3 mb-3 "> 
<div class="container mt-0">
<div class="row mt-4 mb-3">
<div class="col-md-6">
  <div class="contact-info">
    <h2 >Entre em contato conosco!</h2>
    <p class="mt-3 " translate="no" ><strong>ETEC ZONA LESTE</strong></p>
    <p id="endereco"><strong>Endereço:</strong> <a  target="_blank" rel="external" href="https://maps.app.goo.gl/2os1TH4PcExNLJmv7" translate="no">Avenida Águia de Haia, 2.633 - Cidade AE Carvalho - São Paulo</a></p>
    <p><strong>CEP:</strong>03694-000</p>
    <p id="telefone"><strong>Telefone:</strong>(11) 2045-4000 / 2045-4016</p>
    <p><strong>Email: </strong>eteczonaleste@gmail.com</p>
    <a id="botao-email" href="mailto:eteczonaleste?subject=contato" class="btn btn-primary">Enviar E-mail</a>
  </div>
</div>

<div class="col-md-6 mt-3">
  <div class="map-responsive"> <!-- classe responsiva -->
    <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2589435852897!2d-46.47838692548919!3d-23.52318726018924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1743639178415!5m2!1spt-BR!2sbr"
      width="100%" 
      height="300" 
      style="border:0; max-width: 100%;" 
      allowfullscreen 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
  </div>
</div>
</div>
</div>
</div>
@endsection
