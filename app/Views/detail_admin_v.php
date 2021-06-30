<?= $this->extend('template_admin'); ?>


    <?= $this->section('content'); ?>

  <!--  section detail -->
  <section id="detail">
  <div class="detail">
      <img class="img_dm" src="/assets/images/detail_materi.png">
          <div class="card_sm" style="width: 18rem;">
              <div class="card-header">
              Sub Materi
              </div>
          <div id="list-example" class="list-group">
              <?php foreach ($results as $sm) : ?>
                <a class="list-group-item list-group-item-action" href="#<?= $sm->judul_sm; ?>"><?= $sm->judul_sm; ?></a>
                <?php endforeach; ?>
          </div>
          </div>
          <div class="container_d" data-aos="fade-up">
          <div class="row">
              <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="/assets/images/materi/<?= $materi['gambar_m'] ?>" class="img-fluid" alt="" style="float: right;">
                <p>Referensi :</p>
                <font size="2"color="blue"><?= $materi['referensi']; ?> </font><br> 
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3><?= $materi['judul_m']; ?></h3>
                <p class="font-italic" style="text-align: justify; ">
                <?= $materi['isi_m']; ?>  
              </div>
          </div>
          <a href= "/Dashboard/edit/<?= $materi['id_m'];?>" class="btn btn-success">Edit</a>
          </div>
          <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
              <?php foreach ($results as $sm) : ?>
              <div class="container_d" data-aos="fade-up">
              <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                  <img src="/assets/images/materi/<?= $sm->gambar_sm ?>" class="img-fluid" alt="" style="float: right;">                 
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h4 id="<?= $sm->judul_sm; ?>"><?= $sm->judul_sm; ?></h4>
                  <p class="font-italic" style="text-align: justify; ">
                  <?= $sm->isi_sm; ?>  </p> 
                </div>
              </div>
              <a href= "/Dashboard/edit_sub/<?= $sm->id_sm;?>" class="btn btn-success" >Edit</a>
              </div>
              <?php endforeach; ?>
          </div>
          
      <br>
      <br>
      <br>
      <br>              
      <button class="btn_d"><a href= '/Dashboard/ujian_admin'>Ujian</a></button>

  </div>
  </section><!-- End About Section -->
            
   <?= $this->endSection(); ?>
 