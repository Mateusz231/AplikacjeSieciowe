<?php
/* Smarty version 4.5.3, created on 2024-11-25 19:54:30
  from 'C:\xampp\htdocs\AplikacjeSieciowe\projekt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6744c7e63fe5c4_29951993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e493434570de867a0853cc1b1777e69442f64315' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\projekt\\app\\views\\templates\\main.tpl',
      1 => 1732560864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6744c7e63fe5c4_29951993 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/favicon.ico">
		<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css"
/>

		<style>
		.alert-danger{
			color: #721c24;
  			background-color: #f8d7da;
  			border-color: #f5c6cb;
		}


		.alert{
			position: relative;
 			padding: .75rem 1.25rem;
  			margin-bottom: 0.1rem;
 			border: 1px solid transparent;
  			border-top-color: transparent;
            border-right-color: transparent;
    		border-bottom-color: transparent;
    		border-left-color: transparent;
  			border-radius: .25rem;
			list-style: none;
		}


		.alert-warning {
  		color: #856404;
  		background-color: #fff3cd;
  		border-color: #ffeeba;
		}

		.alert-success {
  		color: #155724;
  		background-color: #d4edda;
  		border-color: #c3e6cb;
		}
		
		th .sort-indicator {
    font-size: 0.8em;
    margin-left: 5px;
    color: gray;
}

th.asc .sort-indicator::after {
    content: "▲";
    margin-left: 5px;
}

th.desc .sort-indicator::after {
    content: "▼";
    margin-left: 5px;
}

		</style>

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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5915363066744c7e63f7989_57036853', 'header');
?>


									
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

				
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6791332396744c7e63f9711_90579004', 'content');
?>




						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15998753426744c7e63fa259_89393775', 'messages');
?>
	


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						
						<div class="inner">

							<!-- Menu -->

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6109845316744c7e63facb3_82741028', 'sidebar');
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
class Block_5915363066744c7e63f7989_57036853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_5915363066744c7e63f7989_57036853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_6791332396744c7e63f9711_90579004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6791332396744c7e63f9711_90579004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'content'} */
/* {block 'messages'} */
class Block_15998753426744c7e63fa259_89393775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_15998753426744c7e63fa259_89393775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
							
						<?php
}
}
/* {/block 'messages'} */
/* {block 'sidebar'} */
class Block_6109845316744c7e63facb3_82741028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_6109845316744c7e63facb3_82741028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'sidebar'} */
}
