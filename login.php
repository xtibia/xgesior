<?php
$players = $SQL->query('SELECT COUNT(*) FROM `players` WHERE `id`>0;')->fetch();
$main_content .= '
<form action="'.$link.'" method="post" name="AccountLoginForm" style="margin: 0px; padding: 0px;" >
<div class="TableContainer" >
<table class="Table4" cellpadding="0" cellspacing="0" >
<div class="CaptionContainer" >
<div class="CaptionInnerContainer" >
<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>
<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>
<div class="Text" >Account Login</div>
<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>
<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>
<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
</div>
</div>
<tr>
<td>
<div class="InnerTableContainer" >
<table style="width:100%;" >
<tr>
<td>
<div class="TableShadowContainerRightTop" >
<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/content/table-shadow-rt.gif);" ></div>
</div>
<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-rm.gif);" >
<div class="TableContentContainer" >
<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
<tr><td>
<table style="float: left; width: 370px;" cellpadding="0" cellspacing="0" >
<tr><td class="LabelV120" ><span >Account Name:</span></td>
<td><input type="password" name="account_login" size="35" maxlength="30"></td>
</tr>
<tr>
<td class="LabelV120" ><span >Password:</span></td>
<td><input type="password" name="password_login" size="35" maxlength="29" ></td>
</tr>
</table>
<div style="float: right; font-size: 1px;" >
<input type="hidden" name="page" value="overview" ><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Login" alt="Login" src="'.$layout_name.'/images/buttons/_sbutton_login.gif" ></div></div></form><div style="width: 2px; height: 2px;" > </div>
<form action="index.php?subtopic=lostaccount" method="post" style="padding:0px;margin:0px;" >
<div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" >
<div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div>
<input class="ButtonText" type="image" name="Account lost?" alt="Account lost?" src="'.$layout_name.'/images/buttons/_sbutton_accountlost.gif" ></div>
</div>
</form>
</div>
</td>
</tr>
</table>  </div></div>
<div class="TableShadowContainer" >
<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-bm.gif);" >
<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-bl.gif);" ></div>
<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-br.gif);" ></div>
</div>
</div>
</td>
</tr>
</table>
</div>
</table>
</div>
</td>
</tr><br/><center><h1>New to Tibia?</h1></center><div class="TableContainer" >  <table class="Table4" cellpadding="0" cellspacing="0" >    <div class="CaptionContainer" >      <div class="CaptionInnerContainer" >        <span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>        <span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>        <div class="Text" >New Player</div>        <span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>        <span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>      </div>    </div>    <tr>      <td>        <div class="InnerTableContainer" >          <table style="width:100%;" ><tr><td><div class="TableShadowContainerRightTop" >  <div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/content/table-shadow-rt.gif);" ></div></div><div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-rm.gif);" >  <div class="TableContentContainer" >    <table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" ><tr ><td  ><div style="float: right; margin-top: 20px;" ><form class="MediumButtonForm" action="index.php?subtopic=createaccount" method="post" ><div class="MediumButtonBackground" style="background-image:url('.$layout_name.'/images/buttons/mediumbutton.gif)" onMouseOver="MouseOverMediumButton(this);" onMouseOut="MouseOutMediumButton(this);" ><div class="MediumButtonOver" style="background-image:url('.$layout_name.'/images/buttons/mediumbutton-over.gif)" onMouseOver="MouseOverMediumButton(this);" onMouseOut="MouseOutMediumButton(this);" ></div><input class="MediumButtonText" type="image" name="Create Account" alt="Create Account" src="'.$layout_name.'/images/buttons/mediumbutton_createaccount.png" /></div></form></div><div id="LoginCreateAccountBox" ><p><b>Tibia...</b></p><div style="margin-left: 10px;" ><p>... where hardcore gaming meets fantasy.</p><p>... where friendships last a lifetime.</p><p>... unites adventurers since 1997!</p></div></div>    </table>  </div></div><div class="TableShadowContainer" >  <div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-bm.gif);" >    <div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-bl.gif);" ></div>    <div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-br.gif);" ></div>  </div></div></td></tr>          </table>        </div>  </table></div></td></tr>
';
?>