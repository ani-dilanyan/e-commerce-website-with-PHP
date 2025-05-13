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

  <title>Place order</title>
</head>
<body>

  <?php include 'header.php';?>
  <?php include 'menu.php';?>

<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white">
      <li class="breadcrumb-item"><a href="cart.php" class="text-success">Cart</a></li>
      <li class="breadcrumb-item"><a href="payment.php" class="text-success">Payment method</a></li>
      <li class="breadcrumb-item"><a href="address.php" class="text-success">Shipping address</a></li>
      <li class="breadcrumb-item active" aria-current="page">Place order</li>
    </ol>
  </nav>
  <div class="modal-body">
    <div class="row border-top">
      <p class="info categories mt-3 pl-5 col-2 col-sm-1"><strong>#</strong></p>
      <p class="info categories mt-3 pl-5 pr-0 col-7 col-sm-6 col-md-5 col-lg-6"><strong>Product</strong></p>
      <p class="info categories mt-3 pl-0 pr-0 col-sm-2 col-lg-1 d-none d-sm-block"><strong>Price</strong></p>
      <p class="info categories mt-3 pl-0 pr-5 col-sm-2 d-none d-sm-block"><strong>Quantity</strong></p>
    </div>

    <div class="row fav border-top alert alert-light alert-dismissible fade show" role="alert">
      <p class="info col-2 col-sm-1">1</p>
      <a href="product.php" class="col-3 col-sm-2 col-md-1"><img src="img/apple.jpg" class="img-fluid"></a>
      <a href="product.php" class="info product_name text-success col-4 col-lg-5">Apple</a>
      <p class="info col-sm-2 col-lg-1 d-none d-sm-block">10$/kg</p>
      <p class="info col-sm-2 d-none d-sm-block">3kg</p>
      <a type="button" class="close col-2" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </a>
    </div>

    <div class="row fav border-top alert alert-light alert-dismissible fade show" role="alert">
      <p class="info col-2 col-sm-1">2</p>
      <a href="product.php" class="col-3 col-sm-2 col-md-1"><img src="img/watermelon.jpg" class="img-fluid"></a>
      <a href="product.php" class="info product_name text-success col-4 col-lg-5">Watermelon</a>
      <p class="info col-sm-2 col-lg-1 d-none d-sm-block">10$/kg</p>
      <p class="info col-sm-2 d-none d-sm-block">3kg</p>
      <a type="button" class="close col-2" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </a>
    </div>

    <div class="row fav border-top alert alert-light alert-dismissible fade show" role="alert">
      <p class="info col-2 col-sm-1">3</p>
      <a href="product.php" class="col-3 col-sm-2 col-md-1"><img src="img/pear.jpg" class="img-fluid"></a>
      <a href="product.php" class="info product_name text-success col-4 col-lg-5">Pear</a>
      <p class="info col-sm-2 col-lg-1 d-none d-sm-block">10$/kg</p>
      <p class="info col-sm-2 d-none d-sm-block">3kg</p>
      <a type="button" class="close col-2" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </a>
    </div>
    <div class="row fav border-top mb-0 alert alert-light">
      <p class="total text-success">Total: 90$</p>
    </a>
  </div>
</div>

<div>
  <h5 class="creadit_card ml-3 text-secondary">Credit card</h5>
  <img class="ml-3" src="img/card.png">
</div>

<div class="modal-body">
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="email" class="form-control py-2" id="inputEmail4" placeholder="Card holder name *">
      </div>
      <div class="form-group col-md-6">
        <input type="password" class="form-control py-2" id="inputPassword4" placeholder="Card number *">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <select id="inputState" class="form-control" placeholder="Confirm Password">
          <option selected>January</option>
          <option>February</option>
          <option>March</option>
          <option>April</option>
          <option>May</option>                
          <option>June</option>
          <option>July</option>
          <option>August</option>
          <option>September</option>
          <option>October</option>
          <option>November</option>
          <option>December</option>                
        </select>
      </div>
      <div class="form-group col-md-4">
        <select id="inputState" class="form-control">
          <option selected>2020</option>
          <option>2021</option>
          <option>2022</option>
          <option>2023</option>
          <option>2024</option>                
          <option>2025</option>
          <option>2026</option>
          <option>2027</option>
          <option>2028</option>
          <option>2029</option>
          <option>2030</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <input type="text" class="form-control" id="inputCity" placeholder="CVV*">
      </div>
    </div><hr>
  </form>
</div>
<form>
  <div class="form-row">
    <div class="form-group col-md-4">
      <input type="email" class="form-control" id="inputEmail4" placeholder="First name *">
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="inputPassword4" placeholder="Last name *">
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="inputPassword4" placeholder="Middle name/Initial">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <input type="email" class="form-control" id="inputEmail4" placeholder="Company">
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="inputPassword4" placeholder="Email *">
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="inputPassword4" placeholder="Phone *">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="inputCountry" placeholder="Country *">
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="inputCity" placeholder="State *">
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="inputCity" placeholder="City *">
    </div>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="inputAddress" placeholder="Address">
  </div>
</form>
<button type="button" class="btn btn-success mb-1"><a href="acceptance.php" id="checkout">Confirm and pay</a></button>
</div>      
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