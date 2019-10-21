<script>
	{literal}
		function personalSuccess() {
			window.alert('Dane zostały dodane poprawnie.');
		}
		{/literal}
</script>

<form action = '{$conf->action_root}personal' method = 'POST'>
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
{foreach $personal as $p}
{strip}
	<tr>
	
		<td>{$p["weight"]}</td>
		<td>{$p["height"]}</td>
		<td>{$p["pbf"]}</td>
		<td>{$p["activity"]}</td>
		<td>{$p["date"]}</td>
		<td><form action='{$conf->action_root}deletedata' method = 'POST' style = 'display:inline'><input type = 'submit' value = 'X'>
		<input type = 'hidden' value = '{$p["idpersonal"]}' name = 'idpersonal'>
		</form></td>
		
		
		
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

























<br>

------------------------------------------

<br>

	{if $msgs->isError()}<b>### BLEDY ###</b><br>{/if}
	{foreach $msgs->getMessages() as $msg}
	{if $msg->type == 2}{$msg->text}<br>{/if}
	{/foreach}
	
	{if $b && !$msgs->isError()}
		<script>
			personalSuccess();
		</script>
	{/if}
