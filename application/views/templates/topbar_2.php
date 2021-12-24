<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title><?php echo $judul?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" aria-current="page" href="<?= base_url('home'); ?>">Unlist3</a>
    <a class="navbar-brand" aria-current="page" href="<?= base_url('Profile_Adm'); ?>">Profile_adm</a>
    <a class="navbar-brand" aria-current="page" href="<?= base_url('Feedback_Adm'); ?>">Feedback</a>
    <a class="navbar-brand" aria-current="page" href="<?= base_url('MoreApps_Adm'); ?>">More Apps</a>
    <a class="navbar-brand" aria-current="page" href="<?= base_url('Member_Adm'); ?>">Member</a>
    <!--<a class="navbar-brand" aria-current="page" href="<?= base_url('/'); ?>">Logout</a>-->
    
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="find">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    
    <!--<form>
      <input type="text" name="find">
      <button type="submit">Cari</button>
    </form>-->

    <!--<div class="navbar-form navbar-right">
      <?php echo form_open('moreapps/search') ?>
      <input type="text" name="keyword" class="form-control" placeholder="Search">
      <button type="submit" class="btn btn-success">Cari</button>
      <?php echo form_close() ?>
    </div>-->
    

    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
  
  </div>
</nav>
<br>
