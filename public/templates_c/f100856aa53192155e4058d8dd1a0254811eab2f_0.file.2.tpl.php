<?php
/* Smarty version 3.1.33, created on 2019-05-12 13:10:04
  from 'C:\xampp\htdocs\sport\app\views\2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd7ff0c48bee7_68897489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f100856aa53192155e4058d8dd1a0254811eab2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sport\\app\\views\\2.tpl',
      1 => 1555242684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd7ff0c48bee7_68897489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16275994495cd7ff0c483ed7_58134316', 1);
}
/* {block 2} */
class Block_4415544625cd7ff0c48ad40_07606149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<br><br>	
	<?php
}
}
/* {/block 2} */
/* {block 1} */
class Block_16275994495cd7ff0c483ed7_58134316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  1 => 
  array (
    0 => 'Block_16275994495cd7ff0c483ed7_58134316',
  ),
  2 => 
  array (
    0 => 'Block_4415544625cd7ff0c48ad40_07606149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[2]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<br><br>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4415544625cd7ff0c48ad40_07606149', 2, $this->tplIndex);
?>

	<br><br>
	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[2]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
<?php
}
}
/* {/block 1} */
}
