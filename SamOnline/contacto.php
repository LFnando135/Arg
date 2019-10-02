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
            <div class="container">
                <div class="row" style="padding-top: 120px">
                    <div class="col-sm-7 col-md-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7512.048657117752!2d-98.97552812809826!3d19.711588346905657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ecd8609df2e3%3A0x804e5cc85782be00!2sTec%C3%A1mac+Centro%2C+Tecamac%2C+Tec%C3%A1mac+de+Felipe+Villanueva%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1559798143337!5m2!1ses-419!2smx" width="630" height="400" frameborder="0" style="border:0" allowfullscreen></iframe><br><br>
                        <center><label class="font-weight-light" style="color: black; font-size: 18px">Estamos ubicados en Tecamac, Tecámac de Felipe Villanueva, Méx.</label></center><br>
                        <label class="font-weight-bold text-sm-left" style="color: white; font-size: 27px; padding-left: 10px">Enviar correo</label><br><br>
                        <?php
                        if (isset($_POST['txtnom'])) {
                            //Mandar el correo
                            $asunto = "Información del cliente";
                            $mensaje = "Los datos son:
                            \nCliente: " . $_POST['txtnom'].
                            "\n\nTelefono: " . $_POST['txttel'].
                            "\n\nComentario: " . $_POST['txtasunto'];

                            $destino = "yerani.samperio@gmail.com";
                            $remitente = $_POST['txtcorreo'];
                            mail($destino, $asunto, $mensaje, $remitente);
                            ?>
                            <br><div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Gracias por tu preferencia!</strong> Se ha enviado exitosamente el mensaje
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <a href="index.php">Volver a pagina principal</a>
                            <?php
                        } else {
                            ?>
                        <form class="form-inline my-2 my-lg-0" method="post" action="contacto.php">
                            <input class="form-control mr-sm-2" type="search" placeholder="Nombre" aria-label="Search" style="width: 680px" name="txtnom" required><br>
                            <input class="form-control mr-sm-2" type="search" placeholder="Telefono" aria-label="Search" style="width: 680px" name="txttel" required><br>
                            <input class="form-control mr-sm-2" type="search" placeholder="Correo" aria-label="Search" style="width: 680px" name="txtcorreo" required><br>
                            <textarea class="form-control mr-sm-2" type="week" placeholder="Asunto" aria-label="Search" style="width: 680px; height: 100px" name="txtasunto" required></textarea><br><br><br>
                            <button class="btn btn-primary my-2 my-sm-0 t" type="submit">Enviar</button>
                        </form>
                        <?php } ?>
                    </div>

                    <div class="col-sm-1 col-md-1">
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="mb-3">
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                <div class="card-header">Luis Camarena</div>
                                <div class="card-body" style="height: 115px">
                                    <p class="card-text">Los productos llegan a tiempo, recomendado!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">23 de Mayo 2018</small>
                                </div>
                            </div>
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                <div class="card-header">Emily Lopez</div>
                                <div class="card-body" style="height: 115px">
                                    <p class="card-text">Realmente es una asombrante tienda en linea, la amo!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">15 de Enero 2019</small>
                                </div>
                            </div>

                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                <div class="card-header">Yerani Samperio</div>
                                <div class="card-body" style="height: 115px">
                                    <p class="card-text">En todo momento fueron amables conmigo! Lo recomiendo</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">13 de Mayo 2019</small>
                                </div>
                            </div>

                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                <div class="card-header">Silvia Samperio</div>
                                <div class="card-body" style="height: 115px">
                                    <p class="card-text">Un lugar que sabe lo que necesito! Muchas gracias</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">02 de Junio 2019</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                    <img src="imagenes/correo.png" width="40px" height="40px"><a class="font-small text-sm-left" style="color: white; font-size: 17px; padding-left: 35px">yera.samp@gmail.com</a><br><br>
                </div>
                <div class="col-sm-4 col-md-4" style="width:'100%'; height:'400px';"><br>
                    <label class="font-weight-bold text-sm-left" style="color: white; font-size: 27px; padding-left: 10px">Comentarios</label><br>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Nombre" aria-label="Search" style="width: 350px"><br>
                        <textarea class="form-control mr-sm-2" type="week" placeholder="Comentario" aria-label="Search" style="width: 350px; height: 100px"></textarea><br><br><br><br><br><br>
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
</html>
