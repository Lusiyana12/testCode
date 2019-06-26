<html lang="en">
  <head>
    <title>Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- <?php $this->load->helper('form'); ?> -->
    .kotak{
    margin-top: 150px;
	}

	.kotak.input-group{
		margin-botton: 20px;
   }

  </head>

  <body>
  	<div id="login_box">
  		<div class="panel-body">
  			<h1>Login</h1>

  			<?= form_open('login', ['name' => 'login_form', 'id' => 'login_form']); ?>

  			<?php if(!empty($this->session->flashdata('error'))) :?>
  			<div class="alert alert-danger alert-dismissable fade in">
  				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  				<strong>Perhatian!</strong> <?= $this->session->flasdata('error') ?>

  				</div>
  			<?php endif ?>
  			<p>
  				<?= form_label('Username', 'username') ?>
  				<?= form_input('username', $input->username, ['class' =>'form_field']) ?>
  			</p>
  			<?= form_error ('username', '<p class="fields_error">', '</p>');?>

  			<p>
  				<?= form_label('Password', 'password') ?>
  				<?= form_password('password', $input->password, ['class' =>'form_field']) ?>
  			</p>
  			<?= form_error('password', '<p class="fields_error">', '</p>');?>
  			<div class="center">
  				<input type="submit" name="submit" id="submit" value="Login" /> </div>
  			<?= form_close () ?>

  		</div>
  	</div>
  </body>
  </html>




