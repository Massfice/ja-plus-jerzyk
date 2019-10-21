<?php
/* Smarty version 3.1.33, created on 2019-10-21 21:26:00
  from 'H:\xampp\htdocs\sport\app\views\LoginContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dae0648c8bf08_02611011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23f881ba8a315afb86788cff8d82649eed1e6522' => 
    array (
      0 => 'H:\\xampp\\htdocs\\sport\\app\\views\\LoginContainer\\up.tpl',
      1 => 1571685960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dae0648c8bf08_02611011 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<form action = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login' method = 'POST'>
	<b>Logowanie:</b>  Email: <input type = 'text' name = 'email'> Hasło: <input type = 'password' name = 'password'>
	<input type = 'submit' value = 'Zaloguj się'>
</form>
<br><br>
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?><b>### BŁĘDY ###</b><br><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
if ($_smarty_tpl->tpl_vars['msg']->value->type == 2) {
echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
<br><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</center>
<?php }
}
