<?php
/* Smarty version 3.1.33, created on 2019-10-21 20:45:53
  from 'C:\xampp\htdocs\sport\app\views\PersonalContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dadfce1ca58c1_18215300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b5d37ead2f2abad0edcf489975131bf56aac158' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sport\\app\\views\\PersonalContainer\\up.tpl',
      1 => 1571683551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dadfce1ca58c1_18215300 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	
		function personalSuccess() {
			window.alert('Dane zostały dodane poprawnie.');
		}
		
<?php echo '</script'; ?>
>

<form action = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personal' method = 'POST'>
	<b>Podaj odpowiednie dane:</b><br><br>
	Height: <input type = 'text' name = 'height'>cm <br><br>
	Weight: <input type = 'text' name = 'weight'>kg <br><br>
	PBF: <input type = 'number' name = 'pbf' min='5' max='80'>% <br><br>
	
 Aktywnosc:
	<select name='activity' >
   <option value='1.0'>1.leżący lub siedzący tryb życia, brak aktywności fizycznej</option>
   <option value='1.1'>2.pomiędzy</option>
   <option value='1.2'>3.praca siedząca, aktywność fizyczna na niskim poziomie</option>
   <option value='1.3'>4.pomiędzy</option>
   <option value='1.4'>5.praca niefizyczna, trening 2 razy w tygodniu,</option>
   <option value='1.5'>6.pomiędzy</option>
   <option value='1.6'>7.lekka praca fizyczna, trening 3–4 razy w tygodniu,</option>
   <option value='1.7'>8.pomiędzy</option>
   <option value='1.8'>9.praca fizyczna, trening 5 razy w tygodniu,</option>
   <option value='1.9'>10.pomiędzy</option>
   <option value='2.0'>11.ciężka praca fizyczna, codzienny trening.</option>
</select><br><br>

	Klatka: <input type = 'number' name = 'chest'>cm <br><br>
	Biceps: <input type = 'number' name = 'biceps'>cm <br><br>
	Talia: <input type = 'number' name = 'waist'>cm <br><br>
	Biodro: <input type = 'number' name = 'hip'>cm <br><br>
	Udo: <input type = 'number' name = 'thigh'>cm <br><br>
	Łydka: <input type = 'number' name = 'calf'>cm <br><br>
	<input type = 'submit' value = 'Dodaj Dane'>
</form>



<br>
------------------------------------

<br>




<table>
<thead>
	<tr>
		<th>Waga</th>
		<th>Wzrost</th>
		<th>Procentowa zawartość tkanki tłuszczowej</th>
		<th>Aktywność</th>
		<th>Data</th>
		<th>Usuń</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personal']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["weight"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["height"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["pbf"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["activity"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["date"];?>
</td><td><form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deletedata' method = 'POST' style = 'display:inline'><input type = 'submit' value = 'X'><input type = 'hidden' value = '<?php echo $_smarty_tpl->tpl_vars['p']->value["idpersonal"];?>
' name = 'idpersonal'></form></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

























<br>

------------------------------------------

<br>

	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?><b>### BLEDY ###</b><br><?php }?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value->type == 2) {
echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
<br><?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
	<?php if ($_smarty_tpl->tpl_vars['b']->value && !$_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
		<?php echo '<script'; ?>
>
			personalSuccess();
		<?php echo '</script'; ?>
>
	<?php }
}
}
