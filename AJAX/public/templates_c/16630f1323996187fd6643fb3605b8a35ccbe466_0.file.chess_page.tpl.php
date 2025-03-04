<?php
/* Smarty version 4.5.3, created on 2025-03-04 16:23:46
  from 'C:\xampp\htdocs\AplikacjeSieciowe\stronicowanie_rezultatow\app\views\chess_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67c71b02227977_37658875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16630f1323996187fd6643fb3605b8a35ccbe466' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\stronicowanie_rezultatow\\app\\views\\chess_page.tpl',
      1 => 1732721320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c71b02227977_37658875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100680582467c71b02216682_93263275', 'sidebar');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4135957367c71b0221ab23_98410216', "header2");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152543521367c71b0221be61_95489784', 'content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158348774767c71b02225e84_38355042', 'player');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'sidebar'} */
class Block_100680582467c71b02216682_93263275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_100680582467c71b02216682_93263275',
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
MainPage">Strona główna</a></li> 
									
																
									</ul>
								</nav>



<?php
}
}
/* {/block 'sidebar'} */
/* {block "header2"} */
class Block_4135957367c71b0221ab23_98410216 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header2' => 
  array (
    0 => 'Block_4135957367c71b0221ab23_98410216',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/chessboardjs-1.0.0/css/chessboard-1.0.0.css" />

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2"
        crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/chessboardjs-1.0.0/js/chessboard-1.0.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/chess-0.10.2/chess-0.10.2.min.js"><?php echo '</script'; ?>
>


<?php
}
}
/* {/block "header2"} */
/* {block 'content'} */
class Block_152543521367c71b0221be61_95489784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_152543521367c71b0221be61_95489784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="myBoard" style="width: 600px"></div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/abc.js"><?php echo '</script'; ?>
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
/* {/block 'content'} */
/* {block 'player'} */
class Block_158348774767c71b02225e84_38355042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'player' => 
  array (
    0 => 'Block_158348774767c71b02225e84_38355042',
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
