{extends file="../templates/main.tpl"}

<html>
    <head>
    <meta charset="UTF-8"/>
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">    
    </head>

   <body>

    
<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
  <?php

  if(isset($role) && $role=='admin'){
    echo '<a href="' . _APP_ROOT . 'app/admin_page.php" class="pure-button">Admin</a>';
  }

  ?>




  <form action="<?php print(_APP_ROOT); ?>/app/calc_cred.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator</legend>
	<fieldset>
		<label for="zl1">Kwota na jaka kredyt: </label>
		<input id="zl1" type="text" name="zl" value="<?php out($form['kredyt']) ?>" />
		
		<label for="rok1">Na ile lat: </label>
		<input id="rok1" type="text" name="rok" value="<?php out($form['rok']) ?>" />

        <label for="op1">Oprocentowanie: </label>
		<input id="op1" type="text" name="op" value="<?php out($form['oprocentowanie']) ?>" />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	



{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}



{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result)}
	<h4>Wynik</h4>
	<p class="res">
	{$result}
	</p>
{/if}
    

</div>

   </body> 
</html>