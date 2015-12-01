<?php /* Smarty version 3.1.24, created on 2015-11-24 17:54:25
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28828565496415b1957_91346114%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b4175c3e93a90a78fbf395ab4c71f04d3800a25' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl',
      1 => 1448384055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28828565496415b1957_91346114',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565496415c3dc1_35450053',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565496415c3dc1_35450053')) {
function content_565496415c3dc1_35450053 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28828565496415b1957_91346114';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Welcome on what to cook </title>
		<meta charset="UTF-8">
	</head>
	<body>
		<header>
			<?php echo $_smarty_tpl->getSubTemplate ('C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</header>
		<main>
			
		</main>
		<footer>
			<?php echo $_smarty_tpl->getSubTemplate ('C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</footer>
	</body>

</html><?php }
}
?>