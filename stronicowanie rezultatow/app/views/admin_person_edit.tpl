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






<form method="post" action="{$conf->action_root}admineditSave/{$dane->id}">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="elogin" id="demo-name" value="{$dane->login}" placeholder="Login" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="text" name="email" id="demo-email" value="{$dane->email}" placeholder="email" />
									</div>

									<div class="col-12 col-12-xsmall">
										<input type="text" name="enickname" id="demo-email" value="{$dane->nickname}" placeholder="nickname" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="text" name="ecountry" id="demo-email" value="{$dane->country}" placeholder="country" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="text" name="efirstname" id="demo-email" value="{$dane->firstname}" placeholder="firstname" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="text" name="elastname" id="demo-email" value="{$dane->lastname}" placeholder="lastname" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="text" name="erating" id="demo-email" value="{$dane->rating}" placeholder="rating" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="text" name="erole" id="demo-email" value="{$dane->role}" placeholder="role" />
									</div>


								</br>
									

									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Zapisz zmiany" class="primary" /></li>
										</ul>
									</div>
								</div>
</form>


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





