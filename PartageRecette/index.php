{include 'config.inc.php'}

<?php
	$smarty->assign('data', array());
	{$current_page = $_GET}
	{foreach from=$_PAGES item=$element}
		{if $element == $current_page}
			{$data['$element']=$current_page}
		{/if}
	{/foreach}

?>
