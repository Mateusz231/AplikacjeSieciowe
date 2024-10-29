<?php
/* Smarty version 4.5.3, created on 2024-10-27 13:12:30
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_05_kontroler_glowny\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_671e2e2ed508f9_55396208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f60565e96bbd7cc9f3e2e05b678bd2d3d7556b85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_05_kontroler_glowny\\templates\\main.tpl',
      1 => 1729954577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671e2e2ed508f9_55396208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1436221480671e2e2ed4b514_13446918', 'header');
?>


									
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

				
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1350406186671e2e2ed4c2e7_87786636', 'content');
?>




						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_581500698671e2e2ed4ce33_82601186', 'result');
?>
	


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						
						<div class="inner">

							<!-- Menu -->

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2088828906671e2e2ed4d784_32855867', 'sidebar');
?>

								
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>
								

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'header'} */
class Block_1436221480671e2e2ed4b514_13446918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1436221480671e2e2ed4b514_13446918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_1350406186671e2e2ed4c2e7_87786636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1350406186671e2e2ed4c2e7_87786636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'result'} */
class Block_581500698671e2e2ed4ce33_82601186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_581500698671e2e2ed4ce33_82601186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
							
						<?php
}
}
/* {/block 'result'} */
/* {block 'sidebar'} */
class Block_2088828906671e2e2ed4d784_32855867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_2088828906671e2e2ed4d784_32855867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'sidebar'} */
}
