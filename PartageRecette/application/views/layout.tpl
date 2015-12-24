<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Welcome on what to cook </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
							   integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<header>
				{include '../layout/layout_entete.inc.tpl'}
			</header>
			<main>
				{block name="main"}{/block}
			</main>
			<footer>
				{include '../layout/layout_pied.inc.tpl'}
			</footer>
		</div>
	</body>

</html>
