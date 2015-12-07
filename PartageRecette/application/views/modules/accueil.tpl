{extends '../layout.tpl'}
{block name=main}
	<article>
		<p>BIENVENUE NARVALO</p>
	</article>
	<section>
		{foreach $data['alea'] as $value}
			{$value}
		{/foreach}
	</section>
{/block}