<?php
/* Smarty version 3.1.33, created on 2019-05-12 11:12:06
  from 'G:\Programs\xampp\htdocs\myProjects\jurek\app\views\HelloContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd7e3666de733_39410728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97f64ff83d1c2a0b53f20f0950f9ea5df8214d95' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\jurek\\app\\views\\HelloContainer\\up.tpl',
      1 => 1555788271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd7e3666de733_39410728 (Smarty_Internal_Template $_smarty_tpl) {
?>    My value: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

    
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }
}
}
