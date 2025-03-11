<?php
/* Smarty version 3.1.31, created on 2025-03-11 10:54:43
  from "cms_template:c_summary" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67d008635e2134_94305832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cfaaf0f64445b42265508329ab3e1af7735303a' => 
    array (
      0 => 'cms_template:c_summary',
      1 => '1741686882',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d008635e2134_94305832 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\modifier.cms_date_format.php';
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_function_file_url')) require_once 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\cmsms\\lib\\plugins\\function.file_url.php';
?>
<div class="wrapper style3">
<div class="inner">
<div class="container">
<div class="row">
<div class="col-8 col-12-medium">
<section class="box article-list">
<?php if ($_smarty_tpl->tpl_vars['pagecount']->value > 1) {?>
  <p>
<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value > 1) {
echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
&nbsp;
<?php }
echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value < $_smarty_tpl->tpl_vars['pagecount']->value) {?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

<?php }?>
</p>
<?php }?>

<h2 class="icon fa-file-alt">Ostatnie Wiadomości</h2>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
<div class="NewsSummary">
<article class="box excerpt">

<header>
<?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
	<span class="date">
		<?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

	</span>
<?php }?>


<h3>
<a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
" title="<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
</a>
</h3>
</header>


<?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
        
	<p>
		<?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

	</p>

	
          [<?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
]


<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>
        
	
		<?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

	
<?php }?>

<hr>

</article>

<?php if (isset($_smarty_tpl->tpl_vars['entry']->value->fields)) {?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entry']->value->fields, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
     <div class="NewsSummaryField">
        <?php if ($_smarty_tpl->tpl_vars['field']->value->type == 'file') {?>
          <?php if (isset($_smarty_tpl->tpl_vars['field']->value->value) && $_smarty_tpl->tpl_vars['field']->value->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->file_location;?>
/<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
"/>
          <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->type == 'linkedfile') {?>
          
          <?php if (!empty($_smarty_tpl->tpl_vars['field']->value->value)) {?>
            <img src="<?php echo smarty_function_file_url(array('file'=>$_smarty_tpl->tpl_vars['field']->value->value),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
"/>
          <?php }?>
        <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>

        <?php }?>
     </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }?>

</div>


<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


</section>
</div>
</div>
</div>
</div>
</div>




<!-- End News Display Template --><?php }
}
