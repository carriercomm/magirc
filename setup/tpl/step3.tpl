{* $Id$ *}
{include file="_header.tpl"}

{if $error}
        <p> <span style="color:red;">Failed to add user.</span> Please <a href="?step=2">try again</a></p>
{else}
	<p>Setup finished! You <strong>MUST</strong> now logon into the <a href="../admin/"><strong>Admin Interface</strong></a> to configure MagIRC</p>
{/if}

{include file="_footer.tpl"}