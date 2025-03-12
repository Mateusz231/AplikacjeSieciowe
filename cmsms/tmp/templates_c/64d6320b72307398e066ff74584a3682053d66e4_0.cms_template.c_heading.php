<?php
/* Smarty version 3.1.31, created on 2025-03-11 14:56:03
  from "cms_template:c_heading" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67d040f3559383_08357738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64d6320b72307398e066ff74584a3682053d66e4' => 
    array (
      0 => 'cms_template:c_heading',
      1 => '1741701272',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
    'cms_template:c_register' => 1,
    'cms_template:c_login' => 1,
    'cms_template:c_leaderboard' => 1,
  ),
),false)) {
function content_67d040f3559383_08357738 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.title.php';
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
if ($_prefixVariable2 == 'Wiadomości') {
echo News::function_plugin(array('number'=>"3",'summarytemplate'=>"c_summary",'detailpage'=>"szczegóły-aktualności"),$_smarty_tpl);?>

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

<?php $_smarty_tpl->_subTemplateRender('cms_template:c_register', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 

<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable5=ob_get_clean();
if ($_prefixVariable5 == 'Logowanie') {
$_smarty_tpl->_subTemplateRender('cms_template:c_login', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 

<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable6=ob_get_clean();
if ($_prefixVariable6 == 'Ranking graczy') {
$_smarty_tpl->_subTemplateRender('cms_template:c_leaderboard', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 


<?php } else {
CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>

<?php }}}}?>


</section>
												
											</header>
										</div>
										
										
										
									</div>
								</section>

						</div>
					</div>
</div><?php }
}
