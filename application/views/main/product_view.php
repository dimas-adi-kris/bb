<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product list</title>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>

<body>
	<div class="container">
		<h1 class="text-center">Product list</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Product Name</th>
					<th scope="col">Price</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$count = 0;
				foreach ($atabled->result() as $row) :
					$count++;
				?>
					<tr>
						<th scope="row"><?php echo $count; ?></th>
						<td><?php echo $row->judul; ?></td>
						<td><?php echo $row->isi; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<script src="<?php echo base_url('assets/js/jquery.min.jd'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.jd'); ?>"></script>
</body>

</html>