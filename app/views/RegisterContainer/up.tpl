<script>
	{literal}
		function registerSuccess() {
			window.alert('Rejestracja zakonczona sukcesem.');
			window.location.href ='{/literal}{$conf->action_root}{literal}';
		}
		{/literal}
</script>

<form action = '{$conf->action_root}register' method = 'POST'>
	<b>Zarejestruj sie:</b><br><br>
	Email: <input type = 'text' name = 'email'> <br><br>
	Password: <input type = 'password' name = 'password'> <br><br>
	Retype Password: <input type = 'password' name = 'repasswd'><br><br>
	Imię: <input type = 'text' name = 'name'> <br><br>
	Nazwisko: <input type = 'text' name = 'surname'><br><br>
	Podaj Datę urodzenia: <input type='date' id='start' name='age'
       value='{$date}' >
       <br><br>
 Podaj płeć:
	<select name='gender' >
   <option value='24'>Mężczyzna</option>
   <option value='22'>Kobieta</option>
</select>	<br><br>
	<input type = 'submit' value = 'Zarejestruj się'>
</form>
<br>

	{if $msgs->isError()}<b>### BLEDY ###</b><br>{/if}
	{foreach $msgs->getMessages() as $msg}
	{if $msg->type == 2}{$msg->text}<br>{/if}
	{/foreach}

	{if $b && !$msgs->isError()}
		<script>
			registerSuccess();
		</script>
	{/if}
