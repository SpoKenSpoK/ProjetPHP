<?php /* Smarty version 3.1.24, created on 2015-12-01 09:47:11
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/recette_liste.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10243565d5e8fbc6df8_27713058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '382d1d4e366fd3b88961e02cfdf5f2b9a2e8143a' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/recette_liste.tpl',
      1 => 1448959628,
      2 => 'file',
    ),
    '996da188aec477b38394b859fc0ad89f8b3474e9' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout.tpl',
      1 => 1448955022,
      2 => 'file',
    ),
    '5568fbb4a8731a6ec33239a875f53699e16e13a0' => 
    array (
      0 => '5568fbb4a8731a6ec33239a875f53699e16e13a0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '10243565d5e8fbc6df8_27713058',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d5e8fc58640_36261318',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d5e8fc58640_36261318')) {
function content_565d5e8fc58640_36261318 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10243565d5e8fbc6df8_27713058';
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
$_smarty_tpl->properties['nocache_hash'] = '10243565d5e8fbc6df8_27713058';
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
			<img src= <?php echo ("media/categories/").($_smarty_tpl->tpl_vars['cat']->value['CAT_ILLUSTRATION']);?>
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