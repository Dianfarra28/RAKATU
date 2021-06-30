<?= $this->extend('template'); ?>


<?= $this->section('content'); ?>
<!-- Bootstrap CSS -->

        <div id="home">
            <img src="/assets/images/materi_home.png" class="doodle_home">
            <div class="buttons">
                <button class="btn_m"><a href="<?php echo base_url('Dashboard/menuu'); ?>">MATERI</a></button>
                <button class="btn_fc"><a href="<?php echo base_url('FlashCard/kartu'); ?>">FLASH CARD </a></button>
                <button class="btn_ls"><a href="<?php echo base_url('Dashboard/ujian'); ?>">UJIAN</a></button>           
                </div>
        </div>


<?= $this->endSection(); ?>