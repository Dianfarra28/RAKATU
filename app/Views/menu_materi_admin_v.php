<?= $this->extend('template_admin'); ?>


<?= $this->section('content'); ?>
<section class="materi">
  <div class="notif" style="width: 1200px; margin: auto; margin-top: 30px;">
          <?php if(session()->getFlashdata('info')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('info') ?></div>
          <?php endif;?>
          <?php if(session()->getFlashdata('failed')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('failed') ?></div>
          <?php endif;?>
  </div>
        <div class="menu">
                <h1>PILIH MATERIMU</h1> <br><br>
                <div id="slider">
                  <input type="radio" name="slider" id="slide1" checked>
                  <input type="radio" name="slider" id="slide2">
                  <div id="slides">
                      <div id="overflow">
                        <div class="inner">
                            <?php foreach ($materi as $m) : ?>
                              <div class="slide slide_1">
                              <a href="detail/<?= $m['id_m']; ?>">
                              <div class="slide-content">
                                  <h2 ><?= $m['judul_m']; ?></h2>
                              </div>
                              </a>
                              </div>
                            <?php endforeach; ?>
                        </div>
                      </div>
                  </div>
                  <div id="controls">
                      <label for="slide1"></label>
                      <label for="slide2"></label>
                  </div>
                  <div id="bullets">
                      <label for="slide1"></label>
                      <label for="slide2"></label>
                  </div>
                </div>
                <img src="/assets/images/menu_materi.png" class="doodle_materi">
        </div>
  </section>
            
<?= $this->endSection(); ?>
  