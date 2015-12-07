<?php /* Smarty version 3.1.24, created on 2015-12-07 11:10:06
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/accueil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1944956655afe45cbd9_01350024%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd20b9b420cbc17702d93738fbbb6ac61744e1efa' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/accueil.tpl',
      1 => 1449481316,
      2 => 'file',
    ),
    '1b4175c3e93a90a78fbf395ab4c71f04d3800a25' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl',
      1 => 1449482026,
      2 => 'file',
    ),
    '2e771ff5dd79e56b20d606d913b375a74070b4c6' => 
    array (
      0 => '2e771ff5dd79e56b20d606d913b375a74070b4c6',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1944956655afe45cbd9_01350024',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56655afe4e7687_99827969',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56655afe4e7687_99827969')) {
function content_56655afe4e7687_99827969 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1944956655afe45cbd9_01350024';
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
$_smarty_tpl->properties['nocache_hash'] = '1944956655afe45cbd9_01350024';
?>

	<article>
		<p>BIENVENUE NARVALO</p>
	</article>
	<section>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['alea'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
			<?php echo $_smarty_tpl->tpl_vars['value']->value;?>

		<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
	</section>

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