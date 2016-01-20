<?php /* Smarty version 3.1.24, created on 2016-01-20 12:20:24
         compiled from "C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/recette_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8247569f6d780ee570_55824887%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b6be00185d3db4b938a8b97fe60e1065d107de7' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/modules/recette_detail.tpl',
      1 => 1453136313,
      2 => 'file',
    ),
    '996da188aec477b38394b859fc0ad89f8b3474e9' => 
    array (
      0 => 'C:/UwAmp/www/Projet_PHP/PartageRecette/application/views/layout.tpl',
      1 => 1453228753,
      2 => 'file',
    ),
    'a9dd67bf40391f17252622bc3fde4af2a3087f64' => 
    array (
      0 => 'a9dd67bf40391f17252622bc3fde4af2a3087f64',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '8247569f6d780ee570_55824887',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569f6d7821ba33_02242891',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569f6d7821ba33_02242891')) {
function content_569f6d7821ba33_02242891 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8247569f6d780ee570_55824887';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Welcome on what to cook </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./asset/css/style.css"/>
	</head>
	<body>
		<div class="container">
			<header>
				<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</header>
			<div class="divieur"></div>
			<main>
				<?php
$_smarty_tpl->properties['nocache_hash'] = '8247569f6d780ee570_55824887';
?>

	<?php if (isset($_smarty_tpl->tpl_vars['data']->value['rct_req'])) {?>

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
					<img class="img_detail" src=<?php echo ((("./media/").($_smarty_tpl->tpl_vars['uti']->value['UTI_LOGIN'])).("/")).($_smarty_tpl->tpl_vars['rct']->value['RCT_ILLUSTRATION']);?>
 height="352" width="470" alt=<?php echo ("img_rct_").($_smarty_tpl->tpl_vars['rct']->value['RCT_ID']);?>
>
				<?php
$_smarty_tpl->tpl_vars['uti'] = $foreach_uti_Sav;
}
?>

				<p class="separateur"/>

				<p>
					<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TITRE'];?>
<br/>
					<i>recette proposée par</i> <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['uti_info'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['uti'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['uti']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['uti']->value) {
$_smarty_tpl->tpl_vars['uti']->_loop = true;
$foreach_uti_Sav = $_smarty_tpl->tpl_vars['uti'];
echo $_smarty_tpl->tpl_vars['uti']->value['UTI_PRENOM'];
$_smarty_tpl->tpl_vars['uti'] = $foreach_uti_Sav;
}
?>
				</p>

				<p class="separateur"/>

				<p class="description_rct">
				<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_DESCRIPTION'];?>

				</p>

			</article>
		<?php
$_smarty_tpl->tpl_vars['rct'] = $foreach_rct_Sav;
}
?>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['rct_com'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['com'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['com']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['com']->value) {
$_smarty_tpl->tpl_vars['com']->_loop = true;
$foreach_com_Sav = $_smarty_tpl->tpl_vars['com'];
?>
			<?php if (isset($_SESSION['login']) && $_SESSION['id'] == $_smarty_tpl->tpl_vars['com']->value['UTI_ID']) {?>
			<form action="" method="post">
				<article>
					<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['uti_com'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['uticom'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['uticom']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['uticom']->value) {
$_smarty_tpl->tpl_vars['uticom']->_loop = true;
$foreach_uticom_Sav = $_smarty_tpl->tpl_vars['uticom'];
?>
						<?php if ($_smarty_tpl->tpl_vars['uticom']->value['UTI_ID'] == $_smarty_tpl->tpl_vars['com']->value['UTI_ID']) {?>
							<table border="1">
								<tr><td style="background-color : grey; color : white;">Auteur : <?php echo $_smarty_tpl->tpl_vars['uticom']->value['UTI_NOM'];?>
 <?php echo $_smarty_tpl->tpl_vars['uticom']->value['UTI_PRENOM'];?>

						<?php }?>
					<?php
$_smarty_tpl->tpl_vars['uticom'] = $foreach_uticom_Sav;
}
?>
					- Date : <?php echo $_smarty_tpl->tpl_vars['com']->value['COM_DATE'];?>
 
						<input type="text" name="com_id" style="visibility: hidden;" value="<?php echo $_smarty_tpl->tpl_vars['com']->value['COM_ID'];?>
"/>
						<input type="submit" name="del_com" value="effacer"/>
					</td></tr>
					<tr><td>Commentaire : <?php echo $_smarty_tpl->tpl_vars['com']->value['COM_TEXTE'];?>
</td></tr>
					</table>
				</article><br>
			</form>
			<?php } else { ?>
				<article>
					<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['uti_com'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['uticom'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['uticom']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['uticom']->value) {
$_smarty_tpl->tpl_vars['uticom']->_loop = true;
$foreach_uticom_Sav = $_smarty_tpl->tpl_vars['uticom'];
?>
						<?php if ($_smarty_tpl->tpl_vars['uticom']->value['UTI_ID'] == $_smarty_tpl->tpl_vars['com']->value['UTI_ID']) {?>
							<table border="1">
								<tr><td style="background-color : grey; color : white;">Auteur : <?php echo $_smarty_tpl->tpl_vars['uticom']->value['UTI_NOM'];?>
 <?php echo $_smarty_tpl->tpl_vars['uticom']->value['UTI_PRENOM'];?>

						<?php }?>
					<?php
$_smarty_tpl->tpl_vars['uticom'] = $foreach_uticom_Sav;
}
?>
					- Date : <?php echo $_smarty_tpl->tpl_vars['com']->value['COM_DATE'];?>

					</td></tr>
					<tr><td>Commentaire : <?php echo $_smarty_tpl->tpl_vars['com']->value['COM_TEXTE'];?>
</td></tr>
					</table>
				</article><br>				
			<?php }?>
		<?php
$_smarty_tpl->tpl_vars['com'] = $foreach_com_Sav;
}
?>

	<?php }?>

	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['uti_info'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['uti_info'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['uti_info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['uti_info']->value) {
$_smarty_tpl->tpl_vars['uti_info']->_loop = true;
$foreach_uti_info_Sav = $_smarty_tpl->tpl_vars['uti_info'];
?>
		<?php if (isset($_SESSION['login']) && $_SESSION['login'] != $_smarty_tpl->tpl_vars['uti_info']->value['UTI_LOGIN']) {?>
			<form id="form" action="" method="post">
				<fieldset>
					<legend>Nouveau commentaire</legend>
					<label for="form-newcom">Votre commentaire : </label><br>
					<textarea required form="form" name="newcom" id="form-newcom" rows="10" cols="50" style="resize:none;"></textarea><br>
					<input type="submit" name="form-send" value="Envoyer"/>
				</fieldset>
			</form>
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['uti_info'] = $foreach_uti_info_Sav;
}
?>


			</main>
			<div class="divieur"></div>
			<footer>
				<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</footer>
		</div>
	</body>

</html>
<?php }
}
?>