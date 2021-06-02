<?php require APPROOT . '/views/inc/header.php'; ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Document</title>
</head>
<body style="background-image: url('<?php echo URLROOT; ?>/img/11111.jpg');  background-size:cover;">>
<form style="height:600px; margin-left:500px;" class="d-flex flex-column  d-flex align-items-center d-flex justify-content-center " action="<?php echo URLROOT ?>/Pages/login " method="post">
  <div class="form-row"  >
    <div class="form-group col-md-8"    >
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control email" id="inputEmail4" placeholder="Email">
      <div class="alert alert-danger custom-alert" style="padding: 5px 10px;margin-bottom: 5px;display: none;">
                The email can't be Empty
      </div>
    </div>
    <div class="form-group col-md-8">
      <label for="inputPassword4">Password</label>
      <input type="password"  name="password" class="form-control password" id="inputPassword4" placeholder="Password">
      <div class="alert alert-danger custom-alert" style="padding: 5px 10px;margin-bottom: 5px;display: none;">
                The password can't be less than <strong>5</strong> charracters
      </div>
    </div>
  </div>
  
  <button style="background-color:#c3ab79; "   onclick="myFunction()" type="submit" class="btn btn-primary">Sign in</button>
</form>

</body>
</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>