<?php
/* Smarty version 3.1.31, created on 2025-03-09 19:49:00
  from "tpl_head:1" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67cde29caaa011_48949491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64060443164a9839c71c34206331731aaeeac788' => 
    array (
      0 => 'tpl_head:1',
      1 => '1741476136',
      2 => 'tpl_head',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cde29caaa011_48949491 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.cms_stylesheet.php';
?>
<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head><?php }
}
