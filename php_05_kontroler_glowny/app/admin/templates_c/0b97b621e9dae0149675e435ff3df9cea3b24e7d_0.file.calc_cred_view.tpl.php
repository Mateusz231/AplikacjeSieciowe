<?php
/* Smarty version 4.5.3, created on 2024-10-28 15:30:37
  from 'C:\xampp\htdocs\AplikacjeSieciowe\php_05_kontroler_glowny\templates\calc_cred_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_671fa00d17e4b4_96433431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b97b621e9dae0149675e435ff3df9cea3b24e7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_05_kontroler_glowny\\templates\\calc_cred_view.tpl',
      1 => 1730121003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671fa00d17e4b4_96433431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_890209246671fa00d1647c4_06282251', 'header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1090878623671fa00d168127_03724059', 'sidebar');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2000981661671fa00d16dd60_12394350', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1434808735671fa00d170793_96098443', 'result');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'header'} */
class Block_890209246671fa00d1647c4_06282251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_890209246671fa00d1647c4_06282251',
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
class Block_1090878623671fa00d168127_03724059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_1090878623671fa00d168127_03724059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Strona główna </a></li>

								

									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php">Wyloguj</a></li>

									<?php if ($_smarty_tpl->tpl_vars['role']->value == 'admin') {?>

									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/admin/admin_page.php">Admin page</a></li>
									<?php }?>		

										
	
																	
									</ul>
								</nav>



<?php
}
}
/* {/block 'sidebar'} */
/* {block "content"} */
class Block_2000981661671fa00d16dd60_12394350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2000981661671fa00d16dd60_12394350',
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
class Block_1434808735671fa00d170793_96098443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'result' => 
  array (
    0 => 'Block_1434808735671fa00d170793_96098443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section>
	

	<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?> 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,0,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
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





	<?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?> 
	<div style= "margin: 0.2em; padding: 1em; witdh: 2em; background-color: rgb(255,255,0); border-radius: 1em; color: rgb(0,0,0);" >
		<h4>Informacje: </h4>
		<ol >
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'infos');
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
