<?php
/* Smarty version 3.1.31, created on 2025-03-11 15:25:23
  from "tpl_top:23" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67d047d334ec31_11555133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2b416108f0e040d5ccb85fa3f53db4e14f9dcd6' => 
    array (
      0 => 'tpl_top:23',
      1 => '1741703120',
      2 => 'tpl_top',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d047d334ec31_11555133 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.cms_get_language.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
"><?php }
}
