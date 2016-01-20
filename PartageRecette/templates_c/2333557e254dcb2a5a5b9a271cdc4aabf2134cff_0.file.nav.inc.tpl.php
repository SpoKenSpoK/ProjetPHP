<?php /* Smarty version 3.1.24, created on 2016-01-18 19:12:31
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/nav/nav.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24468569d2b0fdd4a19_39656983%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2333557e254dcb2a5a5b9a271cdc4aabf2134cff' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/nav/nav.inc.tpl',
      1 => 1453140704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24468569d2b0fdd4a19_39656983',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569d2b0fe189e0_43869805',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569d2b0fe189e0_43869805')) {
function content_569d2b0fe189e0_43869805 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24468569d2b0fdd4a19_39656983';
?>
<nav>
	<ul>
		<li><a href="index.php?page=">Accueil</a></li>
		<li><a href="index.php?page=liste">Recettes</a></li>
		<li><a href="index.php?page=connexion">Connexion</a></li>
	</ul>
</nav>
<?php }
}
?>