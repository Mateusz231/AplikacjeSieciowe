{extends file="main.tpl"}


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

									<li><a href="{$conf->action_root}doLogout">Wyloguj</a></li>
                                    <li><a href="{$conf->action_root}show_calc">Kalkulator</a></li>   
                                    <li><a href="{$conf->action_root}MainPage">Strona główna</a></li> 
                                     
									{if $user->role eq 'admin'}

									<li><a href="{$conf->action_root}admin_page">Admin page</a></li>
									{/if}		

										
	
																	
									</ul>
								</nav>



{/block}

{block name="content"}




{/block}


{block name=result}

<section>
	{* wyświeltenie listy błędów, jeśli istnieją *}


	{if $msgs->isError()} 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,0,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $msgs->getErrors() as $err}
		{strip}
			<li>{$err}</li>
		{/strip}
		{/foreach}

		</ol>
		</div>	



{/if}

<div class="table-wrapper">
														<table>
															<thead>
																<tr>
																	<th>IdWynik</th>
																	<th>Kwota</th>
																	<th>Lat</th>
                                                                    <th>Procent</th>
                                                                    <th>Rata</th>
                                                                    <th>Data</th>
																</tr>
															</thead>
															<tbody>
																

                                                                
                                                                {foreach $tabela as $item} 
                                                                <tr>       
                                                                <td>{$item['Idwynik']}</td>
                                                                <td>{$item['kwota']}</td>
                                                                <td>{$item['lat']}</td>
                                                                <td>{$item['procent']}</td>
                                                                <td>{$item['rata']}</td>
                                                                <td>{$item['data']}</td>    
                                                                </tr>
                                                                {/foreach}    
                                                                
                                                                

															</tbody>
														
														</table>
													</div>





{* wyświeltenie listy informacji, jeśli istnieją *}


	{if $msgs->isInfo()} 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,255,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Informacje: </h4>
		<ol >
		{foreach  $msgs->getInfos() as $infos}
		{strip}
			<li>{$infos}</li>
		{/strip}
		{/foreach}
		</ol>
			</div> 
	{/if}

 




</section>

{/block}

