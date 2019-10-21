<b><i>Sport Site</i></b>
<a href = '{$conf->action_root}shownews'>News</a> /\
<a href = '{$conf->action_root}main'>EMPTY</a> /\
<a href = '{$conf->action_root}register'>Register</a> /\

<a href = '{$conf->action_root}calculate'>Calculate</a>/\

{if count($conf->roles)>0}
	<a href = '{$conf->action_root}logout'>Logout</a>
{else}	
	<a href = '{$conf->action_root}login'>Login</a>
	{/if} /\

<a href = '{$conf->action_root}showpersonal'>Personal</a>	/\
<a href = '{$conf->action_root}trainer'>Trener</a>
	


{if $msgs->isInfo()}<br>{/if}
{foreach $msgs->getMessages() as $msg}
{if $msg->type == 0}{$msg->text}<br>{/if}
{/foreach}
