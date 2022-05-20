<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
<!--Plantila con NavBar, Footer, Css y Js-->


<!-- Inicio Carrousel -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/lgc_carrusel.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="display-3 font-weight-bold text-uppercase" style="color:#fff;">Plan de Estudios</h1>
      </div>
    </div>
  </div>
</section>
<!-- Final Carrousel -->
<br>
<br>
<br>

<!--Inicio Texto Plan de Estudios-->
<section class="ftco-section ftco-no-pt ftc-no-pb">
  <div class="container-fluid col-md-10">
    <div class="row d-flex">
      <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
        <div class="img" style=" background-image: url('images/requisitos_carrusel.jpg');"></div>
      </div>
      <div class="col-md-7 wrap-about  pr-md-4 ftco-animate">
        <p class="text-justify">La Maestría en Global Politics and Transpacific Studies, basa la estructura de su Plan
          de Estudios a las necesidades de adecuar los futuros conocimientos y habilidades de sus estudiantes en las
          demandas de la sociedad actual y de los mercados laborales. Para ello se establecen cuatro áreas de
          Formación: el Área de Formación Básica Común Obligatoria que incluye las materias vinculadas con los
          aspectos teóricos globales y de relaciones internacionales y de metodología; por su parte, el Área de
          Formación Básica Particular Obligatoria se conforma con las materias relacionadas con los Estudios
          Transpacíficos.</p>
        <p class="text-justify">El Área de Formación Especializante se dividirá en tres áreas regionales: América del
          Norte, Japón y China.
          Las tres destacan por contar con las mayores interacciones y dinámicas políticas, económicas y comerciales
          de la región transpacífica y que a su vez son fundamentales no solo para México, sino para los países del
          Pacífico Latinoamericano. (Esto porque no sólo se está pensando en estudiantes mexicanos, sino de otros
          países). Finalmente, el Área de Formación Optativa Abierta engloba los cursos sobre el aprendizaje de
          lenguas extranjeras de la región de Asia-Pacífico e incluye un curso sobre los países de la Alianza del
          Pacífico; este último se incorporó a fin de dar a los estudiantes cuyos temas de investigación se vinculen a
          cualquiera de estos países un panorama más amplio a partir del conocimiento de su Historia, Cultura y
          Sociedad.</p>
        <p class="text-justify"> Los estudiantes que opten por la Especialización en China tendrán la opción de cursar
          las materias
          especializantes de tercer semestre en la Universidad de Xi’an Jiaotong-Liverpool (XJTLU) en
          Suzhou, Jiangsu, China.</p>
        <br>
        <br>

        <!-- <a href="https://www.xjtlu.edu.cn/en/"
              class="btn btn-outline-warning font-size-responsive-boton" style="font-size: 15px;">Xi’an Jiaotong-Liverpool (XJTLU)en Suzhou, Jiangsu, China.</a>-->
        <button class="button1">
          <a href="https://www.xjtlu.edu.cn/en/" target="_blank">
            <span class="span1" style="font-size: 15px;">Xi’an Jiaotong-Liverpool (XJTLU)en Suzhou, Jiangsu,
              China.</span>
            <div class="liquid1"></div>
          </a>
        </button>

      </div>
    </div>
</section>
<!--Final Texto Plan de Estudios-->



<!-- SECCION DE CARDS DE PLAN DE ESTUDIOS -->
<!--Titulo-->
<br>
<br>
<br>

<header class="text-center">
  <h1 class="font-size-responsive font-weight-bold" style="color: #004777;">Áreas del Plan de Estudio</h1>
