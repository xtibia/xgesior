<?php
if(!defined('INITIALIZED'))
	exit;

$name = '';
if(isset($_REQUEST['name']))
	$name = (string) $_REQUEST['name'];

if(!empty($name))
{
	$player = new Player();
	$player->find($name);
	if($player->isLoaded())
	{
		$number_of_rows = 0;
		$account = $player->getAccount();
		$skull = '';
		if ($player->getSkull() == 4)
			$skull = "<img style='border: 0;' src='./images/skulls/redskull.gif'/>";
		else if ($player->getSkull() == 5)
			$skull = "<img style='border: 0;' src='./images/skulls/blackskull.gif'/>";
		$main_content .= '<table border="0" cellspacing="1" cellpadding="4" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td colspan="2" style="font-weight:bold;color:white">Character Information</td></tr>';
		$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
		$main_content .= '<tr bgcolor="' . $bgcolor . '"><td width="20%">Name:</td><td style="font-weight:bold;color:' . (($player->isOnline()) ? 'green' : 'red') . '">' . htmlspecialchars($player->getName()) . '';
		if($player->isBanned() || $account->isBanned())
			$main_content .= '<span style="color:red">[BANNED]</span>';
		if($player->isNamelocked())
			$main_content .= '<span style="color:red">[NAMELOCKED]</span>';

		if(in_array($player->getGroup(), $config['site']['groups_support']))
		{
			$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
			$main_content .= '<tr bgcolor="' . $bgcolor . '"><td>Group:</td><td>' . htmlspecialchars(Website::getGroupName($player->getGroup())) . '</td></tr>';
		}
		$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
		$main_content .= '<tr bgcolor="' . $bgcolor . '"><td>Sex:</td><td>' . htmlspecialchars((($player->getSex() == 0) ? 'female' : 'male')) . '</td></tr>';
		$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
		$main_content .= '<tr bgcolor="' . $bgcolor . '"><td>Profession:</td><td>' . htmlspecialchars(Website::getVocationName($player->getVocation())) . '</td></tr>';
		$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
		$main_content .= '<tr bgcolor="' . $bgcolor . '"><td>Level:</td><td>' . htmlspecialchars($player->getLevel()) . '</td></tr>';
		$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
		$main_content .= '<tr bgcolor="' . $bgcolor . '"><td>Residence:</td><td>' . htmlspecialchars($towns_list[$player->getTownID()]) . '</td></tr>';
		$rank_of_player = $player->getRank();
		if(!empty($rank_of_player))
		{
			$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
			$main_content .= '<tr bgcolor="' . $bgcolor . '"><td>Guild Membership:</td><td>' . htmlspecialchars($rank_of_player->getName()) . ' of the <a href="?subtopic=guilds&action=show&guild='. $rank_of_player->getGuild()->getID() .'">' . htmlspecialchars($rank_of_player->getGuild()->getName()) . '</a></td></tr>';
		}
		$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
		$main_content .= '<tr bgcolor="' . $bgcolor . '"><td>Balance:</td><td>' . htmlspecialchars($player->getBalance()) . ' gold coins</td></tr>';
		$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
		$main_content .= '<tr bgcolor="' . $bgcolor . '"><td>Last login:</td><td>' . (($player->getLastLogin() > 0) ? date("j F Y, g:i a", $player->getLastLogin()) : 'Never logged in.') . '</td></tr>';
		if($player->getCreateDate() > 0)
		{
			$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
			$main_content .= '<tr bgcolor="' . $bgcolor . '"><td>Created:</td><td>' . date("j F Y, g:i a", $player->getCreateDate()) . '</td></tr>';
		}
		if($config['site']['show_vip_storage'] > 0)
		{
			$storageValue = $player->getStorage($config['site']['show_vip_storage']);
			$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
			$main_content .= '<tr bgcolor="' . $bgcolor . '"><td>VIP:</td><td>' . (($storageValue === null || $storageValue < 0) ? '<span style="font-weight:bold;color:red">NOT VIP</span>' : '<span style="font-weight:bold;color:green">VIP</span>') . '</td></tr>';
		}
		$comment = $player->getComment();
		$newlines = array("\r\n", "\n", "\r");
		$comment_with_lines = str_replace($newlines, '<br />', $comment, $count);
		if($count < 50)
			$comment = $comment_with_lines;
		if(!empty($comment))
		{
			$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
			$main_content .= '<tr bgcolor="' . $bgcolor . '"><td>Comment:</td><td>' . $comment . '</td></tr>';
		}
		$main_content .= '</TABLE>';
		$deads = 0;

		//deaths list
		$player_deaths = new DatabaseList('PlayerDeath');
		$player_deaths->setFilter(new SQL_Filter(new SQL_Filter(new SQL_Field('player_id'), SQL_Filter::EQUAL, $player->getId()), SQL_Filter::CRITERIUM_AND,new SQL_Filter(new SQL_Field('id', 'players'), SQL_Filter::EQUAL, new SQL_Field('player_id', 'player_deaths'))));
		$player_deaths->addOrder(new SQL_Order(new SQL_Field('time'), SQL_Order::DESC));
		$player_deaths->setLimit(20);

		foreach($player_deaths as $death)
		{
			$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
			$deads++;
			$dead_add_content .= "<tr bgcolor=\"".$bgcolor."\"><td width=\"20%\" align=\"center\">".date("j M Y, H:i", $death->getTime())."</td><td>Died at level " . $death->getLevel() . " by " . $death->getKillerString();
			if($death->getMostDamageString() != '' && $death->getKillerString() != $death->getMostDamageString())
				$dead_add_content .= ' and ' . $death->getMostDamageString();
			$dead_add_content .= "</td></tr>";
		}

		if($deads > 0)
			$main_content .= '<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR="'.$config['site']['vdarkborder'].'"><TD COLSPAN=2 CLASS=white><B>Deaths</B></TD></TR>' . $dead_add_content . '</TABLE><br />';

		if(!$player->getHideChar())
		{
			$main_content .= '<TABLE BORDER=0><TR><TD></TD></TR></TABLE><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR="'.$config['site']['vdarkborder'].'"><TD COLSPAN=2 CLASS=white><B>Account Information</B></TD></TR>';
			if($account->getRLName())
			{
				$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
				$main_content .= '<TR BGCOLOR="' . $bgcolor . '"><TD WIDTH=20%>Real name:</TD><TD>' . $account->getRLName() . '</TD></TR>';
			}
			if($account->getLocation())
			{
				$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
				$main_content .= '<TR BGCOLOR="' . $bgcolor . '"><TD WIDTH=20%>Location:</TD><TD>' . $account->getLocation() . '</TD></TR>';
			}
			$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
			if($account->getLastLogin())
				$main_content .= '<TR BGCOLOR="' . $bgcolor . '"><TD WIDTH=20%>Last login:</TD><TD>' . date("j F Y, g:i a", $account->getLastLogin()) . '</TD></TR>';
			else
				$main_content .= '<TR BGCOLOR="' . $bgcolor . '"><TD WIDTH=20%>Last login:</TD><TD>Never logged in.</TD></TR>';
			if($account->getCreateDate())
			{
				$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
				$main_content .= '<TR BGCOLOR="' . $bgcolor . '"><TD WIDTH=20%>Created:</TD><TD>' . date("j F Y, g:i a", $account->getCreateDate()) . '</TD></TR>';
			}
			$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
			$main_content .= '<TR BGCOLOR="' . $bgcolor . '"><TD>Account&#160;Status:</TD><TD>';
			$main_content .= ($account->isPremium() > 0) ? '<b><font color="green">Premium Account</font></b>' : '<b><font color="red">Free Account</font></b>';
			if($account->isBanned())
			{
				if($account->getBanTime() > 0)
					$main_content .= '<font color="red"> [Banished until '.date("j F Y, G:i", $account->getBanTime()).']</font>';
				else
					$main_content .= '<font color="red"> [Banished FOREVER]</font>';
			}
			$main_content .= '</TD></TR></TABLE>';
			$main_content .= '<br><TABLE BORDER=0><TR><TD></TD></TR></TABLE><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR="'.$config['site']['vdarkborder'].'"><TD COLSPAN=5 CLASS=white><B>Characters</B></TD></TR>
			<TR BGCOLOR="' . $bgcolor . '"><TD><B>Name</B></TD><TD><B>Level</B></TD><TD><b>Status</b></TD><TD><B>&#160;</B></TD></TR>';
			$account_players = $account->getPlayersList();
			$player_number = 0;
			foreach($account_players as $player_list)
			{
				if(!$player_list->getHideChar())
				{
					$player_number++;
					$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
					if(!$player_list->isOnline())
						$player_list_status = '<font color="red">Offline</font>';
					else
						$player_list_status = '<font color="green">Online</font>';
					$main_content .= '<TR BGCOLOR="' . $bgcolor . '"><TD WIDTH=52%><NOBR>'.$player_number.'.&#160;'.htmlspecialchars($player_list->getName());
					$main_content .= ($player_list->isDeleted()) ? '<font color="red"> [DELETED]</font>' : '';
					$main_content .= '</NOBR></TD><TD WIDTH=25%>'.$player_list->getLevel().' '.htmlspecialchars($vocation_name[$player_list->getVocation()]).'</TD><TD WIDTH="8%"><b>'.$player_list_status.'</b></TD><TD><TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0><FORM ACTION="?subtopic=characters" METHOD=post><TR><TD><INPUT TYPE="hidden" NAME="name" VALUE="'.htmlspecialchars($player_list->getName()).'"><INPUT TYPE=image NAME="View '.htmlspecialchars($player_list->getName()).'" ALT="View '.htmlspecialchars($player_list->getName()).'" SRC="'.$layout_name.'/images/buttons/sbutton_view.gif" BORDER=0 WIDTH=120 HEIGHT=18></TD></TR></FORM></TABLE></TD></TR>';
				}
			}
			$main_content .= '</TABLE></TD><TD><IMG SRC="'.$layout_name.'/images/blank.gif" WIDTH=10 HEIGHT=1 BORDER=0></TD></TR></TABLE>';
		}
	}
	else
		$search_errors[] = 'Character <b>'.htmlspecialchars($name).'</b> does not exist.';	
}
if(!empty($search_errors))
{
	$main_content .= '<div class="SmallBox" >  <div class="MessageContainer" >    <div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/content/box-frame-horizontal.gif);" /></div>    <div class="BoxFrameEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>    <div class="BoxFrameEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>    <div class="ErrorMessage" >      <div class="BoxFrameVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></div>      <div class="BoxFrameVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></div>      <div class="AttentionSign" style="background-image:url('.$layout_name.'/images/content/attentionsign.gif);" /></div><b>The Following Errors Have Occurred:</b><br/>';
	foreach($search_errors as $search_error)
		$main_content .= '<li>'.$search_error;
	$main_content .= '</div>    <div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/content/box-frame-horizontal.gif);" /></div>    <div class="BoxFrameEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>    <div class="BoxFrameEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>  </div></div><br/>';
}
$main_content .= '<BR><BR><FORM ACTION="?subtopic=characters" METHOD=post><TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4><TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" CLASS=white><B>Search Character</B></TD></TR><TR><TD BGCOLOR="'.$config['site']['darkborder'].'"><TABLE BORDER=0 CELLPADDING=1><TR><TD>Name:</TD><TD><INPUT NAME="name" VALUE=""SIZE=29 MAXLENGTH=29></TD><TD><INPUT TYPE=image NAME="Submit" SRC="'.$layout_name.'/images/buttons/sbutton_submit.gif" BORDER=0 WIDTH=120 HEIGHT=18></TD></TR></TABLE></TD></TR></TABLE></FORM>';
$main_content .= '</TABLE>';
