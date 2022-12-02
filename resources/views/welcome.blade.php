<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title> DGE</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/x-icon" href="http://estadisticas.salta.gov.ar/web/img/favicon.ico" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="head">
            <div  class="container">
               <div class="row ">
                  <div  class="col-md-6">
                     <ul class="email_call">
                        <li><a href="#"><img src="icon/2.png" alt="#"/>+5493873404040</a></li>
                        <li><a href="#"><img src="icon/1.png" alt="#"/>direccionge@salta.gov</a></li>
                     </ul>
                  </div>
                  <div  class="col-md-6">
                     <ul class="social_icon">
                        <li><a href="https://www.facebook.com/Dir-Gral-de-Estad%C3%ADsticas-y-Censo-de-Salta-106962200980689"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/DGEyCSalta"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                        <li><a href="https://www.instagram.com/dgeyc.salta/"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-top">
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                           <div class="limit-box">
                              <nav class="main-menu">
                                 <ul class="menu-area-main">
                                    <li class="active"> <a href="{{ route('welcome') }}">Inicio</a> </li>
                                    <li> <a href="{{ route('institucion') }}">Institucional</a> </li>
                                    <li> <a href="{{ route('contacto') }}">Contacto</a> </li>    
                                    <li> <a href="{{ route('ubicacion') }}">Ubicación</a></li>
                                    <li> <a href="{{ route('login') }}">Ingresar</a></li>
                                    <li> <a href="{{ route('register') }}">Registrarse</a> </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <section class="slider_section">
               <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                     <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row ">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <!--<span>DGE</span> -->
                                       <h1> Dirección General de Estadísticas </h1>
                                       <p>La Dirección General de Estadísticas de Salta es una organización dependiente del Minesterio de Economía de la Provincia.
                                          Fue creada originalmente por la Ley N° 362 (Actualmente 889) del año 1911. Se rigue por el Decreto Ley N° 484/57.
                                       Tiene por función recopilar, procesar y difundir a la sociedad las estadísticas básicas de la provincia.  </p>
                                       <!--<a href="#">Contactenemos</a>-->!
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <h1> Dirección General de Estadísticas </h1>
                                       <p>La Dirección General de Estadísticas de Salta es una organización dependiente del Minesterio de Economía de la Provincia.
                                          Fue creada originalmente por la Ley N° 362 (Actualmente 889) del año 1911. Se rigue por el Decreto Ley N° 484/57.
                                       Tiene por función recopilar, procesar y difundir a la sociedad las estadísticas básicas de la provincia.  </p>
                                     
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <h1> Dirección General de Estadísticas </h1>
                                       <p>La Dirección General de Estadísticas de Salta es una organización dependiente del Minesterio de Economía de la Provincia.
                                          Fue creada originalmente por la Ley N° 362 (Actualmente 889) del año 1911. Se rigue por el Decreto Ley N° 484/57.
                                       Tiene por función recopilar, procesar y difundir a la sociedad las estadísticas básicas de la provincia.  </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <h1> Dirección General de Estadísticas </h1>
                                       <p>La Dirección General de Estadísticas de Salta es una organización dependiente del Minesterio de Economía de la Provincia.
                                          Fue creada originalmente por la Ley N° 362 (Actualmente 889) del año 1911. Se rigue por el Decreto Ley N° 484/57.
                                       Tiene por función recopilar, procesar y difundir a la sociedad las estadísticas básicas de la provincia.  </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previo</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
                  </a>
               </div>
            </section>
         </div>
      </header>
      <!-- three box -->
      <div id="service" class="back_box">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_rile">
                  <div class="three_box">
                     <span>01</span>
                     <a href="https://www.eltribuno.com/salta"><h3>Noticias</h3></a>
                     <p>No te pierdas de las últimas noticias de la región Norte del país.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padding_l">
                  <div class="three_box yellow">
                     <span class="yellow" >02</span>
                     <a href="{{ route('productobruto') }}"><h3>Producto Bruto Geográfico</h3></a>
                     <p>La medida más importante de la producción de la economía de una provincia o región.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_ri">
                  <div class="three_box">
                     <span>03</span>
                     <a href=#><h3>Reportes</h3></a>
                     <p>Sucede algo en tu barrio y querés notificarnos? Hacelo ahora! </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end three box -->
      <!-- wellcome  -->
      <div id="clean" class="wellcome">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>ESTADISTICAS EN TIEMPO REAL.</h2>
                     <p>Contamos con un sistema de estadísticas en tiempo real. </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="wellcome-box">
                     <figure><img src="images/wellcome1.jpg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="wellcome-box">
                     <figure><img src="images/wellcome2.jpg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="{{ route('info')}}">Leer más</a>
               </div>
            </div>
         </div>
      </div>

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="follow">
                        <h3>Seguinos en nuestras redes sociales</h3>
                        <ul>
                           <li><a href="https://www.facebook.com/Dir-Gral-de-Estad%C3%ADsticas-y-Censo-de-Salta-106962200980689"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="https://twitter.com/DGEyCSalta"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                           <li><a href="https://www.instagram.com/dgeyc.salta/"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright 2022 Todos los derechos reservados 'Fernández María - Soto Antonella'</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>