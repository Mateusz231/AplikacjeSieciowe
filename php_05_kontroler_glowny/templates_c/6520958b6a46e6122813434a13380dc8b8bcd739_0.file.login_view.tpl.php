<?php
/* Smarty version 4.5.3, created on 2024-10-28 00:24:14
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_05_kontroler_glowny\templates\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_671ecb9ed4b1b3_14999430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6520958b6a46e6122813434a13380dc8b8bcd739' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_05_kontroler_glowny\\templates\\login_view.tpl',
      1 => 1730037704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671ecb9ed4b1b3_14999430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_296603635671ecb9e7bf888_10484027', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5902554671ecb9e865149_10997175', "content");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1952026656671ecb9e8676d8_66313306', 'result');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'header'} */
class Block_296603635671ecb9e7bf888_10484027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_296603635671ecb9e7bf888_10484027',
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
class Block_5902554671ecb9e865149_10997175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5902554671ecb9e865149_10997175',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
LoginCompute">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="login" id="demo-name" value="" placeholder="Login" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="text" name="pass" id="demo-email" value="" placeholder="Password" />
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
class Block_1952026656671ecb9e8676d8_66313306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_1952026656671ecb9e8676d8_66313306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section>
<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?> 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,0,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
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


</section>

<?php
}
}
/* {/block 'result'} */
}
