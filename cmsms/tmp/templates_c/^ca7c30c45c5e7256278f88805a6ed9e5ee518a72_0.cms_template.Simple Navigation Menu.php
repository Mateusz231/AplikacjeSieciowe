<?php
/* Smarty version 3.1.31, created on 2025-03-07 15:45:20
  from "cms_template:Simple Navigation Menu" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67cb0680dc7c46_51947634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca7c30c45c5e7256278f88805a6ed9e5ee518a72' => 
    array (
      0 => 'cms_template:Simple Navigation Menu',
      1 => '1741276610',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cb0680dc7c46_51947634 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_repeat')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.repeat.php';
?>
 

<?php $_smarty_tpl->_assignInScope('number_of_levels', 10000);
if (isset($_smarty_tpl->tpl_vars['menuparams']->value['number_of_levels'])) {?>
  <?php $_smarty_tpl->_assignInScope('number_of_levels', $_smarty_tpl->tpl_vars['menuparams']->value['number_of_levels']);
}?>

<?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodelist']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
if ($_smarty_tpl->tpl_vars['node']->value->depth > $_smarty_tpl->tpl_vars['node']->value->prevdepth) {
echo smarty_function_repeat(array('string'=>"<ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value->depth-$_smarty_tpl->tpl_vars['node']->value->prevdepth),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['node']->value->depth < $_smarty_tpl->tpl_vars['node']->value->prevdepth) {
echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value->prevdepth-$_smarty_tpl->tpl_vars['node']->value->depth),$_smarty_tpl);?>

</li>
<?php } elseif ($_smarty_tpl->tpl_vars['node']->value->index > 0) {?></li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['node']->value->parent == true || $_smarty_tpl->tpl_vars['node']->value->current == true) {?>
  <?php $_smarty_tpl->_assignInScope('classes', 'menuactive');
?>
  <?php if ($_smarty_tpl->tpl_vars['node']->value->parent == true) {?>
    <?php $_smarty_tpl->_assignInScope('classes', 'menuactive menuparent');
?>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['node']->value->children_exist == true && $_smarty_tpl->tpl_vars['node']->value->depth < $_smarty_tpl->tpl_vars['number_of_levels']->value) {?>
    <?php $_smarty_tpl->_assignInScope('classes', ($_smarty_tpl->tpl_vars['classes']->value).(' parent'));
?>
  <?php }?>
  <li class="<?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
"><a class="<?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a>

<?php } elseif ($_smarty_tpl->tpl_vars['node']->value->children_exist == true && $_smarty_tpl->tpl_vars['node']->value->depth < $_smarty_tpl->tpl_vars['number_of_levels']->value && $_smarty_tpl->tpl_vars['node']->value->type != 'sectionheader' && $_smarty_tpl->tpl_vars['node']->value->type != 'separator') {?>
<li class="parent"><a class="parent" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a>

<?php } elseif ($_smarty_tpl->tpl_vars['node']->value->current == true) {?>
<li class="currentpage"><h3><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></h3>

<?php } elseif ($_smarty_tpl->tpl_vars['node']->value->type == 'sectionheader') {?>
<li class="sectionheader"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span>

<?php } elseif ($_smarty_tpl->tpl_vars['node']->value->type == 'separator') {?>
<li class="separator" style="list-style-type: none;"> <hr />

<?php } else { ?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a>

<?php }?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php echo smarty_function_repeat(array('string'=>"</li></ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value->depth-1),$_smarty_tpl);?>
</li>
</ul>
<?php }
}
}
