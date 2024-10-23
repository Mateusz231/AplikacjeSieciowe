<?php
/* Smarty version 4.5.3, created on 2024-10-23 19:17:44
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_03_szablonowanie\app\calc_cred_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67192fb8c95eb8_37113254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e6b04edfe9765333fe0327f906fcef30012c6f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_03_szablonowanie\\app\\calc_cred_view.tpl',
      1 => 1729703851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67192fb8c95eb8_37113254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185851890667192fb8c76ba1_39888343', 'header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48817752367192fb8c7c140_60455152', 'sidebar');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11609670367192fb8c7d0a4_25995264', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116874830567192fb8c7f653_34562831', 'result');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'header'} */
class Block_185851890667192fb8c76ba1_39888343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_185851890667192fb8c76ba1_39888343',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p><?php echo $_smarty_tpl->tpl_vars['page_header']->value;?>
</p>
<?php
}
}
/* {/block 'header'} */
/* {block 'sidebar'} */
class Block_48817752367192fb8c7c140_60455152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_48817752367192fb8c7c140_60455152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">Strona główna </a></li>

																	
									</ul>
								</nav>
<?php
}
}
/* {/block 'sidebar'} */
/* {block "content"} */
class Block_11609670367192fb8c7d0a4_25995264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11609670367192fb8c7d0a4_25995264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_cred.php">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="zl" id="demo-name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kredyt'];?>
" placeholder="Kredyt" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="text" name="rok" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['rok'];?>
" placeholder="Ile lat" />
									</div>

									<div class="col-12 col-12-xsmall">
										<input type="text" name="op" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oprocentowanie'];?>
" placeholder="Oprocentowanie" />
									</div>

								</br>
									

									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Oblicz" class="primary" /></li>
										</ul>
									</div>
								</div>
							</form>


<?php
}
}
/* {/block "content"} */
/* {block 'result'} */
class Block_116874830567192fb8c7f653_34562831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_116874830567192fb8c7f653_34562831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section>
	<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>

	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,0,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		</ol>
		</div>	
	<?php }?>


<?php }?>



<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>

	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,255,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Informacje: </h4>
		<ol >
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
			</div> 
	<?php }?>

<?php }?>
 


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(0,255,0); border-radius: 1em; color: rgb(0,0,0);" >
	<h4>Wynik</h4>
	<p style="color: rgb(0,0,0);">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
	</div> 
<?php }?>
   

</section>

<?php
}
}
/* {/block 'result'} */
}
