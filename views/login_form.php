<?=$form->open()?>

	<div class="row">
		<?=$form->label('email', 'Email:')?>
		<?=$form->input('text', 'email')?>
	</div>
	<div class="row">
		<?=$form->label('password', 'Password:')?>
		<?=$form->input('password', 'password')?>
	</div>
	<div class="row">
		<?=$form->submit()?>
	</div>

<?=$form->close()?>

<a href="register.php">Register here</a>