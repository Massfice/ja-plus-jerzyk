<?php
/* Smarty version 3.1.33, created on 2019-10-21 21:24:40
  from 'H:\xampp\htdocs\sport\app\views\RegisterContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dae05f8916d39_20313061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce9b81d1fc5a1746839b5f3c3b45d74fc585a842' => 
    array (
      0 => 'H:\\xampp\\htdocs\\sport\\app\\views\\RegisterContainer\\up.tpl',
      1 => 1571685868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dae05f8916d39_20313061 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	
		function registerSuccess() {
			window.alert('Rejestracja zakonczona sukcesem.');
			window.location.href ='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
';
		}
		
<?php echo '</script'; ?>
>

<form action = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register' method = 'POST'>
	<b>Zarejestruj sie:</b><br><br>
	Email: <input type = 'text' name = 'email'> <br><br>
	Password: <input type = 'password' name = 'password'> <br><br>
	Retype Password: <input type = 'password' name = 'repasswd'><br><br>
	Imię: <input type = 'text' name = 'name'> <br><br>
	Nazwisko: <input type = 'text' name = 'surname'><br><br>
	Podaj Datę urodzenia: <input type='date' id='start' name='age'
       value='<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
' >
       <br><br>
 Podaj płeć:
	<select name='gender' >
   <option value='24'>Mężczyzna</option>
   <option value='22'>Kobieta</option>
</select>	<br><br>
	<input type = 'submit' value = 'Zarejestruj się'>
</form>
<br>

	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?><b>### BLEDY ###</b><br><?php }?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value->type == 2) {
echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
<br><?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	<?php if ($_smarty_tpl->tpl_vars['b']->value && !$_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
		<?php echo '<script'; ?>
>
			registerSuccess();
		<?php echo '</script'; ?>
>
	<?php }
}
}
