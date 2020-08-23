<!DOCTYPE html>
<html lang="en">

<head>

<?php $this->load->view("admin_temp/1_head"); ?>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Kamu siapa!?</h1>
				  </div>
				  <form class="user" action="<?php echo site_url('login_cont/login');?>" method="post">
				  	<div class="form-group">
						<input type="text" name="username" id="username" class="form-control form-control-user">
					</div>
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control form-control-user">
					</div>
					<div class="form-group">
					<button type="submit" class="btn btn-primary">submit</button>
					</div>
				  <hr>
				  <?php echo '<pre>'; print_r($this->session->all_userdata());exit;?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php $this->load->view("admin_temp/2_source"); ?>

</body>

</html>
