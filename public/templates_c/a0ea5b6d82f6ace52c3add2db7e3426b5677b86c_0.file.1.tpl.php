<?php
/* Smarty version 3.1.33, created on 2019-05-12 11:12:06
  from 'G:\Programs\xampp\htdocs\myProjects\jurek\app\views\1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd7e36669ff29_24108349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0ea5b6d82f6ace52c3add2db7e3426b5677b86c' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\jurek\\app\\views\\1.tpl',
      1 => 1555242684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd7e36669ff29_24108349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7288502585cd7e3666943a8_34949194', 0);
}
/* {block 1} */
class Block_16422478525cd7e36669c0a0_42318057 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<br><br>	
	<?php
}
}
/* {/block 1} */
/* {block 0} */
class Block_7288502585cd7e3666943a8_34949194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  0 => 
  array (
    0 => 'Block_7288502585cd7e3666943a8_34949194',
  ),
  1 => 
  array (
    0 => 'Block_16422478525cd7e36669c0a0_42318057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<br><br>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16422478525cd7e36669c0a0_42318057', 1, $this->tplIndex);
?>

	<br><br>
	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
<?php
}
}
/* {/block 0} */
}
