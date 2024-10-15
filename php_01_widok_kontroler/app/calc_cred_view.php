<?php require_once dirname(__FILE__). '/../config.php';?>
<html>
    <head>
    <meta charset="UTF-8"/>
    <title>Kalkulator kredytowy</title>    
    </head>

   <body>

  <form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="POST">


  <label for="zl1">Kwota na jaka kredyt:</label>
  <input id="zl1"type="number" name="zl"><br> 
  <label for="rok1">Na ile lat: </label>
  <input type="number" id="rok1" name="rok"><br>
  <label for ="op1">Oprocentowanie: </label>
  <input type="number" id="op1" name="op">
  <br> 



  <input type="submit" value="Oblicz"> 

  </form>  





<?php

 if(isset($messages)){

    if(count($messages)>0){

      echo '<ol style="margin: 20px; padding: 20px; witdh: 500px; border-radius: 10px; background-color: rgb(255,0,0);">';  

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
    

   </body> 
</html>