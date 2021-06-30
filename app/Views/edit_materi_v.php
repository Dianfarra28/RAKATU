<?= $this->extend('template_admin'); ?>


    <?= $this->section('content'); ?>
    <script src="<?base_url('assets/ckeditor/ckeditor.js'); ?>"> </script>
    <section id="edit_m">
    <img class="img_edit" src="/assets/images/materi_edit.png">
    <h1 style='padding-top: 30px; text-align:center;'>Edit Isi Materi</h1>
    <div class="container_e">
    <h3><?= $materi['judul_m']; ?></h3>
    <?php if(session()->getFlashdata('info')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('info') ?></div>
          <?php endif;?>
          <?php if(session()->getFlashdata('failed')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('failed') ?></div>
          <?php endif;?>
    <form action="/Dashboard/update/<?= $materi['id_m']; ?>" method="post">
            <textarea name="isi_m" id="editor1" rows="10" cols="80" style="width:870px; min-height:300px;">
            <?= $materi['isi_m']; ?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            <br>
    <button class="btn"><a href="" ></a>Ubah</button>
    </form>
    </div>
    </section>
    

    <script>
        CKEDITOR.replace('isi_materi');
    </script>
   <?= $this->endSection(); ?>
 