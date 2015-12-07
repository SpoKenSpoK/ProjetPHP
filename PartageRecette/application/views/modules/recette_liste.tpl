{extends '../layout.tpl'}
{block name=main}
	{foreach $data['cat_req'] as $cat}
		<article>
			<img src= {"media/categories/"|cat: $cat.CAT_ILLUSTRATION}/>		
			<h2>{$cat.CAT_LABEL}</h2>
			<p>{$cat.CAT_DESCRIPTION}</p>
			<a href={'index.php?page=liste&idc='|cat: $cat.CAT_ID}>Voir les recettes</a>
		</article>
	{/foreach}
{/block}