<?php
/* Smarty version 4.5.3, created on 2024-10-24 22:31:22
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_03_szablonowanie\app\security\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_671aae9a0691d9_62245184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2241233275ed57f5e6f545492c40f8c6cff42dcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_03_szablonowanie\\app\\security\\login_view.tpl',
      1 => 1729718636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671aae9a0691d9_62245184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1672712786671aae9a048d55_17976276', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_984513440671aae9a04f222_54274720', "content");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2015236283671aae9a051649_23089393', 'result');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block 'header'} */
class Block_1672712786671aae9a048d55_17976276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1672712786671aae9a048d55_17976276',
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
/* {block "content"} */
class Block_984513440671aae9a04f222_54274720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_984513440671aae9a04f222_54274720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="login" id="demo-name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
" placeholder="Login" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="text" name="pass" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['pass'];?>
" placeholder="Password" />
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
/* {block 'result'} */
class Block_2015236283671aae9a051649_23089393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_2015236283671aae9a051649_23089393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section>
	<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>

	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,0,0); border-radius: 1em; color: rgb(0,0,0);" >
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
		</div>	
	<?php }?>


<?php }?>



</section>

<?php
}
}
/* {/block 'result'} */
}
