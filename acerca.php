<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/st.css">
    </head>
    <style>
    body{
            background: white;
        }
    </style>
    <body>
      <header>
            <div class="row" style="padding: 10px">
                <div class="col-sm-12 col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="border-radius: 7px; background: linear-gradient( 0deg, white , menutext, 10px, rgb(0, 165, 255,.9));">
                        <a class="navbar-brand" href="index.php" style="color: white"><img src="imagenes/logito.png" width="170px" height="90px"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#" style="color: white">Iniciar sesión <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: white">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="acerca.php" style="color: white">Acerca de nosotross</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contacto.php" style="color: white">Contacto</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0" style="width: 310px">
                                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                                <button class="btn btn-primary my-2 my-sm-0" type="submit"><img src="imagenes/lupa.png" width="25px" height=20px"></button>
                            </form>

                        </div>
                        <a class="navbar-brand" href="#" style="color: white"><img src="imagenes/compra1.png" width="80px" height=80px"><span class="badge badge-secondary">9000</span></a>
                    </nav>
                </div>
            </div>
        </header>

        <section>

            <div class="container">
                <div class="row" style="padding-top: 130px">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Misión</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Vision</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Objetivo</a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <p  class="text-justify">Ser la mejor opción en tiendas de regalos con creaciones originales con el toque de distinción que nos caracteriza y al mejor precio; brindando atención presonalizada y de excelencia a nuestros clientes.</p><br>
                      <center><img src="imagenes/conocenos/mision.png" width="330px" height="220px"></center>
                  </div>

                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <p  class="text-justify">Ser una empresa lider en ofrecer, a Empresas y Compañias, obsequios y regalos para esas fechas especiales, ofreciendo el mejor servicio y cubriendo las necesidades y requerimientos del cliente, siendo reconocida en el ámbito Nacional e Internacional, por la calidad de sus servicios y productos.</p><br>
                      <center><img src="imagenes/conocenos/vision.png" width="330px" height="220px"></center>
                  </div>

                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                      <p  class="text-justify">Brindarle al cliente una opción diferente única y practica a la hora de escoger o realizar una sorpresa para alguien especial</p><br>
                      <center><img src="imagenes/conocenos/objetivo.png" width="330px" height="220px"></center>
                  </div>
                </div>
            </div>
            </div>
        </section>

       <footer style="padding: 5px">
            <div class="row" style="background: linear-gradient( 0deg, white , menutext, 20px, rgb(0, 165, 255,.9));">
                <div class="col-sm-4 col-md-4" style="width:'100%'; height:'400px';"><br>
                    <label class="font-weight-bold text-sm-left" style="color: white; font-size: 27px; padding-left: 10px">Redes sociales</label><br>
                    <img src="imagenes/facebook.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">kike Camarena</a><br><br>
                    <img src="imagenes/whatsapp.png" width="45px" height="45px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">044 5544772233</a><br><br>
                    <img src="imagenes/Instagram.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">Luis.kike12</a><br><br>
                    <img src="imagenes/twitter.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">Luis.enrique123</a><br><br>

                </div>
                <div class="col-sm-4 col-md-4" style="width:'100%'; height:'400px';"><br>
                    <label class="font-weight-bold text-sm-left" style="color: white; font-size: 27px; padding-left: 10px">Teléfonos</label><br>
                    <img src="imagenes/telefono.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">57892042</a><br><br>
                    <img src="imagenes/celular.png" width="45px" height="45px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">044 5518682868</a><br><br>
                    <img src="imagenes/celular.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">044 5519789056</a><br><br>
                    <img src="imagenes/correo.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">camarenaluis6@gmail.com</a><br><br>
                </div>
                <div class="col-sm-4 col-md-4" style="width:'100%'; height:'400px';"><br>
                    <label class="font-weight-bold text-sm-left" style="color: white; font-size: 27px; padding-left: 10px">Comentarios</label><br>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Nombre" aria-label="Search" style="width: 350px"><br>
                        <textarea class="form-control mr-sm-2" type="week" placeholder="Comentario" aria-label="Search" style="width: 350px"></textarea><br><br><br><br><br>
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Publicar</button>
                    </form>
                </div>
            </div>
        </footer>



        <?php
        // put your code here
        ?>
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    <!--                    <i class="fab fa-whatsapp" class="color-uno"></i>
                    <i class="fab fa-facebook-f" class="color-uno"></i> -->
    <!--        <script src="js/all.js" type="text/javascript"></script>-->
</html>