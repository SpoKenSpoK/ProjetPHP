<?php /* Smarty version 3.1.24, created on 2015-12-01 09:35:07
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout/layout_entete.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7749565d5bbbedda34_03848149%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49ec1a00b5d80d3db72ea88b393bdc4249685099' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout/layout_entete.inc.tpl',
      1 => 1448958889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7749565d5bbbedda34_03848149',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d5bbbf05400_99600224',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d5bbbf05400_99600224')) {
function content_565d5bbbf05400_99600224 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7749565d5bbbedda34_03848149';
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