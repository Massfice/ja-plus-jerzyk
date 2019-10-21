<?php
/* Smarty version 3.1.33, created on 2019-05-12 00:25:41
  from 'G:\Programs\xampp\htdocs\myProjects\myShop\app\views\RegisterContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd74be5881c37_37262162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa2876ac31682e5d81d2c45108d32bc7314076a8' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\myShop\\app\\views\\RegisterContainer\\up.tpl',
      1 => 1557612802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd74be5881c37_37262162 (Smarty_Internal_Template $_smarty_tpl) {
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
