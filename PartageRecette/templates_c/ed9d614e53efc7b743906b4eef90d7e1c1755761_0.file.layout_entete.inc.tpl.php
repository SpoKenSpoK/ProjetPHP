<?php /* Smarty version 3.1.24, created on 2015-12-01 09:33:44
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout/layout_entete.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8229565d5b68970276_06010848%%*/
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
  'nocache_hash' => '8229565d5b68970276_06010848',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d5b68973037_12338231',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d5b68973037_12338231')) {
function content_565d5b68973037_12338231 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8229565d5b68970276_06010848';
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