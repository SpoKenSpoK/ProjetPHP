{extends '../layout.tpl'}
{block name=main}
<<<<<<< HEAD
	{if isset($data['rct_req'])}

		<h2 class="Label_idc">{foreach $data['label_cat_desc'] as $cat_label}{$cat_label.CAT_LABEL}{/foreach}</h2>

		{foreach $data['rct_req'] as $rct}
			<article class="rct">

			<img class="img_rct">

				<h3 class="titre_rct_list">{$rct.RCT_TITRE}</h3>

				{foreach $data['uti_info'] as $uti}
					<img class="img_rct" src={"../media/"|cat:$uti.UTI_LOGIN|cat:$rct.RCT_ILLUSTRATION} alt={"img_rct_"|cat: $rct.RCT_ID}>
				{/foreach}

				<p class="description_rct">
				{$rct.RCT_DESCRIPTION}
				</p>

				<a class="voir_la_recettes" href={'index.php?page=details&idr='|cat: $rct.RCT_ID}>Voir la recettes</a>

			</article>
		{/foreach}


	{else}
		{foreach $data['cat_req'] as $cat}
			<article class="categories">

				<img class="img_cat" src={"../media/categories/"|cat: $cat.CAT_ILLUSTRATION} alt={"img_cat_"|cat: $cat.CAT_ID}>

				<h2 class="label_cat">{$cat.CAT_LABEL}</h2>

				<p class="description_cat">{$cat.CAT_DESCRIPTION}</p>

				<a class="voir_les_recettes" href={'index.php?page=liste&idc='|cat: $cat.CAT_ID}>Voir les recettes</a>

			</article>
		{/foreach}
	{/if}
{/block}
=======
	{foreach $data['cat_req'] as $cat}
		<article>
			<img src= {"media/categories/"|cat: $cat.CAT_ILLUSTRATION}/>		
			<h2>{$cat.CAT_LABEL}</h2>
			<p>{$cat.CAT_DESCRIPTION}</p>
			<a href={'index.php?page=liste&idc='|cat: $cat.CAT_ID}>Voir les recettes</a>
		</article>
	{/foreach}
{/block}
>>>>>>> 608e90d589d3ebcd20c7fcb5170c2c49de238970
