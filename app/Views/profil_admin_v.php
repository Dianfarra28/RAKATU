<?= $this->extend('template_admin'); ?>


    <?= $this->section('content'); ?>
  <!--  section login -->
  <section id="editProfil">
    <div class="container">
      <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
      <?php endif;?>
      <div class="row">
        <div class="col-md-4">
          <div >
            <img src="<?php echo $foto ?>" class="profil">
          </div><br>
          <!--<button type="button" class="btnedit"><a href=""></a>Edit Profile</button> -->
          <button class="open-button" onclick="openForm()"><i class="fas fa-pencil-alt"></i>&nbsp Ubah Foto Profil</button>

            <div class="form-popup2" id="myForm">
              <form action="process_admin" class="form-container" method="post" enctype="multipart/form-data" >
                <button type="button" class="btn cancel2" onclick="closeForm()">Close</button>
                  <div class="row">
                    <div class="choose">  
                      <input type="file" name="file_upload" />
                    </div>
                    <div class="upld">
                      <input type="submit" class="btnupload">
                    </div>
                  </div>
              </form>
            </div>


        </div>
        <div class="col-2s ">
          <?php if(session()->getFlashdata('success')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
              <?php endif;?>
          <?php if(session()->getFlashdata('failed')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('failed') ?></div>
              <?php endif;?>    
        <form action="editProfilAdmin" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="<?php echo $email; ?>" readonly>
          </div>
          <div class="row">
            <div class="col">
              <label for="exampleInputEmail1">Nama Depan</label>
              <input type="text" class="form-control" placeholder="First name" value="<?php echo $namadepan; ?>" readonly>
            </div>
            <div class="col">
              <label for="exampleInputEmail1">Nama Belakang</label>
              <input type="text" class="form-control" placeholder="Last name" value="<?php echo $namablkg; ?>" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" placeholder="Username" value="<?php echo $id_admin; ?>" readonly>
            </div>
             &nbsp  &nbsp
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="exampleRadios1"  value="laki-laki" name="jeniskelamin" <?php if($jeniskelamin =="laki-laki") {echo 'checked';} ?> readonly>
                <label class="form-check-label" for="inlineCheckbox1">Laki-Laki &nbsp &nbsp &nbsp</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="perempuan" name="jeniskelamin" <?php if($jeniskelamin=="perempuan") {echo 'checked';} ?> readonly>
                <label class="form-check-label" for="inlineCheckbox2">Perempuan &nbsp &nbsp &nbsp &nbsp</label>
              </div>
          </div>
          <br>
          <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $password ; ?>" readonly>
          </div>
          <button class="btnn save"><a href=""></a>edit</button><br><br><br><br>
      </form>
        </div>
      </div>
    </div>

    <script>
      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
    </script>

  </section>
  <?= $this->endSection(); ?>
  