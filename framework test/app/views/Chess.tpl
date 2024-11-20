{extends file="main.tpl"}



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
									 <li><a href="{$conf->action_root}szachy">Chess</a></li> 
									<li><a href="{$conf->action_root}admin_page">Admin page</a></li>
									{/if}		

										
	
																	
									</ul>
								</nav>



{/block}


{block name="header2"}
<link rel="stylesheet" href="{$conf->app_url}/lib/chessboardjs-1.0.0/css/chessboard-1.0.0.css" />

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2"
        crossorigin="anonymous"></script>

<!-- Load chess.js first -->


<!-- Load chessboard.js next -->
<script src="{$conf->app_url}/lib/chessboardjs-1.0.0/js/chessboard-1.0.0.min.js"></script>
<script src="{$conf->app_url}/app/controllers/chess-0.10.2.min.js"></script>
<!-- Your custom script goes last -->


{/block}
{block name=result}
<div id="myBoard" style="width: 400px"></div>
<script src="{$conf->app_url}/app/controllers/abc.js"></script>



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


{/block}


{block name=player}

 {foreach $tabela as $item} 
                                                                <tr>       
                                                                <td>{$item['login_name']}</td>
																<td>{$item['ranking']}</td>	
                                                                </tr>
                                                                {/foreach}    


{/block}