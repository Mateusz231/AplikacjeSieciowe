<?php
/* Smarty version 4.5.3, created on 2025-03-02 16:06:51
  from 'C:\xampp\htdocs\AplikacjeSieciowe\stronicowanie rezultatow\app\views\MainPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67c4740b84a2e9_40124604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12b5fa3b769d3a1d5a27a5e221c57e5b18b99dcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\stronicowanie rezultatow\\app\\views\\MainPage.tpl',
      1 => 1733327267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c4740b84a2e9_40124604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22150511867c4740b5d8997_35745253', 'sidebar');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5186557667c4740b74d575_61358278', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'sidebar'} */
class Block_22150511867c4740b5d8997_35745253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_22150511867c4740b5d8997_35745253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>

									
									<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) <= 0) {?>

									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Zaloguj</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
RegisterShow">Zarejestruj sie</a></li>


									<?php }?>	



									<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>

									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj sie</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
play">Graj</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search">Ranking graczy</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profile/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Twój profil</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
news">Wiadomości</a></li>
									<?php if (\core\RoleUtils::inRole("admin")) {?>

									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminsearch">Panel admina</a></li>

									<?php }?>			

									<?php }?>										
	
																	
									</ul>
								</nav>



<?php
}
}
/* {/block 'sidebar'} */
/* {block 'content'} */
class Block_5186557667c4740b74d575_61358278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5186557667c4740b74d575_61358278',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <h1>Witamy w naszej aplikacji szachowej!</h1>
    <p>Rozwijaj swoje umiejętności, rywalizuj z innymi graczami i zdobywaj ranking. Zapraszamy do gry!</p>


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
