<?php header("Content-Type: text/html; charset=ISO-8859-1",true);
if(!defined('INITIALIZED'))
	exit;
$bonusPoints = $config['site']['bonusPoints'];
if ($action == ""){
$main_content .='

<div id="ProgressBar">
<div id="Headline">Regras da Doação</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter"> 
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div>
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div> 
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif"> 
<div id="FirstStep" class="Steps">
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif">
<div class="StepText" style="font-weight: bold;">Regras da Doacao</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif"> 
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-blue.gif"> 
<div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;"> 
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-blue.gif">
<div class="StepText" style="font-weight: normal;">Informacoes do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-blue.gif">
<div class="StepText" style="font-weight: normal;">Confirmacao</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Regras da Doação</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
 <tbody><tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
Informamos aos jogadores e colaboradores que o <b>'.$config['server']['serverName'].' Alternate Tibia Server</b> nao tem nenhum interesse financeiro. Toda a renda obtida e diretamente reaplicada para a manutencao do servidor - isto significa que ao fazer uma doacao, voce esta garantindo a estabilidade e aumentando a qualidade do mesmo.</br></br>
Os pontos que sao repassados aos jogadores que efetuam as doacoes nao representam nada mais alem de nossa gratificacao, isto e, voce nao esta comprando pontos e sim recebendo uma gratificacao simbolica (em formas de pontos) que te beneficie dentro do jogo; voce podera usar os seus pontos da maneira que desejar.</br></br>
O esperito deste sistema e simples: com o intuito de nos aproximarmos dos jogadores e fazer com que voces se sintam em casa, entendemos a sua doacao como uma via de mao dupla no quesito credibilidade. Ao acreditar que vale a pena investir na manutencao do servidor, nos investimos em voces creditando-os com pontos, que como ja dito anteriormente, podem ser utilizados da maneira que mais os couber.</br></br>
Confira nosso <a href="index.php?subtopic=shopsystem">'.$config['server']['serverName'].' Shop</a> e saiba como aproveitar os seus pontos da maneira mais proveitosa a sua situacao.</br>

<h3>Duvidas Frequentes</h3></br>
<b>Mas o que sao VIP Points?</b>
VIP Points faz parte do nosso sistema de doacao, com eles voce pode adquirir uma VIP ou algo mais que esteja disponivel no Shopping Online ou in Game.</br></br>


<b>Como efetuar a doacao?</b>
<br />Clique no botao <b>"Continue"</b> e siga todos os procedimentos para realizar sua doacao.
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<form action="?subtopic=donate&action=agreement" method="post">
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</form>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</center>';}
if ($action == "agreement"){
if(!$logged) {
$link = "index.php?subtopic=donate&action=agreement";
include("login.php");
}
else
{
$buy_name = stripslashes(urldecode($_POST['buy_name']));
$main_content .= '
<div id="ProgressBar">
<div id="Headline">Método de Pagamento</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: bold;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-blue.gif">
<div class="StepText" style="font-weight: normal;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-blue.gif">
<div class="StepText" style="font-weight: normal;">Confirmação</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
<br /><br />
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="4" WIDTH="100%"> 
<form action="index.php?subtopic=donate&action=tipo" method="POST">
<input type="hidden" name="char_name" value=""> 
<TR BGCOLOR="#505050"> 
<TD CLASS="white" COLSPAN="3"><b>Select a payment method</b></TD> 
</TR>';
if ($config['site']['pagseguro'] == 1){
$main_content .='
	<TR BGCOLOR=#D4C0A1>
		<TD>';
			if ($bonusPoints > 1){
			if ($bonusPoints <= 4){$main_content .='<b>[Bônus Points <font color="#FF0000">x'.$bonusPoints.'</font>]</b><br />';}
			if ($bonusPoints >= 5){$main_content .='<b>[Bônus Points <font color="#FF0000" style="font-size:18px;font-weight:bold;">Extreme x'.$bonusPoints.'!</font>]</b><br />';}
			}
		$main_content .='<input type="radio" name="method" value="1" />&nbsp;PagSeguro - <b>Cartões de crédito&nbsp;<i>/</i>&nbsp;Boleto&nbsp;<i>/</i>&nbsp;Transferência bancária</b>
		</TD>
	</TR>';}
if ($config['site']['paypal'] == 1){
		$main_content .='
		<TR BGCOLOR=#D4C0A1>
			<TD><input type="radio" name="method" value="2" />&nbsp;Paypal/Pagseguro - <b>Credit Cards/Nacional and International Transactions</b></TD>
		</TR>';}
		if ($config['site']['caixa'] == 1){
		$main_content .='
		<TR BGCOLOR=#D4C0A1>
			<TD><input type="radio" name="method" value="3" />&nbsp;Caixa/Loterica (Bonus de 20%)- <b>Depósitos/DOCS/Transferencias Bancárias</b></TD>
		</TR>';}
		if ($config['site']['caixa'] == 0 && $config['site']['pagseguro'] == 0 && $config['site']['paypal'] == 0){
		$main_content .='
		<TR BGCOLOR="#D4C0A1" padding="10px">
			<TD><b style="color: red; padding: 5px;">Nenhuma forma de pagamento disponível no momento.</b></TD>
		</TR>';
		}
$main_content .='
</TABLE>
</tbody>
</table>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>';
if ($config['site']['caixa'] == 1 || $config['site']['pagseguro'] == 1 || $config['site']['paypal'] == 1){
$main_content .='
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<a href="javascript:void();" onclick=location.href="index.php?subtopic=donate&action=pag_form">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/buttons/_sbutton_continue.gif" type="image">
</div>
</div>
</a>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>';
}
$main_content .='
</td>
</tr>
</tbody>
</table>';
}
$_SESSION["nome"] = stripslashes(urldecode($_POST['method']));}
elseif($action == 'tipo'){
if(!$logged){
$main_content .= '
<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
<TR BGCOLOR="'.$config['site']['vdarkborder'].'">
<TD CLASS="white"><b>Error</b></td>
</TR>
<TR BGCOLOR='.$config['site']['darkborder'].'>
<TD>Please, log in so you can proceed with the operation.<br /><a href="index.php?subtopic=accountmanagement">It is here log</a>. If you do not have an account, <a href="index.php?subtopic=createaccount">Register here</a>.</TD>
</TR>
</TABLE>';
}else{
$buy_tipo = stripslashes(urldecode($_POST['method']));
if($buy_tipo == 0) { $main_content .='
<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
<TR BGCOLOR="'.$config['site']['vdarkborder'].'">
<TD CLASS=white><b>Error</b></td>
</TR>
<TR BGCOLOR='.$config['site']['darkborder'].'>
<TD><b style="color: red;">No payment method has been selected.</b><br /><i>Select a form of payment available to give procedure.</i></TD>
</TR>
</TABLE>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td style="border: 0px none;"> 
<a href="javascript:void();" onclick=location.href="index.php?subtopic=donate&action=agreement">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Back" alt="Back" src="'.$layout_name.'/images/vips/_sbutton_back.gif" type="image">
</div>
</div>
</a>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
';}
if($buy_tipo == 1) {
$main_content .= '
<div id="ProgressBar">
<div id="Headline">Informações do Pedido</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-green.gif">
<div class="StepText" style="font-weight: bold;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-blue.gif">
<div class="StepText" style="font-weight: normal;">Confirmação</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
';
if ($bonusPoints >= 2){
$main_content .='
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Bônus Points!</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
<td>';
if ($bonusPoints >= 2){
$main_content .= '<div style="font-size: 20px; font-weight: bold; color: red;">Points x'.$bonusPoints.'</div>';
}
$main_content .='
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />';
}
$_POST['item_quant_1'];
$_POST['account_namev'];
$_POST['emailv'];
$_POST['character_namev'];
$main_content .='
<form action="?subtopic=donate&action=confirmacao" method="post" enctype="application/x-www-form-urlencoded">
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Account Information</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
<td><b>Character Name:</b></td>
<td>
<select name="character_namev">';
$players_from_logged_acc = $account_logged->getPlayersList();
if(count($players_from_logged_acc) > 0) {
$players_from_logged_acc->orderBy('name');
foreach($players_from_logged_acc as $player) {
$main_content .= '<option>'.$player->getName().'</option>';
}
} else {
$main_content .= '</select><b style="color: red;" class="error">You don\'t have any character on your account.</b>';
}
$main_content .='
</select>
</td>
</tr>
<tr>
<td><b>Account Name:</b></td>
<td><input type="hidden" value="' . $account_logged->getName() . '" name="account_namev" />' . $account_logged->getCustomField("name") . '</td>
</tr>
<tr>
<td><b>Email:</b></td>
<td><input type="hidden" value="' . $account_logged->getCustomField("email") . '" name="emailv" />' . $account_logged->getCustomField("email") . '</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />

<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Points to buy</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
<td width="10%"><b>Points:</b></td>
<td>
<select name="item_valor_1">
<option value="1000">10</option>
<option value="2000">20</option>
<option value="3000">30</option>
<option value="5000">50</option>
<option value="10000">100</option>
<option value="15000">150</option>
<option value="20000">200</option>
<option value="25000">250</option>
<option value="50000">500</option>
</select>
</td>
</tr>
</table>
<br />
<small>Todos os pagamentos feito com forma de pagamento pagseguro são totalmente automatizados. São entregues os pontos assim que o pagseguro confirma a transferencia. <br />
<b style="color: red;">Nenhum membro da equipe tem a autorização e permissão para ter acesso ao painel de pontos do servidor. Todos os mesmos são adicionados por nossos sistemas inteligentes.</b></small>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</div>
</div>
</form>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</table>
';
}
if($buy_tipo == 3) {
$main_content .='
<b>Caixa Shop System</b><br /><br />
Valores com bonus de 20%:
<ul>
<li> 10 BRL (para 12 points)</li>
<li> 20 BRL (para 24 points)</li>
<li> 30 BRL (para 36 points)</li>
<li> 40 BRL (para 48 points)</li>
<li> 50 BRL (para 60 points)</li>
<li> 60 BRL (para 72 points)</li>
<li> 70 BRL (para 84 points)</li>
<li> 80 BRL (para 96 points)</li>
<li> 90 BRL (para 108 points)</li>
<li> 100 BRL (para 120 points)</li>
</ul>
<br />
<b>Aqui estao os passos que voce precisa fazer:</b> <br />
1. Anotes os dados da conta. <br />
2. Va em um Caixa eletronico ou em uma Loterica. <br />
3. E faça o deposito. <br />
4. Guarde o comprovante. <br />
5. Depois clique em Confirmação no menu lateral e faça a confirmação de doacão. <br />
6. Depois use seus pontos no shop como quiser <br /> <br /> <br />
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS=white><B>Caixa Econômica</B></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td><pre>' . $config['site']['CaixaCont'] . '</pre></td>
</tr>
</TABLE>
<br />
<center>
<a href="javascript:void();" onclick=location.href="index.php?subtopic=latestnews">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</div>
</div>
</a>
</center>';
}
if($buy_tipo == 2) {
$main_content .='
<b>PayPal Shop System</b><br /><br />
The shop costs:
<ul>
<li> 10 EUR (for 25 points)</li>
<li> 20 EUR (for 50 points)</li>
<li> 30 EUR (for 70 points)</li>
<li> 40 EUR (for 100 points)</li>
<li> 50 EUR (for 130 points)</li>
<li> 60 EUR (for 160 points)</li>
<li> 70 EUR (for 200 points)</li>
<li> 80 EUR (for 220 points)</li>
<li> 90 EUR (for 240 points)</li>
<li> 100 EUR (for 260 points)</li>
</ul>
<br />
<b>Here are the steps you need to make:</b> <br />
1. A PayPal account with a required balance or a creditcard. <br />
2. Fill in your account number. <br />
3. Click on the Buy Now button or your creditcard brand. <br />
4. Make a transaction. <br />
5. After the transaction points will be automatically added to your account. <br />
6. Go to Item shop and use your points <br /> <br /> <br />

<span style="color:red">If you recall the money, and your premium points can\'t be recalled your account will be deleted.</span>
<br />
<br />
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>Paypal</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="'.$config['paypal']['email'].'">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Premium points">
<b>Account name/login:</b> <input type="text" name="custom" value="'.$account_logged->getCustomField("name").'" style="padding: 5px;" autocomplete="off" readonly="readonly">

<select name="amount">
<option value="10.00">10 EUR</option>
<option value="20.00">20 EUR</option>
<option value="30.00">30 EUR</option>
<option value="40.00">40 EUR</option>
<option value="50.00">50 EUR</option>
<option value="60.00">60 EUR</option>
<option value="70.00">70 EUR</option>
<option value="80.00">80 EUR</option>
<option value="90.00">90 EUR</option>
<option value="100.00">100 EUR</option>
</select>
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="notify_url" value="'.$config['server']['url'].'/ipn.php">
<input type="hidden" name="return" value="'.$config['server']['url'].'">
<input type="hidden" name="rm" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="submit" value="Submit" style="padding: 5px;" />
</form></td>
</tr>
</TABLE>
<br>
<b>Pagseguro Shop System</b><br /><br />
Valores:
<ul>
<li> 10 BRL (para 10 points)</li>
<li> 20 BRL (para 20 points)</li>
<li> 30 BRL (para 30 points)</li>
<li> 40 BRL (para 40 points)</li>
<li> 50 BRL (para 50 points)</li>
<li> 60 BRL (para 60 points)</li>
<li> 70 BRL (para 70 points)</li>
<li> 80 BRL (para 80 points)</li>
<li> 90 BRL (para 90 points)</li>
<li> 100 BRL (para 100 points)</li>
</ul>
<br />
<b>Aqui estao os passos que voce precisa fazer:</b> <br />
1. Uma conta Pagseguro com saldo ou cartão de credito. <br />
2. Preencha com seus dados. <br />
3. Escolha saldo, cartão ou debito. <br />
4. Finalize sua transação. <br />
5. Depois clique em Confirmação no menu lateral e faça a confirmação de doacão. <br />
6. Depois use seus pontos no shop como quiser <br /> <br /> <br />
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>Pagseguro</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="'.$config['paypal']['email'].'">
<input type="hidden" name="lc" value="BRL">
<input type="hidden" name="item_name" value="Premium points">
<b>Account name/login:</b> <input type="text" name="custom" value="'.$account_logged->getCustomField("name").'" style="padding: 5px;" autocomplete="off" readonly="readonly">

<select name="amount">
<option value="10.00">10 BRL</option>
<option value="20.00">20 BRL</option>
<option value="30.00">30 BRL</option>
<option value="40.00">40 BRL</option>
<option value="50.00">50 BRL</option>
<option value="60.00">60 BRL</option>
<option value="70.00">70 BRL</option>
<option value="80.00">80 BRL</option>
<option value="90.00">90 BRL</option>
<option value="100.00">100 BRL</option>
</select>
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="rm" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="submit" value="Submit" style="padding: 5px;" />
</form></td>
</tr>
</TABLE>
';}
}
}
if ($action == "confirmacao"){
$main_content .='
<div id="ProgressBar">
<div id="Headline">Confirmação</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-blue.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doacao</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-green.gif">
<div class="StepText" style="font-weight: normal;">Informacoes do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-green.gif">
<div class="StepText" style="font-weight: bold;">Confirmacao</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green-blue.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-blue.gif">
<div class="StepText" style="font-weight: normal;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
Após confirmar esta etapa, voce automaticamente aceitara os <a href="index.php?subtopic=termsdonate" target="_blank">Termos de Compra</a> do servidor <b>'.$config ['server']['serverName'].'</b>. <u>Leia e esteja de acordo com os termos.</u><br /><br />
<form target="pagseguro" method="post" action="https://pagseguro.uol.com.br/checkout/checkout.jhtml">
<input type="hidden" name="email_cobranca" value="' . $config['pagseguro']['email']. '">
<input type="hidden" name="tipo" value="CP">
<input type="hidden" name="moeda" value="BRL">

<input type="hidden" name="item_id_1" value="1">
<input type="hidden" name="item_descr_1" value="' . $config['pagseguro']['produtoNome'] . '">

<input type="hidden" name="item_frete_1" value="0">
<input type="hidden" name="item_quant_1" value="1">
<input type="hidden" name="item_peso_1" value="0">
<input type="hidden" name="ref_transacao" value="' . $account_logged->getCustomField("name").'">
<input type="hidden" name="item_valor_1" value="'.$_POST['item_valor_1'].'">';

$pagseguro_query = $SQL->query("SELECT COUNT(*) FROM `pagsegurotransacoes` WHERE Referencia = '".$account_logged->getCustomField("name")."' AND StatusTransacao = 'Cancelado' LIMIT 1;")->fetch();
if ($pagseguro_query[0] >= 3){
$main_content .='
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Alert Message</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<font style="font-size: 16px; font-weight: bold;">Aviso!</font><br />
Você já possui <b>'.$pagseguro_query[0].'</b> fraude(s) de pagamento.<br />Caso tenha <b>4</b> ou mais sera bloqueada sua account para efetuar pagamentos.<br /><br />
<small><i>Para maiores informacoes, entre em contato com o administrador.</i></small>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div><br />
';}
$main_content .='
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Points to buy</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="30%"><strong>Character Name:</strong></td>
<td>'.$_POST['character_namev'].'</td>
</tr>
<tr>
<td><strong>Account Name:</strong></td>
<td>'.$_POST['account_namev'].'</td>
</tr>
<tr>
<td><strong>Email:</strong></td>
<td>'.$_POST['emailv'].'</td>
</tr>
<tr>
<!--td><strong>Quant. Points:</strong></td>
<td>';
$main_content .= $_POST['item_valor_1'] * 2;
$main_content .='</td> 
</tr-->';
if ($bonusPoints >= 2){
$main_content .='
<tr>
<td><strong>Bônus Points:</strong></td>
<td>';
$main_content .= '<b>x&nbsp;'.$bonusPoints.'</b>';
$main_content .='</td>
</tr>';}
$main_content .='
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td style="border: 0px none;">
<a href="javascript:void();">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/vips/_sbutton_continue.gif" type="image">
</div>
</div>
</a>
</form>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</center>
';}
if ($action == "realizado"){
$main_content .='
<div id="ProgressBar">
<div id="Headline">Pedido Realizado</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="'.$layout_name.'/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url('.$layout_name.'/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="'.$layout_name.'/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="'.$layout_name.'/images/vips/progress-bar-tube-right-green.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doacao</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-2-green.gif">
<div class="StepText" style="font-weight: normal;">Informaçoes do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-3-green.gif">
<div class="StepText" style="font-weight: normal;">Confirmacao</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="'.$layout_name.'/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="'.$layout_name.'/images/vips/progress-bar-icon-4-green.gif">
<div class="StepText" style="font-weight: bold;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Pedido Realizado</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td width="8%" valign="top"><img src="images/account/account-status_green.gif" width="52" height="52" /></td>
    <td width="86%" align="left"><div style="font-weight:bold;font-size:16px; margin-bottom: -10px;">Pedido realizado com sucesso!</div><br />Recebemos seu pagamento com sucesso, dentro de 5 minutos seus pontos serão creditados. Agradecemos por sua colaboração!<br /><small>Att, Yours Community</small></td>
  </tr>
</table>
<br /><br />
<b style="color: red">Nao tente nenhum tipo de fraude, pois sua conta será penalizada!</b>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<form action="index.php?subtopic=history" method="post">
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" type="image">
</form>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</center>';
}