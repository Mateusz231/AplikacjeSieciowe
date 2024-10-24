<?php
/* Smarty version 4.5.3, created on 2024-10-24 22:28:34
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_03_szablonowanie\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_671aadf22b50d3_85954322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bacd19a5ce3488d00cdbed0e2365644610b84954' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_03_szablonowanie\\templates\\main.tpl',
      1 => 1729801713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671aadf22b50d3_85954322 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1837890313671aadf22af575_57395201', 'header');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1069092994671aadf22b11b6_32582552', 'content');
?>




						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_560712291671aadf22b2102_36436114', 'result');
?>
	


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						
						<div class="inner">

							<!-- Menu -->

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1638113662671aadf22b2dc9_31412074', 'sidebar');
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
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'header'} */
class Block_1837890313671aadf22af575_57395201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1837890313671aadf22af575_57395201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_1069092994671aadf22b11b6_32582552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1069092994671aadf22b11b6_32582552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'result'} */
class Block_560712291671aadf22b2102_36436114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_560712291671aadf22b2102_36436114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
							
						
						<?php
}
}
/* {/block 'result'} */
/* {block 'sidebar'} */
class Block_1638113662671aadf22b2dc9_31412074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_1638113662671aadf22b2dc9_31412074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'sidebar'} */
}
