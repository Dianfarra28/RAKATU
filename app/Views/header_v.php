 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">

    <title>Rakatu</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

          <div  class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <a class="navbar-brand" href="#"><h5>RAKATU</h5></a>
            </ul>
            <div id="navi">
                <ul class="nav justify-content-end">
                  <li  class="active">
                    <a class="nav-link" href="<?php echo base_url('Index'); ?>">Home</a>
                  </li>
                  <li>
                    <a class="nav-link" href="materi.php">Materi</a>
                  </li>
                  <li>
                    <a class="nav-link" href="<?php echo base_url('FlashCard/kartu'); ?>">FlashCard</a>
                  </li>
                  <li>
                    <a class="nav-link" href="<?php echo base_url('Index/editProfilUser'); ?>">Ujian</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>