<?php /* Smarty version 3.1.24, created on 2015-12-01 08:24:22
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/recette_liste.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:78565d4b26a5cdd9_84004091%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fc7a05d54ba17c8d630dbba73a3a0c33eb71f7c' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/recette_liste.tpl',
      1 => 1448954653,
      2 => 'file',
    ),
    '1b4175c3e93a90a78fbf395ab4c71f04d3800a25' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl',
      1 => 1448525523,
      2 => 'file',
    ),
    '9e8333a90082c14c49dec75d42f732b2002c59c4' => 
    array (
      0 => '9e8333a90082c14c49dec75d42f732b2002c59c4',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '78565d4b26a5cdd9_84004091',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d4b26b024b9_27990035',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d4b26b024b9_27990035')) {
function content_565d4b26b024b9_27990035 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '78565d4b26a5cdd9_84004091';
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
$_smarty_tpl->properties['nocache_hash'] = '78565d4b26a5cdd9_84004091';
?>

	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['cat_req'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
		<article>
			<?php
$_from = $_smarty_tpl->tpl_vars['row']->value;
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
			<a href='index.php?page=liste&idc='.<?php echo $_smarty_tpl->tpl_vars['data']->value['cat_req']['CAT_ID'];?>
>Voir les recettes</a>
		</article>
	<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>

		</main>
		<footer>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</footer>
	</body>

</html><?php }
}
?>