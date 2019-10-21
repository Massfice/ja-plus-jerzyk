<?php
/* Smarty version 3.1.33, created on 2019-05-12 11:12:09
  from 'G:\Programs\xampp\htdocs\myProjects\jurek\app\views\RegisterContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd7e3692a7f93_59854489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bed19cf545603cbd8124b3f8d40b9b9c9d832eb7' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\jurek\\app\\views\\RegisterContainer\\up.tpl',
      1 => 1557612802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd7e3692a7f93_59854489 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<form method = 'POST' action = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register'>
Login: <input type = 'text' name = 'login'><br><br>
Hasło: <input type = 'password' name = 'passwd'> Powtórz Hasło: <input type = 'password' name = 'repasswd'>
<br>
<br>
<b>Dane Personalne:</b>
<br><br>
Imię: <input type = 'text' name = 'forename'><br><br>
Nazwisko: <input type = 'text' name = 'surname'><br><br>
Adres: <input type = 'text' name = 'address'><br><br>
Telefon: <input type = 'text' name = 'phone'><br><br>
E-mail: <input type = 'text' name = 'email'><br><br>
<input type = 'submit' value = 'Rejestracja'>
</form>
</center><?php }
}
