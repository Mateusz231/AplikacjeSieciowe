{extends file="main.tpl"}


{block name=sidebar}
<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>

									
									{if count($conf->roles)<=0}

									<li><a href="{$conf->action_root}loginShow">Zaloguj</a></li>
									<li><a href="{$conf->action_root}RegisterShow">Zarejestruj sie</a></li>


									{/if}	



									{if count($conf->roles)>0}

									<li><a href="{$conf->action_root}logout">Wyloguj sie</a></li>
									<li><a href="{$conf->action_root}play">Graj</a></li>
									<li><a href="{$conf->action_root}search">Ranking graczy</a></li>
									<li><a href="{$conf->action_root}profile/{$id}">Twój profil</a></li>
									<li><a href="{$conf->action_root}news">Wiadomości</a></li>
									{if \core\RoleUtils::inRole("admin")}

									<li><a href="{$conf->action_root}adminsearch">Panel admina</a></li>

									{/if}			

									{/if}										
	
																	
									</ul>
								</nav>



{/block}



{block name=content}

  <h1>Witamy w naszej aplikacji szachowej!</h1>
    <p>Rozwijaj swoje umiejętności, rywalizuj z innymi graczami i zdobywaj ranking. Zapraszamy do gry!</p>


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