{extends file="main.tpl"}



{block name=sidebar}
<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>

                                    <li><a href="{$conf->action_root}MainPage">Strona główna</a></li> 
									
																
									</ul>
								</nav>



{/block}


{block name=content}




<section>
	{* wyświeltenie listy błędów, jeśli istnieją *}


	{if $msgs->isError()} 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,0,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $msgs->getErrors() as $err}
		{strip}
			<li>{$err}</li>
		{/strip}
		{/foreach}

		</ol>
		</div>	



{/if}


{/block}


