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


<div class="table-wrapper">
														<table>
															<thead>
																<tr>
																	<th>Login/Nickname</th>
																	<th>Ilosc gier</th>
																	<th>Wygrane</th>
                                                                    <th>Przegrane</th>
                                                                    <th>Remisy</th>
                                                                    <th>Ranking</th>
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



