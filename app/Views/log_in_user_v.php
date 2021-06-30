<?= $this->extend('template'); ?>


    <?= $this->section('content'); ?>

  <!--  section login -->
  <section id="logIn">
    <div class="cont">
      <div class="row">
        <div class="boxlogin2"></div>
        <div class="boxlogin">
          <br>
          <h2>LOG IN USER</h2>
          <!-- FORM -->
          <form action="/Login/auth" method="post">
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
                <p><a href="/Index/signup" style="text-decoration: underline;">lupa password?</a></p>
              </div>
              <button type="submit" class="btn1">LOG IN</button>
            </form>
          <!-- END OF FORM -->
          <div class="kanan">
            <h1 style="font-size: 70px; text-align: right; margin-top: -50px;">BELUM <br>PUNYA AKUN?</h1>
            <button type="button" class="btn2"><a href="<?php echo base_url('Index/signup'); ?>">DAFTAR AKUN</a></button>
            <img class="glogin" src="/assets/images/user_login.png" style="width: 350px; left: 30px; top: 240px;">
          </div>    
      </div>
    </div>
  </section>
   <?= $this->endSection(); ?>
  