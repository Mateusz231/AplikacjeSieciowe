<?php
/* Smarty version 3.1.31, created on 2025-03-09 10:35:15
  from "cms_template:c_menu" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67cd60d303f201_35248040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cf5c58667994a2c05942665be1027eb76f1f9c0' => 
    array (
      0 => 'cms_template:c_menu',
      1 => '1741512912',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cd60d303f201_35248040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'Nav_menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\tmp\\templates_c\\^5cf5c58667994a2c05942665be1027eb76f1f9c0_0.cms_template.c_menu.php',
    'uid' => '5cf5c58667994a2c05942665be1027eb76f1f9c0',
    'call_name' => 'smarty_template_function_Nav_menu_43156847467cd60d2f1dd80_14965601',
  ),
));
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.title.php';
?>






<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>

<header id="header">
<div class="inner">
<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
<nav id="nav">
<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['nodes']->value,'depth'=>0), true);?>

</nav>
</div>
</div>
<?php }
}
/* smarty_template_function_Nav_menu_43156847467cd60d2f1dd80_14965601 */
if (!function_exists('smarty_template_function_Nav_menu_43156847467cd60d2f1dd80_14965601')) {
function smarty_template_function_Nav_menu_43156847467cd60d2f1dd80_14965601($_smarty_tpl,$params) {
$params = array_merge(array('depth'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->_assignInScope('liclass', 'current_page_item');
$_smarty_tpl->_assignInScope('aclass', '');
if ($_smarty_tpl->tpl_vars['node']->value->type == 'sectionheader') {?><li class='sectionheader <?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
'><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span><?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}?></li><?php } elseif ($_smarty_tpl->tpl_vars['node']->value->type == 'separator') {?><li class='separator <?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
'><hr class='separator'/></li><?php } else { ?><li class="<?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
"><a class="<?php echo $_smarty_tpl->tpl_vars['aclass']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value->target != '') {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value->target;?>
"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a><?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}?></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php
}}
/*/ smarty_template_function_Nav_menu_43156847467cd60d2f1dd80_14965601 */
}
