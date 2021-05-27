<?php


// AJOUTER UN NOUVEAU PRODUIT

$conn = mysqli_connect("localhost","root","","tangermarket");

//if the form's sbmit button is clicked, we need to process the form

if(isset($_POST['submit'])) {
    //get variable from the form
    
    $Réference = $_POST['Réference'];
    $libelle = $_POST['libelle'];
    $prix_unitaire = $_POST['prix_unitaire'];
    $quantite_minimale = $_POST['quantite_minimale'];
    $quantite_en_stock = $_POST['quantite_en_stock'];
    $categorie = $_POST['categorie'];

    //write sql query

    $sql ="INSERT INTO `produit`( `Réference`,`libelle`, `prix_unitaire`,`quantite_minimale`,`quantite_en_stock`, `categorie`) VALUES ('$Réference','$libelle','$prix_unitaire','$quantite_minimale','$quantite_en_stock','$categorie')";

    //execute the query

    $result =$conn->query($sql);

    if ($result == TRUE){
        echo "<script>alert(\"New product added successfuly\")</script>";
    }

    $conn->close();

}

if(isset($_POST['filter'])){
    header('location: filter.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
<?php include "head.php";

?>
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
        <a class="nav-link" href="categorie.php">categorie</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="http://localhost/TangerMarket/login.php">
      <button class="btn btn-danger my-2 my-sm-0" type="submit">logout</button>
    </form>
  </div>
</nav>
    <div class="container">
        <div >
    
            <form style="width: 40%;background-color:white;border-radius: 10px;padding: 20PX;" class="container" action="" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">Référence</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Référence" name="Réference">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">libelle</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="libelle" name="libelle">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">prix_unitaire</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="prix_unitaire" name="prix_unitaire">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Qt_minimale</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Qt_minimale" name="quantite_minimale">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Qt_en_stock</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Qt_en_stock" name="quantite_en_stock">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">categorie</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="categorie" name="categorie">
  </div>
  <input type="submit" class="btn btn-info"name="submit" value="submit">
  <input type="submit" class="btn btn-danger"name="filter"  value="Produit en Rupture de Stock">
</form>
        </div>
        <div class="row">
                    <div class="col-sm-6">
                        <h2>Gestion de  <b>stock</b></h2><br>
                    </div>
                    <!-- <div align="center">  
                        <input type="text" name="search" id="search" class="form-control" />  
                   </div><br>  -->
                </div>
        
        <div class="table-wrapper" style="background-color:white;border-radius: 10px;padding:10px;">
            <div class="table-title">
                
            </div>
            <table class="table table-striped table-hover" id="myTable">
                <thead style="background-color:white;">
                    <tr>
                       
                        <th>Référence</th>
                        <th>libellé</th>
                        <th>prix_unitaire</th>
                        <th>quantite_minimale</th>
                        <th>quantite_en_stock</th>
                        <th>categorie</th>
                        <th>Actions</th>
                        </tr>
                </thead>
                <?php

$conn = mysqli_connect("localhost","root","","tangermarket");
              
              $sql = "SELECT * FROM produit";
              $result = $conn-> query($sql);

              if($result-> num_rows > 0){
                  while ($row = $result-> fetch_assoc()){
                      ?>
            <td ><?php echo $row["réference"] ?></td>
              <td ><?php echo $row["libelle"] ?></td>
              <td ><?php echo $row["prix_unitaire"] ?></td>
              <td ><?php echo $row["quantite_minimale"] ?></td>
              <td ><?php echo $row["quantite_en_stock"] ?></td>
              <td ><?php echo $row["categorie"] ?></td>
              <td>
              <a href='update.php?id=<?php echo$row["réference"]?>' class="edit" ><i class="material-icons" title="Edit">&#xE254;</i></a>

              <a href='delete.php?id=<?php echo$row["réference"]?>' class="delete" name="réference"><i class="material-icons" title="Delete" id="delete">&#xE872;</i></a></td>
              </tr>
              <?php
}
              }
              
              
              ?>


            </table>
            <div class="clearfix">
        </div>
    </div>
    </body>
</html>