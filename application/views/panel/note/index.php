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


<div id="content" class="content">
  <div class="row">
   <!-- begin col-12 -->
   <a href="<?php echo base_url('note/createListNotes/'); ?>" class="btn btn-xs btn-success pull-right" style="margin-left: 5px;">Tambah Notes</a>
   <br>
   <br>
   <div class="col-md-12">
    <!-- begin panel -->
    




  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tittle</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Created Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
  	<?php foreach ($listNotes as $key): ?> 
    <tr>
      <th scope="row">1</th>
      <td><?php echo $key->judul_note; ?></td>
      <td><?php echo $key->deskripsi; ?></td>
      <td><?php echo $key->created_time; ?></td>
      <td>
      	<a href="<?php echo base_url('note/updateListNotes/'.$key->id_note); ?>" class="btn btn-xs btn-success pull-right">edit</a>
        <a onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $key->judul_note;?> ? Data yang dihapus tidak dapat dikembalikan dan akan berpengaruh ke data yang berhubungan')" href="<?php echo base_url('note/deleteListNotes/?id='.$key->id_note);?>" class="btn btn-xs btn-danger" title="Hapus data">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    
    <!-- end begin col-12 -->
  </div>
  <!-- end row -->
</div>
</body>
</html>


