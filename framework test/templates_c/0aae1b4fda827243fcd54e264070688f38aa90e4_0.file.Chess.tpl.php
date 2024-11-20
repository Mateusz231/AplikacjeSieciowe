<?php
/* Smarty version 4.5.3, created on 2024-11-08 15:17:40
  from 'C:\xampp\htdocs\AplikacjeSieciowe\projekt\app\views\Chess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_672e1d8423ce42_26100541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aae1b4fda827243fcd54e264070688f38aa90e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\projekt\\app\\views\\Chess.tpl',
      1 => 1731074659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672e1d8423ce42_26100541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_573781449672e1d8421e4a0_08231648', 'sidebar');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1614544376672e1d8422b167_50324025', "header2");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43305850672e1d8422d3f4_69565287', 'result');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1057268816672e1d8423a6a9_11556262', 'player');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'sidebar'} */
class Block_573781449672e1d8421e4a0_08231648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_573781449672e1d8421e4a0_08231648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>

									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
doLogout">Wyloguj</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
show_calc">Kalkulator</a></li>   
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
MainPage">Strona główna</a></li> 
									
                                     
									<?php if ($_smarty_tpl->tpl_vars['user']->value->role == 'admin') {?>
									 <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
szachy">Chess</a></li> 
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
admin_page">Admin page</a></li>
									<?php }?>		

										
	
																	
									</ul>
								</nav>



<?php
}
}
/* {/block 'sidebar'} */
/* {block "header2"} */
class Block_1614544376672e1d8422b167_50324025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header2' => 
  array (
    0 => 'Block_1614544376672e1d8422b167_50324025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/chessboardjs-1.0.0/css/chessboard-1.0.0.css" />

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2"
        crossorigin="anonymous"><?php echo '</script'; ?>
>

<!-- Load chess.js first -->


<!-- Load chessboard.js next -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/chessboardjs-1.0.0/js/chessboard-1.0.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/controllers/chess-0.10.2.min.js"><?php echo '</script'; ?>
>
<!-- Your custom script goes last -->


<?php
}
}
/* {/block "header2"} */
/* {block 'result'} */
class Block_43305850672e1d8422d3f4_69565287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_43305850672e1d8422d3f4_69565287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="myBoard" style="width: 400px"></div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/controllers/abc.js"><?php echo '</script'; ?>
>



<section>
	

	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?> 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,0,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		</ol>
		</div>	



<?php }?>


<?php
}
}
/* {/block 'result'} */
/* {block 'player'} */
class Block_1057268816672e1d8423a6a9_11556262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'player' => 
  array (
    0 => 'Block_1057268816672e1d8423a6a9_11556262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabela']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
                                                                <tr>       
                                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['login_name'];?>
</td>
																<td><?php echo $_smarty_tpl->tpl_vars['item']->value['ranking'];?>
</td>	
                                                                </tr>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    


<?php
}
}
/* {/block 'player'} */
}
