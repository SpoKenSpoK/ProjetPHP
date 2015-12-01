<?php

	$request=$PDO_BDD->query('SELECT CAT_LABEL,CAT_DESCRIPTION, CAT_ILLUSTRATION, CAT_ID
FROM t_categorie_cat');

	$data['cat_req'] = $request->fetchAll(PDO::FETCH_ASSOC);

?>