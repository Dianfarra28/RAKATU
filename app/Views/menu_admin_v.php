<?= $this->extend('template_admin'); ?>


<?= $this->section('content'); ?>
<!-- Bootstrap CSS -->


        <div id="home">
            <img src="/assets/images/materi_home.png" class="doodle_home">
            <div class="buttons">
                <button class="btn_m"><a href="<?php echo base_url('Dashboard/menu'); ?>">MATERI</a></button>
                <button class="btn_fc"><a href="<?php echo base_url('FlashCard/kartuAdmin'); ?>">FLASH CARD </a></button>
                <button class="btn_ls"><a href="<?php echo base_url('Dashboard/ujian_admin'); ?>">UJIAN</a></button>           
                </div>
        </div>




<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- JavaScript; choose one of the two! -->
 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<?= $this->endSection(); ?>