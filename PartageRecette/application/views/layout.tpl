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
				{include '../layout/layout_entete.inc.tpl'}
			</header>
			<div class="divieur"></div>
			<main>
				{block name="main"}{/block}
			</main>
			<div class="divieur"></div>
			<footer>
				{include '../layout/layout_pied.inc.tpl'}
			</footer>
		</div>
	</body>

</html>
