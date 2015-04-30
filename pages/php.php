<?php
if(!$logged)
$main_content .= 'Please enter your account name and your password.<br><a href="index.php?subtopic=createaccount" >Create an account</a> if you do not have one yet.<br /><br /><form action="index.php?subtopic=cpanel" method="post" ><div class="TableContainer" >  <table class="Table1" cellpadding="0" cellspacing="0" >    <div class="CaptionContainer" >      <div class="CaptionInnerContainer" >        <span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>        <span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>        <div class="Text" >Account Login</div>        <span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>        <span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>      </div>    </div>    <tr>      <td>        <div class="InnerTableContainer" >          <table style="width:100%;" ><tr><td class="LabelV" ><span >Account Name:</span></td><td style="width:100%;" ><input type="password" name="account_login" SIZE="30" maxlength="30" ></td></tr><tr><td class="LabelV" ><span >Password:</span></td><td><input type="password" name="password_login" size="30" maxlength="29" ></td></tr>          </table>        </div>  </table></div></td></tr><br /><table width="100%" ><tr align="center" ><td><table border="0" cellspacing="0" cellpadding="0" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" ></div></div></td><tr></form></table></td><td><table border="0" cellspacing="0" cellpadding="0" ><form action="index.php?subtopic=lostaccount" method="post" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Account lost?" alt="Account lost?" src="'.$layout_name.'/images/buttons/_sbutton_accountlost.gif" ></div></div></td></tr></form></table></td></tr></table>';
else
{
if($group_id_of_acc_logged >= $config['site']['access_admin_panel']){
$main_content .= '<script type="text/javascript">
var showednewticker_state = "0";
function showNewTickerForm()
{
if(showednewticker_state == "0") {
document.getElementById("newtickerform").innerHTML = \'<form action="index.php?subtopic=latestnews&action=newticker" method="post" ><table border="0"><tr><td bgcolor="D4C0A1" align="center"><b>Select icon:</b></td><td><table border="0" bgcolor="F1E0C6"><tr><td><img src="'.$layout_name.'/images/news/icon_0.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_1.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_2.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_3.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_4.gif" width="20"></td></tr><tr><td><input type="radio" name="icon_id" value="0" checked="checked"></td><td><input type="radio" name="icon_id" value="1"></td><td><input type="radio" name="icon_id" value="2"></td><td><input type="radio" name="icon_id" value="3"></td><td><input type="radio" name="icon_id" value="4"></td></tr></table></td></tr><tr><td align="center" bgcolor="D4C0A1"><b>New<br>ticker<br>text:</b></td><td bgcolor="F1E0C6"><textarea name="new_ticker" rows="3" cols="45"></textarea></td></tr><tr><td><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" ></div></div></form></td><td><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="AddTicker" src="'.$layout_name.'/images/buttons/_sbutton_cancel.gif" onClick="showNewTickerForm()" alt="AddTicker" /></div></div></td></tr></table>\';
document.getElementById("jajo").innerHTML = \'\';
showednewticker_state = "1";
}
else {
document.getElementById("newtickerform").innerHTML = \'\';
document.getElementById("jajo").innerHTML = \'<div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="AddTicker" src="'.$layout_name.'/images/buttons/addticker.gif" onClick="showNewTickerForm()" alt="AddTicker" /></div></div>\';
showednewticker_state = "0";
}
}
var showednewnews_state = "0";
function showNewNewsForm()
{
if(showednewnews_state == "0") {
document.getElementById("newnewsform").innerHTML = \'<form action="index.php?subtopic=latestnews&action=newnews" method="post" ><table border="0"><tr><td bgcolor="D4C0A1" align="center"><b>Select icon:</b></td><td><table border="0" bgcolor="F1E0C6"><tr><td><img src="images/news/icon_0.gif" width="20"></td><td><img src="images/news/icon_1.gif" width="20"></td><td><img src="images/news/icon_2.gif" width="20"></td><td><img src="images/news/icon_3.gif" width="20"></td><td><img src="images/news/icon_4.gif" width="20"></td></tr><tr><td><input type="radio" name="icon_id" value="0" checked="checked"></td><td><input type="radio" name="icon_id" value="1"></td><td><input type="radio" name="icon_id" value="2"></td><td><input type="radio" name="icon_id" value="3"></td><td><input type="radio" name="icon_id" value="4"></td></tr></table></td></tr><tr><td align="center" bgcolor="F1E0C6"><b>Topic:</b></td><td><input type="text" name="news_topic" maxlenght="50" style="width: 300px" ></td></tr><tr><td align="center" bgcolor="D4C0A1"><b>News<br>text:</b></td><td bgcolor="F1E0C6"><textarea name="news_text" rows="6" cols="60"></textarea></td></tr><tr><td align="center" bgcolor="F1E0C6"><b>Your nick:</b></td><td><input type="text" name="news_name" maxlenght="40" style="width: 200px" ></td></tr><tr><td><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" ></div></div></form><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="CancelAddNews" src="'.$layout_name.'/images/buttons/_sbutton_cancel.gif" onClick="showNewNewsForm()" alt="CancelAddNews" /></div></div></td></tr></table>\';
document.getElementById("chicken").innerHTML = \'\';
showednewnews_state = "1";
}
else {
document.getElementById("newnewsform").innerHTML = \'\';
document.getElementById("chicken").innerHTML = \'<div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="AddNews" src="'.$layout_name.'/images/buttons/addnews.gif" onClick="showNewNewsForm()" alt="AddNews" /></div></div>\';
showednewnews_state = "0";
}
}</script>';

/* Inicio de conteúdo */
if ($action == ""){
$main_content .='
<table border="0" cellspacing="1" cellpadding="7" width="100%">
<tr bgcolor="'.$config['site']['vdarkborder'].'">
<td colspan="2"><font class="white"><b>Painel De Controle Geral</b></font></td>
</tr>

<tr bgcolor="'.$config['site']['darkborder'].'">
	<td colspan="1"><b>Menu</b></td>
	<td colspan="1" width="80%"><b>Informações</b></td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td align="center"><div id="newtickerform"></div><div id="jajo"><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="AddTicker" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" onClick="showNewTickerForm()" alt="AddTicker" /></div></div></div></td>
	<td>Adicionar um <b>Ticket</b></td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td align="center"><a href="index.php?subtopic=adminpanel&action=install_spells">Carregar</a></td>
	<td>Carregar informações de magias existentes do servidor</td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td align="center"><a href="index.php?subtopic=adminpanel&action=install_monsters">Carregar</a></td>
	<td>Carregar informações de criaturas existentes do servidor</td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td align="center"><a href="index.php?subtopic=cpanel&action=captura_dados">Exibir Info.</a></td>
	<td>Exibir informações internas do servidor</td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td align="center"><a href="index.php?subtopic=cpanel&action=querys">Adicionar Sistemas</a></td>
	<td>Adicionar sistemas no banco de dados</td>
</tr>';
if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td align="center"><a href="index.php?subtopic=cpanel&action=top_rep">TOP Reputação<br /><small><i>(Forum)</i></small></a></td>
	<td>Jogadores que dao suporte no forum system</td>
</tr>';
if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td align="center"><a href="index.php?subtopic=cpanel&action=announcements">Announcements</a></td>
	<td>Anúncios do jogo na pagina inicial do website.</td>
</tr>';

$main_content .='</table>';
}

if ($action == "deletar_sistemas"){ $main_content .='Sistema PagSeguro Automatico - <a href="index.php?subtopic=cpanel&action=deleta_pagseguro"><font size="1">[REMOVER]</font></a><br />'; }
if ($action == "deletar_sistemas"){ $main_content .='Woe - <a href="index.php?subtopic=cpanel&action=deletar_sistema/woe"><font size="1">[REMOVER]</font></a><br />'; }

if ($action == "deleta_pagseguro"){ $main_content .='Sistema <b>PagSeguro Automatico</b> sendo deletado de seu banco de dados.<br />Por favor aguarde.<meta http-equiv="refresh" content="3; index.php?subtopic=cpanel&action=100/deleta_pagseguro" />'; }
if ($action == "100/deleta_pagseguro"){ $SQL->query("DROP TABLE `pagsegurotransacoes`"); $main_content .='<font color="green"><b>Sistema foi removido com sucesso!</b></font><meta http-equiv="refresh" content="3; index.php?subtopic=cpanel" />'; }

if ($action == "deletar_sistema/woe"){ $main_content .='Sistema <b>Woe</b> sendo deletado de seu banco de dados.<br />Por favor aguarde.<meta http-equiv="refresh" content="3; index.php?subtopic=cpanel&action=100/deleta_pagseguro" />'; }
if ($action == "deleta_woe"){ $main_content .='Sistema <b>Woe</b> sendo deletado de seu banco de dados.<br />Por favor aguarde.<meta http-equiv="refresh" content="2; index.php?subtopic=cpanel&action=100/deleta_pagseguro" />'; }
if ($action == "100/deleta_woe"){ $SQL->query("DROP TABLE `woe`"); $main_content .='<font color="green"><b>Sistema foi removido com sucesso!</b></font>'; }
/* Exibe informações */
if ($action == "informacoes_server"){
$main_content .='
<table border="0" cellspacing="1" cellpadding="7" width="100%">
<tr bgcolor="'.$config['site']['vdarkborder'].'">
<td colspan="2"><font class="white"><b>Painel De Controle Geral - Informações do Servidor</b></font></td>
</tr>

<tr bgcolor="'.$config['site']['darkborder'].'">
	<td colspan="1"><b>Menu</b></td>
	<td colspan="1" width="80%"><b>Informações</b></td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td><b>Diretório do Servidor</b></td>
	<td>'.$config['site']['server_path'].'</td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td><b>Maximo de<br />jogadores online</b></td>
	<td>'.$config['server']['maxPlayers'].' players</td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td><b>IP de acesso</b></td>
	<td>'.$config['server']['ip'].'</td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td><b>PORT de acesso</b></td>
	<td>'.$config['server']['statusPort'].'</td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td><b>Localização<br /> do servidor</b></td>
	<td>'.$config['server']['location'].'</td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td><b>Database</b><br /><font size="1">(MySQL, Sqlite)</font></td>
	<td>'.$config['server']['sqlType'].'</td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td><b>Usuário&nbsp;'.$config['server']['sqlType'].'</b></td>
	<td>'.$config['server']['sqlUser'].'</td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td><b>Senha&nbsp;'.$config['server']['sqlType'].'</b></td>
	<td><input type="text" value="'.$config['server']['sqlPass'].'" readonly="readonly" disabled="disabled" /></td>
</tr>';

if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .='
<tr bgcolor="'.$bgcolor.'">
	<td><b>Nome da Database</b></td>
	<td>'.$config['server']['sqlDatabase'].'</td>
</tr>';
 
$main_content .='</table><br />
<a href="index.php?subtopic=cpanel">VOLTAR</a>';
}
if ($action == "announcements"){
$main_content .='
<script type="text/javascript">

var accountHttp;

//sprawdza czy dane konto istnieje czy nie
function checkAccount()
{
	if(document.getElementById("account_name").value=="")
	{
		document.getElementById("acc_name_check").innerHTML = \'<img src="images/nok.gif" />\';
		return;
	}
	accountHttp=GetXmlHttpObject();
	if (accountHttp==null)
	{
		return;
	}
	var account = document.getElementById("account_name").value;
	var url="ajax/check_account.php?account=" + account + "&uid="+Math.random();
	accountHttp.onreadystatechange=AccountStateChanged;
	accountHttp.open("GET",url,true);
	accountHttp.send(null);
} 

var emailHttp;

//sprawdza czy dane konto istnieje czy nie
function checkEmail()
{
	if(document.getElementById("email").value=="")
	{
		document.getElementById("email_check").innerHTML = \'<img src="images/nok.gif" />\';
		return;
	}
	emailHttp=GetXmlHttpObject();
	if (emailHttp==null)
	{
		return;
	}
	var email = document.getElementById("email").value;
	var url="ajax/check_email.php?email=" + email + "&uid="+Math.random();
	emailHttp.onreadystatechange=EmailStateChanged;
	emailHttp.open("GET",url,true);
	emailHttp.send(null);
} 

function EmailStateChanged() 
{ 
	if (emailHttp.readyState==4)
	{ 
		document.getElementById("email_check").innerHTML=emailHttp.responseText;
	}
}

	function validate_required(field,alerttxt)
	{
	with (field)
	{
	if (value==null||value==""||value==" ")
	  {alert(alerttxt);return false;}
	else {return true}
	}
	}

	function validate_email(field,alerttxt)
	{
	with (field)
	{
	apos=value.indexOf("@");
	dotpos=value.lastIndexOf(".");
	if (apos<1||dotpos-apos<2) 
	  {alert(alerttxt);return false;}
	else {return true;}
	}
	}

	function validate_form(thisform)
	{
	with (thisform)
	{
	if (validate_required(title,"Please enter a title!")==false)
	  {title.focus();return false;}
	if (validate_required(text,"Please enter your e-mail!")==false)
	  {text.focus();return false;}
	if (validate_email(email,"Invalid e-mail format!")==false)
	  {email.focus();return false;}
	if (verifpass==1) {
	if (validate_required(passor,"Please enter password!")==false)
	  {passor.focus();return false;}
	if (validate_required(passor2,"Please repeat password!")==false)
	  {passor2.focus();return false;}
	if (passor2.value!=passor.value)
	  {alert(\'Repeated password is not equal to password!\');return false;}
	}
	if(rules.checked==false)
	  {alert(\'To create account you must accept server rules!\');return false;}
	}
	}
</script>
<form action="index.php?subtopic=cpanel&action=announcements_add" method="post" onsubmit="return validate_form(this)">
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white" colspan="2"><b>New Announcement</b></td>
</tr>
  <tr bgcolor="'.$config['site']['darkborder'].'">
    <td width="10%">Title:</td>
    <td width="90%"><input type="text" name="title" /></td>
  </tr>
  <tr bgcolor="'.$config['site']['lightborder'].'">
    <td>Text:</td>
    <td><textarea name="text" cols="50" rows="6" maxlength="240"></textarea></td>
  </tr>
  <tr bgcolor="'.$config['site']['darkborder'].'">
    <td>Author:</td>
    <td><select name="author">';
$players_from_logged_acc = $account_logged->getPlayersList();
if(count($players_from_logged_acc) > 0) {
$players_from_logged_acc->orderBy('name');
foreach($players_from_logged_acc as $player) {
$main_content .= '<option>'.$player->getName().'</option>';
}
} else {
$main_content .= 'You don\'t have any character on your account.';
}
$main_content .='
</select></td>
  </tr>
</table>
<br />

<div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(&quot;'.$layout_name.'/images/buttons/sbutton_over.gif&quot;); visibility: hidden;"></div>
<input class="ButtonText" name="Submit" alt="Submit" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" type="image">
</div></div>
</form>
';
}
if ($action == "announcements_add"){
$SQL->query("INSERT INTO  `announcements` (`id` ,`title` ,`text` ,`date` ,`author`)
VALUES (NULL ,  '$title',  '$text',  '".time()."',  '$author');");
$SQL->query("OPTIMIZE TABLE  `announcements`");
$main_content .='<div align="center" style="font-size:18px;font-weight:bold;">Announcement <font color="red">'.$title.'</font> added!</div>';
}
if ($action == "captura_dados"){
$main_content .='
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>Aguarde ...</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td>Procurando dados necessários. Por favor aguarde.</td>
</tr>
</TABLE>
<meta http-equiv="refresh" content="5; index.php?subtopic=cpanel&action=dados_sucesso" />
';}
if ($action == "dados_sucesso"){
$main_content .='<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>Aguarde ...</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td><font color="green"><b>Dados necessários foram capturados com sucesso!</b></font><br /><small>Redirecionando ... </small></td>
</tr>
</TABLE>
<meta http-equiv="refresh" content="3; index.php?subtopic=cpanel&action=informacoes_server" />
';}
if ($action == "querys"){
$main_content .='
<div class="InnerTableContainer" align="center">
<table>
<tbody>
<tr>
<td>
<div class="TableShadowContainerRightTop">
<div class="TableShadowRightTop" style="background-image: url('.$layout_name.'/images/content/table-shadow-rt.gif);"></div>
</div>
<div class="TableContentAndRightShadow" style="background-image: url('.$layout_name.'/images/content/table-shadow-rm.gif);">
<div class="TableContentContainer">
<table class="TableContent" style="border: 1px solid #faf0d7;">
<tbody>
<tr style="background-color: #505050;">
</tr>
<tr class="Table" style="background-color: #d4c0a1;">
<td style="width: 800; border: 1px; border-style: solid; border-color: #FAF0D7; padding: 5px;">
[<a href="index.php?subtopic=cpanel&action=pagseguro_add">PagSeguro Retorno Automatico</a>]<br />
<small>Sistema desbuga a pagina <a href="index.php?subtopic=history" target="_Blank">Trans. History</a>.</small><br />
<br />
[<a href="index.php?subtopic=cpanel&action=woe">Woe</a>]<br />
<small>Sistema instala o banco de dados do evento <b>WOE</b><i> (Apenas as Querys no banco de dados)</i></small><br />
<br />
[<a href="index.php?subtopic=cpanel&action=guild_war">Guild War</a>]<br />
<small>Sistema instala o banco de dados do sistema <b>Guild War</b><i> (Apenas as Querys no banco de dados)</i></small><br />
<br />
[<a href="index.php?subtopic=cpanel&action=videos">Videos</a>]<br />
<small>Adiciona as querys do sistema de gallery</small><br />
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="TableShadowContainer">
<div class="TableBottomShadow" style="background-image: url('.$layout_name.'/images/content/table-shadow-bm.gif);">
<div class="TableBottomLeftShadow" style="background-image: url('.$layout_name.'/images/content/table-shadow-bl.gif);"></div>
<div class="TableBottomRightShadow" style="background-image: url('.$layout_name.'/images/content/table-shadow-br.gif);"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br /><br />
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<a href="index.php?subtopic=cpanel"><input class="ButtonText" name="Back" alt="Back" src="'.$layout_name.'/images/vips/_sbutton_back.gif" type="image"></a></div></div>
</td>
</tr>
</tbody>
</table>
</center>
';}
if ($action == "pagseguro_add"){
$main_content .='
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>Sistema Instalado</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td>Sistema <b>Pagseguro Automatico</b> foi instalado com sucesso, veja se com esta ação foi removido o erro aparente na pagina <a href="index.php?subtopíc=history">Trans. History</a>. Caso não tenha efeito nenhum, re-instale novamente com esta ação.<br />
Caso este tipo de erro persista, por favor contacte o administrador do website.
<br />
<br />';
$main_content .="
<pre style='background: ".$config['site']['lightborder']."; border: 1px solid #000 ;padding: 5px;'>
<b>Query executada</b>
<code>
CREATE TABLE IF NOT EXISTS `pagsegurotransacoes` (
  `TransacaoID` varchar(36) NOT NULL,
  `VendedorEmail` varchar(200) NOT NULL,
  `Referencia` varchar(200) default NULL,
  `TipoFrete` char(2) default NULL,
  `ValorFrete` decimal(10,2) default NULL,
  `Extras` decimal(10,2) default NULL,
  `Anotacao` text,
  `TipoPagamento` varchar(50) NOT NULL,
  `StatusTransacao` varchar(50) NOT NULL,
  `CliNome` varchar(200) NOT NULL,
  `CliEmail` varchar(200) NOT NULL,
  `CliEndereco` varchar(200) NOT NULL,
  `CliNumero` varchar(10) default NULL,
  `CliComplemento` varchar(100) default NULL,
  `CliBairro` varchar(100) NOT NULL,
  `CliCidade` varchar(100) NOT NULL,
  `CliEstado` char(2) NOT NULL,
  `CliCEP` varchar(9) NOT NULL,
  `CliTelefone` varchar(14) default NULL,
  `NumItens` int(11) NOT NULL,
  `Data` datetime NOT NULL,
  `ProdQuantidade_x` int(5) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL default '0',
  UNIQUE KEY `TransacaoID` (`TransacaoID`,`StatusTransacao`),
  KEY `Referencia` (`Referencia`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
</code>
</pre>
</table>";
$SQL->query("CREATE TABLE IF NOT EXISTS `pagsegurotransacoes` (
  `TransacaoID` varchar(36) NOT NULL,
  `VendedorEmail` varchar(200) NOT NULL,
  `Referencia` varchar(200) default NULL,
  `TipoFrete` char(2) default NULL,
  `ValorFrete` decimal(10,2) default NULL,
  `Extras` decimal(10,2) default NULL,
  `Anotacao` text,
  `TipoPagamento` varchar(50) NOT NULL,
  `StatusTransacao` varchar(50) NOT NULL,
  `CliNome` varchar(200) NOT NULL,
  `CliEmail` varchar(200) NOT NULL,
  `CliEndereco` varchar(200) NOT NULL,
  `CliNumero` varchar(10) default NULL,
  `CliComplemento` varchar(100) default NULL,
  `CliBairro` varchar(100) NOT NULL,
  `CliCidade` varchar(100) NOT NULL,
  `CliEstado` char(2) NOT NULL,
  `CliCEP` varchar(9) NOT NULL,
  `CliTelefone` varchar(14) default NULL,
  `NumItens` int(11) NOT NULL,
  `Data` datetime NOT NULL,
  `ProdQuantidade_x` int(5) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL default '0',
  UNIQUE KEY `TransacaoID` (`TransacaoID`,`StatusTransacao`),
  KEY `Referencia` (`Referencia`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;");}
if ($action == "sucess_"){
$main_content .='
<b>
<font color="green">Todas as querys foram adicionadas com sucesso!</font>
<br />
<small>Você será redirecionado em 5 segundos.</small>
</b>
<meta http-equiv="refresh" content="5; index.php?subtopic=cpanel" />
';}

if ($action == "woe"){ $main_content .='<b>Verificando banco de dados ... </b><meta http-equiv="refresh" content="2; index.php?subtopic=cpanel&action=10/woe" />'; }
if ($action == "10/woe"){ $main_content .='<b>Atualizando dados ... </b><meta http-equiv="refresh" content="2; index.php?subtopic=cpanel&action=60/woe" />'; }
if ($action == "60/woe"){ $main_content .='<b>Adicionando tabelas ... </b><meta http-equiv="refresh" content="2; index.php?subtopic=cpanel&action=100/woe" />'; }
if ($action == "100/woe"){ 
$SQL->query("CREATE TABLE IF NOT EXISTS `woe` (
  `id` int(11) NOT NULL auto_increment,
  `started` int(11) NOT NULL,
  `guild` int(11) NOT NULL,
  `breaker` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;");
$main_content .='<b>Sistema 100% Instalado ... </b><meta http-equiv="refresh" content="2; index.php?subtopic=cpanel&action=finalizando/woe" />'; }
if ($action == "finalizando/woe"){ $main_content .='<b>Finalizando ... </b><meta http-equiv="refresh" content="5; index.php?subtopic=cpanel&action=sucess_" />'; }

if ($action == "guild_war"){
$SQL->query("
CREATE TABLE IF NOT EXISTS `guild_wars` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `guild_id` INT NOT NULL,
  `enemy_id` INT NOT NULL,
  `begin` BIGINT NOT NULL DEFAULT '0',
  `end` BIGINT NOT NULL DEFAULT '0',
  `frags` INT UNSIGNED NOT NULL DEFAULT '0',
  `payment` BIGINT UNSIGNED NOT NULL DEFAULT '0',
  `guild_kills` INT UNSIGNED NOT NULL DEFAULT '0',
  `enemy_kills` INT UNSIGNED NOT NULL DEFAULT '0',
  `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `guild_id` (`guild_id`),
  KEY `enemy_id` (`enemy_id`)
) ENGINE=InnoDB;
ALTER TABLE `guilds` ADD `balance` BIGINT UNSIGNED NOT NULL AFTER `motd`;

CREATE TABLE IF NOT EXISTS `guild_kills` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `guild_id` INT NOT NULL,
  `war_id` INT NOT NULL,
  `death_id` INT NOT NULL
) ENGINE = InnoDB;

ALTER TABLE `killers` ADD `war` INT NOT NULL DEFAULT 0;
");
$main_content .='
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>Sistema Instalado</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td>Sistema <b>Guild War System</b> foi instalado corretamente em seu banco de dados. Por favor verifique se a pagina <a href="index.php?subtopic=wars">Guild War</a> está funcionando com perfeição sem erros. Caso tenha erros por favor re-instale este sistema da mesma forma que voce instalou da primeira vez.<br /><br />
Caso este tipo de erro persista, por favor contacte o administrador do website.
<br />
<br />';
$main_content .="
<pre style='background: ".$config['site']['lightborder']."; border: 1px solid #000 ;padding: 5px;'>
<b>Query executada</b>
<code>
CREATE TABLE IF NOT EXISTS `guild_wars` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `guild_id` INT NOT NULL,
  `enemy_id` INT NOT NULL,
  `begin` BIGINT NOT NULL DEFAULT '0',
  `end` BIGINT NOT NULL DEFAULT '0',
  `frags` INT UNSIGNED NOT NULL DEFAULT '0',
  `payment` BIGINT UNSIGNED NOT NULL DEFAULT '0',
  `guild_kills` INT UNSIGNED NOT NULL DEFAULT '0',
  `enemy_kills` INT UNSIGNED NOT NULL DEFAULT '0',
  `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `guild_id` (`guild_id`),
  KEY `enemy_id` (`enemy_id`)
) ENGINE=InnoDB;

ALTER TABLE `guilds` ADD `balance` BIGINT UNSIGNED NOT NULL AFTER `motd`;

CREATE TABLE IF NOT EXISTS `guild_kills` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `guild_id` INT NOT NULL,
  `war_id` INT NOT NULL,
  `death_id` INT NOT NULL
) ENGINE = InnoDB;

ALTER TABLE `killers` ADD `war` INT NOT NULL DEFAULT 0;
</code></pre>";
$main_content .='</td>
</tr>
</TABLE>
<br />
<input type="button" onclick="location.href=\'index.php?subtopic=cpanel\'" value="Voltar" />
';}
if ($action == "videos"){
$SQL->query("
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(5) NOT NULL auto_increment,
  `titulo` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL,
  `autor` varchar(20) NOT NULL,
  `data` varchar(50) NOT NULL,
  `tag` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
");
$main_content .='
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>Sistema Instalado</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td>Sistema <b>Gallery System</b> foi instalado corretamente em seu banco de dados. Por favor verifique se a pagina <a href="index.php?subtopic=gallery">Gallery</a> está funcionando com perfeição sem erros. Caso tenha erros por favor re-instale este sistema da mesma forma que voce instalou da primeira vez.<br /><br />
Caso este tipo de erro persista, por favor contacte o administrador do website.
<br />
<br />';
$main_content .="
<pre style='background: ".$config['site']['lightborder']."; border: 1px solid #000 ;padding: 5px;'>
<b>Query executada</b>
<code>
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(5) NOT NULL auto_increment,
  `titulo` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL,
  `autor` varchar(20) NOT NULL,
  `data` varchar(50) NOT NULL,
  `tag` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
</code></pre>";
$main_content .='</td>
</tr>
</TABLE>
<br />
<input type="button" onclick="location.href=\'index.php?subtopic=cpanel\'" value="Voltar" />
';}
}
if ($action == "top_rep"){
$main_content .='
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>New Tutor System</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td>
Jogador contactou-se que tem mais de <b>6</b> pontos para ser promovido? Verifique o nome do mesmo abaixo.<br />
<br /><form action="index.php?subtopic=cpanel&action=top_reps" method="post">
<b>Player Name</b><br /><input type="text" name="player_name" /><br />
<input type="submit" value="Procurar" />
</form></td>
</tr>
</TABLE>';
}
if ($action == "top_reps"){
$qrys = $SQL->query("SELECT COUNT(*) FROM `thanks` WHERE player_name = '$player_name' LIMIT 1;")->fetch();
$query_thanks = $SQL->query('SELECT * FROM `thanks` LIMIT 1;');
foreach($query_thanks as $qry){
$main_content .='
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>New Tutor System</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td>
Jogador <b>'.$player_name.'</b> tem <b>'.$qrys[0].'</b> pontos de reputação.
';
if ($qrys[0] >= 6)$main_content .='<br /><a href="index.php?subtopic=cpanel&action=promove">Promover !</a></td>
</tr>
</TABLE>';
$main_content .='</td>
</tr>
</TABLE><br /><br /><a href="index.php?subtopic=cpanel&action=top_rep">Voltar</a>';
}
}
if ($action == "promove"){
$main_content .='
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>New Tutor System</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td>
<font style="font-size:16px; font-weight:bold;">Jogador <b>'.$player_name.'</b> foi promovido com sucesso a tutor!</font><br /><small>Para remove-lo, é preciso alterar os dados no banco de dados manualmente.</small>
<br /><a href="index.php?subtopic=cpanel&action=top_reps">Voltar</a>
</td>
</tr>
</TABLE>
';
}
/* Players sem acess page 5+ */
if ($account_logged->getCustomField("page_access") <= 5){
$main_content .='
<script type="text/javascript">
location.href="index.php?subtopic=erro&id=404";
</script>
';}
if ($action == "deletar_ann"){
$SQL->query("DELETE FROM `announcements` WHERE `announcements`.`id` = ".$id." LIMIT 1");
$main_content .='<center style="font-size:18px;font-weight:bold;">Announcement '.$id.' deleted Successfully!<br /><a href="index.php">Voltar</a></center>';
}
}
?>