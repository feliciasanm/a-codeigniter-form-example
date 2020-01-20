<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="<?php echo base_url() . '/assets/css/bootstrap.min.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url() . '/assets/css/aspirasi.css'; ?>">
	</head>
	<body>

		<main id="rectangle-wrapper">
			<div id="rectangle-container">
				<?php
					echo form_open_multipart('aspirasi/form', $has_submitted_form ? 'class="was-validated"' : '');
				?>
					<div class="form-wrapper">
						<h1 class="mb-4">Form Aspirasi</h1>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama'); ?>" required />
							<?php echo form_error('nama', '<div class="invalid-feedback">', '</div>'); ?>
						</div>
						<div class="form-group">
							<label for="nrp">NRP</label>
							<input type="text" class="form-control" id="nrp" name="nrp" value="<?php echo set_value('nrp'); ?>" pattern="^[A-GMa-gm]?\d{8}$" required />
							<?php echo form_error('nrp', '<div class="invalid-feedback">', '</div>'); ?>
						</div>
						<div class="form-group">
							<label for="aspirasi">Aspirasi</label>
							<textarea class="form-control" id="aspirasi" name="aspirasi" value="<?php echo set_value('aspirasi'); ?>" required><?php echo set_value('aspirasi'); ?></textarea>
							<?php echo form_error('aspirasi', '<div class="invalid-feedback">', '</div>'); ?>
						</div>
						<div class="form-group">
							<label for="file-upload">File tambahan</label>
							<?php if (isset($upload_errors)) {
								echo '<div class="text-danger">' . $upload_errors . '</div>';
							} ?>
							<input type="file" class="form-control-file" id="file-upload" name="file_aspirasi" accept=".jpg, .png, .zip, .rar" aria-describedby="file-upload-text">
							<div class="form-text text-muted" id="file-upload-text">
								Kamu juga dapat mengunggah file tambahan berupa gambar (.jpg, .png) atau archive (.zip, .rar).
							</div> 
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</main>
			
		<script src="<?php echo base_url() . '/assets/js/jquery-3.4.1.slim.min.js'; ?>"></script>
		<script src="<?php echo base_url() . '/assets/js/popper.min.js'; ?>"></script>
		<script src="<?php echo base_url() . '/assets/js/bootstrap.min.js'; ?>"></script>
	</body>
</html>
