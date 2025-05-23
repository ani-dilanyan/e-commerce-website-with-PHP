php<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>Shop</title>
</head>
<body>

  <?php include 'header.php';?>
  <?php include 'menu.php';?>

<div class="container-fluid m-0 p-0">
  <div class="row m-0 p-0 ">
    <nav aria-label="breadcrumb" class="col-md-6 col-lg-8 col-xl-9 p-0 d-none d-md-block">
      <ol class="breadcrumb bg-white">
        <li class="breadcrumb-item"><a href="index.php" class="text-success">Home</a></li>
        <li class="breadcrumb-item"><a href="shop.php" class="text-success">Fruits</a></li>
        <li class="breadcrumb-item active" aria-current="page">Apples & pears</li>
      </ol>
    </nav>
    <h6 class="col-lg-1 d-none d-xl-block py-3 px-1 text-secondary">SORT BY:</h6>
    <form class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-2 px-3 p-sm-0 mt-1">
      <select class="custom-select" id="sort">
        <option selected>RECOMENDED</option>
        <option value="1">NEWEST</option>
        <option value="2">LOW TO HIGH</option>
        <option value="3">HIGH TO LOW</option>
      </select>
    </form>
  </div>
</div>
<h3 class="text-dark d-none d-md-block m-0 p-0 ml-md-4 border-bottom">Filters</h3>
<div class="container-fluid" id="shop">
  <div id="accordion">

    <div class="card border-0 d-none d-md-block">
      <div class="card-header bg-white" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed text-success" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Pears
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          <div class="form-check form-check">
            <input class="form-check-input" type="checkbox" id="Checkbox1" value="option1">
            <label class="form-check-label" for="Checkbox1">Lactose Free (1)</label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="checkbox" id="Checkbox2" value="option2">
            <label class="form-check-label" for="Checkbox2">Gluten Free (1)</label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="checkbox" id="Checkbox3" value="option3">
            <label class="form-check-label" for="Checkbox3">Lupin Free (2)</label>
          </div>
        </div>
      </div>
    </div>
    <div class="card border-0 d-none d-md-block">
      <div class="card-header bg-white" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed text-success" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Apples
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
          <div class="form-check form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Lactose Free (1)</label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Gluten Free (1)</label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox3">Lupin Free (2)</label>
          </div>
        </div>
      </div>
    </div>
    <div class="card border-0 d-none d-md-block">
      <div class="card-header bg-white" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed text-success" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Price
          </button>
        </h5>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body mr-4">          
          <div class="input-group mb-3">
            <div class="input-group-prepend">          
              <span class="input-group-text">From</span>
              <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">          
              <span class="input-group-text">From</span>
              <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- products -->
  <div class="container-fluid p-0 m-0">
    <div class="row">
      <a href="product.php" class="text-dark" style="text-decoration:none" >
        <div class="card col-12 col-md-6 col-lg-4 p-1">
          <img class="card-img-top pl-3" src="img/apple.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title pl-4">Organic red apples</h5>
            <ul><li>Gluten FREE</li>
              <li>NO gmo</li>
              <li>Lactose FREE</li></ul>
              <p class="card-text pl-4">$10/kg</p>
              <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
            </div>
          </div>
        </a>
        <a href="product.php" class="text-dark" style="text-decoration:none" >
          <div class="card col-12 col-md-6 col-lg-4 p-1">
            <img class="card-img-top pl-3" src="img/pear.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title pl-4">Organic red apples</h5>
              <ul><li>Gluten FREE</li>
                <li>NO gmo</li>
                <li>Lactose FREE</li></ul>
                <p class="card-text pl-4">$10/kg</p>
                <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
              </div>
            </div>
          </a>
          <a href="product.php" class="text-dark" style="text-decoration:none" >
            <div class="card col-12 col-md-6 col-lg-4 p-1">
              <img class="card-img-top pl-3" src="img/apple2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title pl-4">Organic red apples</h5>
                <ul><li>Gluten FREE</li>
                  <li>NO gmo</li>
                  <li>Lactose FREE</li></ul>
                  <p class="card-text pl-4">$10/kg</p>
                  <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
                </div>
              </div>
            </a>
            <a href="product.php" class="text-dark" style="text-decoration:none" >
              <div class="card col-12 col-md-6 col-lg-4 p-1">
                <img class="card-img-top pl-3" src="img/pear.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title pl-4">Organic red apples</h5>
                  <ul><li>Gluten FREE</li>
                    <li>NO gmo</li>
                    <li>Lactose FREE</li></ul>
                    <p class="card-text pl-4">$10/kg</p>
                    <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
                  </div>
                </div>
              </a>
              <a href="product.php" class="text-dark" style="text-decoration:none" >
                <div class="card col-12 col-md-6 col-lg-4 p-1">
                  <img class="card-img-top pl-3" src="img/apple2.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title pl-4">Organic red apples</h5>
                    <ul><li>Gluten FREE</li>
                      <li>NO gmo</li>
                      <li>Lactose FREE</li></ul>
                      <p class="card-text pl-4">$10/kg</p>
                      <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
                    </div>
                  </div>
                </a>
                <a href="product.php" class="text-dark" style="text-decoration:none" >
                  <div class="card col-12 col-md-6 col-lg-4 p-1">
                    <img class="card-img-top pl-3" src="img/apple.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title pl-4">Organic red apples</h5>
                      <ul><li>Gluten FREE</li>
                        <li>NO gmo</li>
                        <li>Lactose FREE</li></ul>
                        <p class="card-text pl-4">$10/kg</p>
                        <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
                      </div>
                    </div>
                  </a>
                  <a href="product.php" class="text-dark" style="text-decoration:none" >
                    <div class="card col-12 col-md-6 col-lg-4 p-1">
                      <img class="card-img-top pl-3" src="img/apple.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title pl-4">Organic red apples</h5>
                        <ul><li>Gluten FREE</li>
                          <li>NO gmo</li>
                          <li>Lactose FREE</li></ul>
                          <p class="card-text pl-4">$10/kg</p>
                          <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
                        </div>
                      </div>
                    </a>
                    <a href="product.php" class="text-dark" style="text-decoration:none" >
                      <div class="card col-12 col-md-6 col-lg-4 p-1">
                        <img class="card-img-top pl-3" src="img/apple2.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title pl-4">Organic red apples</h5>
                          <ul><li>Gluten FREE</li>
                            <li>NO gmo</li>
                            <li>Lactose FREE</li></ul>
                            <p class="card-text pl-4">$10/kg</p>
                            <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
                          </div>
                        </div>
                      </a>
                      <a href="product.php" class="text-dark" style="text-decoration:none" >
                        <div class="card col-12 col-md-6 col-lg-4 p-1">
                          <img class="card-img-top pl-3" src="img/pear.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title pl-4">Organic red apples</h5>
                            <ul><li>Gluten FREE</li>
                              <li>NO gmo</li>
                              <li>Lactose FREE</li></ul>
                              <p class="card-text pl-4">$10/kg</p>
                              <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
                            </div>
                          </div>
                        </a>
                        <a href="product.php" class="text-dark" style="text-decoration:none" >
                          <div class="card col-12 col-md-6 col-lg-4 p-1">
                            <img class="card-img-top pl-3" src="img/apple2.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title pl-4">Organic red apples</h5>
                              <ul><li>Gluten FREE</li>
                                <li>NO gmo</li>
                                <li>Lactose FREE</li></ul>
                                <p class="card-text pl-4">$10/kg</p>
                                <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
                              </div>
                            </div>
                          </a>
                          <a href="product.php" class="text-dark" style="text-decoration:none" >
                            <div class="card col-12 col-md-6 col-lg-4 p-1">php
                              <img class="card-img-top pl-3" src="img/apple.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title pl-4">Organic red apples</h5>
                                <ul><li>Gluten FREE</li>
                                  <li>NO gmo</li>
                                  <li>Lactose FREE</li></ul>
                                  <p class="card-text pl-4">$10/kg</p>
                                  <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
                                </div>
                              </div>
                            </a>
                            <a href="product.php" class="text-dark" style="text-decoration:none" >
                              <div class="card col-12 col-md-6 col-lg-4 p-1">
                                <img class="card-img-top pl-3" src="img/pear.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title pl-4">Organic red apples</h5>
                                  <ul><li>Gluten FREE</li>
                                    <li>NO gmo</li>
                                    <li>Lactose FREE</li></ul>
                                    <p class="card-text pl-4">$10/kg</p>
                                    <a href="cart.php" class="btn btn-success ml-4 mt-2">Add to Cart</a>
                                  </div>
                                </div>
                              </a>

                            </div>
                          </div>
                        </div>
                        

                      </div>
                    </div>
                    <br>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item">
                          <a class="page-link text-dark" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link text-dark" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>

                    <?php include 'footer.php';?>

                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                  </body>
                  </html>