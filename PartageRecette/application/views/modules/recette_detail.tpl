{extends '../layout.tpl'}
{block name=main}
	{if isset($data['rct_req'])}

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

				{foreach $data['uti_info'] as $uti}
					<img class="img_detail" src={"../media/"|cat:$uti.UTI_LOGIN|cat:$rct.RCT_ILLUSTRATION} alt={"img_rct_"|cat: $rct.RCT_ID}>
				{/foreach}

				<p class="separateur"/>

				<p>
					{$rct.RCT_TITRE}<br/>
					<i>recette proposée par</i> {foreach $data['uti_info'] as $uti}{$uti.UTI_PRENOM}{/foreach}
				</p>

				<p class="separateur"/>

				<p class="description_rct">
				{$rct.RCT_DESCRIPTION}
				</p>

			</article>
		{/foreach}

	{/if}

{/block}