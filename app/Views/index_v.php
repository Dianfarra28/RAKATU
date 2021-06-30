<?= $this->extend('template'); ?>


    <?= $this->section('content'); ?>

    <!--     hero section -->
    <section id="hero">
        <div class="hero-box">
            <div class="welcome">
                <?php if(session()->get('logged_in')){ ?>
                    <h1 style=" text-transform: capitalize;">Selamat <br> Datang <?= $namadepan;?></h1>

                <?php } else { ?>
                <h1>Selamat Datang</h1>
                <?php ;} ?>
                <p>RAKATU adalah sistem pembelajaran jarak jauh yang memudahakn siswa dalam belajar. Materi RAKATU mencakup Sistem Rangka Tubuh tingkat Sekolah Menengah Pertama.</p><br>
                <button type="button" class="btn">
                    <?php if(session()->get('logged_in')){ ?> 
                    <a href="<?php echo base_url('Dashboard/menuuser'); ?>">
                        YUK MULAI!
                    <?php } else{ ?>
                    <a href="<?php echo base_url('Index/loginuser'); ?>">
                        LOG IN!
                    </a>
                    <?php } ?>
                </button>
            </div>
            <img class="welcome_img" src="/assets/images/welcome.png">
        </div>
    </section>
    <?= $this->endSection(); ?>