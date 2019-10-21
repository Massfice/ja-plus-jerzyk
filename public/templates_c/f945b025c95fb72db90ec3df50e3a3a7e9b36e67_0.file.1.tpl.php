<?php
/* Smarty version 3.1.33, created on 2019-05-11 23:55:56
  from 'G:\Programs\xampp\htdocs\myProjects\KijakShop\app\views\1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd744ec7f0d84_79720650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f945b025c95fb72db90ec3df50e3a3a7e9b36e67' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\KijakShop\\app\\views\\1.tpl',
      1 => 1555242684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd744ec7f0d84_79720650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14092680625cd744ec7d9684_54063784', 0);
}
/* {block 1} */
class Block_15652257265cd744ec7ecf01_21203655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<br><br>	
	<?php
}
}
/* {/block 1} */
/* {block 0} */
class Block_14092680625cd744ec7d9684_54063784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  0 => 
  array (
    0 => 'Block_14092680625cd744ec7d9684_54063784',
  ),
  1 => 
  array (
    0 => 'Block_15652257265cd744ec7ecf01_21203655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<br><br>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15652257265cd744ec7ecf01_21203655', 1, $this->tplIndex);
?>

	<br><br>
	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
<?php
}
}
/* {/block 0} */
}
