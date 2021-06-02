<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  <p><?php echo $data['description']; ?></p>


  <div style="height:40rem; "  class="d-flex flex-column   d-flex align-items-center">
  <img  style=" width:80%; height:70%" src="<?php echo URLROOT; ?>/img/pp.png" alt="">
  <h1  style=" color:#c3ab79;" >​Bienvenue chez ktabek</h1>
  <h6>L'excellence, notre engagement</h6>
</div>



  <div style="height:400px; width:100%; margin:60px; "  class="d-flex justify-content-center  d-flex align-items-center ">

<div class="d-flex flex-column  d-flex justify-content-center  d-flex align-items-center"style="width:40%; height: 100%; background-color:#e6e6e6;" >
  <h3 style=" height:10%">Notre Histoir </h3>
<p style="width:50% ; height:60%"  >​Depuis que nous avons ouvert nos portes en 2000, ktabek satisfait ses clients grâce à ses services exceptionnels. Notre désir d'atteindre l'excellence a fait de nous ce que nous sommes aujourd'hui, et nous a permis d'évoluer. Contactez-nous dès aujourd'hui pour obtenir plus d'informations à propos de nos produits et services.</p>
  <button  style="width:40% ; height:10%; color: white; background-color:black" >En savoir plus</button>
</div>

 <div style="height:100%; width:40%">
 <img   style="height:100%; width:100%" src="<?php echo URLROOT; ?>/img/nn.png" alt="">
</div>
</div>

  <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>