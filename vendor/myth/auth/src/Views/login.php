<section id="logIn">
<div class="cont">
	<div class="row">
		<div class="boxlogin">
			<h1><?=lang('Auth.loginTitle')?></h1>
				<?= view('Myth\Auth\Views\_message_block') ?>

				<form action="<?= route_to('login') ?>" method="post">
					<?= csrf_field() ?>
					<?php if ($config->validFields === ['email']): ?>
					<div class="form-group">
						<input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login"placeholder="<?=lang('Auth.email')?>">
						<div class="invalid-feedback">
								<?= session('errors.login') ?>
						</div>
					</div>
					<?php else: ?>
					<div class="form-group">
						<input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
						<div class="invalid-feedback">
								<?= session('errors.login') ?>
						</div>
					</div>
					<?php endif; ?>
					<div class="form-group">
						<input type="password" name="password" class="form-control  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
						<div class="invalid-feedback">
								<?= session('errors.password') ?>
						</div>
						<?php if ($config->activeResetter): ?>
						<p><a href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
					<?php endif; ?>
					</div>

					<?php if ($config->allowRemembering): ?>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
						</label>
					</div>
					<?php endif; ?>

					<button type="submit" class="btn1"><?=lang('Auth.loginAction')?></button>
				</form>

		
		</div>
		<div class="kanan">
				<h1>BELUM PUNYA AKUN?</h1>
				<button type="button" class="btn2"><a href="<?= route_to('register') ?>">DAFTAR AKUN</a></button>
				<img class="glogin" src="assets/images/login.png">
		</div>
	</div>
</div>
</section>
