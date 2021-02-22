<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>product</title>
  </head>
     <body>
       <header>
        <?php include("menu.php"); ?>
       </header>


       <!-- header -->




       <div class="p-3 mb-2 bg-primary text-white text-center">
            <h1>MEN'S LIFESTYLE Clothing</h1>
            <ul class="list-inline">
              <li class="list-inline-item">home</li>
              <li class="list-inline-item">Catalogue</li>
              <li class="list-inline-item">Men</li>
              <li class="list-inline-item">Clothing</li>
            </div>

          
          <!-- Fin header -->


          <!--  produit -->

            <div class="container border">
                    <div class="row cols-sm-4">
                    <div class="col-sm-6">&emsp;
                    <h2 class="lifestyle">LIFESTYLE<h2>
                    <p class="produit">Double-faced Wool Cape Jacket</p>&emsp;
                    <div class="container">&emsp;
                            <div class="row row-cols-2">
                              <div class="col">Color : 
                                <p><span> <button type="button" class="btn btn-primary">-</button>
<button type="button" class="btn btn-light">-</button>
<button type="button" class="btn btn-success">-</button>
<button type="button" class="btn btn-danger">-</button>
</p</span>
                              </div>
                              <div class="col">Size
                                <p> S M <span class="price">L</span> XL </p>
                              </div>
                              <div class="col"><span class="red h2">$47.00  <span class="price-sale"> $64.00 </span>&emsp; 
                              <div class="btn-group" role="group" aria-label="Basic outlined example">
  <button type="button" class="btn btn-outline-primary">-</button>
  <button type="button" class="btn btn-outline-primary">02</button>
  <button type="button" class="btn btn-outline-primary">+</button>  
                            </div>
                            </div>
                                                          
                              <div class="col"><button type="button" class="btn btn-primary btn-lg">+ Add To Cart</button></div>
                            </div>                    
                          </div>
                    </div>
                    <div class="col-5">&emsp;
                    <img src="image/product/produit.png"class="img-fluid">
                    </div>
                    <div class="col-1">&emsp;
                    <img src="image/product/produit2.png"class="img-fluid">
                    </div>


                    <div class="container border">
                    <div class="row row-cols-2">
                      <div class="col border">
                      <h3> Specification </h3>
                      </div>
                      <div class="col border">
                      <h3> Description </h3>
                      </div>
                      <div id="fond">
                      <div class="col">
                      <p class="montserrat">Orci varius natoque penatibus et magnis<br> dis parturient montes,
                             nascetur ridiculus mus.<br> Aenean sodales congue ex,<br> quis dictum mauris.
                              Donec at vulputate metus,<br> vel venenatis magna. Maecenas ridiculus mus.<br> Aenean sodales congue ex,<br> quis dictum mauris.
                              Donec at vulputate metus, vel<br> venenatis magna.Orci varius natoque penatibus <br>et magnis dis parturient montes,
                             nascetur ridiculus mus.<br> Aenean sodales congue ex, quis dictum mauris.<br> Maecenas ridiculus mus.</p>
                              </div>
                              </div>
                      <div id="fond">
                      <div class="col">
                      <p>Orci varius natoque penatibus et magnis dis parturient montes,
                             nascetur ridiculus mus.</p>
                              </div>
                              </div>
                    </div>
                  </div>&emsp;

                  <!-- Fin produit -->



                    <!-- ligne produit -->
                    
                    <div class="container">
                    <div class="row row-cols-4-sm">
                    <div class="col-sm" id="popproduct">
                    <img src="image/index/produit/popular-product.png"class="img-fluid">
                    </div>&emsp;
                    <div class="col-sm border">
                    <img src="image/index/produit/produit-1.png"class="img-fluid">
                    <p class="h6 playfair"> Essential cotton-blend</p>
                    <p class="price"><span class="price-sale">$200.00</span>  $100.00 USD </p>
                    </div>&emsp;
                    <div class="col-sm border">
                    <img src="image/index/produit/produit-2.png"class="img-fluid">
                    <p class="h6 playfair"> Flecked cotton-blend</p>
                    <p class="price"> $175.00 USD </p>
                    </div>&emsp;
                    <div class="col-sm border">
                    <img src="image/index/produit/produit-3.png"class="img-fluid">
                    <p class="h6 playfair"> Striped cotton t-shirt</p>
                    <p class="price"> $200.00 USD </p>
                    </div>&emsp;
                    </div>
                    <!-- FIN ligne produit -->
       </body>
     <footer>
     <?php include("footer.php"); ?>
</footer>
</html>
