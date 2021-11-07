<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #82E0AA;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>SPARKS BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="https://cdn.icon-icons.com/icons2/2104/PNG/512/bank_icon_129525.png" class="img-fluid pt-2" width="300" height="400">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="https://www.seekpng.com/png/detail/72-729929_add-user-group-woman-add-user-icon-png.png" class="img-fluid" width="280" height="400">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;" type="button" class="btn btn-primary">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://i.pinimg.com/474x/14/04/8d/14048d06bdf4c1d0f724370b7eabc45e.jpg" class="img-fluid" width="300" height="400">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;" type="button" class="btn btn-primary">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://cdn0.iconfinder.com/data/icons/online-money-service-orchid-volume-2/256/Transaction_History-512.png" class="img-fluid" width="300" height="400">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;" type="button" class="btn btn-primary">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Pranjal Bisht</b> <br> Pranjal's Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>