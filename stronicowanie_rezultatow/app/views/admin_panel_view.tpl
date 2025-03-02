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
<form method="post" action="{$conf->action_root}adminsearch">
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
																	<th>Login/Nickname <a href="{$conf->action_root}adminsearch/login/asc">▲</a><a href="{$conf->action_root}adminsearch/login/desc">▼</a></th>
																	<th>Ilosc gier <a href="{$conf->action_root}adminsearch/gamesplayed/asc">▲</a><a href="{$conf->action_root}adminsearch/gamesplayed/desc">▼</a></th>
																	<th>Wygrane <a href="{$conf->action_root}adminsearch/wins/asc">▲</a><a href="{$conf->action_root}adminsearch/wins/desc">▼</a></th>
                                                                    <th>Przegrane <a href="{$conf->action_root}adminsearch/loses/asc">▲</a><a href="{$conf->action_root}adminsearch/loses/desc">▼</a></th>
                                                                    <th>Remisy <a href="{$conf->action_root}adminsearch/draws/asc">▲</a><a href="{$conf->action_root}adminsearch/draws/desc">▼</a></th>
                                                                    <th>Ranking <a href="{$conf->action_root}adminsearch/rankings/asc">▲</a><a href="{$conf->action_root}adminsearch/rankings/desc">▼</a></th>
                                                                    <th>Edycja</th>
																</tr>
															</thead>
															<tbody>
																

                                                                
                                                                {foreach $tabela as $item} 
                                                                <tr>       
                                                                <td>{$item['login']}</td>        
                                                                <td>{$item['gamesplayed']}</td>
                                                                <td>{$item['wins']}</td>
                                                                <td>{$item['loses']}</td>
                                                                <td>{$item['draws']}</td>
                                                                <td>{$item['rating']}</td>
                                                                <td> <a class="actions" href="{$conf->action_root}adminedit/{$item['userid']}">
											                    <input type="submit" value="Edytuj" class="primary" />
										                        </a>
                                                                
                                                                <a class="actions" href="{$conf->action_root}admindelete/{$item['userid']}">
											                    <input type="submit" value="Usuń" class="primary" />
										                        </a>
                                                                
                                                                
                                                                
                                                                </td>    
                                                                </tr>
																
                                                                {/foreach}    
                                                                
                                                                

															</tbody>
														
														</table>

														
													</div>



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



