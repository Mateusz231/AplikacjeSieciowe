<?php
/* Smarty version 4.5.3, created on 2025-03-06 12:06:23
  from 'C:\xampp\htdocs\AplikacjeSieciowe\AJAX\app\views\PostsTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67c981afc52320_11709246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '050058ef882340aa13c5450731945c675a9fb3fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AJAX\\app\\views\\PostsTable.tpl',
      1 => 1741259179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c981afc52320_11709246 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
