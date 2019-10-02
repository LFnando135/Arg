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
            background: #d6d8d9;
        }
    </style>
    <body>
        <header>
            <div class="row" style="padding: 10px">
                <div class="col-sm-12 col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="border-radius: 7px; background: linear-gradient( 0deg, midnightblue , menutext, 10px, darkslateblue);">
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
                                    <a class="nav-link" href="acerca.php" style="color: white">Acerca de nosotros</a>
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
            <div class="container" style="padding-top: 120px">
                <div class="row">
                    <div class="col-sm-5 col-md-5"><br>
                        <label class="font-weight-bold text-sm-left" style="color: white; font-size: 27px; padding-left: 10px">Enviar correo</label><br><br>
                        <?php
                        if (isset($_POST['txtnom'])) {
                            //Mandar el correo
                            $asunto = "Compra SamOnline";
                            $mensaje = "Bienvenido a SamOnline! Se ha registrado una compra en nuestra página con la siguiente información
                            \nCliente: " . $_POST['txtnom'] .
                                    "\n\nTelefono: " . $_POST['txttel'] .
                                    "\n\nCorreo: " . $_POST['txtcorreo'];

                            $destino = $_POST['txtcorreo'];
                            $remitente = "yerani.samperio@gmail.com";
                            mail($destino, $asunto, $mensaje, $remitente);
                            ?>
                            <br><div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Gracias por tu preferencia!</strong> Se ha enviado exitosamente la información de tu compra a tu correo
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <a href="index.php">Volver a pagina principal</a>
                            <?php
                        } else {
                            ?>
                            <form class="form-inline my-2 my-lg-0" method="post" action="compra.php">
                                <input class="form-control mr-sm-2" type="search" placeholder="Nombre" aria-label="Search" style="width: 680px" name="txtnom" required><br>
                                <input class="form-control mr-sm-2" type="search" placeholder="Telefono" aria-label="Search" style="width: 680px" name="txttel" required><br>
                                <input class="form-control mr-sm-2" type="search" placeholder="Correo" aria-label="Search" style="width: 680px" name="txtcorreo" required><br><br><br>
                                <button class="btn btn-primary my-2 my-sm-0 t" type="submit">Enviar</button>
                            </form>
                        <?php } ?>
                    </div>
                    <script type="text/javascript">
                        function abrir(img) {
                            //asignamos la imagen por medio de prop
                            document.getElementById('imagenGrande').src = img;
                        }
                    </script>

                    <div class="col-sm-5 col-md-5">
                        <img class="img-fluid" id="imagenGrande" style="width: 450px; border-radius: 7px; height: 440px" alt="" src="imagenes/producto6.jpg" />
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <div class="mb-3">
                            <img class="img-fluid" width="180px" height="145px" src="imagenes/producto6.jpg" style="padding: 5px; border-radius: 7px;" onclick="abrir('imagenes/producto6.jpg')"><br>

                            <img class="img-fluid" width="180px" height="145px" src="imagenes/producto2.jpg" style="padding: 5px; border-radius: 7px;" onclick="abrir('imagenes/producto2.jpg')"><br>

                            <img class="img-fluid" width="180px" height="145px" src="imagenes/producto4.png" style="padding: 5px; border-radius: 7px" onclick="abrir('imagenes/producto4.png')"><br>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr noshade="noshade" size="2" width="95%" style="height: 1px; background: lightslategray"/><br>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label class="font-weight-bold text-md-left" style="color: rgb(111,35,107); font-size: 40px; font-family: kristen itc">Productos relacionados</label>
                    </div>
                </div>
            </div>
        </section><br>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card-deck">
                            <?php
                            for ($i = 1; $i <= 4; $i++) {
                                $num = rand(1, 12);
                                ?>
                                <div class="card">
                                    <img class="card-img-top" src="images/producto<?php echo $num; ?>.jpg" alt="Card image cap" style="height: 170px">
                                    <div class="card-body" style="height: 200px; background: rgb(142,108,146); color: white">
                                        <h5 class="card-title">Jeans</h5>
                                        <p class="card-text">Jeans que moldean perfectamente la siluta!</p>
                                    </div>
                                    <div class="card-footer text-right" style="background: rgb(243,243,243)">
                                        <small class="text-muted"><a href="compra.php" class="btn btn-primary">Comprar</a></small>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card-deck">
                            <?php
                            for ($i = 1; $i <= 4; $i++) {
                                $num = rand(1, 12);
                                ?>
                                <div class="card">
                                    <img class="card-img-top" src="images/producto<?php echo $num; ?>.jpg" alt="Card image cap" style="height: 170px">
                                    <div class="card-body" style="height: 200px; background: rgb(142,108,146); color: white">
                                        <h5 class="card-title">Sudadera pareja</h5>
                                        <p class="card-text">Hazle saber a esa personita que la llevas siempre!</p>
                                    </div>
                                    <div class="card-footer text-right" style="background: rgb(243,243,243)">
                                        <small class="text-muted"><a href="compra.php" class="btn btn-primary">Comprar</a></small>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>

        <footer style="padding: 25px">
            <div class="row" style="background: linear-gradient( 0deg, midnightblue , menutext, 10px, darkslateblue); border-radius: 7px;">
                <div class="col-sm-4 col-md-4" style="width:'100%'; height:'400px';"><br>
                    <label class="font-weight-bold text-sm-left" style="color: white; font-size: 27px; padding-left: 10px">Redes sociales</label><br>
                    <img src="imagenes/facebook.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">Yerani Samperio</a><br><br>
                    <img src="imagenes/whatsapp.png" width="45px" height="45px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">044 5518682868</a><br><br>
                    <img src="imagenes/Instagram.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">yerani.samperio13</a><br><br>
                    <img src="imagenes/twitter.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">yerani.samperio13</a><br><br>

                </div>
                <div class="col-sm-4 col-md-4" style="width:'100%'; height:'400px';"><br>
                    <label class="font-weight-bold text-sm-left" style="color: white; font-size: 27px; padding-left: 10px">Teléfonos</label><br>
                    <img src="imagenes/telefono.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">57892042</a><br><br>
                    <img src="imagenes/celular.png" width="45px" height="45px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">044 5518682868</a><br><br>
                    <img src="imagenes/celular.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">044 5519789056</a><br><br>
                    <img src="imagenes/correo.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">yerani.samperio@gmail.com</a><br><br>
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
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    <!--                    <i class="fab fa-whatsapp" class="color-uno"></i> 
                    <i class="fab fa-facebook-f" class="color-uno"></i> -->
    <!--        <script src="js/all.js" type="text/javascript"></script>-->
</html>