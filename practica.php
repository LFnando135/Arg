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
            background-image: url(imagenes/tropical.jpg);
        }
    </style>
    <body>
        <section>
            <div class="container"  style="background: white;">
                <div class="row" >
                    <div class="col-sm-3 col-md-3" style="padding-top: 20px">
                        <img class="img-fluid" src="imagenes/logoPerfume.jpg" width="90%">
                    </div>
                    <div class="col-sm-5 col-md-5" style="padding-top: 20px">
                    </div>
                    <div class="col-sm-4 col-md-4" style="padding-top: 60px;">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search"style="width: 280px">
                            <button class="btn btn-dark my-2 my-sm-0" type="submit"><img src="imagenes/lupa.png" width="25px" height=20px"></button>
                        </form>
                    </div>
                </div>

                <div class="row" style="padding: 10px; padding-top: 30px">
                    <div class="col-sm-12 col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light" style="background: rgb(334, 26, 120)">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#" style="color: white; font-family: Bahnschrift SemiCondenseds; width: 100px">MUJERES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" style="color: white; font-family: Bahnschrift SemiCondenseds; width: 100px">HOMBRES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="acerca.php" style="color: white; font-family: Bahnschrift SemiCondenseds; width: 100px">REGALOS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contacto.php" style="color: white; font-family: Bahnschrift SemiCondenseds; width: 180px">SALUD Y BELLEZA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contacto.php" style="color: white; font-family: Bahnschrift SemiCondenseds; width: 150px">ADOLECENTES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contacto.php" style="color: white; font-family: Bahnschrift SemiCondenseds; width: 100px">FAMILIA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contacto.php" style="color: white; font-family: Bahnschrift SemiCondenseds; width: 140px">COSMETICOS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contacto.php" style="color: white; font-family: Bahnschrift SemiCondenseds; width: 200px">FECHAS ESPECIALES</a>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>

                <div class="row" style="padding-left: 10px; padding-right: 10px">
                    <div class="col-sm-12 col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="imagenes/perfume1.jpg" alt="First slide" style="height: 400px">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="imagenes/perfume2.jpg" alt="Second slide" style="height: 400px">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="imagenes/perfume3.jpg" alt="Third slide" style="height: 400px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="padding-top: 40px; padding-right: 10px">
                    <div class="col-sm-6 col-md-6">
                        <img class="d-block w-100" src="imagenes/perfume4.jpg" alt="Third slide" style="height: 150px">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <img class="d-block w-100" src="imagenes/perfume5.jpg" alt="Third slide" style="height: 150px">
                    </div>
                </div><br><br><br>

                <div class="row" style="padding-left: 10px">
                    <div class="col-sm-9 col-md-9">
                        <label class="font-weight-bold text-md-left" style="color: black; font-size: 30px; font-family: Bell MT;">Nuestros productos</label>
                        <hr noshade="noshade" size="2" width="100%" style="height: 1px; background: lightslategray"/><br>

                        <div class="card-deck">
                            <div class="card text-center">
                                <img class="card-img-top" src="imagenes/perfume6.jpg" alt="Card image cap" style="height: 150px">
                                <div class="card-body" style="height: 190px">
                                    <p class="card-text">Luce siempre bella con esta fragancia! </p>
                                    <p class="card-text" style="color: rgb(334, 26, 120); font-family: Arial Black">$450</p>
                                    <a href="#" class="btn btn-dark">Comprar ahora!</a>
                                </div>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top" src="imagenes/perfume7.jpg" alt="Card image cap" style="height: 150px">
                                <div class="card-body" style="height: 190px">
                                    <p class="card-text">Por que ellos igual lo merecen!</p>
                                    <p class="card-text" style="color: rgb(334, 26, 120); font-family: Arial Black">$600</p>
                                    <a href="#" class="btn btn-dark">Comprar ahora!</a>
                                </div>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top" src="imagenes/perfume8.png" alt="Card image cap" style="height: 150px">
                                <div class="card-body" style="height: 190px">
                                    <p class="card-text">Regalale algo especial a papá!</p>
                                    <p class="card-text" style="color: rgb(334, 26, 120); font-family: Arial Black">$550</p>
                                    <a href="#" class="btn btn-dark">Comprar ahora!</a>
                                </div>
                            </div>
                        </div><br>

                        <div class="card-deck">
                            <div class="card text-center">
                                <img class="card-img-top" src="imagenes/perfume9.jpg" alt="Card image cap" style="height: 150px">
                                <div class="card-body" style="height: 190px">
                                    <p class="card-text">Hazle saber lo especial que es!</p>
                                    <p class="card-text" style="color: rgb(334, 26, 120); font-family: Arial Black">$400</p>
                                    <a href="#" class="btn btn-dark">Comprar ahora!</a>
                                </div>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top" src="imagenes/perfume10.jpg" alt="Card image cap" style="height: 150px">
                                <div class="card-body" style="height: 190px">
                                    <p class="card-text">Llega ahora la nueva fragancia Dior!</p>
                                    <p class="card-text" style="color: rgb(334, 26, 120); font-family: Arial Black">$480</p>
                                    <a href="#" class="btn btn-dark">Comprar ahora!</a>
                                </div>
                            </div>
                            <div class="card text-center">
                                <img class="card-img-top" src="imagenes/perfume11.jpg" alt="Card image cap" style="height: 150px">
                                <div class="card-body" style="height: 190px">
                                    <p class="card-text">Sientete bella con esta nueva fragancia!</p>
                                    <p class="card-text" style="color: rgb(334, 26, 120); font-family: Arial Black">$420</p>
                                    <a href="#" class="btn btn-dark">Comprar ahora!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-3">
                        <div class="mb-3">
                            <label class="font-weight-bold text-md-left" style="color: black; font-size: 30px; font-family: Bell MT;">Categorias</label>
                            <hr noshade="noshade" size="2" width="100%" style="height: 1px; background: lightslategray"/><br>
                            <ul>
                                <li type="circle" ><a type="circle" href="#" style="color: black">Hombres</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Mujeres</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Chicas</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Chicos</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Niños</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Niñas</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Fragancias dulces</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Fragancias suaves</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Fragancias juveniles</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Fragancias fuertes</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Avon</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Jafra</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">D&G</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Channel</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Hugo Boss</a><br></li>
                                <li type="circle" ><a href="#" style="color: black">Giorgio Armani</a><br></li>
                            </ul>

                            <label class="font-weight-bold text-md-left" style="color: black; font-size: 30px; font-family: Bell MT;">Especial</label>
                            <hr noshade="noshade" size="2" width="100%" style="height: 1px; background: lightslategray"/><br>
                            <div class="card text-center">
                                <img class="card-img-top" src="imagenes/perfume12.jpg" alt="Card image cap" style="height: 90px">
                                <div class="card-body" style="height: 100px">
                                    <p class="card-text">Aprovecha nuestras ofertas!</p>
                                    <strike>$700</strike>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="color: rgb(334, 26, 120);">$490</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <hr noshade="noshade" size="1" width="100%" style="background: lightslategray"/>
                            © 2018 Copyright:
                            <a href="#" style="color: black"> PerfumeriaStore.com</a>
                        </div>

                    </div>
                </footer>
                <br>
            </div>
        </section>

        <?php
        // put your code here
        ?>
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
