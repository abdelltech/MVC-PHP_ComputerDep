<?php if(isset($_SESSION['droit'])): ?>
<div id="login_boite">
	Welcome <?= $_SESSION['login']; ?> 
	<a href="<?= BASE_URL ; ?>index.php/Session/deconnexionSession">Sign out</a>
</div>

<?php else: ?>
<div id="login_boite">
	<form method="post" action="<?= BASE_URL; ?>index.php/Session/connexionSession">
		<fieldset>
			Login
			<input autofocus name="text_login"  type="text"  size="18" />
			Password
			<input name="password" type="password" size="18" />
			<input  class="button" type="submit" name="btn_cnx" value="Connexion" />
		</fieldset>
		<p id="error"><?php if(isset($_SESSION['error'])) echo $_SESSION['error'];?></p>
	</form>
</div>
<?php endif; ?>

<?php //https://docs.djangoproject.com/fr/1.6/intro/tutorial04/ ?>
