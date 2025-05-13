<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>Home</title>
</head>
<body>
<div class="container-fluid">
    <div class="row bg-dark">
      <div class="col-md-4 col-xl-6 d-none d-md-block pt-2 text-warning">
        Phone: +xxx yyy zzz
      </div>
      <div class=" col-6 col-md-2">
        <select class="custom-select my-1" id="inlineFormCustomSelectPref">
          <option selected>Am</option>
          <option value="1">Rus</option>
          <option value="2">Eng</option>
        </select>
      </div>
      <div class="col-6 col-md-2">
       <select class="custom-select my-1 " id="inlineFormCustomSelectPref">
        <option selected>֏</option>
        <option value="1">₽</option>
        <option value="2">$</option>
      </select>
    </div>
    <div class=" col-md-4 col-lg-2 d-none d-md-block pt-1">
      <a href="cart.php" type="button" class="btn btn-warning font-weight-bold ">My cart <span class="badge badge-dark text-light">3</span>
      </a>
    </div>
  </div>

  <div class="row">
    <nav class="navbar navbar-dark bg-light col-12">
      <div class="col-6 col-md-2">
        <a href="index.php"><img src="img/logo.png" width="95" height="80"></a>
      </div>
      <div class=" col-md-6 col-lg-8  d-none d-md-block pr-2 ">
        <form class="form-inline  d-none d-md-block float-right">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark bg-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      <div class="pr-2 col-2 d-block ">
        <div class="dropdown float-right ">
          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My Account
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#loginModal">Login</button>
            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#registerModal">Register</button>
            <button class="dropdown-item" type="button"><a href="activity.php" class="text-dark" id="activity">My activity</a></button>
            <button class="dropdown-item" type="button"><a href="settings.php" class="text-dark" id="settings">Settings</a></button>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
</body>
</html>