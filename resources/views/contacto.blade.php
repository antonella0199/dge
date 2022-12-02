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
                                    <li> <a href="{{ route('welcome') }}">Inicio</a> </li>
                                    <li> <a href="{{ route('institucion') }}">Institucional</a> </li>
                                    <li class = "active"> <a href="{{ route('contacto') }}">Contacto</a> </li>    
                                    <li> <a href="{{ route('ubicacion') }}">Ubicación</a> </li>
                                    <li> <a href="{{ route('login') }}">Ingresar</a> </li>
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
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        
            <section class=" formulario">
            <div class = "container - sm">

            <div class="card" style="opacity: .8">
                <h2 class="card-header">Formulario de Felicitaciones, Sugerencias y Reclamos </h2>
                <div class="card-body" >
                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label" style="color:black">Apellido y Nombre:</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="color:black">Email:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label" style="color:black">Telefono:</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label" style="color:black">Asunto:</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label" style="color:black">Sugerencia y/o Reclamo:</label>
                            <textarea rows = "4" class="form-control" id="exampleInputPassword1"></textarea>
                          </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                      </form>
                </div>
              </div>
            </div>
            </section>
        </div>
                  <!--  footer -->
      <footer>
        <div class="footer" style="height: auto;">
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
     <!-- end footer -->