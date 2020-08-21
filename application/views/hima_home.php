<!DOCTYPE html>
<html lang="en">
 <?php $this->load->view("home/head"); ?>
</head>
<body>

  <!-- Start your project here-->  
  <!--Navbar -->
<?php $this->load->view('home/navbar'); ?>
<!--/.Navbar -->
<!-- main -->
<main>
	<div id="main_content">
		<?php
			$count = 0;
			foreach ($atabled->result() as $row):
				$count++;
		?>


		
		<!-- trial table -->
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Product Name</th>
					<th scope="col">Price</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row"><?php echo $count; ?></th>
					<td><?php echo $row->judul; ?></td>
					<td><?php echo $row->isi; ?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
		<!-- trial table -->
	</div>


</main>
<!-- /.main -->

<!-- Footer -->
<?php $this->load->view("home/footer");?>
<!-- Footer -->

  <!-- End your project here-->

<?php $this->load->view("home/sour");?>

</body>
</html>

<script>
</script>
