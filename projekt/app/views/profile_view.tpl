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




{block name="content"}



{/block}



<section>
{block name=messages}

{if $msgs->isMessage()}
<div class="msg">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="{if $msg->isError()}alert alert-danger{/if} 
		{if $msg->isWarning()}alert alert-warning{/if}
		 {if $msg->isInfo()}alert alert-success{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}



</section>





