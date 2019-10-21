<?php
/* Smarty version 3.1.33, created on 2019-05-12 13:00:46
  from 'C:\xampp\htdocs\sport\app\views\1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd7fcde51b5e8_55091225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb0e3aeefbbc8c2904300a1075eb3b02e328c3b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sport\\app\\views\\1.tpl',
      1 => 1555242686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd7fcde51b5e8_55091225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13158092705cd7fcde513935_92234048', 0);
}
/* {block 1} */
class Block_15473585425cd7fcde51a437_08282235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<br><br>	
	<?php
}
}
/* {/block 1} */
/* {block 0} */
class Block_13158092705cd7fcde513935_92234048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  0 => 
  array (
    0 => 'Block_13158092705cd7fcde513935_92234048',
  ),
  1 => 
  array (
    0 => 'Block_15473585425cd7fcde51a437_08282235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<br><br>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15473585425cd7fcde51a437_08282235', 1, $this->tplIndex);
?>

	<br><br>
	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
<?php
}
}
/* {/block 0} */
}
