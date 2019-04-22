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
	<header>
		<div class="row">
			<div class="col">
				<div class="header__element">
					<p>Zalogowany: <span>{$login}</span></p>
					<a class="button logout" href="/cms/functions.php?logout=true">Wyloguj</a>
				</div>
			</div>
		</div>
	</header>
{if $smarty.GET.page eq 1}
	{include file='../modules/panel-article/templates/_connector.tpl'}
{/if}
</body>
</html>	