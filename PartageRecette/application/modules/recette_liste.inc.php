<?php

	$request=$PDO_BDD->query('SELECT CAT_LABEL,CAT_DESCRIPTION, CAT_ILLUSTRATION, CAT_ID
FROM t_categorie_cat');

	$data['cat_req'] = $request->fetchAll(PDO::FETCH_ASSOC);

	if(isset($_REQUEST['idc'])){

		$request=$PDO_BDD->query('SELECT RCT_ID,
		   RCT_DATE,
		   RCT_TITRE,
		   RCT_DESCRIPTION,
		   RCT_TEMPS_PREPARATION,
		   RCT_TEMPS_CUISSON,
		   RCT_TEMPS_REPOS,
		   RCT_DIFFICULTE,
		   RCT_COUT,
		   RCT_STATUT,
		   RCT_ILLUSTRATION,
		   RCT_NBPERSONNE,
		   UTI_ID
	FROM t_recette_rct
	where RCT_ID IN (SELECT RCT_ID
					from tj_cat_rct
					where cat_id = '.$_REQUEST['idc'].')');

		

		$data['rct_req'] = $request->fetchAll(PDO::FETCH_ASSOC);

		$request=$PDO_BDD->query('SELECT CAT_LABEL, CAT_DESCRIPTION from t_categorie_cat where CAT_ID = '.$_REQUEST['idc']);
		$data['label_cat_desc'] = $request->fetchAll(PDO::FETCH_ASSOC);

		$request=$PDO_BDD->query('SELECT UTI_ID,
		UTI_LOGIN,
		UTI_NOM,
		UTI_PRENOM
		from t_utilisateur_uti
		where UTI_ID IN (SELECT UTI_ID
						FROM t_recette_rct
						where RCT_ID IN (SELECT RCT_ID
										from tj_cat_rct
										where cat_id = '.$_REQUEST['idc'].'))');
		$data['uti_info'] = $request->fetchAll(PDO::FETCH_ASSOC);



	}

?>