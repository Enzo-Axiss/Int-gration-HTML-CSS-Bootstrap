<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="index.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    <title>Be pro</title>
  </head>
     <body>
       <header>
        <?php include("menu.php"); ?>
       </header>

            <div id="haut">
                <!-- CAROUSEL -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div id="carousel" class="carousel-inner">

                <div class="carousel-item active">
                <img id="girl1" src="image/index/image.png"class="rounded mx-auto d-block" alt="...">
                </div>

                <div class="carousel-item">
                <img id="girl2" src="image/index/image.png"class="rounded mx-auto d-block" alt="...">
                </div>
            
                <!--BOUTON BUYNOW & New Arrival -->

                <div class="position-absolute top-50 start-50 translate-middle">
                <button type="button" class="btn btn-primary btn-lg">BUY NOW</button>
                </div>

                <div class="position-absolute top-60 start-50 translate-middle-x">
                <h1 class="display-2">New Arrival</h1>
                </div>



                <!--FIN BOUTON & New Arrival -->


                </div>
                <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="false"></span>
                <span class="visually-hidden">Next</span>
                </a>
                </div>

                <!-- FIN CAROUSEL -->
            </div>
                    </div>
                    <div class="position-absolute top-70 start-50 translate-middle">
                      <div class="feature">
                        <img src="image/index/feature.png"class="img-fluid" alt="modalié">
                      </div>
                      </div>
                                        
                                        <!-- ESPACE -->
                                              <div class="container">
                                              <div class="row row-cols-1">
                                            <div class="col-1">
                                              <img src="image/index/espace.png"class="img-fluid">
                                            </div>
                                            <div class="container">
                                              <div class="row row-cols-1">
                                            <div class="col-1">
                                              <img src="image/index/espace.png"class="img-fluid">
                                            </div>
                                        <!-- FIN ESPACE -->

                    <!-- Première ligne produit -->
                    <div class="container">
                    <div class="row row-cols-4-sm">
                    <div class="col-sm" id="popproduct">
                      <a href="product.php">
                    <img src="image/index/produit/popular-product.png"class="img-fluid ">
                      </a>
                    </div>&emsp;
                    <div class="col-sm border">
                    <a href="product.php">
                    <img src="image/index/produit/produit-1.png"class="img-fluid">
                    </a>
                    <p class="h6 playfair"> Essential cotton-blend</p>
                    <p class="price"><span class="price-sale">$200.00</span>  $100.00 USD </p>
                    </div>&emsp;
                    <div class="col-sm border">
                    <a href="product.php">
                    <img src="image/index/produit/produit-2.png"class="img-fluid">
                    </a>
                    <p class="h6 playfair"> Flecked cotton-blend</p>
                    <p class="price"> $175.00 USD </p>
                    </div>&emsp;
                    <div class="col-sm border">
                    <a href="product.php">
                    <img src="image/index/produit/produit-3.png"class="img-fluid">
                    </a>
                    <p class="h6 playfair"> Striped cotton t-shirt</p>
                    <p class="price"> $200.00 USD </p>
                    </div>&emsp;
                    </div>&emsp;
                    <!-- FIN Première ligne produit -->

                  <!-- deuxième ligne produit -->
                  <div class="container">
                  <div class="row">
                  <div class="col-3 border">
                  <a href="product.php">
                  <img src="image/index/produit/produit-5.png"class="img-fluid">
                  </a>
                  <p class="h6 playfair"> V-neck cotton t-shirt</p>
                  <p class="price"> $100.00 USD </p>
                  </div>&emsp; 
                  <div class="col-sm background border">&emsp;
                  <h2 class="lifestyle white ">LIFESTYLE<h2>&emsp;
                    <p class="produit white playfair">Double-faced Wool Cape Jacket</p>
                    <a href="product.php">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
  <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
  
  <label class="btn btn-light btn-outline-primary" for="btncheck1">$50.00 USD</label>
  

  <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">

  <label class="btn btn-light btn-outline-primary" for="btncheck2">BY NOW</label>
  </a>
            
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>&emsp;
                  <!-- FIN deuxième ligne produit -->


                      <!-- troisième ligne produit -->
                      <div class="container">
                      <div class="row row-cols-4-sm">
                      <div class="col-sm border">
                      <a href="product.php">
                      <img src="image/index/produit/produit-6.png"class="img-fluid">
                      </a>
                      <p class="h6 playfair"> Message cotton t-shirt</p>
                      <p class="price"> $100.00 USD </p>
                      </div>&emsp;
                      <div class="col-sm border">
                      <a href="product.php">
                      <img src="image/index/produit/produit-7.png"class="img-fluid">
                      </a>
                      <p class="h6 playfair"> Sequin start t-shirt</p>
                      <p class="price"> <span class="price-sale">$200.00</span> $100.00 USD </p>
                      </div>&emsp;
                      <div class="col-sm border">
                      <a href="product.php">
                      <img src="image/index/produit/produit-8.png"class="img-fluid">
                      </a>
                      <p class="h6 playfair"> Ruffle sleeve t-shirt</p>
                      <p class="price"> $175.00 USD </p>
                      </div>&emsp;
                      <div class="col-sm border">
                      <a href="product.php">
                      <img src="image/index/produit/produit-9.png"class="img-fluid">
                      </a>
                      <p class="h6 montserrat"> Double layer top</p>
                      <p class="price"> $200.00 USD </p>
                      </div>
                      </div>&emsp;
                      <!-- Première ligne produit -->


          <!-- Bannière -->


          <div class="container">
          <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/index/bannière.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/index/bannière.png" class="d-block w-100" alt="...">
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div>
    </div>
        </div>
        </div>
        </div>
            <!-- Fin Bannière -->
     </body>
     <footer>
     <?php include("footer.php"); ?>
</footer>
</html>
