<h2>General Settings</h2>
<form id="general" method="post" action="">

<div id="toolbar">
    <input type="hidden" name="form" value="general" />
    <ul>
        <li><a href="#" onclick="javascript:document.forms['general'].submit();return false"><img src="img/save.png" alt="" /> Save</a></li>
    </ul>
</div>

  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td align="right">The <strong>name of your Network</strong></td>
      <td align="left"><input name="net_name" type="text" id="net_name" value="{$config.net_name}" size="32" maxlength="1024" tabindex="1" /></td>
    </tr>
    <tr>
      <td align="right">The URL of the <strong>Homepage of your Network</strong></td>
      <td align="left"><input name="net_url" type="text" id="net_url" value="{$config.net_url}" size="32" maxlength="1024" tabindex="2" /></td>
    </tr>
    <tr>
      <td align="right"><strong>Default Theme</strong></td>
      <td align="left"><em>Default</em></td>
    </tr>
    <tr>
      <td align="right"><strong>Default Language</strong><br />(will not override automatic detection by browser)</td>
      <td align="left"><em>English</em></td>
    </tr>
  </table>
  <p><strong>Welcome Message</strong><br />You can welcome your users, describe your network, and put whatever information you want in there.<br />{$editor}</p>
</form>