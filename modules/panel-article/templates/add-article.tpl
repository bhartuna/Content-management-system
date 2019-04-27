{if $errors}
<div class="container bg-white">
	<div class="row">
		<div class="col">
		{section name=error loop=$errors}
            <p>{$errors[error]}</p>
        {/section}
		</div>
	</div>
</div>
{/if}
<div class="container bg-white">
	<div class="row">
		<div class="col">
			<form method="POST" action="/cms/?page=1&sub=2">
				<label>Tytuł <input type="text" class="input" name="title"></label>
				<label>Opis <input type="text" class="input" name="description"></label>
				<label>Nagłówek <input type="text" class="input" name="header"></label>
				<label>Odnośnik <input type="text" class="input" name="link"></label>
				<label>Kategoria <select class="select" name="category">
					<option value="1">test</option>
				</select></label>
				<label>Treść <textarea name="content"></textarea></label>
				<input type="submit" name="save" value="Zapisz">
			</form>
		</div>
	</div>
</div>