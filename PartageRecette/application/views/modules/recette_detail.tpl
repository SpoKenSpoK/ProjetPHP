		<h2 class="Label_idc">{$data['label_cat']}</h2>
		{foreach $data['rct_req'] as $rct}
			<article class="rct">

				<h3 class="titre_rct_list">{$rct.RCT_TITRE}</h3>

				<ul class="ul_list_rct">
					<li>Préparation: {$rct.RCT_TEMPS_PREPARATION} </li>
					<li>Cuisson: {$rct.RCT_TEMPS_CUISSON}</li>
					<li>Coût: {$rct.RCT_COUT}</li>
					<li>Difficulté: {$rct.RCT_DIFFICULTE}</li>
					<li>Nombre de personnes: {$rct.RCT_NBPERSONNE}</li>
				</ul>

				<p class="description_rct">
				{$rct.RCT_DESCRIPTION}
				</p>

			</article>
		{/foreach}