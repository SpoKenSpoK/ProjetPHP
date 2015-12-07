<?php /* Smarty version 3.1.24, created on 2015-12-07 10:34:00
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout/layout_entete.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:117245665528838fef4_18188367%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed9d614e53efc7b743906b4eef90d7e1c1755761' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout/layout_entete.inc.tpl',
      1 => 1448958806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117245665528838fef4_18188367',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_566552883961d8_19068272',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566552883961d8_19068272')) {
function content_566552883961d8_19068272 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '117245665528838fef4_18188367';
?>
<h1>WTC</h1>
<nav>
	<ul>
		<li><a href="index.php?page=">Acceuil</a></li>
		<li><a href="index.php?page=liste">Recettes</a></li>
		<li><a href="">Espace Perso</a></li>
	</ul>
</nav>
<?php }
}
?>