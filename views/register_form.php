<?=Form::open()?>
	<h2>Register</h2>
	<div class="row">
		<?=Form::label('email', 'Email:')?>
		<?=Form::input('text', 'email')?>
	</div>
	<div class="row">
		<?=Form::label('password', 'Password:')?>
		<?=Form::input('password', 'password')?>
	</div>
	<div class="row">
		<?=Form::label('confirm_password', 'Confirm Password:')?>
		<?=Form::input('password', 'confirm_password')?>
	</div>
	<div class="row">
		<?=Form::submit()?>
	</div>
<?=Form::close()?>

<a href="register.php">Register here</a>