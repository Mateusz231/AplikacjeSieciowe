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
		    	<th>Login/Nickname 
    			<a href="{$conf->action_root}search/login/asc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▲</a>
				<a href="{$conf->action_root}search/login/desc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▼</a>
			</th>
			<th>Ilosc gier 
    		<a href="{$conf->action_root}search/gamesplayed/asc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▲</a>
			<a href="{$conf->action_root}search/gamesplayed/desc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▼</a>
			</th>
			<th>Wygrane 
<a href="{$conf->action_root}search/wins/asc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▲</a>
<a href="{$conf->action_root}search/wins/desc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▼</a>
			</th>


			<th>Przegrane
<a href="{$conf->action_root}search/loses/asc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▲</a>
<a href="{$conf->action_root}search/loses/desc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▼</a>
			</th>

			<th>Remisy
<a href="{$conf->action_root}search/draws/asc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▲</a>
<a href="{$conf->action_root}search/draws/desc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▼</a>
			</th>

			

			<th>Ranking 
<a href="{$conf->action_root}search/rankings/asc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▲</a>
<a href="{$conf->action_root}search/rankings/desc/{$current_page}/{$slogin|default:''}/{$srank|default:''}">▼</a>
			</th>
														
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



<ul class="pagination">
   {if $current_page > 1}
    <li><a href="{$conf->action_root}search/{$URL[0]}/{$URL[1]}/{$current_page-1}/{$slogin|default:''}/{$srank|default:''}" class="button">Prev</a></li>
{else}
    <li><span class="button disabled">Prev</span></li>
{/if}

{for $i=1 to $total_pages}
    {if $i == $current_page}
        <li><a href="#" class="page active">{$i}</a></li>
    {else}
        <li><a href="{$conf->action_root}search/{$URL[0]}/{$URL[1]}/{$i}/{$slogin|default:''}/{$srank|default:''}" class="page">{$i}</a></li>
    {/if}
{/for}

{if $current_page < $total_pages}
    <li><a href="{$conf->action_root}search/{$URL[0]}/{$URL[1]}/{$current_page+1}/{$slogin|default:''}/{$srank|default:''}" class="button">Next</a></li>
{else}
    <li><span class="button disabled">Next</span></li>
{/if}
</ul>              
														 
                         
			




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



