<?php
/* Smarty version 3.1.33, created on 2019-10-21 21:06:48
  from 'C:\xampp\htdocs\sport\app\views\TrainerContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dae01c829a4d0_64144492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a34c08998b2d7c02c1ac5afe1ff4df19bd9944' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sport\\app\\views\\TrainerContainer\\up.tpl',
      1 => 1571684554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dae01c829a4d0_64144492 (Smarty_Internal_Template $_smarty_tpl) {
?><center>

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
