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
					echo form_open('aspirasi/form');
				?>
					<div class="form-wrapper">
						<h1 class="mb-4">Form Aspirasi</h1>
						<?php
							echo validation_errors('<div class="text-danger">', '</div>');	
						?>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama'); ?>" required />
						</div>
						<div class="form-group">
							<label for="nrp">NRP</label>
							<input type="text" class="form-control" id="nrp" name="nrp" value="<?php echo set_value('nrp'); ?>" pattern="^[A-GMa-gm]?\d{8}$" required />
						</div>
						<div class="form-group">
							<label for="aspirasi">Aspirasi</label>
							<textarea class="form-control" id="aspirasi" name="aspirasi" value="<?php echo set_value('aspirasi'); ?>" required><?php echo set_value('aspirasi'); ?></textarea>
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