</header>
<div class="">
  <!--Titulo FIN-->
  <br>
  <br>

  <!--Modals-->
  <!-- Área de Formación Básica Común Obligatoria-->
  <section>
    <div class="row">
      <div class="col-xl-12" data-toggle="modal" data-target="#basica">
        <div class="hover hover-2 text-white rounded">
          <img src="images/basica-comun.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-4 py-3">
            <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light text-white font-size-responsive">Área de Formación Básica Común Obligatoria
            </h3>
          </div>
        </div>
      </div>
      <!-- Área de Formación Básica Común Obligatoria FIN-->
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <!--Área de Formación Básica Particular-->
      <div class="col-xl-12" data-toggle="modal" data-target="#particular">
        <div class="hover hover-2 text-white rounded">
          <img src="images/basica-particular.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-4 py-3">
            <h1 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light text-white font-size-responsive">Área de Formación Básica Particular
            </h1>
          </div>
        </div>
      </div>
      <!--Área de Formación Básica Particular FIN-->
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <!--Área de Formación Especializante-->
      <div class="col-xl-12" data-toggle="modal" data-target="#contenido-modal">
        <div class="hover hover-2 text-white rounded">
          <img src="images/card-especializante.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-4 py-3">
            <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light text-white font-size-responsive">Área de Formación Especializante</h3>
          </div>
        </div>
        </a>
      </div>
      <!--Área de Formación Especializante FIN-->
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <!--Área de Formación Optativa Abierta-->
      <div class="col-xl-12" data-toggle="modal" data-target="#optativa">
        <div class="hover hover-2 text-white rounded">
          <img src="images/card-optativa-abierta.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-4 py-3">
            <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light text-white font-size-responsive">Área de Formación<p>Optativa Abierta</p>
            </h3>
          </div>
        </div>
        </a>
      </div>
      <!--Área de Formación Optativa Abierta FIN-->
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <!--Mapa Curricular-->
      <div class="col-xl-12" data-toggle="modal" data-target="#mapa_curricular">
        <div class="hover hover-2 text-white rounded">
          <img src="images/mapa_head.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-4 py-3">
            <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light text-white font-size-responsive">
                <p>Mapa Curricular</p>
            </h3>
          </div>
        </div>
        </a>
      </div>
      <!--Mapa Curricular FIN-->
    </div>
  </section>
</div>


<!--MODAL BODY-->
<!-- Area de Formacion Basica Comun Obligatoria Inicio-->
<div class="container">
  <div class="modal fade" id="basica">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <!-- cuerpo del diálogo -->
        <div class="modal-body col-lg-12">
          <div class="row">
            <div class="col-md-12">
              <button class="close p-2 float-right" data-dismiss="modal">
                <p style="color: #000;">&times;</p>
              </button>
              <h1 class="display-5 font-weight-bold text-center" style="color: #004777;">Área de Formación Básica
                Común Obligatoria</h1>
              <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6" style="color: #000;">
                <thead>
                  <tr>
                    <th scope="col">UNIDAD DE APRENDIZAJE</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">HORAS B.C.A.</th>
                    <th scope="col">HORAS A.M.I.</th>
                    <th scope="col">HORAS TOTALES</th>
                    <th scope="col">CRÉDITOS</th>
                    <th scope="col">PREREQUISITOS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Theories of International Relations and Global Politics</th>
                    <td>C</td>
                    <td>64</td>
                    <td>64</td>
                    <td>128</td>
                    <td>8</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Global Political Economy</th>
                    <td>C</td>
                    <td>64</td>
                    <td>64</td>
                    <td>96</td>
                    <td>6</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Global Governance</th>
                    <td>C</td>
                    <td>64</td>
                    <td>64</td>
                    <td>96</td>
                    <td>6</td>
                    <td>Theories of International Relations and Global Politics</td>
                  </tr>
                  <tr>
                    <th scope="row">Global Politics and Society</th>
                    <td>C</td>
                    <td>64</td>
                    <td>32</td>
                    <td>96</td>
                    <td>6</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Research Design and Method I</th>
                    <td>C</td>
                    <td>64</td>
                    <td>32</td>
                    <td>128</td>
                    <td>8</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Research Design and Method II</th>
                    <td>S</td>
                    <td>32</td>
                    <td>64</td>
                    <td>96</td>
                    <td>6</td>
                    <td>Research Design and Method I</td>
                  </tr>
                  <tr>
                    <th scope="row">Research Design and Method III</th>
                    <td>T</td>
                    <td>32</td>
                    <td>64</td>
                    <td>96</td>
                    <td>6</td>
                    <td>Research Design and Method II</td>
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
<!-- Area de Formacion Basica Comun Obligatoria FIN-->


