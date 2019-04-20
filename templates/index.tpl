<!DOCTYPE html>
<html>
<head>
	<title>Panel użytkownika</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--<script src="js/script.js"></script>-->
</head>
<body>
{if $smarty.GET.page eq 1}
	{include file='../modules/panel-article/templates/_connector.tpl'}
{/if}
</body>
</html>	