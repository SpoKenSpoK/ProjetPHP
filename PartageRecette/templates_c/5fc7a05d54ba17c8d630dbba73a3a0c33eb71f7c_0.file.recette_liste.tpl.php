<?php /* Smarty version 3.1.24, created on 2015-12-07 10:17:54
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/recette_liste.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:308856654ec2aa8548_85591111%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fc7a05d54ba17c8d630dbba73a3a0c33eb71f7c' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/recette_liste.tpl',
      1 => 1449479873,
      2 => 'file',
    ),
    '1b4175c3e93a90a78fbf395ab4c71f04d3800a25' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl',
      1 => 1448999914,
      2 => 'file',
    ),
    '6505d8bdfe92e11b793ac2c8e6b8850d0fa85aa0' => 
    array (
      0 => '6505d8bdfe92e11b793ac2c8e6b8850d0fa85aa0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '308856654ec2aa8548_85591111',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56654ec2bb8234_12876678',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56654ec2bb8234_12876678')) {
function content_56654ec2bb8234_12876678 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '308856654ec2aa8548_85591111';
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
		<!--<img src="C:/UwAmp/www/ProjetPHP/PartageRecette/media/categories/a4aky34o.png"/>-->
			<?php
$_smarty_tpl->properties['nocache_hash'] = '308856654ec2aa8548_85591111';
?>

	<?php if (isset($_smarty_tpl->tpl_vars['data']->value['rct_req'])) {?>

		<h2 class="Label_idc"><?php
$_from = $_smarty_tpl->tpl_vars['data']->value['label_cat_desc'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat_label'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat_label']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat_label']->value) {
$_smarty_tpl->tpl_vars['cat_label']->_loop = true;
$foreach_cat_label_Sav = $_smarty_tpl->tpl_vars['cat_label'];
echo $_smarty_tpl->tpl_vars['cat_label']->value['CAT_LABEL'];
$_smarty_tpl->tpl_vars['cat_label'] = $foreach_cat_label_Sav;
}
?></h2>

		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['rct_req'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rct'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rct']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rct']->value) {
$_smarty_tpl->tpl_vars['rct']->_loop = true;
$foreach_rct_Sav = $_smarty_tpl->tpl_vars['rct'];
?>
			<article class="rct">

			<img class="img_rct">

				<h3 class="titre_rct_list"><?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TITRE'];?>
</h3>

				<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['uti_info'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['uti'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['uti']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['uti']->value) {
$_smarty_tpl->tpl_vars['uti']->_loop = true;
$foreach_uti_Sav = $_smarty_tpl->tpl_vars['uti'];
?>
					<img class="img_rct" src=<?php echo (("../media/").($_smarty_tpl->tpl_vars['uti']->value['UTI_LOGIN'])).($_smarty_tpl->tpl_vars['rct']->value['RCT_ILLUSTRATION']);?>
 alt=<?php echo ("img_rct_").($_smarty_tpl->tpl_vars['rct']->value['RCT_ID']);?>
>
				<?php
$_smarty_tpl->tpl_vars['uti'] = $foreach_uti_Sav;
}
?>

				<p class="description_rct">
				<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_DESCRIPTION'];?>

				</p>

				<a class="voir_la_recettes" href=<?php echo ('index.php?page=details&idr=').($_smarty_tpl->tpl_vars['rct']->value['RCT_ID']);?>
>Voir la recettes</a>

			</article>
		<?php
$_smarty_tpl->tpl_vars['rct'] = $foreach_rct_Sav;
}
?>


	<?php } else { ?>
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
			<article class="categories">

				<img class="img_cat" src=<?php echo ("../media/categories/").($_smarty_tpl->tpl_vars['cat']->value['CAT_ILLUSTRATION']);?>
 alt=<?php echo ("img_cat_").($_smarty_tpl->tpl_vars['cat']->value['CAT_ID']);?>
>

				<h2 class="label_cat"><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAT_LABEL'];?>
</h2>

				<p class="description_cat"><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAT_DESCRIPTION'];?>
</p>

				<a class="voir_les_recettes" href=<?php echo ('index.php?page=liste&idc=').($_smarty_tpl->tpl_vars['cat']->value['CAT_ID']);?>
>Voir les recettes</a>

			</article>
		<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
	<?php }?>

		</main>
		<footer>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</footer>
	</body>

</html><?php }
}
?>