<?php /* Smarty version 3.1.24, created on 2015-12-01 09:33:44
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/recette_liste.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24975565d5b688b5108_80634275%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fc7a05d54ba17c8d630dbba73a3a0c33eb71f7c' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/recette_liste.tpl',
      1 => 1448958798,
      2 => 'file',
    ),
    '1b4175c3e93a90a78fbf395ab4c71f04d3800a25' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl',
      1 => 1448958740,
      2 => 'file',
    ),
    '00949836b6847d4174b58046aa4c1858a56d5dc2' => 
    array (
      0 => '00949836b6847d4174b58046aa4c1858a56d5dc2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '24975565d5b688b5108_80634275',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d5b6895dc32_95907771',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d5b6895dc32_95907771')) {
function content_565d5b6895dc32_95907771 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24975565d5b688b5108_80634275';
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
$_smarty_tpl->properties['nocache_hash'] = '24975565d5b688b5108_80634275';
?>

	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['cat_req'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
		<article>
			<img src="media/categories/".<?php echo $_smarty_tpl->tpl_vars['cat']->value['CAT_ILLUSTRATION'];?>
/>		
			<h2><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAT_LABEL'];?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAT_DESCRIPTION'];?>
</p>
			<a href=<?php echo ('index.php?page=liste&idc=').($_smarty_tpl->tpl_vars['cat']->value['CAT_ID']);?>
>Voir les recettes</a>
		</article>
	<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
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