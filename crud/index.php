<?php require_once 'nav.php'

?>
<?php require_once './components/db_connect.php';


$sql = "SELECT * FROM pets";
$result = mysqli_query($connect, $sql);
$cards = ''; //this variable will hold the body for the table
if (mysqli_num_rows($result)  > 0) {
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $cards .= "

           <div class='col-sm-12'>
           <div class='card h-200'>
           <div class='text-center'>
           <p><img class='card-img-top' style='object-fit: cover;' src='./loginUser/loginUser/pictures/" . $row['image'] . "'</p>
           <h2>" . $row['name'] . "</h2>
           <h5 class='card-title '> Age : " . $row['age'] . "</h5>
           
            <p class='ownColor3'> " . $row['location'] . "</p>
            <p style=color:red;>" . $row['petsize'] . "</p> 
            <p class='ownColor'>" . $row['hobbies'] . "</p>
            <p class='ownColor2'> Description : " . $row['description'] . "</p>
            <p class='text-primary'> Breed : " . $row['breed'] . "</p>
           
           <form method='post' enctype= 'multipart/form-data'>
           </form>
           </div> 
           </div>
           </div>
         ";}
         ;
        }

?>










<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <title>PHP CRUD</title>
  <?php require_once 'components/boot.php' ?>
  <style type="text/css">
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css");
    @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');

   

    .h2 {
      color: #dfd2c4;
      text-shadow: 0 13.36px 8.896px #c4b59d, 0 -2px 1px #fff !important;
      display: inline;
    }


    .h5 {
      color: wheat;
      text-shadow: 0 13.36px 8.896px #c4b59d, 0 -2px 1px #fff !important;
      font-family: serif;
      border-bottom: 3px solid #f9dd94;
      font-size: 30px;
    }

    .owntitle {
      color: #858F87;

      display: inline;
      border-bottom: 3px solid #f9dd94;
      font-family: 'Paytone One', sans-serif;
      font-size: 30px;

    }

    td {
      text-align: left;
      vertical-align: middle;
    }

    tr {
      text-align: center;
      color: black !important;

    }

    img {
      height: 300px;


    }

    .h3 {
      text-align: left;
      margin: 20px !important;
      font-family: 'Paytone One', sans-serif;
      color: #202020 !important;
      text-transform: uppercase !important;

    }

    .h3 span {
      display: block !important;
      margin: 11px 0 17px 0 !important;
      font-size: 80px !important;
      line-height: 80px !important;
      color: #858F87;
      text-shadow: 0 13.36px 8.896px #c4b59d, 0 -2px 1px #fff !important;

    }



    .ownfooter {
      text-align: center !important;
      color: white !important;
      text-align: center;
      font-family: 'Paytone One', sans-serif;

    }

    h2,
    h5 {
      color: orangered;



    }

    p {
      text-align: center;
      color: black;
      font-family: 'Paytone One', sans-serif;

    }

    .textColor {
      color: orangered;

    }
    .ownColor{
      color: #778079;
    }
    .ownColor2{
      color: #535954;
    }
    .ownColor3{
      color: #3A3E3A;
    }

    .card {
      background-color:#EBEDEB;
      text-shadow: 0 13.36px 8.896px #c4b59d, 0 -2px 1px #fff !important;
      height: 100%!important;
    }

    body {

      background-color: #ece5da;
    }

    .card_img_header {
      object-fit: cover;
      background-position: center;
      background-size: cover;


    }

    .card_img_section {

      background-position: center;
      object-fit: cover;
      background-size: cover;

    }

    .ownBg {
      background-color: white !important;
      background-image: url(../crud/loginUser/loginUser/pictures/paper.jpg);

    }

    .card1 {
      filter: grayscale(10%);
      background-image: url(https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1042&q=80);
      background-size: cover;
      height: 85vh;
      background-position-x: center;
      background-repeat: no-repeat;
    }

   
  </style>
</head>

<body>


  <!-- hero -->
<div class="container">
    <div class="card card1 bg-dark ownBg  text-white">
      <div class="card1">
        <h3 class="h3"> <span>Bringing</span> <span>Home</span> <span>A New</span><span>Pet</span></h3>
      </div>
    </div>
  </div>







  <div class="container mt-5 ">
    <p>
    <h5 class="card-title  owntitle">Working Process </h5>
    </p>
    <div class="row">
      <div class="col">
        <img src="https://images.unsplash.com/photo-1546377791-2e01b4449bf0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1491&q=80" alt="...">

      </div>
      <div class="col">
        <h5 class="card-title"></h5>
        <p class='h2 textColor'>Loving #1 pet will not change the world,but for those 1 pet it will.</p>
        <p class="card-text m-5 textColor ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos accusamus sit tempora quibusdam cum doloribus eligendi accusantium. Vitae, saepe delectus?
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus, autem.
        </p>


      </div>
    </div>
    <div class="container">
      <p>
      <h5 class="card-title  owntitle m-5 mt-5">Pets</h5>
      </p>
      <hr>
      <div class="row row-cols-1 row-cols-md-2 row-cols-sm-12 row-cols-lg-4 g-4 mt-5 mb-5">



        <!-- dynamic cards -->
        <?= $cards; ?>
      </div>
    </div>
    <!-- Table for test -->
    <tr>


    </tr>
    <!-- <div class="row">
    <div class="col">
      1 of 3
    </div> -->



    <p class='h2 textColor'>Quality Services</p>

    <div class="col">
      <div class="col">
        <img style="object-fit: cover;" src="https://images.unsplash.com/photo-1522276498395-f4f68f7f8454?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" class="card-img " alt="...">
        <p class="card-text textColor">Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum conval</p>

      </div>
    </div>
  </div>
  </div>







  <!-- Footer -->

  <div class="container pt-5">
    <nav class="navbar navbar-light  ownFooter">
      <div class="container-fluid">
        <p class="navbar-brand bg_drak" href="#">
        <div class="navbar-brand ownfooter" href="#"><i class="bi bi-emoji-smile-fill"></i></i> </div>
        </p>
      </div>
  </div>
</body>

</html>