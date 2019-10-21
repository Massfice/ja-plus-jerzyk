<?php
/* Smarty version 3.1.33, created on 2019-10-21 21:16:17
  from 'H:\xampp\htdocs\sport\app\views\MainContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dae04019a8437_73705401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b21cc4454a995e150784d511fa2fbb57629bba3' => 
    array (
      0 => 'H:\\xampp\\htdocs\\sport\\app\\views\\MainContainer\\up.tpl',
      1 => 1571684838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dae04019a8437_73705401 (Smarty_Internal_Template $_smarty_tpl) {
?><b><i>Sport Site</i></b>
<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shownews'>News</a> /\
<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main'>EMPTY</a> /\
<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register'>Register</a> /\

<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calculate'>Calculate</a>/\

<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
	<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout'>Logout</a>
<?php } else { ?>	
	<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login'>Login</a>
	<?php }?> /\

<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showpersonal'>Personal</a>	/\
<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
trainer'>Trener</a>
	


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?><br><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
if ($_smarty_tpl->tpl_vars['msg']->value->type == 0) {
echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
<br><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
