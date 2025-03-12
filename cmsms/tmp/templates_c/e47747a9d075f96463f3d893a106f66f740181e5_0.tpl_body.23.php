<?php
/* Smarty version 3.1.31, created on 2025-03-11 15:25:23
  from "tpl_body:23" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67d047d342ef96_11290520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e47747a9d075f96463f3d893a106f66f740181e5' => 
    array (
      0 => 'tpl_body:23',
      1 => '1741703120',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
    'cms_template:c_footer' => 1,
  ),
),false)) {
function content_67d047d342ef96_11290520 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body class="homepage is-preload">
 <div id="page-wrapper">

 <div id="header-wrapper">
 <div class="container">
 
 <?php echo Navigator::function_plugin(array('template'=>"c_menu"),$_smarty_tpl);?>


</div>
</div>

<div id="main-wrapper">
					<div class="wrapper style2">
						<div class="inner">
							<div class="container">
								<div id="content">
<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>



</div>
</div>
</div>
</div>
</div>

 
 <?php $_smarty_tpl->_subTemplateRender('cms_template:c_footer', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
</div>



			<?php echo '<script'; ?>
 src="template/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="template/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="template/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="template/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="template/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="template/assets/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
