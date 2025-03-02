<?php
/* Smarty version 4.5.3, created on 2024-11-30 15:15:40
  from 'C:\xampp\htdocs\AplikacjeSieciowe\projekt\app\views\register_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_674b1e0c883b78_65249346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307f48fa7776d5c659fd7063024ed03e21cb38cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\projekt\\app\\views\\register_view.tpl',
      1 => 1731885583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b1e0c883b78_65249346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2085120161674b1e0c85ab35_41517652', 'header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1538032806674b1e0c864807_96785663', 'sidebar');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119475913674b1e0c866ae0_52418799', "content");
?>




<section>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1126020415674b1e0c868949_52210714', 'messages');
?>




</section>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_2085120161674b1e0c85ab35_41517652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2085120161674b1e0c85ab35_41517652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p><?php echo $_smarty_tpl->tpl_vars['page_header']->value;?>
</p>
<?php
}
}
/* {/block 'header'} */
/* {block 'sidebar'} */
class Block_1538032806674b1e0c864807_96785663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_1538032806674b1e0c864807_96785663',
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
loginShow">Zaloguj</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
MainPage">Strona główna</a></li>

										
	
																	
									</ul>
								</nav>



<?php
}
}
/* {/block 'sidebar'} */
/* {block "content"} */
class Block_119475913674b1e0c866ae0_52418799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_119475913674b1e0c866ae0_52418799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>







<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="rlogin" id="demo-name" value="" placeholder="Login" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="password" name="rpass" id="demo-email" value="" placeholder="Password" />
									</div>

									<div class="col-12 col-12-xsmall">
										<input type="password" name="rpass2" id="demo-email" value="" placeholder="Password" />
									</div>


								</br>
									

									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Zarejestruj" class="primary" /></li>
										</ul>
									</div>
								</div>
</form>


<?php
}
}
/* {/block "content"} */
/* {block 'messages'} */
class Block_1126020415674b1e0c868949_52210714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1126020415674b1e0c868949_52210714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="msg">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="<?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert alert-danger<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert alert-warning<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert alert-success<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
}