<!--Area de Formacion Basica Particular Inicio-->
<div class="container">
  <div class="modal fade" id="particular">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <!-- cuerpo del diálogo -->
        <div class="modal-body col-lg-12">
          <div class="row">
            <div class="col-md-12">
              <button class="close p-2 float-right" data-dismiss="modal">
                <p style="color: #000;">&times;</p>
              </button>
              <h3 class="display-6 font-weight-bold text-center" style="color: #004777;">Área de Formación Básica
                Particular</h3>
              <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6">
                <thead>
                  <tr>
                    <th scope="col">UNIDAD DE APRENDIZAJE</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">HORAS B.C.A.</th>
                    <th scope="col">HORAS A.M.I.</th>
                    <th scope="col">HORAS TOTALES</th>
                    <th scope="col">CRÉDITOS</th>
                    <th scope="col">PREREQUISITOS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Transpacific Politics and Society</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>128</td>
                    <td>6</td>
                    <td>Global Politics and Society</td>
                  </tr>
                  <tr>
                    <th scope="row">Transpacific Security Relations</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>96</td>
                    <td>6</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Transpacific Economic Relations</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>96</td>
                    <td>6</td>
                    <td>Global Political Economy</td>
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
<!--Area de Formacion Basica Particular Final-->


<!--Area de Formacion Optativa Abierta Inicio-->
<div class="container">
  <div class="modal fade" id="optativa">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <!-- cuerpo del diálogo -->
        <div class="modal-body col-lg-12">
          <div class="row">
            <div class="col-md-12">
              <button class="close p-2 float-right" data-dismiss="modal">
                <p style="color: #000;">&times;</p>
              </button>
              <h1 class="display-5 font-weight-bold text-center" style="color: #004777;">Área de Formación Optativa
                Abierta</h1>
              <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6">
                <thead>
                  <tr>
                    <th scope="col">UNIDAD DE APRENDIZAJE</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">HORAS B.C.A.</th>
                    <th scope="col">HORAS A.M.I.</th>
                    <th scope="col">HORAS TOTALES</th>
                    <th scope="col">CRÉDITOS</th>
                    <th scope="col">PREREQUISITOS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Language Specialization Seminar I</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>128</td>
                    <td>6</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Language Specialization Seminar I</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>96</td>
                    <td>6</td>
                    <td>Language Specialization Seminar I</td>
                  </tr>
                  <tr>
                    <th scope="row">Pacif Alliance Countries History, Culture, and Society</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>96</td>
                    <td>6</td>
                    <td>-</td>
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
<!--Area de Formacion Optativa Abierta Final-->


<!--Mapa Curricular Body Inicio-->
<div class="container">
  <div class="modal fade" id="mapa_curricular">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog1">
      <div class="modal-content">
        <!-- cuerpo del diálogo -->
        <div class="modal-body col-lg-12">
          <div class="row">
            <div class="col-md-12">
              <button class="close p-2 float-right" data-dismiss="modal">
                <p style="color: #000;">&times;</p>
              </button>
              <h1 class="display-5 font-weight-bold text-center" style="color: #004777;">Mapa Curricular</h1>
              <img src="images/mapa_curricular.png" alt="">
              <br>
              <br>

              <article>
                <section>
                  <button class="button1">
                    <a href="{{asset('storage/pdf/pdf_de_mapa.pdf')}}" download="Mapa Curricular"><span class="span1" style="font-size: 15px;">Descargar PDF</span>
                      <div class="liquid1"></div>
                    </a>
                </section>
                <br>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Mapa Curricular Body FIN-->

