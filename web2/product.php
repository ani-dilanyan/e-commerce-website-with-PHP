<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>Product</title>
</head>
<body>

  <?php include 'header.php';?>
  <?php include 'menu.php';?>

<nav aria-label="breadcrumb" class="col-md-6 col-lg-8 col-xl-9 p-0 d-none d-md-block">
  <ol class="breadcrumb bg-white">
    <li class="breadcrumb-item"><a href="index.php" class="text-success">Home</a></li>
    <li class="breadcrumb-item"><a href="shop.php" class="text-success">Fruits</a></li>  
    <li class="breadcrumb-item"><a href="shop.php" class="text-success">Apples & pears</a></li>
    <li class="breadcrumb-item active" aria-current="page">Organic red apple</li>
  </ol>
</nav>


<div class="container-fluid">
  <h3 class="text-dark">Organic red apple</h3><hr>
  <div class="row">
    <div  class="col-12 col-lg-7">
      <div class="row">
        <div class="col-2 d-flex flex-column align-items-center">
          <a data-fancybox="gallery" href="img/apple.jpg"><img src="img/apple.jpg" class="img-fluid mb-2"></a>
          <a data-fancybox="gallery" href="img/apple1.jpg"><img src="img/apple1.jpg" class="img-fluid mb-2"></a>
          <a data-fancybox="gallery" href="img/apple4.jpg"><img src="img/apple4.jpg" class="img-fluid mb-2"></a>
          <a data-fancybox="gallery" href="img/apple3.jpg"><img src="img/apple3.jpg" class="img-fluid mb-2"></a>
        </div>
        <div class="col-10">
          <img src="img/apple.jpg" class="img-fluid">
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-5">
      <p id="price">10$/kg</p>
      <div class="input-group mb-3" id="quantity">
        <div class="input-group-prepend">
          <span class="input-group-text">Quantity</span>
        </div>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="1kg">
      </div>

      <div>
        <button type="button" class="btn btn-success">BUY NOW</button>
        <button type="button" class="btn btn-success">Add to cart</button>
      </div>

      <div class="mt-5">
        <h4>Short description</h4><hr>
        <ul>
          <li>Gluten FREE</li>
          <li>Lactose FREE</li>
          <li>NO gmo</li>
        </ul>
        <h4 class="mt-5">Storage and Uses</h4><hr>
        <ul>
          <li>Store them in a cool, dry place away from direct sunlight. Wrap them with newspaper individually to keep them fresh for a long time.</li>
          <li>If any apple goes bad, it protects other apples from getting spoiled. Take a cup of water, dissolve 1/8th teaspoon of salt in it. </li>
          <li>Soak freshly cut slices and drain them. Now, rinse them in fresh water so that they will not taste salty. </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div id="accordion2">
  <div class="card border-0">
    <div class="card-header bg-white" id="headingOne">
      <button class="btn btn-link text-success" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Overveiw
      </button>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
      <div class="card-body">
        <strong class="text-dark">About the Product</strong> <hr>
        The bright red coloured and heart shaped <br> Red Delicious apples are crunchy,<br> juicy and slightly sweet, are a natural source <br> of fibre and fat free.
      </div>
    </div>
  </div>
  <div class="card border-0">
    <div class="card-header bg-white" id="headingTwo">
      <button class="btn btn-link collapsed text-success" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Raiting
      </button>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
      <div class="card-body">
        
        <div class="progress mb-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress mb-2">
          <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<h3 class="m-0 p-3 font-weight-bold alert-warning" id="rec">You may also like</h3>
<div class="row m-0">

  <a href="product.php" class="text-dark" style="text-decoration:none" >
    <div class="card col-6 col-sm-4 col-md-3 col-lg-2 p-1">
      <img class="card-img-top pl-3" src="img/berries.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title pl-4">Berries</h5>
        <p class="card-text pl-4">$8/kg</p>
        <a href="#" class="btn btn-success ml-4 mt-2">Add to Card</a>
      </div>
    </div>
  </a>

  <a href="product.php" class="text-dark" style="text-decoration:none" >
    <div class="card col-6 col-sm-4 col-md-3 col-lg-2 p-1">
      <img class="card-img-top pl-3" src="img/spinach.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title pl-4">Spinach</h5>
        <p class="card-text pl-4">$2/kg</p>
        <a href="#" class="btn btn-success ml-4 mt-2">Add to Card</a>
      </div>
    </div>
  </a>

  <a href="product.php" class="text-dark" style="text-decoration:none" >
    <div class="card col-6 col-sm-4 col-md-3 col-lg-2 p-1">
      <img class="card-img-top pl-3" src="img/yogurt.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title pl-4">Yogurt</h5>
        <p class="card-text pl-4">$10/kg</p>
        <a href="#" class="btn btn-success ml-4 mt-2">Add to Card</a>
      </div>
    </div>
  </a>

  <a href="product.php" class="text-dark" style="text-decoration:none" >
    <div class="card col-6 col-sm-4 col-md-3 col-lg-2 p-1 d-md-none d-lg-block">
      <img class="card-img-top pl-3" src="img/potato.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title pl-4">Potato</h5>
        <p class="card-text pl-4">$0.75/kg</p>
        <a href="#" class="btn btn-success ml-4 mt-2">Add to Card</a>
      </div>
    </div>
  </a>

  <a href="product.php" class="text-dark" style="text-decoration:none" >
    <div class="card col-6 col-sm-4 col-md-3 col-lg-2 p-1 d-md-none d-lg-block">
      <img class="card-img-top pl-3" src="img/beef.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title pl-4">Beef</h5>
        <p class="card-text pl-4">$14/kg</p>
        <a href="#" class="btn btn-success ml-4 mt-2">Add to Card</a>
      </div>
    </div>
  </a>

  <a href="product.php" class="text-dark" style="text-decoration:none" >
    <div class="card col-6 col-sm-4 col-md-3 col-lg-2 p-1 d-md-none d-lg-block">
      <img class="card-img-top pl-3" src="img/watermelon.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title pl-4">watermelon</h5>
        <p class="card-text pl-4">$3/kg</p>
        <a href="#" class="btn btn-success ml-4 mt-2">Add to Card</a>
      </div>
    </div>
  </a>

</div>

<?php include 'footer.php';?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>