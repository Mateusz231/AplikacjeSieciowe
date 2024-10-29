<?php
/* Smarty version 4.5.3, created on 2024-10-29 14:34:34
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_05_kontroler_glowny\app\admin\admin_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6720e46a1c5629_30802582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eee8088a9b83b7bf1b11e40add721939588fb1b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_05_kontroler_glowny\\app\\admin\\admin_page.tpl',
      1 => 1730208834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6720e46a1c5629_30802582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8773011926720e46a1bf421_45396962', 'content');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6310702326720e46a1c3d41_48635315', 'sidebar');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'content'} */
class Block_8773011926720e46a1bf421_45396962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8773011926720e46a1bf421_45396962',
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
/app/admin/admin_script.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
/* {block 'sidebar'} */
class Block_6310702326720e46a1c3d41_48635315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_6310702326720e46a1c3d41_48635315',
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
