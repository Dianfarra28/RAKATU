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
              <form action="process_admin" class="form-container" method="post">
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

        <form action="updateadmin" method="post">
          <input type="hidden" name="id" value="$username"/>
          <?php if (isset($validation)): ?>
                    <div class="alert alert-danger" role="alert">
                      <?= $validation->listErrors() ?>
                    </div>
          <?php endif; ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="<?php echo $email ?>" name ="email">
          </div>
          <div class="row">
            <div class="col">
              <label for="exampleInputEmail1">Nama Depan</label>
              <input type="text" class="form-control" placeholder="First name" value="<?php echo $namadepan; ?>" name="namadepan">
            </div>
            <div class="col">
              <label for="exampleInputEmail1">Nama Belakang</label>
              <input type="text" class="form-control" placeholder="Last name" value="<?php echo $namablkg; ?>" name="namablkg">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="exampleInputEmail1">*Username Tidak Dapat Diubah</label>
              <input type="text" class="form-control" placeholder="Username" value="<?php echo $id_admin; ?>" name="username" readonly>
            </div>
             &nbsp  &nbsp
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="exampleRadios1" value="laki-laki" name="jeniskelamin" <?php if($jeniskelamin =="laki-laki") {echo 'checked';} ?>>
                <label class="form-check-label" for="inlineCheckbox1">Laki-Laki &nbsp &nbsp &nbsp</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="exampleRadios1" value="perempuan" name="jeniskelamin" <?php if($jeniskelamin=="perempuan") {echo 'checked';} ?> >
                <label class="form-check-label" for="inlineCheckbox2">Perempuan &nbsp &nbsp &nbsp &nbsp</label>
            </div>
          </div>
          <div class="row">
            <div class="col">
               <label for="exampleInputEmail1">Password Baru</label>
              <input type="password" class="form-control" placeholder="Password" name ="new_password">
            </div>
            <div class="col">
               <label for="exampleInputEmail1">Konfirmasi Password</label>
              <input type="password" class="form-control" placeholder="Password Confirmation" name="password_conf">
            </div>
          </div>
          <br>
          <div class="form-group">
             <label for="exampleInputEmail1">Konfirmasi Password Lama</label>
            <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Konfirmasi Password Lama" >
          </div>
          <button class="btnn save"><a href="" ></a>Simpan</button> &nbsp
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
