<?php
/* Smarty version 4.5.3, created on 2024-11-26 18:49:47
  from 'C:\xampp\htdocs\AplikacjeSieciowe\projekt\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67460a3b30bfd0_14187896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec7d384f2050abc6adaa511fd9f381a1c808feb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\projekt\\app\\views\\login_view.tpl',
      1 => 1732115350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67460a3b30bfd0_14187896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123217375167460a3b0091c6_26558108', 'header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7081069767460a3b0fbb61_92342093', 'sidebar');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155332639767460a3b0fd503_16347833', "content");
?>






<section>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20412552667460a3b0fe8d4_90985269', 'messages');
?>

</section>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_123217375167460a3b0091c6_26558108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_123217375167460a3b0091c6_26558108',
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
class Block_7081069767460a3b0fbb61_92342093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_7081069767460a3b0fbb61_92342093',
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
/* {block "content"} */
class Block_155332639767460a3b0fd503_16347833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_155332639767460a3b0fd503_16347833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
doLogin">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="login" id="demo-name" value="" placeholder="Login" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="password" name="pass" id="demo-email" value="" placeholder="Password" />
									</div>


								</br>
									

									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Zaloguj" class="primary" /></li>
										</ul>
									</div>
								</div>
</form>


<?php
}
}
/* {/block "content"} */
/* {block 'messages'} */
class Block_20412552667460a3b0fe8d4_90985269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_20412552667460a3b0fe8d4_90985269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="alert alert-danger">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
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
