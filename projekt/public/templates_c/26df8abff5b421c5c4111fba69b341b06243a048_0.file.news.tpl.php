<?php
/* Smarty version 4.5.3, created on 2024-11-27 16:13:03
  from 'C:\xampp\htdocs\AplikacjeSieciowe\projekt\app\views\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_674736ff2d35c5_38856143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26df8abff5b421c5c4111fba69b341b06243a048' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\projekt\\app\\views\\news.tpl',
      1 => 1732720264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674736ff2d35c5_38856143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1865922001674736fef116a6_45623557', 'sidebar');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1461443084674736ff0cbf62_16057809', 'content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'sidebar'} */
class Block_1865922001674736fef116a6_45623557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_1865922001674736fef116a6_45623557',
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
/* {block 'content'} */
class Block_1461443084674736ff0cbf62_16057809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1461443084674736ff0cbf62_16057809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





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
}
