<?php /* Smarty version 3.1.24, created on 2016-01-18 19:24:49
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/nav/nav_membre.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8241569d2df1de20a7_99717978%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62ace903159a56449595bb200cca94926fd38e6' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/nav/nav_membre.inc.tpl',
      1 => 1453141462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8241569d2df1de20a7_99717978',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569d2df1e14e57_21175663',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569d2df1e14e57_21175663')) {
function content_569d2df1e14e57_21175663 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8241569d2df1de20a7_99717978';
?>
<nav>
	<ul>
		<li><a href="index.php?page=">Accueil</a></li>
		<li><a href="index.php?page=liste">Recettes</a></li>
		<li><a href="index.php?page=profil">Profil</a></li>
		<li><a href="index.php?page=connexion">Déconnexion</a></li>
	</ul>
</nav>
<?php }
}
?>