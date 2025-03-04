<?php
/* Smarty version 4.5.3, created on 2024-11-27 17:11:14
  from 'C:\xampp\htdocs\AplikacjeSieciowe\projekt\app\views\profile_edit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_674744a2eb0f51_19422531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6061db69814b30028823f010c1f8af0e496cf5ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\projekt\\app\\views\\profile_edit_view.tpl',
      1 => 1732723775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674744a2eb0f51_19422531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1084907334674744a2e91220_68064083', 'header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1302976327674744a2e95f60_19086158', 'sidebar');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1318963087674744a2e97596_68258477', "content");
?>




<section>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2053129932674744a2e9fe65_70074383', 'messages');
?>




</section>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_1084907334674744a2e91220_68064083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1084907334674744a2e91220_68064083',
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
class Block_1302976327674744a2e95f60_19086158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_1302976327674744a2e95f60_19086158',
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
class Block_1318963087674744a2e97596_68258477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1318963087674744a2e97596_68258477',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>







<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profileEditSave/<?php echo $_smarty_tpl->tpl_vars['dane']->value->id;?>
">
								<div class="row gtr-uniform">

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
class Block_2053129932674744a2e9fe65_70074383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_2053129932674744a2e9fe65_70074383',
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
