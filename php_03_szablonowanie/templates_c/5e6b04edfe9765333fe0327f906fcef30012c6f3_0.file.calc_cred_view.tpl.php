<?php
/* Smarty version 4.5.3, created on 2024-10-22 00:47:55
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_03_szablonowanie\app\calc_cred_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6716da1b347a99_48434903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e6b04edfe9765333fe0327f906fcef30012c6f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_03_szablonowanie\\app\\calc_cred_view.tpl',
      1 => 1729550871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6716da1b347a99_48434903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<html>
    <head>
    <meta charset="UTF-8"/>
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">    
    </head>

   <body>

    
<div style="width:90%; margin: 2em auto;">
	<a href="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
  <?php echo '<?php'; ?>


  if(isset($role) && $role=='admin'){
    echo '<a href="' . _APP_ROOT . 'app/admin_page.php" class="pure-button">Admin</a>';
  }

  <?php echo '?>'; ?>





  <form action="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/app/calc_cred.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator</legend>
	<fieldset>
		<label for="zl1">Kwota na jaka kredyt: </label>
		<input id="zl1" type="text" name="zl" value="<?php echo '<?php'; ?>
 out($form['kredyt']) <?php echo '?>'; ?>
" />
		
		<label for="rok1">Na ile lat: </label>
		<input id="rok1" type="text" name="rok" value="<?php echo '<?php'; ?>
 out($form['rok']) <?php echo '?>'; ?>
" />

        <label for="op1">Oprocentowanie: </label>
		<input id="op1" type="text" name="op" value="<?php echo '<?php'; ?>
 out($form['oprocentowanie']) <?php echo '?>'; ?>
" />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	



<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>



<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>
    

</div>

   </body> 
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
}
