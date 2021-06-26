<?php require_once 'components/boot.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">


  <title>Navbar</title>
</head>

<body>
  <style type="text/css">
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css");

    nav {
      font-size: 1.3rem;
      width: 100%;
      z-index: 1000000;
      top: 0px;
      position: sticky !important;

    }

    li {
      position: relative;
      padding: 15px 0;
    }

    a {
      color: orangered !important;
      text-transform: uppercase;
      text-decoration: none;
      letter-spacing: 0.15em;
      display: inline-block;
      padding: 15px 20px;
      position: relative;
      font-size: 23px;

    }



    a:hover {
      color: gray !important;
    }

    .bi {
      font-size: 40px;
      color: orangered;
    }
  </style>
  <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">

        <div class="navbar-brand" href="#"><i class="bi bi-emoji-smile-fill"></i></div>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="senior.php" tabindex="-1" aria-disabled="true">Senior</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./loginUser/loginUser/home.php" tabindex="-1" aria-disabled="true">Login</a>

            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./loginUser/loginUser/index.php" tabindex="-1" aria-disabled="true"> </a>

            </li>
          </ul>
          <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form> -->
        </div>
      </div>
    </nav>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
<html>