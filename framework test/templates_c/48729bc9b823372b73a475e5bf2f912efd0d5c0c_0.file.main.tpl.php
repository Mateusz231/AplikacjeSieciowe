<?php
/* Smarty version 4.5.3, created on 2024-11-21 00:02:28
  from 'C:\xampp\htdocs\AplikacjeSieciowe\framework test\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_673e6a8455be76_54609888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48729bc9b823372b73a475e5bf2f912efd0d5c0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\framework test\\app\\views\\templates\\main.tpl',
      1 => 1731074505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673e6a8455be76_54609888 (Smarty_Internal_Template $_smarty_tpl) {
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
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1820413397673e6a845558b8_77667113', "header2");
?>

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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1059509859673e6a84556363_34361641', 'header');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1507570529673e6a84556bb0_38581765', 'content');
?>




						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_703617949673e6a845574a0_86602501', 'result');
?>
	

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_371276995673e6a845583d8_54511445', 'player');
?>



						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						
						<div class="inner">

							<!-- Menu -->

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_815209107673e6a84558e99_07781805', 'sidebar');
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
/* {block "header2"} */
class Block_1820413397673e6a845558b8_77667113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header2' => 
  array (
    0 => 'Block_1820413397673e6a845558b8_77667113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "header2"} */
/* {block 'header'} */
class Block_1059509859673e6a84556363_34361641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1059509859673e6a84556363_34361641',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_1507570529673e6a84556bb0_38581765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1507570529673e6a84556bb0_38581765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'result'} */
class Block_703617949673e6a845574a0_86602501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_703617949673e6a845574a0_86602501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
							
						<?php
}
}
/* {/block 'result'} */
/* {block 'player'} */
class Block_371276995673e6a845583d8_54511445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'player' => 
  array (
    0 => 'Block_371276995673e6a845583d8_54511445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


						<?php
}
}
/* {/block 'player'} */
/* {block 'sidebar'} */
class Block_815209107673e6a84558e99_07781805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_815209107673e6a84558e99_07781805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'sidebar'} */
}
