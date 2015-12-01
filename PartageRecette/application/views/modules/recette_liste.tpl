{extends '../layout.tpl'}
{block name=main}
	{foreach $data['cat_req'] as $row}
		<article>
			{foreach $row as $value}
				{$value}
			{/foreach}
			<a href='index.php?page=liste&idc='.{$data['cat_req']}>Voir les recettes</a>
		</article>
	{/foreach}
{/block}