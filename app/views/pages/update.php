<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- </form >
<form action="<?php echo URLROOT ?>/Pages/updateid/<?php echo $data->id   ?>"  class="d-flex align-items-center flex-column" method="post">
<div class="input-group "   style="width:50%">
  <input type="text" value="<?php echo($data->nameart); ?> "  name="nameart" class="form-control" style="height:5em;width:20px; margin:2em;" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <input type="text" value="<?php echo($data->art); ?> " name="art" class="form-control" style="height:5em;width:20px; margin:2em;" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <input type="text" value="<?php echo($data->description); ?>"  name="description" class="form-control" style="height:5em;width:20px; margin:2em;" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
   </div> -->




   <!-- <form action="<?php echo URLROOT ?>/Pages/updateid/<?php echo $data->id   ?>" method="post">
<div style="d-flex justify-content-center">
  <input type=" textarea" value="<?php echo($data->nameart); ?> " name="nameart">
  <input type=" textarea" value="<?php echo($data->art); ?> " name="art">
  <input type=" textarea" value="<?php echo($data->description); ?> " name="description">
  <button type="submit">Update</button>
  <button type="submit">Close</button>

</div> -->

   <form action="<?php echo URLROOT ?>/Pages/updateid/<?php echo $data->id   ?>" method="post">
   <div class="mb-3 d-flex flex-column  align-items-center " style=" margin:3em; "  >
  <label for="exampleFormControlInput1" class="form-label">Name of Blog</label>
  <input type="text"  name="nameart"  value="<?php echo($data->nameart); ?> " class="form-control " style="width: 50%;" placeholder="Enter Name blog">
</div>
<div class="mb-3  d-flex flex-column  align-items-center"  style=" margin:3em; ">
  <label for="exampleFormControlTextarea1" class="form-label">Your Blog</label>
  <textarea value="" class="form-control" name="art"   style="width: 50%;" id="exampleFormControlTextarea1" rows="3"><?php echo($data->art); ?></textarea>
</div>
<div class="mb-3  d-flex flex-column  align-items-center"  style=" margin:3em; " >
  <label for="exampleFormControlTextarea1" class="form-label">description</label>
  <textarea class="form-control"  name="description" value="<?php echo($data->description); ?> "  style="width: 50%;" id="exampleFormControlTextarea1" rows="3"><?php echo($data->description); ?></textarea>
</div>
 
  <div class="input-group-append d-flex justify-content-center">
    <button class="btn btn-secondary" type="submit" style="margin:1em">Close</button>
    <button class="btn btn-success"   type="submit" style="margin:1em">Update</button>
  </div> 
  </form>
<?php require APPROOT . '/views/inc/footer.php'; ?>