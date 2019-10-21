{if $newser == 'admin' || $newser == 'news'}
<form action="{$conf->action_root}addnews" method = 'POST' id = 'usrform'>
  Tytuł: <input type="text" name="title">
  <input type="submit">
</form>
<br>
<textarea rows="4" cols="50" name="textlong" form="usrform">
Podaj treść artykułu</textarea>
{/if}




<br><br>
{if $msgs->isError()}<b>### BŁĘDY ###</b><br>{/if}
{foreach $msgs->getMessages() as $msg}
{if $msg->type == 2}{$msg->text}<br>{/if}
{/foreach}
<br><br>










{if isset($news) && is_array($news) && count($news) > 0}
<br>
{foreach $news as $n}
{if $newser == 'admin' || $newser == 'news'}
<form action='{$conf->action_root}deletenews' method = 'POST' style = 'display:inline'><input type = 'submit' value = 'Delete'>
		<input type = 'hidden' value = '{$n["idnews"]}' name = 'idnews'></form>

{/if}



<b>{$n['title']} | Dodane: {$n['date']} | {$n['email']}</b><br>
{$n['textlong']}<br><br>
----------------------
<br><br>
{/foreach}
{/if}
