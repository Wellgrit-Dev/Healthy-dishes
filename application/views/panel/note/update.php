<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/'); ?>style.css>
  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>../assets/fonts/fontawesome/css/all.min">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>../assets/fonts/fontawesome/css/stylehome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="Website Icon" type="png"
    href="<?php echo base_url('assets/'); ?>./assets/Logo Healthy Dishes.png">

  <title>Note - Wellgrite</title>
</head>

<body>

  <nav class="navbar navbar-light" style="background-color: #E6FFE6;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url('assets/'); ?>./assets/Logo Healthy Dishes.png" alt="bootstrap" width="100" height="">
      </a>
      <a href="<?php echo base_url('auth/logout/'); ?>" class="btn btn-xs btn-success pull-right" style="margin-left: 5px;">Log Out</a>
    </div>
  </nav>



<?php echo $this->session->flashdata('notif'); ?>
        <?php foreach($notes as $key): ?>
           <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/note/updateListNotes/do_update/'.$id_note);?>"  enctype="multipart/form-data">
           <input type="hidden" id="id_notes" name="id_notes" value="<?php echo $key->id_note; ?>">
           	<div class="col-md-12 bg-red">
              
              <hr>
            </div>
            <div class="col-md-12">

            <br>
              <div class="form-group">
                <label class="col-md-2 control-label">Judul Notes</label>
                <div class="col-md-10">
                    <input type="text" name="judul_note" class="form-control" placeholder="Judul Notes" required value="<?php echo $key->judul_note; ?>">
                </div>
              </div>

              <div class="form-group">
                    <label class="col-md-2 control-label">Deskripsi Notes</label>
                    <div class="col-md-10">
                        <input type="text" name="deskripsi" class="form-control" placeholder="Judul Notes" required value="<?php echo $key->deskripsi; ?>">
                    </div>
                </div>

             <hr />
            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" class="btn btn-sm btn-success  pull-right" style="margin-left:10px">Simpan</button>
                <a href="<?php echo base_url('index.php/note/index/'); ?>" class="btn btn-sm btn-danger pull-right">Batal</a>
              </div>
            </div>

            </div>
           </form>
        </div>
        <?php endforeach; ?>