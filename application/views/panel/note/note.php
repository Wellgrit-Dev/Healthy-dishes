<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/'); ?>style.css>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>../assets/fonts/fontawesome/css/all.min">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>../assets/fonts/fontawesome/css/stylehome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="Website Icon" type="png"
    href="<?php echo base_url('assets/'); ?>./assets/Logo Healthy Dishes.png">

    <title>Healthy Dishes</title>
  </head>
  <body>
  <nav class="navbar navbar-light" style="background-color: #E6FFE6;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url('assets/'); ?>./assets/Logo Healthy Dishes.png" alt="bootstrap" width="100" height="">
      </a>
      <!-- Add your button here -->
      <!-- <button class="btn btn-primary" style="background-color: #039809;" onclick="account()">Account</button> -->
      <a href="<?php echo base_url('user/updateUser'); ?>"><i class="">Account</i></a>

    </div>
    
  </nav>

  <div id="container">

    <div id="list-header">
        <div id="addNoteDiv" onclick="popup()">
            <i class="fa-fluid fa-plus"></i>
        </div>
        <div class="blankDiv"></div>
        <div class="blankDiv"></div>
    </div>
    
    <div id="list-container">
        <ul id="notes-list"></ul>
    </div>
</div>
<script src="<?php echo base_url('assets/'); ?>./script.js"></script>
</body>
</html>
