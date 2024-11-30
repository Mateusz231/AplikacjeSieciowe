{extends file="main.tpl"}

{block name=header}
<p>{$page_header}</p>
{/block}

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
<form method="post" action="{$conf->action_root}savepost">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="title" id="demo-name" value="" placeholder="Tytuł" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<textarea name="content" id="demo-email" value="" placeholder="Treść" ></textarea>
									</div>

						


								</br>
									

									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Zapisz post" class="primary" /></li>
										</ul>
									</div>
								</div>
</form>

<section>
	
{if $msgs->isMessage()}
<div class="alert alert-danger">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}




{/block}


