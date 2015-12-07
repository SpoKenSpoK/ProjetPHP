{extends '../layout.tpl'}
{block name=main}
	<form action="connexion.inc.php" method="post">
		<label for="form-nom">Entrez votre nom :</label><br/>
		<input name="nom" id="form-nom" type="text" size="25" /><br/>
		<input type="submit" name="form_test" value="Envoyer"/>
	</form>
{/block}