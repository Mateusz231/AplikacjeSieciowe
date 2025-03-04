<?php
/* Smarty version 4.5.3, created on 2025-03-02 16:06:51
  from 'C:\xampp\htdocs\AplikacjeSieciowe\stronicowanie rezultatow\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67c4740bab9071_63486111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67eec4c76693120de6740ce2e3a0ceaaf37524a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\stronicowanie rezultatow\\app\\views\\templates\\main.tpl',
      1 => 1732644330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c4740bab9071_63486111 (Smarty_Internal_Template $_smarty_tpl) {
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
  href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css"/>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166998088867c4740bab5d68_83231202', "header2");
?>

 


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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134062644067c4740bab6a96_06715246', 'header');
?>


									
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

				
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188831284167c4740bab7008_15384072', 'content');
?>




						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205873597167c4740bab74e0_33938006', 'messages');
?>
	


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						
						<div class="inner">

							<!-- Menu -->

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138563924367c4740bab7966_64531342', 'sidebar');
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
class Block_166998088867c4740bab5d68_83231202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header2' => 
  array (
    0 => 'Block_166998088867c4740bab5d68_83231202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block "header2"} */
/* {block 'header'} */
class Block_134062644067c4740bab6a96_06715246 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_134062644067c4740bab6a96_06715246',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_188831284167c4740bab7008_15384072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_188831284167c4740bab7008_15384072',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'content'} */
/* {block 'messages'} */
class Block_205873597167c4740bab74e0_33938006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_205873597167c4740bab74e0_33938006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
							
						<?php
}
}
/* {/block 'messages'} */
/* {block 'sidebar'} */
class Block_138563924367c4740bab7966_64531342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_138563924367c4740bab7966_64531342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'sidebar'} */
}
