<?php
/* Smarty version 3.1.31, created on 2025-03-09 23:25:41
  from "tpl_top:14" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67ce15658b7873_77703934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f964a163ab78a1aaca59072d2bd42d04624229c6' => 
    array (
      0 => 'tpl_top:14',
      1 => '1741559127',
      2 => 'tpl_top',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ce15658b7873_77703934 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.cms_get_language.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
"><?php }
}
