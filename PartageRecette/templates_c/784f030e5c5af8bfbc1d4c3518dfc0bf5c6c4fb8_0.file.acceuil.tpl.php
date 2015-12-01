<?php /* Smarty version 3.1.24, created on 2015-12-01 09:22:15
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/acceuil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25722565d58b73784d7_11243390%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '784f030e5c5af8bfbc1d4c3518dfc0bf5c6c4fb8' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/acceuil.tpl',
      1 => 1448955022,
      2 => 'file',
    ),
    '996da188aec477b38394b859fc0ad89f8b3474e9' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout.tpl',
      1 => 1448955022,
      2 => 'file',
    ),
    '8f0f9240a5104c63388dc3229964e76a8d921805' => 
    array (
      0 => '8f0f9240a5104c63388dc3229964e76a8d921805',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '25722565d58b73784d7_11243390',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d58b754cb37_97822601',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d58b754cb37_97822601')) {
function content_565d58b754cb37_97822601 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25722565d58b73784d7_11243390';
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
$_smarty_tpl->properties['nocache_hash'] = '25722565d58b73784d7_11243390';
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