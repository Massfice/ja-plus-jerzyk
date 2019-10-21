<?php
/* Smarty version 3.1.33, created on 2019-05-12 11:12:09
  from 'G:\Programs\xampp\htdocs\myProjects\jurek\app\views\RegisterContainer\down.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd7e3692c3517_75429953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c68fb2cc667432f5f69e59b3a2cb021906261e96' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\jurek\\app\\views\\RegisterContainer\\down.tpl',
      1 => 1557616022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd7e3692c3517_75429953 (Smarty_Internal_Template $_smarty_tpl) {
?><center>    
	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<b>Wystąpiły błędy:</b><br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['msg']->value->type == 2) {?>- <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
<br><?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['msg']->value->type == 0) {?><b><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</b><br><?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</center><?php }
}
