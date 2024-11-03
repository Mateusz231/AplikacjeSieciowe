<?php
/* Smarty version 4.5.3, created on 2024-11-03 15:03:38
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_06_role\app\views\calc_cred_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_672782baa18307_16728183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccea4592450363fa8ea2bb369e5dd5a77436834d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_06_role\\app\\views\\calc_cred_view.tpl',
      1 => 1730642612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672782baa18307_16728183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1947644146672782ba9f5316_37028070', 'header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97031488672782ba9fab09_02882251', 'sidebar');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_778360368672782baa008e7_46715667', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1816863201672782baa031f9_96015776', 'result');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_1947644146672782ba9f5316_37028070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1947644146672782ba9f5316_37028070',
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
class Block_97031488672782ba9fab09_02882251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_97031488672782ba9fab09_02882251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>

									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Logout2">Wyloguj</a></li>

									<?php if ($_smarty_tpl->tpl_vars['user']->value->role == 'admin') {?>

									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Admin">Admin page</a></li>
									<?php }?>		

										
	
																	
									</ul>
								</nav>



<?php
}
}
/* {/block 'sidebar'} */
/* {block "content"} */
class Block_778360368672782baa008e7_46715667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_778360368672782baa008e7_46715667',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="zl" id="demo-name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kredyt;?>
" placeholder="Kredyt" />
									</div>
								</br>
									<div class="col-12 col-12-xsmall">
										<input type="text" name="rok" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rok;?>
" placeholder="Ile lat" />
									</div>

									<div class="col-12 col-12-xsmall">
										<input type="text" name="op" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
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
class Block_1816863201672782baa031f9_96015776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_1816863201672782baa031f9_96015776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section>
	

	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?> 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,0,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		</ol>
		</div>	



<?php }?>





	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?> 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,255,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Informacje: </h4>
		<ol >
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'infos');
$_smarty_tpl->tpl_vars['infos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['infos']->value) {
$_smarty_tpl->tpl_vars['infos']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['infos']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
			</div> 
	<?php }?>

 


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(0,255,0); border-radius: 1em; color: rgb(0,0,0);" >
	<h4>Wynik</h4>
	<p style="color: rgb(0,0,0);">
	<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

	</p>
	</div> 
<?php }?>
   

</section>

<?php
}
}
/* {/block 'result'} */
}
