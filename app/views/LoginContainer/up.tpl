<center>
<form action = '{$conf->action_root}login' method = 'POST'>
	<b>Logowanie:</b>  Email: <input type = 'text' name = 'email'> Hasło: <input type = 'password' name = 'password'>
	<input type = 'submit' value = 'Zaloguj się'>
</form>
<br><br>
{if $msgs->isError()}<b>### BŁĘDY ###</b><br>{/if}
{foreach $msgs->getMessages() as $msg}
{if $msg->type == 2}{$msg->text}<br>{/if}
{/foreach}
</center>
