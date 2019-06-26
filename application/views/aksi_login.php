<html lang="en">
  <head>
    <title>Aplikasi Kasir</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">


  </head>

  <body>
  	<div class="container">
  		<div id="panel panel-default">
  			<div class="col-md-4 col-md-offset-4 kotak">
  				<h3>Silahkan Login....</h3>
  	<?= form_open('login', [,name => 'login_form', 'id' => 'login_form']); ?>
  	<?php if(!empty($this->session->flasdata('error'))) : ?>
  	<p id="message">
  		<?= $this->session->flashdata('error') ?>
  	</p>

  	<?php endif ?>
  	<!-- Form Username -->
  	<p>
  		< span class="input-grop-addon"><span class="glyphicon glyphicon-user"></span></span>
  		<?= form_label('Username', 'username') ?>
  		<?=form_input('username', $input->username, ['class' => 'form_fields']) ?>
  	</p>
  	<?= form_error('username', '<p class="field_error">', '</p>);?>
  <!-- 	From Password -->
  <p>
  	<?= form_label('Password', 'password') ?>
  	<?= form_input('password', $input->password, ['class' => 'form_fields']) ?>
  </p>

  <p>
  	<?= input type="submit" name=
  	submit" id="submit" value="Login"/>
  </p>
  <?= form_close() ?>
</div>
</div>
</div>
</body>
</html>