<?php /* Smarty version 3.1.24, created on 2015-12-02 00:14:55
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/recette_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24176565e29ef7b9095_78563522%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9721f81715e92ba190d37c08e8e144d2307832b8' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/recette_detail.tpl',
      1 => 1449009770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24176565e29ef7b9095_78563522',
  'variables' => 
  array (
    'data' => 0,
    'rct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565e29ef82b7b2_39145396',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565e29ef82b7b2_39145396')) {
function content_565e29ef82b7b2_39145396 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24176565e29ef7b9095_78563522';
?>
		<h2 class="Label_idc"><?php echo $_smarty_tpl->tpl_vars['data']->value['label_cat'];?>
</h2>
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

				<h3 class="titre_rct_list"><?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TITRE'];?>
</h3>

				<ul class="ul_list_rct">
					<li>Préparation: <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_PREPARATION'];?>
 </li>
					<li>Cuisson: <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_CUISSON'];?>
</li>
					<li>Coût: <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_COUT'];?>
</li>
					<li>Difficulté: <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_DIFFICULTE'];?>
</li>
					<li>Nombre de personnes: <?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_NBPERSONNE'];?>
</li>
				</ul>

				<p class="description_rct">
				<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_DESCRIPTION'];?>

				</p>

			</article>
		<?php
$_smarty_tpl->tpl_vars['rct'] = $foreach_rct_Sav;
}
}
}
?>