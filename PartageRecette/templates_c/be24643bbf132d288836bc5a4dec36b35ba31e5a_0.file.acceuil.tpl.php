<?php /* Smarty version 3.1.24, created on 2015-11-26 09:12:29
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/acceuil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:36075656beed1a5062_35537203%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be24643bbf132d288836bc5a4dec36b35ba31e5a' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/acceuil.tpl',
      1 => 1448384554,
      2 => 'file',
    ),
    '1b4175c3e93a90a78fbf395ab4c71f04d3800a25' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl',
      1 => 1448525523,
      2 => 'file',
    ),
    'c6108e6354c178d52ddd29ee819a8d52e3cc3d31' => 
    array (
      0 => 'c6108e6354c178d52ddd29ee819a8d52e3cc3d31',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '36075656beed1a5062_35537203',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5656beed471f24_62559294',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5656beed471f24_62559294')) {
function content_5656beed471f24_62559294 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '36075656beed1a5062_35537203';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Welcome on what to cook </title>
		<meta charset="UTF-8">
	</head>
	<body>
		<header>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</header>
		<main>
			<?php
$_smarty_tpl->properties['nocache_hash'] = '36075656beed1a5062_35537203';
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

</html><?php }
}
?>