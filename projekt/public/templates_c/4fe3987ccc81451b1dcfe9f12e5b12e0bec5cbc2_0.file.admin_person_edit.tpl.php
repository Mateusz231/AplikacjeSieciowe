<?php
/* Smarty version 4.5.3, created on 2024-11-25 23:42:35
  from 'C:\xampp\htdocs\AplikacjeSieciowe\projekt\app\views\admin_person_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6744fd5b8c76f4_45308347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fe3987ccc81451b1dcfe9f12e5b12e0bec5cbc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\projekt\\app\\views\\admin_person_edit.tpl',
      1 => 1732396748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6744fd5b8c76f4_45308347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9898510386744fd5b8a8717_67410935', 'header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10608999356744fd5b8ae858_47340414', 'sidebar');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10371066396744fd5b8b0855_15294082', "content");
?>




<section>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19937911856744fd5b8b6615_42034767', 'messages');
?>




</section>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_9898510386744fd5b8a8717_67410935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_9898510386744fd5b8a8717_67410935',
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
class Block_10608999356744fd5b8ae858_47340414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_10608999356744fd5b8ae858_47340414',
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
class Block_10371066396744fd5b8b0855_15294082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10371066396744fd5b8b0855_15294082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>







<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
admineditSave/<?php echo $_smarty_tpl->tpl_vars['dane']->value->id;?>
">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="elogin" id="demo-name" value="<?php echo $_smarty_tpl->tpl_vars['dane']->value->login;?>
" placeholder="Login" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="text" name="email" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['dane']->value->email;?>
" placeholder="email" />
									</div>

									<div class="col-12 col-12-xsmall">
										<input type="text" name="enickname" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['dane']->value->nickname;?>
" placeholder="nickname" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="text" name="ecountry" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['dane']->value->country;?>
" placeholder="country" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="text" name="efirstname" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['dane']->value->firstname;?>
" placeholder="firstname" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="text" name="elastname" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['dane']->value->lastname;?>
" placeholder="lastname" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="text" name="erating" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['dane']->value->rating;?>
" placeholder="rating" />
									</div>

                                    <div class="col-12 col-12-xsmall">
										<input type="text" name="erole" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['dane']->value->role;?>
" placeholder="role" />
									</div>


								</br>
									

									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Zapisz zmiany" class="primary" /></li>
										</ul>
									</div>
								</div>
</form>


<?php
}
}
/* {/block "content"} */
/* {block 'messages'} */
class Block_19937911856744fd5b8b6615_42034767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_19937911856744fd5b8b6615_42034767',
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