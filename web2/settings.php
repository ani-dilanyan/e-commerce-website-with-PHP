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

<div class="container-fluid">
  <div class="row mx-1 my-2" id="settings">
    <div class="col-12 col-md-6 pl-5 mt-5">
      <h3 class="text-success">Account details</h3><hr><br><br>
      <div class="details">
        <p class="tvyalner">Name/Surname</p>
        <a href="#" class="text-success">edit</a>
      </div>
      <div class="details">
        <p class="tvyalner">Mail@mail.mail</p>
        <a href="#" class="text-success">edit</a>
      </div>
      <div class="details">
        <p class="tvyalner">******</p>
        <a href="#" class="text-success">edit</a>
      </div>
    </div>

    <div class="col-12 col-md-6 px-5 pl-md-5 mt-5">
      <h3 class="text-success">Address</h3><hr>
      <div id="add"><a class="btn bg-white pb-3 text-success" type="submit">+ (Add address)</a></div>
      <div class="details my-1">
        <p>Shipping address1</p>
        <a class="btn bg-white my-2 my-sm-0" type="submit">- (Remove address)</a>
      </div>
      <div class="details my-1">
        <p>Shipping address2</p>
        <a class="btn bg-white my-2 my-sm-0" type="submit">- (Remove address)</a>
      </div>
      <div class="details my-1">
        <p>Shipping address3</p>
        <a class="btn bg-white my-2 my-sm-0" type="submit">- (Remove address)</a>
      </div>
    </div>
  </div>

  <div class="row mx-1 my-2" id="settings">
    <div class="col-12 col-md-6 pl-5 mt-5">
      <h3 class="text-success">Payment</h3><hr>
      <div id="add2"><a class="btn bg-white pb-3 text-success" type="submit">+ (Add address)</a></div>
      <div class="details">
        <p class="tvyalner">Paymant method</p>
        <a href="#" class="text-success">edit</a>
      </div>
      <div class="details">
        <p class="tvyalner">Card number - 12345678</p>
        <a href="#" class="text-success">edit</a>
      </div>
    </div>

    <div class="col-12 col-md-6 px-5 pl-md-5 mt-5">
      <h3 class="text-success">Currency and language</h3><hr>
      <div class="details my-1">
        <select class="custom-select my-1" id="inlineFormCustomSelectPref">
          <option selected>Am</option>
          <option value="1">Rus</option>
          <option value="2">Eng</option>
        </select>
      </div>
      <div class="details my-1">
        <select class="custom-select my-1 " id="inlineFormCustomSelectPref">
          <option selected>֏</option>
          <option value="1">₽</option>
          <option value="2">$</option>
        </select>
      </div>
    </div>
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