<?php
/* Smarty version 4.5.3, created on 2025-03-05 10:37:26
  from 'C:\xampp\htdocs\AplikacjeSieciowe\AJAX\app\views\leaderboard_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67c81b563c35c0_37436103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fecffe221e14c4029e9ba3deb74f3dfdc06d22d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AJAX\\app\\views\\leaderboard_view.tpl',
      1 => 1741096240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c81b563c35c0_37436103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102862769267c81b562d61d5_82580643', 'header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6392665167c81b562d8f39_93483539', 'sidebar');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58079450367c81b562d9cf8_50044432', "content");
?>






<section>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197775326167c81b563c03b4_39050129', 'messages');
?>

</section>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_102862769267c81b562d61d5_82580643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_102862769267c81b562d61d5_82580643',
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
class Block_6392665167c81b562d8f39_93483539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_6392665167c81b562d8f39_93483539',
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
class Block_58079450367c81b562d9cf8_50044432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_58079450367c81b562d9cf8_50044432',
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

									<div class="col-12 col-12-xsmall">
										<input type="text" name="srank" id="demo-name" value="" placeholder="Ranking" />
									</div>


									
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
		    	<th>Login/Nickname 
    			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/login/asc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▲</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/login/desc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▼</a>
			</th>
			<th>Ilosc gier 
    		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/gamesplayed/asc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▲</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/gamesplayed/desc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▼</a>
			</th>
			<th>Wygrane 
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/wins/asc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▲</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/wins/desc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▼</a>
			</th>


			<th>Przegrane
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/loses/asc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▲</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/loses/desc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▼</a>
			</th>

			<th>Remisy
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/draws/asc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▲</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/draws/desc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▼</a>
			</th>

			

			<th>Ranking 
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/rankings/asc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▲</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/rankings/desc/<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">▼</a>
			</th>
														
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
                          <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profile/<?php echo $_smarty_tpl->tpl_vars['item']->value['userid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['item']->value['login'];?>
 </a></td> 
																    
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



<ul class="pagination">
   <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/<?php echo $_smarty_tpl->tpl_vars['URL']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['URL']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="button">Prev</a></li>
<?php } else { ?>
    <li><span class="button disabled">Prev</span></li>
<?php }?>

<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
    <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['current_page']->value) {?>
        <li><a href="#" class="page active"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
    <?php } else { ?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/<?php echo $_smarty_tpl->tpl_vars['URL']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['URL']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="page"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
    <?php }
}
}
?>

<?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/<?php echo $_smarty_tpl->tpl_vars['URL']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['URL']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['slogin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
/<?php echo (($tmp = $_smarty_tpl->tpl_vars['srank']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="button">Next</a></li>
<?php } else { ?>
    <li><span class="button disabled">Next</span></li>
<?php }?>
</ul>              
														 
                         
			




<?php
}
}
/* {/block "content"} */
/* {block 'messages'} */
class Block_197775326167c81b563c03b4_39050129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_197775326167c81b563c03b4_39050129',
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
