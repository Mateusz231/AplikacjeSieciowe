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
{if \core\RoleUtils::inRole("moderator")}
    <br> 
	<button ><a href="{$conf->action_root}addpost">Dodaj post</a></button>

	{/if}

	<form id="search-form" onsubmit="ajaxPostForm('search-form','{$conf->action_root}refreshNews','News'); return false;">
	<fieldset>
		<button type="submit">Odswież</button>
	</fieldset>
</form>	



<div id="News">
{include file="PostsTable.tpl"}
</div>


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


