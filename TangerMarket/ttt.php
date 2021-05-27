
<a href="" class="font-weight-bold px-3 pb-4 A">Add</a><a href="delete.php"<?=$rows['réference']?>" 
                   class="btn btn-danger">Delete</a>
                   <br>
        <div class="col-lg-4 ">
            <div class="card">
                <img src="<?= $rows['img'] ?>" class="img-fluid" alt="">
                <h5 class="font-weight-bold px-3"> <?= $rows['réference'] ?> </h5>
                <h5 class="font-weight-bold px-3"><?= $rows['categorie'] ?> </h5>
                <div class="d-flex">
                     <a href="delete.php"<?=$rows['réference']?>" 
                   class="btn btn-danger">Delete</a>
                    <a href="" class="font-weight-bold px-3 pb-4 A">Add</a>
                </div>


            </div>
        </div>
        quantite_en_stock