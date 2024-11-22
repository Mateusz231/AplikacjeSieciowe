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

									<li><a href="{$conf->action_root}loginShow">Zaloguj</a></li>
									<li><a href="{$conf->action_root}MainPage">Strona główna</a></li>

										
	
																	
									</ul>
								</nav>



{/block}




{block name="content"}






<form method="post" action="{$conf->action_root}adminedit">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="elogin" id="demo-name" value="" placeholder="Login" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="password" name="email" id="demo-email" value="" placeholder="Password" />
									</div>

									<div class="col-12 col-12-xsmall">
										<input type="password" name="enickname" id="demo-email" value="" placeholder="Password" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="password" name="ecountry" id="demo-email" value="" placeholder="Password" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="password" name="efirstname" id="demo-email" value="" placeholder="Password" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="password" name="elastname" id="demo-email" value="" placeholder="Password" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="password" name="erating" id="demo-email" value="" placeholder="Password" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="password" name="erole" id="demo-email" value="" placeholder="Password" />
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





