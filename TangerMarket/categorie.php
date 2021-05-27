
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
<?php


$conn = mysqli_connect("localhost","root","","tangermarket");
$sql = "SELECT DISTINCT categorie FROM produit ";
     $res = mysqli_query($conn, $sql);
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
     </head>
     <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TangerMarket</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categorie.php">Categorie</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="http://localhost/TangerMarket/login.php">
      <button class="btn btn-danger my-2 my-sm-0" type="submit">logout</button>
    </form>
  </div>
</nav>
<br>
     <div class="row ">
                    <?php if (mysqli_num_rows($res)) { ?>



                         <?php
                         $i = 0;
                         while ($rows = mysqli_fetch_assoc($res)) {
                              $i++;
                         ?>
                              <br>

                              <div class="col-lg-4 ">
                                   <div class="card">
                                        <img src="./img/product.jpg" class="img-fluid" alt="">
                                        <h5 class="font-weight-bold px-3"><?= $rows['categorie'] ?> </h5>
                                        <div class="d-flex">
                                             <a href="./produit.php?produit=<?php echo $rows['categorie']; ?>" class="font-weight-bold px-3 pb-4 A">Read More</a>
                                             <a href="" class="font-weight-bold px-3 pb-4 A">Add</a>
                                        </div>


                                   </div>
                              </div>




                         <?php } ?>
                    <?php } ?>



               </div>
     </body>
     </html>