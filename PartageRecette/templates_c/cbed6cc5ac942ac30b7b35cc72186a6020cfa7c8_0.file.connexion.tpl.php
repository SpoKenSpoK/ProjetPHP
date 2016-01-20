<?php /* Smarty version 3.1.24, created on 2016-01-20 14:50:58
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/connexion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23574569f90c28b0401_08191861%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbed6cc5ac942ac30b7b35cc72186a6020cfa7c8' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/connexion.tpl',
      1 => 1453297856,
      2 => 'file',
    ),
    '996da188aec477b38394b859fc0ad89f8b3474e9' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout.tpl',
      1 => 1453228753,
      2 => 'file',
    ),
    '4e2e84c60e5d0a5a7cca040c854262762fa39c4d' => 
    array (
      0 => '4e2e84c60e5d0a5a7cca040c854262762fa39c4d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '23574569f90c28b0401_08191861',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569f90c292f2d6_94081443',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569f90c292f2d6_94081443')) {
function content_569f90c292f2d6_94081443 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23574569f90c28b0401_08191861';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Welcome on what to cook </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./asset/css/style.css"/>
	</head>
	<body>
		<div class="container">
			<header>
				<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</header>
			<div class="divieur"></div>
			<main>
				<?php
$_smarty_tpl->properties['nocache_hash'] = '23574569f90c28b0401_08191861';
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value['inscription'] == true) {?>

	<h2> Inscription : </h2>

	<form action="" method="post" enctype="multipart/form-data">
		<label for="new_login">Login*:</label>
		<input required name="new_login" id="new_login" type="text" size="25" /><br>
		<label for="new_name">Nom*:</label>
		<input required name="new_name" id="new_name" type="text" size="25" /><br>
		<label for="new_firstname">Prénom*:</label>
		<input required name="new_firstname" id="new_firstname" type="text" size="25" /><br>
		<label for="new_mail">e-Mail*:</label>
		<input required name="new_mail" id="new_mail" type="text" size="50" /><br>
		<label for="new_mdp">Nouveau mot de passe*:</label>
		<input name="new_mdp" id="new_mdp" type="password" size=""/><br>
		<label for="sec_new_mdp">Confirmer le mot de passe*:</label>
		<input name="new_sec_mdp" id"sec_new_mdp" type="password"size=""/><br>
		<label for="new_avatar1">Avatar:</label>
		<input type="hidden" name="MAX_FILE_SIZE" value="512000"/>
		<input type="file" name="new_new_avatar" id="new_avatar1"/><br>
		<input type="submit" name="inscription" value="Envoyer"/> 
		<input type="submit" name="exit" value="Annuler" formnovalidate/>
	</form>
	<p><i>Les champs spécifiés d'un * sont obligatoires.</i></p>


<?php } else { ?>
	<?php if (isset($_SESSION['login'])) {?>
		<p> Vous êtes connecté </p>
		<form action="" method="post">
			<input type="submit" name="deco" value="Se déconnecter"/>
		</form>
	<?php } else { ?>

		<h2> Connexion : </h2>

		<form action="" method="post">
			<label for="form-login">Entrez votre login :</label><br/>
			<input required name="login" id="form-login" type="text" placeholder="login" size="25" /><br/>
			<label for="form-mdp">Entrez votre mot de passe :</label><br/>
			<input required name="mdp" id="form-mdp" type="password" size="25" /><br/>
			<input type="submit" name="connex" value="Envoyer"/>
			<input type="submit" name="connexion_inscription" value="S'inscrire" formnovalidate/>
		</form>
	<?php }?>
<?php }?>


			</main>
			<div class="divieur"></div>
			<footer>
				<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</footer>
		</div>
	</body>

</html>
<?php }
}
?>