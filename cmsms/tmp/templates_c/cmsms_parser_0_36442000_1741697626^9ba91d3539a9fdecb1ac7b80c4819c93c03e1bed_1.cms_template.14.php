<?php
/* Smarty version 3.1.31, created on 2025-03-11 13:53:46
  from "cms_template:14" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67d0325a6373c2_59247448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba91d3539a9fdecb1ac7b80c4819c93c03e1bed' => 
    array (
      0 => 'cms_template:14',
      1 => '1741559127',
      2 => 'cms_template',
    ),
    '64d6320b72307398e066ff74584a3682053d66e4' => 
    array (
      0 => 'cms_template:c_heading',
      1 => '1741696761',
      2 => 'cms_template',
    ),
    '822631d67e934ee7fdfd296e38374d2257f7bdad' => 
    array (
      0 => 'cms_template:c_register',
      1 => '1741561381',
      2 => 'cms_template',
    ),
    '049233c586c5780f7108863e547167f4f2f23779' => 
    array (
      0 => 'cms_template:c_login',
      1 => '1741561429',
      2 => 'cms_template',
    ),
    '2b0a581a1ece7be83dfca397e597771f14ac698e' => 
    array (
      0 => 'cms_template:c_leaderboard',
      1 => '1741562918',
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
    'cms_template:c_heading' => 1,
    'cms_template:c_register' => 1,
    'cms_template:c_login' => 1,
    'cms_template:c_leaderboard' => 1,
    'cms_template:c_footer' => 1,
  ),
),false)) {
function content_67d0325a6373c2_59247448 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->_subTemplateRender('cms_template:c_heading', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '64d6320b72307398e066ff74584a3682053d66e4', 'content_67d0325a60d311_77244211');
?>
 

 
 <?php
$_smarty_tpl->_subTemplateRender('cms_template:c_footer', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, 'c981d0aa071d85060e70a9c8a7c868221963ecb8', 'content_67d0325a636ca8_06152134');
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
/* Start inline template "cms_template:c_heading" =============================*/
function content_67d0325a62ef82_67094996 ($_smarty_tpl) {
?>
<form method="post" action="">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="rlogin" id="demo-name" value="" placeholder="Login" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="password" name="rpass" id="demo-email" value="" placeholder="Password" />
									</div>

									<div class="col-12 col-12-xsmall">
										<input type="password" name="rpass2" id="demo-email" value="" placeholder="Password" />
									</div>


								</br>
									

									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Zarejestruj" class="primary" /></li>
										</ul>
									</div>
								</div>
</form><?php
}
/* End inline template "cms_template:c_heading" =============================*/
/* Start inline template "cms_template:c_heading" =============================*/
function content_67d0325a630b26_41250575 ($_smarty_tpl) {
?>
<form method="post" action="">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="login" id="demo-name" value="" placeholder="Login" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="password" name="pass" id="demo-email" value="" placeholder="Password" />
									</div>


								</br>
									

									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Zaloguj" class="primary" /></li>
										</ul>
									</div>
								</div>
</form><?php
}
/* End inline template "cms_template:c_heading" =============================*/
/* Start inline template "cms_template:c_heading" =============================*/
function content_67d0325a6325d6_44680550 ($_smarty_tpl) {
?>
<table id="leaderboard">
    	<thead>
		    <tr>
		    	<th>Login/Nickname 

			</th>
			<th>Ilosc gier 

			</th>
			<th>Wygrane 

			</th>


			<th>Przegrane

			</th>

			<th>Remisy

			</th>

			

			<th>Ranking 

			</th>
														
			</tr>
		</thead>
	<tbody>
																

                          
           <tr>       
                          <td>9999</td> 
																    
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
			  <td>99999999</td>
            		   </tr>		

                   
           <tr>       
                          <td>9999</td> 
																    
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
			  <td>99999999</td>
            		   </tr>		

                   
           <tr>       
                          <td>9999</td> 
																    
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
			  <td>99999999</td>
            		   </tr>		

                   
           <tr>       
                          <td>9999</td> 
																    
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
			  <td>99999999</td>
            		   </tr>		

                   
           <tr>       
                          <td>9999</td> 
																    
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
			  <td>99999999</td>
            		   </tr>		

                   
           <tr>       
                          <td>9999</td> 
																    
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
                          <td>9999999</td>
			  <td>99999999</td>
            		   </tr>		






                                                                
		</tbody>
														
	</table><?php
}
/* End inline template "cms_template:c_heading" =============================*/
/* Start inline template "cms_template:14" =============================*/
function content_67d0325a60d311_77244211 ($_smarty_tpl) {
?>
<div id="main-wrapper">

<?php ob_start();
echo smarty_function_title(array(),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('title', $_prefixVariable1);
?>

<?php ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == 'Wiadomości') {?>

<?php }?>
 



					<div class="wrapper style1">
						<div class="inner">

							<!-- Feature 1 -->
								<section class="container box feature1">
									<div class="row">
										<div class="col-12">
											<header class="first major">
<section>


<?php ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable3=ob_get_clean();
if ($_prefixVariable3 == 'Graj') {?>
<link rel="stylesheet" href="template/assets/chessboardjs-1.0.0/css/chessboard-1.0.0.css" />


<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2"
        crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="template/assets/chessboardjs-1.0.0/js/chessboard-1.0.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="template/assets/chess-0.10.2/chess-0.10.2.min.js"><?php echo '</script'; ?>
>

<div id="myBoard" style="width: 600px"></div>
<?php echo '<script'; ?>
 src="template/assets/js/abc.js"><?php echo '</script'; ?>
>    

<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable4=ob_get_clean();
if ($_prefixVariable4 == 'Rejestruj sie') {?>

<?php
$_smarty_tpl->_subTemplateRender('cms_template:c_register', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '822631d67e934ee7fdfd296e38374d2257f7bdad', 'content_67d0325a62ef82_67094996');
?>
 

<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable5=ob_get_clean();
if ($_prefixVariable5 == 'Logowanie') {
$_smarty_tpl->_subTemplateRender('cms_template:c_login', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '049233c586c5780f7108863e547167f4f2f23779', 'content_67d0325a630b26_41250575');
?>
 

<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable6=ob_get_clean();
if ($_prefixVariable6 == 'Ranking graczy') {
$_smarty_tpl->_subTemplateRender('cms_template:c_leaderboard', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '2b0a581a1ece7be83dfca397e597771f14ac698e', 'content_67d0325a6325d6_44680550');
?>
 


<?php } else { ?>


<?php }}}}?>


</section>
												
											</header>
										</div>
										
										
										
									</div>
								</section>

						</div>
					</div>
</div><?php
}
/* End inline template "cms_template:14" =============================*/
/* Start inline template "cms_template:14" =============================*/
function content_67d0325a636ca8_06152134 ($_smarty_tpl) {
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
/* End inline template "cms_template:14" =============================*/
}
