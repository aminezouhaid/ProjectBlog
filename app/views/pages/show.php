<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="d-flex justify-content-center "  >
<div style="width:800px; margin:10px; background-color:#d7ccc8"  class="border border-info">
<div style="width:80%; margin:10px;  " class="d-flex  flex-column align-items-center"  >
     <h1><?php print_r($data->nameart) ;  ?></h1>
   
    <p class="card-text"> <?php print_r($data->art) ; ?></p>
     <p><?php print_r($data->description) ; ?></p>
     <img  style="width:18em" class="card-img-top" src="<?php echo URLROOT; ?>/img/mm.png"" alt="Card image cap">
      
      </div>
</div>
</div>

<div  style="height:100px; " class="d-flex justify-content-center">
<a href="<?php echo URLROOT; ?>/Pages/user" style="margin:10px"><button type="button" class="btn btn-secondary">Back</button></a>
<a href="<?php echo URLROOT ?>/Pages/update/<?php echo $data->id   ?>" style="margin:10px"> <button type="button" class="btn btn-success"> Update</button></a>
<a href="<?php echo URLROOT ?>/Pages/delete/<?php echo $data->id   ?>" style="margin:10px"><button type="submit" class="btn btn-danger">Delete</button></a>





</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>
