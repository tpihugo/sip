<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
<!--Plantila con NavBar, Footer, Css y Js-->


<!--Inicio Carrousel-->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/estudantes_carrusel.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="display-3 font-weight-bold text-uppercase" style="color:#fff;">Estudiantes</h1>
      </div>
    </div>
  </div>
</section>
<!--Fin Carrousel-->

<br>
<br>
<br>
<br>

<!-- Titulo Perfiles -->
<header class="text-center">
  <h1 class="display-4 font-weight-bold" style="color: #004777;"></h1>
</header>
<div class="">
  <!-- Fin Titulo Perfiles-->


  <!--Modales-->
  <!-- COHORTE GENERACIONAL-->
  <section>
    <div class="row">
      <div class="col-xl-12" data-toggle="modal" data-target="#cohorte">
        <div class="hover hover-2 text-white rounded">
          <img src="images/cohorte.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-4 py-3">
            <h1 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light text-white font-size-responsive">Cohorte Generacional
            </h1>
          </div>
        </div>
      </div>
      <!-- COHORTE GENERACIONAL FIN-->
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <!--PERFIL DE INGRESO-->
      <div class="col-xl-12" data-toggle="modal" data-target="#ingreso">
        <div class="hover hover-2 text-white rounded">
          <img src="images/ingreso.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-4 py-3">
            <h1 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light text-white font-size-responsive">Perfil de Ingreso
            </h1>
          </div>
        </div>
      </div>
      <!--PERFIL DE INGRESO FIN-->
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <!--PERFIL DE EGRESO-->
      <div class="col-xl-12" data-toggle="modal" data-target="#egreso">
        <div class="hover hover-2 text-white rounded">
          <img src="images/egreso.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-4 py-3">
            <h1 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light text-white font-size-responsive">Perfil de egreso</h1>
          </div>
        </div>
        </a>
      </div>
      <!--PERFIL DE EGRESO FIN-->
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <!--TUTORIAS-->
      <div class="col-xl-12" data-toggle="modal" data-target="#tutorias">
        <div class="hover hover-2 text-white rounded">
          <img src="images/tutorias.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-4 py-3">
            <h1 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light text-white font-size-responsive">Tutorias</p>
            </h1>
          </div>
        </div>
        </a>
      </div>
    </div>
    <!--TUTORIAS FIN-->
  </section>
</div>
<!-- Fin Modales-->


<!--Cuerpo del Modal Cohorte Generacional -->
<div class="container">
  <div class="modal fade" id="cohorte">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body col-lg-12">
          <div class="row">
            <div class="col-md-12">
              <button class="close float-right" data-dismiss="modal">
                <p style="color: #000;">&times;</p>
              </button>
              <h1 class="display-4 font-weight-bold  pt-2" style="color: #004777; text-align: center;">COHORTE GENERACIONAL
              </h1>
              <table class="table container table-responsive rounded" style=" background-color: #F3CDB6">
                <thead style="color:#000">
                  <tr>
                    <th scope="col">GENERACIÓN</th>
                    <th scope="col">INGRESO</th>
                    <th scope="col">TASA DE GRADUACIÓN*</th>
                    <th scope="col">EFICIENCIA TERMINAL**</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">2018-2020</th>
                    <td>10</td>
                    <td>70%</td>
                    <td>83%</td>
                  </tr>
                  <tr>
                    <th scope="row">2020-2022</th>
                    <td>7</td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <div class="text-justify" style="color: black">
                <p><b>*Tasa de Graduación</b>, mide la proporción de estudiantes que se titulan después de concluir el
                  Plan de
                  Estudios, pero sin tener que cumplir con algún plazo establecido para obtener el grado académico.
                </p>
                <p><b>**Eficiencia Terminal</b>, mide la proporción de estudiantes que se titulan después de concluir
                  el plan de
                  estudios, pero cumpliendo un plazo establecido para obtener el grado académico. En el caso de la
                  Universidad de Guadalajara y de Conacyt, el plazo son doce meses.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Cuerpo del Modal Cohorte Generacional FIN -->


