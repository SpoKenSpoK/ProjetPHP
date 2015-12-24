<?php /* Smarty version 3.1.24, created on 2015-12-19 12:06:21
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/connexion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:298756753a2d80d1b9_69165365%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbed6cc5ac942ac30b7b35cc72186a6020cfa7c8' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/connexion.tpl',
      1 => 1450374227,
      2 => 'file',
    ),
    '996da188aec477b38394b859fc0ad89f8b3474e9' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout.tpl',
      1 => 1449485543,
      2 => 'file',
    ),
    '3fdf78bb39bacffda6672012222411cb74dadd21' => 
    array (
      0 => '3fdf78bb39bacffda6672012222411cb74dadd21',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '298756753a2d80d1b9_69165365',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56753a2d86c9f9_04021094',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56753a2d86c9f9_04021094')) {
function content_56753a2d86c9f9_04021094 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '298756753a2d80d1b9_69165365';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Welcome on what to cook </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
							   integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</header>
		<main>
			<?php
$_smarty_tpl->properties['nocache_hash'] = '298756753a2d80d1b9_69165365';
?>

	<form action="connexion.inc.php" method="post">
		<label for="form-nom">Entrez votre nom :</label><br/>
		<input name="nom" id="form-nom" type="text" size="25" /><br/>
		<input type="submit" name="form_test" value="Envoyer"/>
	</form>

		</main>
		<footer>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</footer>
	</body>

</html>
<?php }
}
?>