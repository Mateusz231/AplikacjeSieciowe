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
<form method="post" action="{$conf->action_root}search">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="slogin" id="demo-name" value="" placeholder="Login" />
									</div>

									<div class="col-12 col-12-xsmall">
										<input type="text" name="srank" id="demo-name" value="" placeholder="Ranking" />
									</div>


									
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Filtruj" class="primary" /></li>
										</ul>
									</div>
								</div>
</form>


<div class="table-wrapper">
														<table>
															<thead>
																<tr>
																	<th>Login/Nickname <a href="{$conf->action_root}search/login/asc">▲</a><a href="{$conf->action_root}search/login/desc">▼</a></th>
																	<th>Ilosc gier <a href="{$conf->action_root}search/gamesplayed/asc">▲</a><a href="{$conf->action_root}search/gamesplayed/desc">▼</a></th>
																	<th>Wygrane <a href="{$conf->action_root}search/wins/asc">▲</a><a href="{$conf->action_root}search/wins/desc">▼</a></th>
                                                                    <th>Przegrane <a href="{$conf->action_root}search/loses/asc">▲</a><a href="{$conf->action_root}search/loses/desc">▼</a></th>
                                                                    <th>Remisy <a href="{$conf->action_root}search/draws/asc">▲</a><a href="{$conf->action_root}search/draws/desc">▼</a></th>
                                                                    <th>Ranking <a href="{$conf->action_root}search/rankings/asc">▲</a><a href="{$conf->action_root}search/rankings/desc">▼</a></th>
														
																</tr>
															</thead>
															<tbody>
																

                                                                
                                                                {foreach $tabela as $item} 
                                                                <tr>       
                                                                <td><a href="{$conf->action_root}profile/{$item['userid']}"> {$item['login']} </a></td> 
																    
                                                                <td>{$item['gamesplayed']}</td>
                                                                <td>{$item['wins']}</td>
                                                                <td>{$item['loses']}</td>
                                                                <td>{$item['draws']}</td>
                                                                <td>{$item['rating']}</td>
														 
                                                                </tr>
																
                                                                {/foreach}    
                                                                
                                                                

															</tbody>
														
														</table>

														
													</div>



{/block}





<section>
{block name=messages}

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
</section>



