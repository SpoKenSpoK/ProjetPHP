	if(isset($_REQUEST['idr'])){

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
		   RCT_NBPERSONNE
	FROM t_recette_rct
	where RCT_ID = $_REQUEST['idr'];

		

		$data['rct_req'] = $request->fetchAll(PDO::FETCH_ASSOC);

		foreach($PDO_BDD->query('SELECT CAT_LABEL from t_categorie_cat where CAT_ID = '.$_REQUEST['idc']) as $row)
		$data['label_cat'] = $row['CAT_LABEL'];
