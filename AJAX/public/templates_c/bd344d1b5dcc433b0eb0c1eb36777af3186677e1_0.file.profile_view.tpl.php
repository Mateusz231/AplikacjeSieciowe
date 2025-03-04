<?php
/* Smarty version 4.5.3, created on 2024-11-27 17:03:38
  from 'C:\xampp\htdocs\AplikacjeSieciowe\projekt\app\views\profile_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_674742daabe9e3_09295680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd344d1b5dcc433b0eb0c1eb36777af3186677e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\projekt\\app\\views\\profile_view.tpl',
      1 => 1732723407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674742daabe9e3_09295680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1759599748674742daa9c470_27123830', 'header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1566756463674742daaa2b15_31702006', 'sidebar');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_235610478674742daaa44b8_31358135', "content");
?>




<section>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1404188394674742daab7f25_83198357', 'messages');
?>




</section>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_1759599748674742daa9c470_27123830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1759599748674742daa9c470_27123830',
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
class Block_1566756463674742daaa2b15_31702006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_1566756463674742daaa2b15_31702006',
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
class Block_235610478674742daaa44b8_31358135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_235610478674742daaa44b8_31358135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="box">

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabela2']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
   <h2>Login: <?php echo $_smarty_tpl->tpl_vars['item']->value['login'];?>
 <span class="fi fi-pl fis"></span></h2> 
   <h4>First Name: <?php echo $_smarty_tpl->tpl_vars['item']->value['firstname'];?>
 Last Name: <?php echo $_smarty_tpl->tpl_vars['item']->value['lastname'];?>
</h4>
    <h6>Ranking: <?php echo $_smarty_tpl->tpl_vars['item']->value['rating'];?>
</h6>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  

 <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/bN.png">


 <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
 <br>
 <a class="actions" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profileEdit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
 <input type="submit" value="Edytuj" class="primary" />
 </a>
 <?php }?>
</div>


<h2>Ostatnie gry: </h2>

<div class="table-wrapper">
														<table>
															<thead>
																<tr>
																	<th>Gracze</th>
																	<th>Wynik</th>
                                                                    <th>Data</th>

														
																</tr>
															</thead>
															<tbody>
																

                                                                
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabela3']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
                                                                <tr>       
                                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['black_login'];?>
--<?php echo $_smarty_tpl->tpl_vars['item']->value['white_login'];?>
</td>        
                                                                <td><button class="button primary"> <?php echo $_smarty_tpl->tpl_vars['item']->value['user_result'];?>
</button></td>   
																<td><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
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
class Block_1404188394674742daab7f25_83198357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1404188394674742daab7f25_83198357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="msg">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="<?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert alert-danger<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert alert-warning<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert alert-success<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
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
