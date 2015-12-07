<?php /* Smarty version 3.1.24, created on 2015-12-07 11:51:27
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/connexion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25656566564afd864b7_96538970%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4c466f2fe71bea1293756934898044c80baa563' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/connexion.tpl',
      1 => 1449485290,
      2 => 'file',
    ),
    '1b4175c3e93a90a78fbf395ab4c71f04d3800a25' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl',
      1 => 1449482026,
      2 => 'file',
    ),
    '8ad648178ae1a4ffdab99f9e405a8eb43972cc89' => 
    array (
      0 => '8ad648178ae1a4ffdab99f9e405a8eb43972cc89',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '25656566564afd864b7_96538970',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_566564afe04fa6_82317395',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566564afe04fa6_82317395')) {
function content_566564afe04fa6_82317395 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25656566564afd864b7_96538970';
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
		<!--<img src="C:/UwAmp/www/ProjetPHP/PartageRecette/media/categories/a4aky34o.png"/>-->
			<?php
$_smarty_tpl->properties['nocache_hash'] = '25656566564afd864b7_96538970';
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