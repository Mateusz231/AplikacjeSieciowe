<?php
/* Smarty version 4.5.3, created on 2024-11-26 19:12:56
  from 'C:\xampp\htdocs\AplikacjeSieciowe\projekt\app\views\chess_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67460fa89089d2_95205176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3bf4525615e4bdd6c549c962c85b5a5ecbb7d14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\projekt\\app\\views\\chess_page.tpl',
      1 => 1732644773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67460fa89089d2_95205176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159765026467460fa88f10b2_76578245', 'sidebar');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111837568567460fa88f6445_19666705', "header2");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145463543067460fa88f8714_73185933', 'content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84818087567460fa8906626_64850264', 'player');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'sidebar'} */
class Block_159765026467460fa88f10b2_76578245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_159765026467460fa88f10b2_76578245',
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
class Block_111837568567460fa88f6445_19666705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header2' => 
  array (
    0 => 'Block_111837568567460fa88f6445_19666705',
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

<!-- Load chess.js first -->


<!-- Load chessboard.js next -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/chessboardjs-1.0.0/js/chessboard-1.0.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/chess-0.10.2/chess-0.10.2.min.js"><?php echo '</script'; ?>
>
<!-- Your custom script goes last -->


<?php
}
}
/* {/block "header2"} */
/* {block 'content'} */
class Block_145463543067460fa88f8714_73185933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_145463543067460fa88f8714_73185933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="myBoard" style="width: 400px"></div>
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
class Block_84818087567460fa8906626_64850264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'player' => 
  array (
    0 => 'Block_84818087567460fa8906626_64850264',
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
