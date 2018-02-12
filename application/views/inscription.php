<?php $title = "Inscription"; 


ob_start(); ?>
 <h1 class=text-center>inscription</h1>
<hr>
<div class="form-row text-center" style='margin-top: 200px'>
	<div class='col-12'>
		<form methode="post" action="register">
			<p>Nom</p>
			<input required type="text" class="form-control" name="nom" id="InputUSER01" aria-describedby="User01" placeholder="Nom">
			<br>
			<p>Prénom</p>
			<input required type="text" class="form-control" name="prenom" id="InputUSER01" aria-describedby="User01" placeholder="Prénom">
			<br>
			<p>Email</p>
			<input required type="email" class="form-control" name="mail" id="InputUSER01" aria-describedby="User01" placeholder="email">
			<br>
			<br>
			<button type="submit" class="btn btn-primary">S'inscrire</button>
		</form>
	</div>
</div>
<?php $body = ob_get_clean(); ?>

<?php require('template.php'); ?>