<!--Modales de especializaciones-->
<div class="row d-flex mx-auto">
  <div class="modal fade" id="contenido-modal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content" style="background-color:#004777;">
        <div class="p-2">
          <button class="close p-2 float-right" data-dismiss="modal">
            <p style="color: #ffffff;">&times;</p>
          </button>
          <!--Modales de especializaciones-->

          <!--Especialización en América del Norte-->
          <div class="row">
            <div class="col-lg-4" data-toggle="modal" data-target="#americadelnorte">
              <div class="hover hover-2 text-white rounded" style="background-color: transparent;">
                <img src="images/card-usa.jpg" class="img-fluid" alt="">
                <div class="hover-overlay" style="background-size: cover;"></div>
                <div class="hover-2-content px-4 py-3">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light text-white">Especialización en América del Norte
                  </h3>
                </div>
              </div>
              </a>
            </div>
            <!--Especialización en América del Norte FIN-->


            <!--Inicio Modal Body de América Del Norte-->
            <!-- Modal -->
            <div class="modal fade" id="americadelnorte" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color:#fff;">
                  <div class="modal-header text-center" style="background-color: #004777;">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color:#fff;"><b>América del
                        Norte</b>
                    </h5>
                    <button class="close p-2 float-right" data-dismiss="modal">
                      <p style="color: #ffffff;">&times;</p>
                    </button>
                    <!--Agregaremos el botón si la maestría nos lo pide
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            -->
                  </div>
                  <div class="modal-body text-justify col-xl-12" style="color:#000; ">

                    <p>La Línea de Generación y/o Aplicación Conocimiento (LGAC) sobre América del Norte se apoya en
                      el personal y recursos del Centro de estudios de América del Norte (CESAN). Debido a que
                      México
                      forma parte de la región, se vuelve evidente la necesidad de estudiar y comprender los
                      diversos
                      procesos de integración que han tenido lugar en la región desde la década de los años noventa
                      del siglo XX. La relevancia de la región, como una de las zonas de libre comercio más grandes
                      y
                      diversas del mundo, así como la importancia de cada uno de sus integrantes a nivel global, ha
                      convertido a América del Norte en una región central para comprender las dinámicas del Sistema
                      Internacional, así como la realidad actual y la prospectiva de las Relaciones Internacionales.
                    </p>

                    <p>Los estudiantes de esta especialidad podrán beneficiarse del trabajo del CESAN, a fin de
                      lograr
                      una mejor comprensión de las particularidades de nuestros socios y vecinos norteamericanos, su
                      relación con México y los fenómenos multidimensionales que definen y configuran a
                      Norteamérica.
                      En particular, el CESAN ha enfatizado tres áreas de investigación: política comparada,
                      integración regional y seguridad.</p>

                    <p><b>Proyectos de Investigación en la LGAC de América del Norte</b></p>
                    <p><button class="button1">
                        <a data-toggle="modal" data-target=#usa>
                          <span class="span1" style="font-size: 20px;">Leer más</span>
                          <div class="liquid1"></div>
                        </a>
                      </button></p>
                    <!--Final Modal Body de América Del Norte-->


                    <!-- Modal body "tablas" America del Norte-->
                    <div class="modal fade bd-example-modal-lg" id="usa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-body">

                            <button class="close p-2 float-right" data-dismiss="modal">
                              <p style="color: #000;">&times;</p>
                            </button>
                            <h1 class="display-4 text-center font-weight-bold" style="color: #004777">
                              Especialización En
                              América del Norte</h1>
                            <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6">
                              <div class="text-center">
                                <thead>
                                  <tr>
                                    <th scope="col">Unidad de aprendizaje </th>
                                    <th scope="col"> TIPO </th>
                                    <th scope="col">TOTAL HORAS B.C.A.*</th>
                                    <th scope="col">TOTAL HORAS A.M.I.**</th>
                                    <th scope="col">HORAS TOTALES</th>
                                    <th scope="col">CRÉDITOS</th>
                                    <th scope="col">PREREQUISITOS</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">North American History, Culture, and Society</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">North American Foreign Policy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Politics and Society</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">North American Contemporary Politics</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">North American Economy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Economic Relations</td>
                                  </tr>
                                </tbody>
                              </div>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal body "tablas" America del Norte-->


            <!--Especialización en China-->
            <div class="col-lg-4" data-toggle="modal" data-target="#china">
              <div class="hover hover-2 text-white rounded">
                <img src="images/card_china.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-2-content px-4 py-3">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0 modalfonts"> <span class="font-weight-light text-white ">Especialización en China</h3>
                </div>
              </div>
              </a>
            </div>
            <!--Especialización en China FIN-->


            <!--Inicio modal body China-->
            <!-- Modal -->
            <div class="modal fade" id="china" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color:#fff;">
                  <div class="modal-header text-center" style="background-color: #004777;">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><b>China</b></h5>
                    <button class="close p-2 float-right" data-dismiss="modal">
                      <p style="color: #ffffff;">&times;</p>
                    </button>
                  </div>
                  <div class="modal-body text-justify col-xl-12" style="color:#000;">
                    <p>La Línea de Generación y/o Aplicación Conocimiento (LGAC) sobre China se sustenta en el papel
                      histórico, económico, político, social y cultural que ha desarrollado como nación durante los
                      últimos siglos. Desde las dinastías que contribuyeron a conquistar la imaginación de
                      Occidente,
                      caminando por la Revolución Cultural y culminando con la potencia económica y política actual,
                      China es un actor que influye, modifica y define dinámicas globales. Ningún país, región u
                      organismo se puede abstraer de sus decisiones, como no lo hace Asia-Pacífico y tampoco el
                      continente americano.</p>

                    <p>El liderazgo global del gobierno de Beijing lo convierte en un actor a estudiar e investigar
                      para intentar comprender la trascendencia de sus políticas; al mismo tiempo, su desarrollo y
                      crecimiento económico, influyen en los mercados internacionales y sus posturas en política
                      exterior y de seguridad afectan al mundo entero. Lo anterior hace que una nación como China se
                      conciba como parte primordial para los estudiantes interesados en la especialidad y que buscan
                      comprender sus intereses y capacidades y las consecuencias de sus acciones.</p>

                    <p><b>Proyectos de Investigación en la LGAC de China</b></p>
                    <p><button class="button1">
                        <a data-toggle="modal" data-target=#china1>
                          <span class="span1" style="font-size: 20px;">Leer más</span>
                          <div class="liquid1"></div>
                        </a>
                      </button></p>
                    <!--Final modal body China-->


                    <!--Inicio "Tablas" modal body China-->
                    <div class="modal fade bd-example-modal-lg" id="china1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <button class="close p-2 float-right" data-dismiss="modal">
                              <p style="color: #000;">&times;</p>
                            </button>
                            <div class="text-center">
                              <h1 class="display-4 font-weight-bold" style="color: #004777;">Especialización En China
                              </h1>
                              <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6">
                                <thead style="color: #000;">
                                  <tr>
                                    <th scope="col">Unidad de aprendizaje </th>
                                    <th scope="col"> TIPO </th>
                                    <th scope="col">TOTAL HORAS B.C.A.*</th>
                                    <th scope="col">TOTAL HORAS A.M.I.**</th>
                                    <th scope="col">HORAS TOTALES</th>
                                    <th scope="col">CRÉDITOS</th>
                                    <th scope="col">PREREQUISITOS</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Chinese History, Culture, and Society</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Chinese Foreign Policy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Politics and Society</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Chinese Contemporary Politics</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Chinese Economy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Economic Relations</td>
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
            </div>
            <!--Final "Tablas" modal body China-->


            <!--Especialización en Japón-->
            <div class="col-lg-4" data-toggle="modal" data-target="#japon">
              <div class="hover hover-2 text-white rounded">
                <img src="images/card-japan.jpg" alt="">
                <div class="hover-overlay"></div>
                <div class="hover-2-content px-4 py-3">
                  <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light text-white">Especialización en Japón</h3>
                </div>
              </div>
              </a>
            </div>


            <!--Inicio de modal de Japón-->
            <!-- Modal -->
            <div class="modal fade" id="japon" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color:#fff;">
                  <div class="modal-header text-center" style="background-color: #004777;">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><b>Japón</b></h5>
                    <button class="close p-2 float-right" data-dismiss="modal">
                      <p style="color: #ffffff;">&times;</p>
                    </button>
                  </div>
                  <div class="modal-body text-justify col-xl-12" style="color:#000;">
                    <p>Japón, fue el primer país asiático industrializado en el siglo XX y ha jugado, después de la
                      Segunda Guerra Mundial, un papel clave en la integración de la región, a través de la
                      inversión
                      y de la presencia de sus filiales, no solo en Asia, sino en América. Su papel de liderazgo
                      económico, comercial y de estabilidad en la región durante la segunda parte del siglo XX y en
                      los primeros años del siglo actual, ha capturado el interés de los investigadores en la
                      Universidad de Guadalajara, que desde hace más de dos décadas se refleja en el trabajo de
                      investigación que se realiza sobre Japón, su historia, cultura, relaciones, desarrollo y
                      crecimiento en el Departamento de estudios del Pacífico (DEP).</p>

                    <p>Desde las relaciones históricas transpacíficas y migración japonesa a la Nueva Galicia, Japón
                      se quedó en el imaginario de los mexicanos, sus culturas y tradiciones han acercado a las dos
                      naciones. Además, Japón, en los ámbitos comercial y económico, representa para México el único
                      socio con un acuerdo formal en Asia y el auge de la inversión japonesa en nuestro país ha
                      contribuido al desarrollo en sectores clave de la economía mexicana. Así, los estudiantes de
                      la
                      especialidad se verán favorecidos con la experiencia de los investigadores que ahora forman
                      parte del Centro de Estudios Japoneses (CEJA), creado para consolidar las investigaciones
                      sobre
                      la nación nipona y el aprendizaje de la lengua japonesa, y que se convertirá en el norte de
                      los
                      nuevos temas de investigación que cada uno de ellos desarrollará.</p>

                    <p><b>Proyectos de Investigación en la LGAC de Japón</b></p>
                    <p><button class="button1">
                        <a data-toggle="modal" data-target=#japan1>
                          <span class="span1" style="font-size: 20px;">Leer más</span>
                          <div class="liquid1"></div>
                        </a>
                      </button></p>
                    <!--Final de modal de Japón-->

                    <!--Inicio "Tablas" modal body Japon-->
                    <div class="modal fade bd-example-modal-lg" id="japan1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <!--<div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>-->
                          <div class="modal-body">
                            <button class="close p-2 float-right" data-dismiss="modal">
                              <p style="color: #000;">&times;</p>
                            </button>
                            <div class="text-center">
                              <h1 class="display-4 font-weight-bold" style="color: #004777;">Especialización En Japón
                              </h1>
                              <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6">
                                <thead>
                                  <tr>
                                    <th scope="col">Unidad de aprendizaje </th>
                                    <th scope="col"> TIPO </th>
                                    <th scope="col">TOTAL HORAS B.C.A.*</th>
                                    <th scope="col">TOTAL HORAS A.M.I.**</th>
                                    <th scope="col">HORAS TOTALES</th>
                                    <th scope="col">CRÉDITOS</th>
                                    <th scope="col">PREREQUISITOS</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Japanese History, Culture, and Society</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Japanese Foreign Policy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Politics and Society</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Japanese Contemporary Politics</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Japanese Economy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Economic Relations</td>
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
            </div>
            <!--Inicio "Tablas" modal body Japon-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<br>



<!--MODAL BODY-->
<!--Mapa Curricular-->

<!--Mapa Curricular FIN-->


<!--Inicio Galeria de Imagenes-->
<section class="ftco-gallery" id="contactanos">
  <div class="container-wrap">
    <div class="row no-gutters">
      <div class="col-md-3 ftco-animate">
        <a href="images/requisitos1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/requisitos1.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-camera"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="images/requisitos2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/requisitos2.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-camera"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="images/requisitos3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/requisitos3.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-camera"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="images/requisitos4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/requisitos4.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-camera"></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!--Fin Galeria de Imagenes-->

@endsection