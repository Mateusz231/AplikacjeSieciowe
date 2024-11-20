<?php
/* Smarty version 4.5.3, created on 2024-11-21 00:23:31
  from 'C:\xampp\htdocs\AplikacjeSieciowe\projekt\app\views\leaderboard_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_673e6f7321c858_68510033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003e29b193bd387f4664a826018529afab89ee87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\projekt\\app\\views\\leaderboard_view.tpl',
      1 => 1732144693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673e6f7321c858_68510033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1883568310673e6f731ffe72_13764175', 'header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_659422737673e6f732054c0_82802258', 'sidebar');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1837081851673e6f73206ae9_97555386', "content");
?>






<section>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_876131406673e6f73213ac0_73685279', 'messages');
?>

</section>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_1883568310673e6f731ffe72_13764175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1883568310673e6f731ffe72_13764175',
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
class Block_659422737673e6f732054c0_82802258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_659422737673e6f732054c0_82802258',
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
MainPage">Strona główna</a></li>

										
	
																	
									</ul>
								</nav>



<?php
}
}
/* {/block 'sidebar'} */
/* {block "content"} */
class Block_1837081851673e6f73206ae9_97555386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1837081851673e6f73206ae9_97555386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="text" name="slogin" id="demo-name" value="" placeholder="Login" />
									</div>
								</br>
									
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Filtruj" class="primary" /></li>
										</ul>
									</div>
								</div>
</form>


<div class="table-wrapper">
														<table>
															<thead>
																<tr>
																	<th>Login/Nickname</th>
																	<th>Ilosc gier</th>
																	<th>Wygrane</th>
                                                                    <th>Przegrane</th>
                                                                    <th>Remisy</th>
                                                                    <th>Ranking</th>
																</tr>
															</thead>
															<tbody>
																

                                                                
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabela']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
                                                                <tr>       
                                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['login'];?>
</td>        
                                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['gamesplayed'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['wins'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['loses'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['draws'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['rating'];?>
</td>    
                                                                </tr>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                                                                
                                                                

															</tbody>
														
														</table>
													</div>



<?php
}
}
/* {/block "content"} */
/* {block 'messages'} */
class Block_876131406673e6f73213ac0_73685279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_876131406673e6f73213ac0_73685279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="alert alert-danger">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
}
