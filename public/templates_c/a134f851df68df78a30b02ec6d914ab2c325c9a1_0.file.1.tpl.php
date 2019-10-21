<?php
/* Smarty version 3.1.33, created on 2019-10-21 21:16:20
  from 'H:\xampp\htdocs\sport\app\views\1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dae0404138a78_09960291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a134f851df68df78a30b02ec6d914ab2c325c9a1' => 
    array (
      0 => 'H:\\xampp\\htdocs\\sport\\app\\views\\1.tpl',
      1 => 1555242686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dae0404138a78_09960291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10300181025dae04040fe0e7_93070664', 0);
}
/* {block 1} */
class Block_12294635785dae0404134bf7_61664012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<br><br>	
	<?php
}
}
/* {/block 1} */
/* {block 0} */
class Block_10300181025dae04040fe0e7_93070664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  0 => 
  array (
    0 => 'Block_10300181025dae04040fe0e7_93070664',
  ),
  1 => 
  array (
    0 => 'Block_12294635785dae0404134bf7_61664012',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<br><br>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12294635785dae0404134bf7_61664012', 1, $this->tplIndex);
?>

	<br><br>
	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
<?php
}
}
/* {/block 0} */
}
