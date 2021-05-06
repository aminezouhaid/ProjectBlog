<?php require APPROOT . '/views/inc/header.php'; ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- JavaScript Bundle with Popper -->
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<div class="d-flex justify-content-center" style="margin: 5em;">
<div class="card" style="width: 20rem;  height: 25rem;">
  <img class="card-img-top"  style="width:100%;  height:50%" src="<?php echo URLROOT; ?>/img/aaa.png" alt="Card image cap">
  <div class="card-body" style="width:100%;  height:50%">
    <p class="card-text" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <button>more</button>
</div >

<div class="card" style="width: 20rem;  height: 25rem; ">
<div class="card-body" style="width:100%;  height:50%">
    <p class="card-text">Some quick example textlgujujjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <img class="card-img-top" style="width:100%;  height:50%" src="<?php echo URLROOT; ?>/img/aaa.png"  alt="Card image cap">
  
  <button>more</button>
</div>
<div class="card" style="width: 20rem;   height: 25rem;" >
  <img class="card-img-top"  style="width:100%;  height:50%" src="<?php echo URLROOT; ?>/img/aaa.png"  alt="Card image cap" />
  <!-- <img src="" alt=""> -->
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <button type="submit" name="btn">More</button>
</div>

</div>

<div class="d-flex justify-content-center">
<form >
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputEmail4">Nom</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-8">
      <label for="inputPassword4">E-mail</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group col-md-10">
    <label for="inputAddress"> Objet</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group col-md-10">
    <label for="inputAddress2">Message</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
 
  <button type="submit" class="btn btn-primary">Envoye</button>
</form>
</div>
</body>
</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>