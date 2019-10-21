<?php
/* Smarty version 3.1.33, created on 2019-05-12 11:18:11
  from 'G:\Programs\xampp\htdocs\myProjects\jurek\app\views\0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd7e4d3e77d61_21490440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7afd147762c5ebffc88289e6f6534dbd449cf60' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\jurek\\app\\views\\0.tpl',
      1 => 1557652686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd7e4d3e77d61_21490440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<hmtl>

	<head>
	
		<title>Title</title>
	
	</head>
	
	<body>
		
		<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[0]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<br><br>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19309145835cd7e4d3e73ee1_53223545', 0);
?>

		<br><br>
		<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[0]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
		
	</body>

</html><?php }
/* {block 0} */
class Block_19309145835cd7e4d3e73ee1_53223545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  0 => 
  array (
    0 => 'Block_19309145835cd7e4d3e73ee1_53223545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<br><br>	
		<?php
}
}
/* {/block 0} */
}
