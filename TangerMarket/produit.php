<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<?php

$conn = mysqli_connect("localhost","root","","tangermarket");
$produit = $_GET['produit'];
$sql = "SELECT *  FROM produit WHERE  categorie='$produit'";
$res = mysqli_query($conn, $sql);

?>

<?php if (mysqli_num_rows($res)) { ?>


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
       
        <div class="table-wrapper" style="background-color:white;border-radius: 10px;padding:10px;">
            <div class="table-title">
                
            </div>
            <table class="table table-striped table-hover" id="myTable">
                <thead style="background-color:dark;">
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
               <tbody>
         <?php
         $i = 0;
            while ($rows = mysqli_fetch_assoc($res)) {
           $i++;
          ?>
                
            <td ><?= $rows['réference'] ?></td>
              <td ><?= $rows['libelle'] ?></td>
              <td ><?= $rows['prix_unitaire'] ?></td>
              <td ><?= $rows['quantite_minimale'] ?></td>
              <td ><?= $rows['quantite_en_stock'] ?></td>
              <td ><?= $rows['categorie'] ?></td>
              <td>
              <a href='update.php?id=<?php echo$row["réference"]?>' class="edit" ><i class="material-icons" title="Edit">&#xE254;</i></a>

              <a href='delete.php?id=<?php echo$row["réference"]?>' class="delete" name="réference"><i class="material-icons" title="Delete" id="delete">&#xE872;</i></a></td>
              </tr>
              

         <?php } ?>
         </tbody>
            </table>
         </div>
        
<?php } ?>




   