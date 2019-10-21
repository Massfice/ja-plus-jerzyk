<?php
/* Smarty version 3.1.33, created on 2019-05-12 00:25:41
  from 'G:\Programs\xampp\htdocs\myProjects\myShop\app\views\1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd74be5843429_75668650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf7686d8b59a52ac284d43dc3992c098c5b2f85b' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\myShop\\app\\views\\1.tpl',
      1 => 1555242684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd74be5843429_75668650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7417073245cd74be5827e92_57551516', 0);
}
/* {block 1} */
class Block_7763729425cd74be583f5a7_67148774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<br><br>	
	<?php
}
}
/* {/block 1} */
/* {block 0} */
class Block_7417073245cd74be5827e92_57551516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  0 => 
  array (
    0 => 'Block_7417073245cd74be5827e92_57551516',
  ),
  1 => 
  array (
    0 => 'Block_7763729425cd74be583f5a7_67148774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<br><br>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7763729425cd74be583f5a7_67148774', 1, $this->tplIndex);
?>

	<br><br>
	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
<?php
}
}
/* {/block 0} */
}
