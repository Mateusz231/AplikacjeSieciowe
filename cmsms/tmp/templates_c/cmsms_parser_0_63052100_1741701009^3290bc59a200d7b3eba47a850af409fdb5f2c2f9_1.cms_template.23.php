<?php
/* Smarty version 3.1.31, created on 2025-03-11 14:50:09
  from "cms_template:23" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67d03f919beba5_41396461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3290bc59a200d7b3eba47a850af409fdb5f2c2f9' => 
    array (
      0 => 'cms_template:23',
      1 => '1741700913',
      2 => 'cms_template',
    ),
    'c981d0aa071d85060e70a9c8a7c868221963ecb8' => 
    array (
      0 => 'cms_template:c_footer',
      1 => '1741522894',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
    'cms_template:c_footer' => 1,
  ),
),false)) {
function content_67d03f919beba5_41396461 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.cms_get_language.php';
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.cms_stylesheet.php';
?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>

<body class="homepage is-preload">
 <div id="page-wrapper">

 <div id="header-wrapper">
 <div class="container">
 
 

</div>
</div>


 
 <?php
$_smarty_tpl->_subTemplateRender('cms_template:c_footer', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, 'c981d0aa071d85060e70a9c8a7c868221963ecb8', 'content_67d03f919be579_94534004');
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
/* Start inline template "cms_template:23" =============================*/
function content_67d03f919be579_94534004 ($_smarty_tpl) {
?>
<div id="footer-wrapper">
<footer id="footer" class="container">
<div class="row">
<div class="col-3 col-6-medium col-12-small">

<section>
<h2>More Filler</h2>
<ul class="divided">
<li><a href="#">Quam turpis feugiat dolor</a></li>
<li><a href="#">Amet ornare in in lectus</a></li>
<li><a href="#">Semper mod sed tempus nisi</a></li>
<li><a href="#">Consequat etiam phasellus</a></li>
</ul>
</section>


</div>

<div class="col-6 col-12-medium imp-medium">


	<section>
        <h2><strong>ZeroFour</strong> by HTML5 UP</h2>
	<p>Hi! This is <strong>ZeroFour</strong>, a free, fully responsive HTML5 site
         template by <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a>.
	 It's <a href="http://html5up.net/license/">Creative Commons Attribution</a>
        licensed so use it for any personal or commercial project (just credit us
	for the design!).</p>
        <a href="#" class="button alt icon solid fa-arrow-circle-right">Learn More</a>
	</section>

	
		<section>
		<h2>Get in touch</h2>
		<div>
		<div class="row">
		<div class="col-6 col-12-small">
		<dl class="contact">
		<dt>Twitter</dt>
		<dd><a href="#">@untitled-corp</a></dd>
		<dt>Facebook</dt>
		<dd><a href="#">facebook.com/untitled</a></dd>
		<dt>WWW</dt>
		<dd><a href="#">untitled.tld</a></dd>
		<dt>Email</dt>
		<dd><a href="#">user@untitled.tld</a></dd>
		</dl>
		</div>
		<div class="col-6 col-12-small">
		<dl class="contact">
		<dt>Address</dt>
		<dd>
		1234 Fictional Rd<br />
		Nashville, TN 00000-0000<br />
		USA
		</dd>
		<dt>Phone</dt>
		<dd>(000) 000-0000</dd>
		</dl>
		</div>
		</div>
		</div>
		</section>





</div>
</div>
</footer>
</div><?php
}
/* End inline template "cms_template:23" =============================*/
}
