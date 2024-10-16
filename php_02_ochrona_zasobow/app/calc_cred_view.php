
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





  <form action="<?php print(_APP_ROOT); ?>/app/calc_cred.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator</legend>
	<fieldset>
		<label for="zl1">Kwota na jaka kredyt: </label>
		<input id="zl1" type="text" name="zl" value="<?php out($kredyt) ?>" />
		
		<label for="rok1">Na ile lat: </label>
		<input id="rok1" type="text" name="rok" value="<?php out($rok) ?>" />

        <label for="op1">Oprocentowanie: </label>
		<input id="op1" type="text" name="op" value="<?php out($oprocentowanie) ?>" />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	



<?php

 if(isset($messages)){

    if(count($messages)>0){

      echo '<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">';

      foreach ($messages as $key) {
        echo '<li>'.$key.'</li>';
      }

      echo'</ol>';

    }


 }


?>



<?php 

if(isset($result)){
    echo'<div style= "margin: 20px; padding: 20px; witdh: 300px; background-color: rgb(0,255,0);" >';
    echo'Miesieczna rata to: '.$result. ' zł';
    echo'</div>';
}

?>
    

</div>

   </body> 
</html>