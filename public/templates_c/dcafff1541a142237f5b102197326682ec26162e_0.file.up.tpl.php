<?php
/* Smarty version 3.1.33, created on 2019-10-21 21:26:18
  from 'H:\xampp\htdocs\sport\app\views\NewsContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dae065aa9bee0_39427085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcafff1541a142237f5b102197326682ec26162e' => 
    array (
      0 => 'H:\\xampp\\htdocs\\sport\\app\\views\\NewsContainer\\up.tpl',
      1 => 1571685846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dae065aa9bee0_39427085 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['newser']->value == 'admin' || $_smarty_tpl->tpl_vars['newser']->value == 'news') {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addnews" method = 'POST' id = 'usrform'>
  Tytuł: <input type="text" name="title">
  <input type="submit">
</form>
<br>
<textarea rows="4" cols="50" name="textlong" form="usrform">
Podaj treść artykułu</textarea>
<?php }?>




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
<br><br>










<?php if (isset($_smarty_tpl->tpl_vars['news']->value) && is_array($_smarty_tpl->tpl_vars['news']->value) && count($_smarty_tpl->tpl_vars['news']->value) > 0) {?>
<br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
if ($_smarty_tpl->tpl_vars['newser']->value == 'admin' || $_smarty_tpl->tpl_vars['newser']->value == 'news') {?>
<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deletenews' method = 'POST' style = 'display:inline'><input type = 'submit' value = 'Delete'>
		<input type = 'hidden' value = '<?php echo $_smarty_tpl->tpl_vars['n']->value["idnews"];?>
' name = 'idnews'></form>

<?php }?>



<b><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
 | Dodane: <?php echo $_smarty_tpl->tpl_vars['n']->value['date'];?>
 | <?php echo $_smarty_tpl->tpl_vars['n']->value['email'];?>
</b><br>
<?php echo $_smarty_tpl->tpl_vars['n']->value['textlong'];?>
<br><br>
----------------------
<br><br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
