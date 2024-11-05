<?php
/* Smarty version 4.5.3, created on 2024-11-05 16:38:46
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_07_bd\app\views\admin_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_672a3c06a0b645_30955771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '117c66af2b76cf8d345934b6e75f0509a20e7ee5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_07_bd\\app\\views\\admin_page.tpl',
      1 => 1730313179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a3c06a0b645_30955771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_216335435672a3c06a02a90_20313248', 'content');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_461605276672a3c06a095b3_38572938', 'sidebar');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_216335435672a3c06a02a90_20313248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_216335435672a3c06a02a90_20313248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<html lang="en">

    <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            gap: 5px;
            margin: 20px;
        }
        .cell {
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            background-color: lightgray;
            cursor: pointer;
        }
        .cell:hover {
            background-color: lightblue;
        }
    </style>




    <div class="board">
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
    </div>
    <h2 id="winnerMessage"></h2>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/core/admin_script.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
/* {block 'sidebar'} */
class Block_461605276672a3c06a095b3_38572938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_461605276672a3c06a095b3_38572938',
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
calcCompute">Strona główna </a></li>

								

									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Logout2">Wyloguj</a></li>

	
																	
									</ul>
								</nav>



<?php
}
}
/* {/block 'sidebar'} */
}
