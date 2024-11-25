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

<div class="box">

  {foreach $tabela2 as $item} 
   <h2>Login: {$item.login} <span class="fi fi-pl fis"></span></h2> 
   <h4>First Name: {$item.firstname} Last Name: {$item.lastname}</h4>
    <h6>Ranking: {$item.rating}</h6>
 {/foreach}  

 <img src="{$conf->action_root}/assets/bN.png">
</div>


<h2>Ostatnie gry: </h2>

<div class="table-wrapper">
														<table>
															<thead>
																<tr>
																	<th>Gracze</th>
																	<th>Wynik</th>
                                                                    <th>Data</th>

														
																</tr>
															</thead>
															<tbody>
																

                                                                
                                                                {foreach $tabela3 as $item} 
                                                                <tr>       
                                                                <td>{$item.black_login}--{$item.white_login}</td>        
                                                                <td><button class="button primary"> {$item.user_result}</button></td>   
																<td>{$item.date}</td>
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





