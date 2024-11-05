<?php
/* Smarty version 4.5.3, created on 2024-11-01 10:44:22
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_05_namespaces\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6724a2f6997332_95080876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2df9c82174a1683a0574747e0dde0021a903b3e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_05_namespaces\\app\\views\\templates\\main.tpl',
      1 => 1729954577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6724a2f6997332_95080876 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12653463886724a2f6992301_43940897', 'header');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3622470476724a2f6992fe3_29651638', 'content');
?>




						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9121275686724a2f69939c4_36513894', 'result');
?>
	


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						
						<div class="inner">

							<!-- Menu -->

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12557841636724a2f6994303_60237929', 'sidebar');
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
class Block_12653463886724a2f6992301_43940897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_12653463886724a2f6992301_43940897',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_3622470476724a2f6992fe3_29651638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3622470476724a2f6992fe3_29651638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'result'} */
class Block_9121275686724a2f69939c4_36513894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_9121275686724a2f69939c4_36513894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
							
						<?php
}
}
/* {/block 'result'} */
/* {block 'sidebar'} */
class Block_12557841636724a2f6994303_60237929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_12557841636724a2f6994303_60237929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'sidebar'} */
}
