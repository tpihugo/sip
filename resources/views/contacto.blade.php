<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
<!--Plantila con NavBar, Footer, Css y Js-->


<!--Carrusel Contacto-->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/contacto_carrusel.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="display-3 font-weight-bold text-uppercase" style="color:#fff;">Contacto</h1>
      </div>
    </div>
  </div>
</section>

<br>
<br>
<br>

<section class="wrapper">
  <div class="container-fostrap">
    <div class="content">
      <div class="container">
        <div class="row">
          
          <div class="col-xs-12 col-sm-4">
            
            <div class="card pointer">
              <a href="mailto:mtria.globalpolitics@academicos.udg.mx"> 
              <span class="img-card">
                <img src="images/gmail.svg" style="width: 230px; height: 230px;">
              </span>
              
              <div class="card-content">
                <h4 class="card-title text-center" style="color:#fd5f00;">
                  Envía un correo
                </h4>
              </div>
              </a>
            </div>
          </div>
          
          <div class="col-xs-12 col-sm-4" data-toggle="modal" data-target="#ubicacion">
            <div class="card pointer">
              
              <a class="img-card">
                <img src="images/maps.icon.png" style="width: 230px; height: 230px;">
              </a>
              <div class="card-content">
                <h4 class="card-title text-center" style="color:#fd5f00;">
                  <a style="color: #fd5f00">Dirección</a>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="card pointer">
              <a href="tel://1234567920" target="_blank">
              <span class="img-card">
                <img src="images/google-home.png" style="width: 230px; height: 240px;">
              </span>
              <div class="card-content">
                <h4 class="card-title text-center" style="color:#fd5f00;">
                  Llámanos
                </h4>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="ubicacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class=" modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-lg" style="background-color:#fff;">
      <div class="modal-header" style="background-color: #004777;">
        <h5 class="modal-title text-light" id="exampleModalLongTitle"><b>Ubicacion</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify p-2" style="color: #000;">
        <p>Sede Los Belenes. Av. José Parres Arias #150, San José del Bajío, C. P. 45100.</p>
      </div>
    </div>
  </div>
</div>
<br>
<br>


<!--MAPA-->
<header class="text-center">
  <h1 class="display-3 font-weight-bold" style="color: #004777;">Ubicación</h1>
</header>

<div class="d-flex mx-auto justify-content-center">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.239016813848!2d-103.37976518459196!3d20.741104202910744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af097b88abe3%3A0xbb90e158805bcd46!2sCUCSH%20Belenes%20(Centro%20Universitario%20De%20Ciencias%20Sociales%20y%20Humanidades%20Campus%20Belenes)!5e0!3m2!1ses!2smx!4v1646834888050!5m2!1ses!2smx" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<br>
<br>
</section>
<!--MAPA-->



@endsection