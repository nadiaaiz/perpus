<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Crud Codeigniter</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>
  <body>

    <div class="container" style="text-align: center;">
      <h1>Crud image Codeigniter</h1>
      <hr>
     
    </div>

    <div class="container" style="text-align: center;">
   
      <form action="<?=base_url()?>index.php/home/index" method="get">
        <input type="text" name="cari" class="form-control" placeholder="leader">
        <input type="submit" value="Search" class="form-control btn btn-success">
      </form>
     
    </div>
    <br>
    <div class="container" style="text-align: center;">
    <div class="alert alert-warning" role="alert">
  This is a warning alert with <a href="<?=base_url()?>index.php/home/tambah" class="alert-link">an example link</a>. Give it a click if you like.
</div>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
