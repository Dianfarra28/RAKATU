 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- W3School CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- NAV -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

   <!--  CDN Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title><?= $title; ?></title>
    </head>
    <body>
      <section id="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

          <div  class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <?php if(session()->get('logged_in')){ ?>  
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <a class="navbar-brand" href="<?php echo base_url('Dashboard'); ?>"><h5>RAKATU</h5></a>
                    </ul>
                <div>
                <ul class="nav justify-content-end">
                      <li class="<?php if(($title == 'Home | RAKATU') or ($title =='Welcome | RAKATU')) { echo 'active'; } ?>">
                        <a class="nav-link" href="<?php echo base_url('Dashboard'); ?>">Home</a>
                      </li>
                      <li class="<?php if($title == 'Materi') { echo 'nav-item dropdown active'; } else{echo 'nav-item dropdown'; }?>">
                      <a class="nav-link" href="<?php echo base_url('Dashboard/menuu'); ?>">Materi</a>
                        
                      </li>
                      <li class="<?php if($title == 'FlashCard | RAKATU') { echo 'active'; } ?>">
                        <a class="nav-link" href="<?php echo base_url('FlashCard/kartu'); ?>">FlashCard</a>
                      </li>
                      <li class="<?php if($title == 'Ujian | RAKATU') { echo 'active'; } ?>">
                        <a class="nav-link" href="<?php echo base_url('Dashboard/ujian'); ?>">Ujian</a>
                      </li>
                      <li class="<?php if($title == 'Log In | RAKATU' or $title == 'Sign Up | RAKATU') { echo 'active'; } ?>">
                      <li class="<?php if($title == 'About Us | RAKATU') { echo 'active'; } ?>">
                        <a class="nav-link" href="<?php echo base_url('Dashboard/kontak_user'); ?>">About Us</a>
                      </li>
                      <div class="dripdown">
                        <button class="dropbtn in"><img src="<?php echo $foto ?>" style="max-width: 30px; max-height: 30px; border-radius: 50%;">&nbsp &nbsp<?php echo $namadepan ?></button>
                        <div class="dropdown-content bar">
                          <a href="<?php echo base_url('Dashboard/ProfilUser'); ?>"><i class="fas fa-user-cog"></i> &nbsp  &nbsp  Profil</a>
                          <a href="<?php echo base_url('Login/logout'); ?>"><i class="fas fa-sign-out-alt"></i> &nbsp &nbsp &nbsp Log Out</a>
                        </div>
                      </div>
                  </li>
                  <?php } else { ?>
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <a class="navbar-brand" href="<?php echo base_url('Index'); ?>"><h5>RAKATU</h5></a>
                  </ul>
                  <div>
                <ul class="nav justify-content-end">
                  <li class="<?php if(($title == 'Home | RAKATU') or ($title =='Welcome | RAKATU')) { echo 'active'; } ?>">
                    <a class="nav-link" href="<?php echo base_url('Index'); ?>">Home</a>
                  </li>
                  <li class="<?php if($title == 'Log In | RAKATU' or $title == 'Sign Up | RAKATU') { echo 'active'; } ?>">
                      <div class="dripdown">
                        <button class="dropbtn out">Log In</button>
                        <div class="dropdown-content bar">
                          <a href="<?php echo base_url('Index/loginadmin'); ?>"><i class="fas fa-user-check fa-1.5x"></i> &nbsp Log In Admin</a>
                          <a href="<?php echo base_url('Index/loginuser'); ?>"><i class="fas fa-user fa-1.5x"></i> &nbsp  &nbsp  Log In User</a>
                          <a href="<?php echo base_url('Index/signup'); ?>"><i class="fas fa-user-plus fa-1.5x"></i> &nbsp Sign Up Akun</a>
                        </div>
                      </div>
                  </li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    </section>



    <?= $this->renderSection('content'); ?>    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script type="text/javascript">
      $(document).on('click','ul li', function(){
      $(this).addClass('active').siblings().removeClass('active')
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </script>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="assets/js/main.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>