<!--Cuerpo del Modal Perfil de Ingreso -->
<div class="modal fade" id="ingreso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class=" modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-lg" style="background-color:#fff;">
      <div class="modal-header" style="background-color: #004777;">
        <h5 class="modal-title text-light" id="exampleModalLongTitle"><b>PERFIL DE INGRESO</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify p-2" style="color: #000;">
        <p>
          La Maestría en Global Politics and Transpacific Studies está dirigida académicos y profesionistas
          interesados en los procesos y relaciones globales, en particular, en relaciones transpacíficas; además, de
          contar con una visión amplia de los acontecimientos internacionales y las coyunturas históricas.
          Para lo anterior, deberá estar preparado para analizar y discernir de forma crítica información de todo tipo
          de fuentes nacionales e internacionales; de gobiernos, organismos gubernamentales y no-gubernamentales; y de
          centros de investigación y sociedad civil.
        </p>
      </div>
    </div>
  </div>
</div>
<!--Cuerpo del Modal Perfil de Ingreso FIN-->


<!--Cuerpo del Modal Egreso-->
<div class="modal fade" id="egreso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content" style="background-color:#fff;">
      <div class="modal-header" style="background-color: #004777;">
        <h5 class="modal-title text-light" id="exampleModalLongTitle"><b>PERFIL DE EGRESO</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="col pt-3">
        <ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
          <li class="nav-item col-6 nav-link-pills" role="presentation">
            <a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia1" role="tab" aria-controls="home" aria-selected="true"><b>Habilidades y Competencias</b></a>
          </li>
          <li class=" nav-item col-6" role="presentation">
            <a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion1" role="tab" aria-controls="profile" aria-selected="false"><b>Conocimiento y Comprensión</b></a>
          </li>

          <li class="nav-item col-12" role="presentation">
            <a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto1" role="tab" aria-controls="contact" aria-selected="false"><b>Criterio y Enfoque</b></a>
          </li>
        </ul>
        <div class="tab-content text-dark pt-3" id="myTabContent">
          <div class="tab-pane fade show active" id="biografia1" role="tabpanel" aria-labelledby="home-tab">
            <p>Después de completar los créditos necesarios, los egresados deben ser capaces de:</p>

            <p>• Identificar estructuras y mecanismos que dan forma a los procesos desde una perspectiva de sociedad
              global.
              Reconocer los diferentes actores y su capacidad de influir y modificar estos procesos.</p>
            <p>• Analizar los asuntos internacionales enfocados en las relaciones de los niveles: internacional, regional,
              nacional y local. Al mismo tiempo, hacerlo desde la vinculación de los distintos ámbitos: político,
              económico,
              social y cultural.</p>
            <p>• Relacionar evidencias a partir del conocimiento y capacidades de investigación adquiridas, y estructurar
              la
              información de forma que refleje la habilidad de contrastar, delimitar y priorizar los aspectos que
              fundamentaran sus análisis.</p>
            <p>• Evaluar e interpretar los resultados obtenidos durante su formación y plasmarlos de forma clara y
              coherente
              en investigaciones, artículos, reportes, ponencias y presentaciones futuras en su ámbito profesional.</p>
            <p>• Elaborar proyectos que contribuyan a la solución de problemas locales desde una perspectiva global.</p>

          </div>
          <div class="tab-pane fade" id="produccion1" role="tabpanel" aria-labelledby="profile-tab">

            <p>• Exponer los conocimientos adquiridos y su capacidad de razonamiento sobre los procesos globales:
              políticas y gobernanza, así como economía y sociedad. La interdependencia de los mismos entre los
              diferentes actores globales y en particular, entre los actores de Asia- Pacífico y sus dinámicas
              regionales.</p>
            <p>• Demostrar la comprensión de los enfoques, tanto de las teorías de Relaciones Internacionales, como de
              las teorías de Políticas Globales y de Economía Política Internacional. Además, de contar con el potencial
              para plasmarlo en futuras investigaciones en el ámbito académico y laboral.</p>
          </div>

          <div class="tab-pane fade" id="contacto1" role="tabpanel" aria-labelledby="contact-tab">

            <p>• Aprender a interactuar en sociedades multiculturales con un pensamiento basado en el respeto, la
              igualdad y
              la tolerancia.</p>
            <p>• Desarrollar la capacidad de reflexión que refleje los conocimientos aprendidos y los diversos puntos de
              vista.</p>
            <p>• Demostrar capacidad de liderazgo y la disponibilidad para el trabajo en equipo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Cuerpo del Modal Egreso FIN-->


