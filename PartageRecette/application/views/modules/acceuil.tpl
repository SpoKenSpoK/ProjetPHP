{include 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl'}
{block name=main}
	<article>
		<p>BIENVENUE NARVALO</p>
	</article>
	<section>
		{foreach $data['alea'] as $value}
			{$value}
		{/foreach}
		<p>bonjour</p>
	</section>
{/block}