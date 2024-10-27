{extends file="../templates/main.tpl"}


{block name=header}
<p>{$page_header}</p>
{/block}


{block name=sidebar}
<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{$conf->app_url}">Strona główna </a></li>

								

									<li><a href="{$conf->app_url}/app/security/logout.php">Wyloguj</a></li>

									{if $role eq 'admin'}

									<li><a href="{$conf->app_url}/app/admin_page.php">Admin page</a></li>
									{/if}		

										
	
																	
									</ul>
								</nav>



{/block}

{block name="content"}



<form method="post" action="{$conf->app_url}/app/calc_cred.php">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="zl" id="demo-name" value="{$form->kredyt}" placeholder="Kredyt" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="text" name="rok" id="demo-email" value="{$form->rok}" placeholder="Ile lat" />
									</div>

									<div class="col-12 col-12-xsmall">
										<input type="text" name="op" id="demo-email" value="{$form->oprocentowanie}" placeholder="Oprocentowanie" />
									</div>

								</br>
									

									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Oblicz" class="primary" /></li>
										</ul>
									</div>
								</div>
							</form>


{/block}


{block name=result}

<section>
	{* wyświeltenie listy błędów, jeśli istnieją *}


	{if $messages->isError()} 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,0,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages->getErrors() as $err}
		{strip}
			<li>{$err}</li>
		{/strip}
		{/foreach}

		</ol>
		</div>	



{/if}



{* wyświeltenie listy informacji, jeśli istnieją *}


	{if $messages->isInfo()} 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,255,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Informacje: </h4>
		<ol >
		{foreach  $messages->getInfos() as $infos}
		{strip}
			<li>{$infos}</li>
		{/strip}
		{/foreach}
		</ol>
			</div> 
	{/if}

 


{if isset($result->result)}
<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(0,255,0); border-radius: 1em; color: rgb(0,0,0);" >
	<h4>Wynik</h4>
	<p style="color: rgb(0,0,0);">
	{$result->result}
	</p>
	</div> 
{/if}
   

</section>

{/block}

