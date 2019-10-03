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
                                    <a class="nav-link" href="#" style="color: white">Iniciars sesión <span class="sr-only">(current)</span></a>
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

        <div class="container">
            <div class="row" style="padding-top: 110px">
                <div class="col-sm-7 col-md-7" style="padding: 10px">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="compra.php"><img class="d-block w-100" src="imagenes/producto5.jpg" alt="First slide" height="500px" style="border-radius: 40px"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="compra.php"><img class="d-block w-100" src="imagenes/producto2.jpg" alt="Second slide" height="500px" style="border-radius: 40px"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="compra.php"><img class="d-block w-100" src="imagenes/producto3.jpg" alt="Third slide" height="500px" style="border-radius: 40px"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="compra.php"><img class="d-block w-100" src="imagenes/producto4.png" alt="Third slide" height="500px" style="border-radius: 40px"></a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-5 col-md-5" style="padding-top: 50px">
                    <img src="imagenes/compraNow.png" width="100px" height="100px"><label class="font-weight-bold text-sm-left" style="color: black; font-size: 20px; padding-left: 10px">Elige lo mejor en consolas</label><br><br><br>
                    <img src="imagenes/domicilio.png" width="100px" height="100px"><label class="font-weight-bold text-sm-left" style="color: black; font-size: 20px; padding-left: 10px">Recibe en 24 hrs. tu producto</label><br><br><br>
                    <img src="imagenes/regalo.png" width="100px" height="100px"><label class="font-weight-bold text-sm-left" style="color: black; font-size: 20px; padding-left: 10px">Daselo a esa persona especial!</label><br><br><br>
                </div>

            </div>
        </div>
        <hr noshade="noshade" size="2" width="95%" style="height: 1px; background: lightslategray"/><br>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label class="font-weight-bold text-md-left" style="color: black; font-size: 40px; font-family: kristen itc">Lo más nuevo!</label>
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
                                    <div class="card-body" style="height: 200px; background: rgb(109, 182, 226); color: white">
                                        <h5 class="card-title">Jeans</h5>
                                        <p class="card-text">Jeans que moldean perfectamente la siluta!</p>
                                    </div>
                                    <div class="card-footer text-right" style="background: white">
                                        <small class="text-muted"><a href="compra.php" class="btn btn-primary">Comprar</a></small>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>

        <hr noshade="noshade" size="2" width="95%" style="height: 1px; background: lightslategray"/><br>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label class="font-weight-bold text-md-left" style="color: rgb(111,35,107); font-size: 40px; font-family: kristen itc">Más vendidos</label>
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
                <div class="row" style="background: linear-gradient( 0deg, white , menutext, 10px, rgb(0, 165, 255,.9)); border-radius: 7px;">
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
