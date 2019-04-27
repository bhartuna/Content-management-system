{if $smarty.GET.sub eq 1}
	{include file='./list-article.tpl'}
{elseif $smarty.GET.sub eq 2}
	{include file='./add-article.tpl'}
{/if}