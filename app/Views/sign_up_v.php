<?= $this->extend('template'); ?>


    <?= $this->section('content'); ?>
    <section id="signUp">
    	<?php if (isset($validation)){ ?>
	    	<div class="boxsignup" style="background-color: red;">
	    	<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-body">
				      	<h3 style="text-align: center;">Selamat Anda Berhasil Mendaftar!</h3>
				      	<img src="/assets/images/daftar.png" class="daftarimg">
				      </div>
				      <div style="padding: 2px; ">
				        <button type="submit" class="btn hal-awal">
				        	<a href="<?php echo base_url('Index/index'); ?>">
				        	Halaman Awal</a>
				        </button>
				        <button type="submit" class="btn materi"><a href="<?php echo base_url('Materi/index'); ?>">Materi</a></button>
				      </div>
				    </div>
				  </div>
				</div>	
 			<?php } else{ ?>
 			<div class="boxsignup">
    		<?php } ?>
    	
    		<h2>SIGN UP</h2>
    		<br>
    		<form action="<?php echo base_url('Form/register') ?>" method="POST" >
    			<div class="form-group">
				    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email">
			  	</div>
			  	<div class="row">
				    <div class="col">
				      <input type="text" class="form-control" placeholder="First name" name="nama_depan">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" placeholder="Last name" name="nama_belakang">
				    </div>
			  	</div>
			  	<br>
			  	<div class="row">
				    <div class="col">
				      <input type="text" class="form-control" placeholder="Username" name="username">
				    </div>&nbsp &nbsp &nbsp &nbsp
				    <div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="laki-laki">
					  <label class="form-check-label" for="inlineCheckbox1">Laki-Laki &nbsp &nbsp</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="perempuan">
					  <label class="form-check-label" for="inlineCheckbox2">Perempuan &nbsp &nbsp &nbsp &nbsp</label>
					</div>
			  	</div>
			  	<br>
			  	<div class="row">
				    <div class="col">
				      <input type="password" class="form-control" placeholder="Password" name="password">
				    </div>
				    <div class="col">
				      <input type="password" class="form-control" placeholder="Password Confirmation" name="password_conf">
				    </div>
			  	</div>
			  	<br>
			  	<!-- Button trigger modal -->
			  	<button type="submit" class="btndaftar" data-toggle="modal" data-target="#exampleModal" name="daftar"><a href=""></a>DAFTAR</button>
			  	
			</form>
			<?php if (isset($validation)): ?>
					<div class="simg err">
		            	<div class="col-12">
	            		<img src="/assets/images/error.png" style="width: 300px;">
	            		<h3>ERROR!ERROR!ERROR!ERROR!</h3>
			              <div class="alert alert-danger" role="alert">
			                <?= $validation->listErrors() ?>
			              </div>
		            	</div>
		            </div>
	          	<?php endif; ?>
			<img src="/assets/images/signup.png" class="simg pic">

    	</div>
    </section>
    <?= $this->endSection(); ?>