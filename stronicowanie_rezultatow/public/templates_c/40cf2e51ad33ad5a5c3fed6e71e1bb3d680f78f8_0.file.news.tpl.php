<?php
/* Smarty version 4.5.3, created on 2025-03-04 17:58:16
  from 'C:\xampp\htdocs\AplikacjeSieciowe\stronicowanie_rezultatow\app\views\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67c73128df4ec3_09906429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40cf2e51ad33ad5a5c3fed6e71e1bb3d680f78f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\stronicowanie_rezultatow\\app\\views\\news.tpl',
      1 => 1732991189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c73128df4ec3_09906429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150283179367c73128de1224_32491436', 'header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170486048667c73128de4be3_63430223', 'sidebar');
?>

	


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59398575967c73128de5904_09283466', 'content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_150283179367c73128de1224_32491436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_150283179367c73128de1224_32491436',
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
class Block_170486048667c73128de4be3_63430223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_170486048667c73128de4be3_63430223',
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
class Block_59398575967c73128de5904_09283466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_59398575967c73128de5904_09283466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (\core\RoleUtils::inRole("moderator")) {?>
    <br> 
	<button ><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addpost">Dodaj post</a></button>

	<?php }?>	


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabela']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

<h2><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2>
<h6><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</h6>
<br>
<div class="box"><?php echo $_smarty_tpl->tpl_vars['item']->value['post'];?>
</div>
<br><br>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<section>
	
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
/* {/block 'content'} */
}