<div class="modal fade" id="tutorias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content" style="background-color:#fff;">
      <div class="modal-header" style="background-color: #004777;">
        <h5 class="modal-title text-light" id="exampleModalLongTitle"><b>TUTORÍAS</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="col pt-3">
        <ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
          <li class="nav-item col-6 nav-link-pills" role="presentation">
            <a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#tutoriaspills" role="tab" aria-controls="home" aria-selected="true"><b>Tutorías</b></a>
          </li>

          <li class=" nav-item col-6" role="presentation">
            <a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#temainvestigacion" role="tab" aria-controls="profile" aria-selected="false"><b>Tema de Investigación</b></a>
          </li>

          <li class="nav-item col-6" role="presentation">
            <a class="nav-link nav-link-pills a-pills" id="contact-tab" data-toggle="tab" href="#seguimiento" role="tab" aria-controls="contact" aria-selected="false"><b>Seguimiento</b></a>
          </li>

          <li class="nav-item col-6" role="presentation">
            <a class="nav-link nav-link-pills a-pills" id="contact-tab" data-toggle="tab" href="#evaluacion" role="tab" aria-controls="contact" aria-selected="false"><b>Evaluación de las Tutorías</b></a>
          </li>
        </ul>
        <div class="tab-content text-dark pt-3" id="myTabContent">
          <div class="tab-pane active" id="tutoriaspills" role="tab" aria-labelledby="home-tab">
            Las tutorías académicas serán responsabilidad del Núcleo Académico Básico. <br>
            Durante el primer semestre se asignarán los tutores de acuerdo con el perfil del estudiante, con la especialidad seleccionada y con su proyecto de investigación, esto con el objetivo de cumplir con los roles que define la misma Universidad de Guadalajara en su Plan de Desarrollo Institucional Visión 2030, que son:
            <ul class="pl-5">
              <li>Facilitar la integración del estudiante (…)</li>
              <li>Apoyar al estudiante (…) vinculando siempre las habilidades propias de la formación y la adquisición de estrategias de aprendizaje.</li>
              <li>Ofrecer recursos adicionales que permitan al estudiante apoyarse en (…) sus dudas por materia y la dirección de los trabajos de titulación.</li>
              <li>Proveer de habilidades al estudiante para la interpretación del conocimiento y su implicación en la vida profesional. Asegurar el desarrollo de competencias profesionales en los estudiantes a través del acompañamiento en (…) elección del proyecto de titulación y en orientación a la integración, a la vida laboral y a la capacitación continua.</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="temainvestigacion" role="tabpanel" aria-labelledby="profile-tab">

            <p>Además, el tutor será el encargado de guiar durante este semestre al estudiante para definir su tema de investigación; a partir del segundo semestre, se evaluará, por parte de la Junta Académica, la pertinencia de la continuidad de los tutores o la posibilidad de hacer reajustes de los mismos. </p>
            <p>En particular, porque a partir del segundo semestre los tutores se convertirán en directores de tesis y harán el acompañamiento académico, no sólo para enriquecer el aprendizaje del estudiante, sino también para concretar los proyectos de tesis para su satisfactoria defensa y aprobación.</p>
            <p>Se prevé que cada tutor/director sea responsable de no más de tres estudiantes por generación, para así garantizar que la atención y acompañamiento cumplan con los objetivos de la maestría y de la universidad, todo en beneficio del estudiante y de su aprendizaje.</p>

          </div>

          <div class="tab-pane fade" id="seguimiento" role="tabpanel" aria-labelledby="contact-tab">
            <p>Cada semestre se reunirán el tutor/director del estudiante, con el Coordinador de la maestría y con al menos dos de sus profesores, para así crear un Comité tutorial que evalué los resultados y avances del estudiante, la posibilidad de realizar estancias de investigación en otras universidades, dentro y fuera del país; y cualquier tema relacionado con el proceso y desarrollo de cada estudiante.</p>
          </div>

          <div class="tab-pane fade" id="evaluacion" role="tabpanel" aria-labelledby="contact-tab">
            <p>Al término de cada generación se hará una evaluación colegiada de los resultados del programa de tutoría y de seguimiento a estudiantes y egresados. El objetivo principal será valorar los resultados de los estudiantes tanto por especialidad, por tutor y de forma individual. Al mismo tiempo, se hará un análisis sobre la eficiencia terminal de cada generación, buscando identificar fortalezas y debilidades de cada ámbito del programa, además de buscar las oportunidades de mejora y anticipar posibles amenazas o fallas que podrían afectar a los estudiantes y al programa de la maestría.</p>
          </div>



          <!-- Button modal -->
          <button class="button1">
            <a data-toggle="modal" data-target=#tutorias1>
              <span class="span1" style="font-size: 20px;">Leer más</span>
              <div class="liquid1"></div>
            </a>
          </button>


        </div>
      </div>
    </div>
  </div>
