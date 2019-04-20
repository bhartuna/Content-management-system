<div class="container">
	<div class="row">
		<div class="col">
			<div class="columns">
                <div class="column">
                    <div class="column__element">Id</div>
                    <div class="column__element"> Tytuł</div>
                    <div class="column__element">Odnośnik</div>
                    <div class="column__element">Data dodania</div>
                    <div class="column__element">Kategoria</div>
                    <div class="column__element"></div>
                </div>
            </div>
            <div class="articles">   
{section name=article loop=$articles}
                <div class="article">
                    <div class="article__element">{$articles[article].ar_id}</div>
                    <div class="article__element">{$articles[article].ar_title}</div>
                    <div class="article__element">{$articles[article].ar_link}</div>
                    <div class="article__element">{$articles[article].ar_date}</div>
                    <div class="article__element">{$articles[article].ca_name}</div>
                    <div class="article__element">
                        <a class="deleteArticle">Usuń</a>
                    </div>
                </div>
{/section}
                <a class="button" href="">Nowy wpis</a>
            </div>
		</div>
	</div>
</div>