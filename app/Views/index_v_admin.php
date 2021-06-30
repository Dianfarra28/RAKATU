<?= $this->extend('template_admin'); ?>


    <?= $this->section('content'); ?>

    <!--     hero section -->
    <section id="hero">
        <div class="hero-box">
            <div class="welcome">
                <h1 style="text-transform: capitalize;">Selamat Datang <br>
                Admin <?= $namadepan;?>
                </h1>
                <!-- <p>RAKATU adalah sistem pembelajaran jarak jauh yang memudahakn siswa dalam belajar. Materi RAKATU mencakup Sistem Rangka Tubuh tingkat Sekolah Menengah Pertama. Rakatu mengangkat tema "learning is fun", oleh sebab itu RAKATU memiliki fitur-fitur yang menyenangkan seperti menyediakan flash card untuk memudahkan dalam meningat materi. Selamat Belajar :)</p><br> -->
                <p> Anda Berada pada halaman Admin. Pada Halaman Ini anda akan bisa mengubah isi materi dan mengedit beberapa fiture lain</p>
                <button type="button" class="btn">
                    <?php if(session()->get('logged_in')){ ?> 
                    <a href="<?php echo base_url('Dashboard/menuadmin'); ?>">
                        MULAI
                    <?php } ?>
                </button>
            </div>
            <img class="welcome_img" src="/assets/images/welcome.png">
        </div>
    </section>
    <?= $this->endSection(); ?>