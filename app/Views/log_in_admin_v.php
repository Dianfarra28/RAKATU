<?= $this->extend('template_admin'); ?>


    <?= $this->section('content'); ?>

  <!--  section login -->
  <section id="logIn">
    <div class="cont">
      <div class="row">
        <div class="boxlogin2"></div>
        <div class="boxlogin">
          <br>
          <h2>LOG IN ADMIN</h2>
          <!-- FORM -->
          <form action="/Login/authadmin" method="post">
             <?php if(session()->getFlashdata('success')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
              <?php endif;?>

              <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
              <?php endif;?>
              
              <div class="form-group uname">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username">
              </div>
              <div class="form-group pwd">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                <!-- <p><a href="">lupa password?</a></p> -->
              </div>
              <button type="submit" class="btn1">LOG IN</button>
            </form>
          <!-- END OF FORM -->
          <div class="kanan">
            <img class="glogin2" src="/assets/images/admin_login.png" style="position: absolute; width: 580px; left:-50px; z-index: 0; top: 30px;">
          </div>    
      </div>
    </div>
  </section>
   <?= $this->endSection(); ?>
  