</div>



<!--Cuerpo del Modal Egreso FIN-->






<!-- Modal body Tutorias -->
<div class="modal fade" id="tutorias1" tabindex="-1" role="dialog" aria-labelledby="tutorias1" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-header">

    </div>
    <div class="modal-content">

      <div class="modal-body col-lg-12">
        <div class="row">
          <div class="col-md-12">
            <h1 class="display-4 font-weight-bold pt-3" style="color:#004777; text-align: center;">Áreas<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #000000;">
                <span aria-hidden="true">&times;</span>
              </button>
            </h1>
            <table class="table container table-responsive rounded" style=" background-color: #F3CDB6">
              <thead style="color: #000" ;>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ÁREA DE ESPECIALIZACIÓN</th>
                  <th scope="col">TUTOR/DIRECTOR</th>
                  <th scope="col">ESTUDIANTE</th>
                  <th scope="col">Proyecto</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Norte America</td>
                  <td>Dra. Marcela López-Vallejo Olvera</td>
                  <td>Rafael Carranza Cisneros</td>
                  <td>Canadian Cybersecurity in Asia-Pacific</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Japón</td>
                  <td>Dra. Melba Falck Reyes/Dra. Takako Nakasone</td>
                  <td>Guillermina Coronado Dávila</td>
                  <td>An evolving identity: Nikkei Canadians and their approach to Japanese-ness after WWII.
                    The case of Vancouver</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Norte América</td>
                  <td>Dr. José Jesús Bravo Vergara</td>
                  <td>Adriana Dueñas Mendez</td>
                  <td>Mexican SMEs from the avocado and berries sector have found an opportunity to
                    participate in the North American market</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>China</td>
                  <td>Dra. Genevieve Marchin</td>
                  <td>Gerardo Guillen Rodriguez</td>
                  <td>Sports diplomacy as an alternate arena for the materialization of the changing foreign
                    policy agenda of the PRC</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Norte América</td>
                  <td>Dr. Arturo Santa Cruz</td>
                  <td>Cecilia Pinsón Wisner</td>
                  <td>The evolution of regime autonomy from the states</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Japón</td>
                  <td>Dr. Carlos Javier Maya-Ambía</td>
                  <td>Pauly Samantha Sañudo Salas</td>
                  <td>Theory of hegemony: Education and nationalism in Japan, 2012-2020</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!--Modal body tutorias FIN-->
<br>
<br>


<!--Titulo Galeria-->
<div class="col-md-8 text-center heading-section ftco-animate">
  <h2 class="mb-4" style="color: #004777;">Galería</h2>
</div>
<!--Inicio Galeria-->

<!--Galeria de imagenes-->
<section class="ftco-gallery" id="contactanos">
  <div class="container-wrap">
    <div class="row no-gutters">
      <div class="col-md-3 ftco-animate">
        <a href="images/estudiante1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/estudiante1.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-camera"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="images/estudiante2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/estudiante2.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-camera"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="images/estudiante3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/estudiante3.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-camera"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="images/estudiante4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/estudiante4.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-camera"></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!--Galeria de imagenes FIN-->


@endsection