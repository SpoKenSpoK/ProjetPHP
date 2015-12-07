<?php /* Smarty version 3.1.24, created on 2015-12-07 10:33:39
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout/layout_entete.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1198056655273433948_89690518%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49ec1a00b5d80d3db72ea88b393bdc4249685099' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout/layout_entete.inc.tpl',
      1 => 1449480816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1198056655273433948_89690518',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5665527345c317_03710244',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665527345c317_03710244')) {
function content_5665527345c317_03710244 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1198056655273433948_89690518';
?>
<h1>Au Bon Plat</h1>
<nav>
	<ul>
		<li><a href="index.php?page=">Accueil</a></li>
		<li><a href="index.php?page=liste">Recettes</a></li>
		<li><a href="#">Espace Perso</a></li>
	</ul>
</nav>
<?php }
}
?>