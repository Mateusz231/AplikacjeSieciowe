<?php
/* Smarty version 4.5.3, created on 2024-10-24 22:29:16
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_03_szablonowanie\app\admin_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_671aae1c41ed57_56950586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ecaf434e00a533828ff0a24d68aee79a172ead9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_03_szablonowanie\\app\\admin_page.tpl',
      1 => 1729801753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671aae1c41ed57_56950586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2022893100671aae1c40faa1_71199162', 'content');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1490761284671aae1c41ca61_56329722', 'sidebar');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_2022893100671aae1c40faa1_71199162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2022893100671aae1c40faa1_71199162',
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
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/admin_script.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
/* {block 'sidebar'} */
class Block_1490761284671aae1c41ca61_56329722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_1490761284671aae1c41ca61_56329722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">Strona główna </a></li>

								

									<li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php">Wyloguj</a></li>

	
																	
									</ul>
								</nav>



<?php
}
}
/* {/block 'sidebar'} */
}
