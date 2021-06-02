<?php require APPROOT . '/views/inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- JavaScript Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="d-flex justify-content-center"><img style="width:100px;  margin: 40px" src="<?php echo URLROOT; ?>/img/aaa.png" alt="">
  </div>
 
<div style="height:40rem; "  class="d-flex flex-column   d-flex align-items-center">
  <img  style=" width:80%; height:70%" src="<?php echo URLROOT; ?>/img/pp.png" alt="">
  <h1  style=" color:#c3ab79;" >​Bienvenue chez ktabek</h1>
  <h6>L'excellence, notre engagement</h6>
</div>



<div style="height: 500px; width:100%; margin:60px; "  class="d-flex justify-content-center  d-flex align-items-center ">

<div class="d-flex flex-column  d-flex justify-content-center  d-flex align-items-center"style="width:40%; height:100%; background-color:#e6e6e6;" >
  <h3 style=" height:10%">Notre Histoir </h3>
<p style="width:50% ; height:60%"  >​Depuis que nous avons ouvert nos portes en 2000, ktabek satisfait ses clients grâce à ses services exceptionnels. Notre désir d'atteindre l'excellence a fait de nous ce que nous sommes aujourd'hui, et nous a permis d'évoluer. Contactez-nous dès aujourd'hui pour obtenir plus d'informations à propos de nos produits et services.</p>
  <button  style="width:40% ; height:10%; color: white; background-color:black" >En savoir plus</button>
</div>

 <div style="height:100%; width:40%">
 <img   style="height:100%; width:100%" src="<?php echo URLROOT; ?>/img/nn.png" alt="">
</div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Creat Your Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   <input style="height:200px;  overflow: scroll; "   type="textarea">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div  class="d-flex flex-column   d-flex align-items-center" >
  <h2 style=" color:#c3ab79;">Articles</h2>
  <p>Voir out les articles  postuler </p>

</div>
<?php foreach($data as $value): ?>
  <div  class="d-flex   flex-wrap justify-content-center  "  >
  <div class="card-body  d-flex  justify-content-center flex-column align-items-center  rounded" style=" background-color:#d7ccc8; margin:2em; width:300em;" >
    <h1 class="card-title"><?php print_r($value->nameart) ; ?></h1>
    <p><?php print_r($value->art) ; ?></p>
    <p><?php print_r($value->description) ; ?></p>
       <img  style="width:18em" class="card-img-top" src="<?php echo URLROOT; ?>/img/mm.png"" alt="Card image cap">
  
  </div>

</div>

<?php endforeach; ?>

  <div class="d-flex justify-content-center d-flex align-items-center">
    <form>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="inputEmail4">Nom</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Saisissez votre nom">
        </div>
        <div class="form-group col-md-8">
          <label for="inputPassword4">E-mail</label>
          <input type="email" class="form-control" id="inputPassword4" placeholder="Saisissez votre e-mail">
        </div>
      </div>
  <div class="form-group col-md-10">
        <label for="inputAddress"> Objet</label>
        <input type="textarea" style="height:80px" class="form-control" id="inputAddress" placeholder="Saisissez l'objet">
      </div>
  <div class="form-group col-md-10">
        <label for="inputAddress2" >Message</label>
        <input type="textarea" style="height:120px"class="form-control" id="inputAddress2" placeholder="Rédigez votre message ici...">
      </div>

      <button type="submit" class="btn btn-primary">Envoye</button>
    </form>
  </div>


k  <script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>
</body>

</html>

<?php require APPROOT . '/views/inc/footer.php'; ?> 