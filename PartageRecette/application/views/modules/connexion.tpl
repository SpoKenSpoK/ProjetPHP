{extends '../layout.tpl'}
{block name=main}
	<form action="application/modules/connexion.inc.php" method="post">
		<label for="form-login">Entrez votre login :</label><br/>
		<input name="login" id="form-login" type="text" size="25" /><br/>
		<label for="form-prenom">Entrez votre mot de passe :</label><br/>
		<input name="mdp" id="form-mdp" type="password" size="25" /><br/>
		<input type="submit" name="form_test" value="Envoyer"/>
	</form>
{/block}