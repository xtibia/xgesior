<?php
if(!defined('INITIALIZED'))
	exit;
	$main_content .= '<br><center>
		<table border="0" cellpadding="4" cellspacing="1" width="95%">
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td colspan="2"><font class="white"><b>Status</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td>Server Status:</td><td>'.(($config['status']['serverStatus_online'] == 1) ? '<b>Online</b>' : '<b>Offline</b>').'</td>
			</tr>
		</table>
		<br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td colspan="2"><font class="white"><b>Rates</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%">Experience</td><td>'.$config['server']['rateExp'].' (Stages)</td>
			</tr>
			<tr bgcolor="'.$config['site']['lightborder'].'">
				<td>Skill</td><td>'.$config['server']['rateSkill'].'x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td>Magic</td><td>'.$config['server']['rateMagic'].'x</td>
			</tr>
			<tr bgcolor="'.$config['site']['lightborder'].'">
				<td>Loot</td><td>'.$config['server']['rateLoot'].'x</td>
			</tr>
		</table><br>';

	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Info Server</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>World Type</td><td>'.$config['server']['worldType'].'</td><td>';
			$main_content .='</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Server motd</td><td>'.$config['server']['motd'].'</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Last joined</td><td><a href="?subtopic=characters&name='.urlencode($query2['name']).'">'.$query2['name'].'</a></td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Best Level</td><td><a href="index.php?subtopic=characters&name='.urlencode($query['name']).'">'.$query['name'].'</a> (<b>Level&nbsp;'.$query['level'].'</b>)</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Free Houses</td><td>'.$housesfree[0].'</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Rented Houses:</td><td>'.$housesrented[0].'</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Banned accounts:</td><td>'.$banned[0].'</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Accounts in database:</td><td>'.$accounts[0].'</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Players in database:</td><td>'.$players[0].'</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Guilds in databese:</td><td>'.$guilds[0].'</td>
		</tr>
	</table><br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Frags</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Each Frags TIME</td><td>6 Hours each frag</td>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Frags to Red Skull</td><td>'.$config['server']['killsToRedSkull'].' (30Hours to leave)</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Frags to Black Skull</td><td>'.$config['server']['killsToBlackSkull'].' (42Hours to leave)</td>
		</tr>
	</table><br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Onther information</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Bank System</td><td>'.$bankSystem.'</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Guild halls</td><td>'.$guildHalls.'</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Kick Time</td><td>'.$idleKickTime.'</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>PZ Lock</td><td>'.$pzLocked.'</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Protection Level</td><td>'.$config['server']['protectionLevel'].'</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Level to buy house</td><td>'.$config['server']['levelToBuyHouse'].'</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Level to create guild</td><td>'.$config['site']['guild_need_level'].'</td>
		</tr>
		<!--
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td></td><td></td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td></td><td></td>
		</tr>
		-->
	</table><br>';
	$main_content .= '</center>';