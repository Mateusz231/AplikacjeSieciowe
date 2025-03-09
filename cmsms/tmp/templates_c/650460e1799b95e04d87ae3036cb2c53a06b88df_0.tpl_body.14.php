<?php
/* Smarty version 3.1.31, created on 2025-03-09 23:25:41
  from "tpl_body:14" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67ce1565937c65_69218525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '650460e1799b95e04d87ae3036cb2c53a06b88df' => 
    array (
      0 => 'tpl_body:14',
      1 => '1741559127',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
    'cms_template:c_heading' => 1,
    'cms_template:c_footer' => 1,
  ),
),false)) {
function content_67ce1565937c65_69218525 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body class="homepage is-preload">
 <div id="page-wrapper">

 <div id="header-wrapper">
 <div class="container">
 
 <?php echo Navigator::function_plugin(array('template'=>"c_menu"),$_smarty_tpl);?>


</div>
</div>

 <?php $_smarty_tpl->_subTemplateRender('cms_template:c_heading', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 

 
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
