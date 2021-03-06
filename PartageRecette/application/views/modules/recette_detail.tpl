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
					<img class="img_detail" src={"./media/"|cat:$uti.UTI_LOGIN|cat:"/"|cat:$rct.RCT_ILLUSTRATION} height="352" width="470" alt={"img_rct_"|cat: $rct.RCT_ID}>
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
		{foreach $data['rct_com'] as $com}
			{if isset($smarty.session.login) and $smarty.session.id == $com.UTI_ID}
			<form action="" method="post">
				<article>
					{foreach $data['uti_com'] as $uticom}
						{if $uticom.UTI_ID == $com.UTI_ID}
							<table border="1">
								<tr><td style="background-color : grey; color : white;">Auteur : {$uticom.UTI_NOM} {$uticom.UTI_PRENOM}
						{/if}
					{/foreach}
					- Date : {$com.COM_DATE} 
						<input type="text" name="com_id" style="visibility: hidden;" value="{$com.COM_ID}"/>
						<input type="submit" name="del_com" value="effacer"/>
					</td></tr>
					<tr><td>Commentaire : {$com.COM_TEXTE}</td></tr>
					</table>
				</article><br>
			</form>
			{else}
				<article>
					{if isset($data['uti_com'])}
						{foreach $data['uti_com'] as $uticom}
							{if $uticom.UTI_ID == $com.UTI_ID}
								<table border="1">
									<tr><td style="background-color : grey; color : white;">Auteur : {$uticom.UTI_NOM} {$uticom.UTI_PRENOM}
							{/if}
						{/foreach}
					{else}
						<table border="1">
									<tr><td style="background-color : grey; color : white;">Auteur : Anonyme
					{/if}
					- Date : {$com.COM_DATE}
					</td></tr>
					<tr><td>Commentaire : {$com.COM_TEXTE}</td></tr>
					</table>
				</article><br>				
			{/if}
		{/foreach}

	{/if}

	{foreach $data['uti_info'] as $uti_info}
		{if isset($smarty.session.login)}
			<form id="form" action="" method="post">
				<fieldset>
					<legend>Nouveau commentaire</legend>
					<label for="form-newcom">Votre commentaire : </label><br>
					<textarea required form="form" name="newcom" id="form-newcom" rows="10" cols="50" style="resize:none;"></textarea><br>
					<input type="submit" name="form-send" value="Envoyer"/>
				</fieldset>
			</form>
		{/if}
	{/foreach}

{/block}