<?php
/* Smarty version 4.5.3, created on 2024-11-07 14:08:15
  from 'C:\xampp\htdocs\AplikacjeSieciowe\projekt\app\views\MainPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_672cbbbfbbf508_18726318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27dd6d2194e826b6d3b10cf34c9707512b8dcfce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\projekt\\app\\views\\MainPage.tpl',
      1 => 1730764171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672cbbbfbbf508_18726318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_767436744672cbbbfae2529_48117051', 'sidebar');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1187660371672cbbbfbbea92_11452227', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'sidebar'} */
class Block_767436744672cbbbfae2529_48117051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_767436744672cbbbfae2529_48117051',
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
LoginView">Zaloguj</a></li>

										
	
																	
									</ul>
								</nav>



<?php
}
}
/* {/block 'sidebar'} */
/* {block 'content'} */
class Block_1187660371672cbbbfbbea92_11452227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1187660371672cbbbfbbea92_11452227',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod ut leo eget tempor. Mauris egestas leo vel lectus facilisis, in condimentum ipsum iaculis. Vivamus blandit non nibh in lacinia. Nulla facilisi. Nam sodales enim et mauris rhoncus varius. Nunc congue tellus id nulla aliquet venenatis. Nam sed sagittis ipsum.

Sed vestibulum mauris sit amet dolor consectetur elementum. Nulla facilisi. Duis a viverra erat. Cras vel cursus est. Proin ac luctus justo. Praesent vitae interdum ante, a condimentum tortor. Fusce pretium posuere tortor. Nullam sit amet ex faucibus, elementum sapien vel, tristique lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla at odio nec erat hendrerit vulputate eu in elit. Sed laoreet purus vitae magna cursus, at pellentesque nulla aliquet. Nullam accumsan vitae massa et iaculis. Fusce congue bibendum mauris eget tincidunt. Phasellus fringilla pellentesque sem ultricies mattis.

Cras eleifend ac dolor sit amet varius. Nam sagittis augue vel risus tristique tempor. Integer consectetur lobortis sem, quis vulputate mauris consequat in. Vestibulum bibendum pulvinar tempor. Curabitur tempor nulla consectetur sapien ultricies commodo. Suspendisse interdum tincidunt odio, euismod imperdiet erat vestibulum ut. Nulla tempus congue orci, nec malesuada nisl volutpat in. Integer porta scelerisque dolor id lobortis. Duis gravida, nunc sed accumsan sodales, magna orci auctor elit, sed molestie leo dolor id arcu. Nulla cursus ex quis leo tincidunt suscipit. Etiam et tempus libero, in finibus tellus. Nunc velit orci, dictum sit amet ligula nec, fringilla mollis augue. 

<?php
}
}
/* {/block 'content'} */
}