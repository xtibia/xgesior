<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 50px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
</style>

<?PHP
//######################## SHOW TICKERS AND NEWS #######################

$players = $SQL->query('SELECT COUNT(*) FROM `players` WHERE `id`>0;')->fetch();
$accounts = $SQL->query('SELECT COUNT(*) FROM `accounts` WHERE `id`>0;')->fetch();

    $main_content .= '
    <p align="center"><img src="images/latest.png" alt="*">
    <br/>
    <p align="center"><img src="images/line.png" alt="*"><br/>
   
   
    <table class="tg"><td>
<img src="images/logo1.gif" alt="*">


';


                $main_content .= '<font color="green"><a href="?subtopic=whoisonline">Online</a>: '.$config['status']['serverStatus_players'].'</font>';

               
               
        $main_content .= '       
  </td>
  <td>
  <img src="images/logo4.gif" alt="*"> Exp rate: <a href="?subtopic=serverinfo">Here</a>
  </td>
  <td>
  <img src="images/logo7.gif" alt="*"> Inter core i7 - 3.2 ghz
  </td>
  <tr>
  <td>
<img src="images/logo2.gif" alt="*"> Accounts: '.$accounts[0].'
  </td>
    <td>
  <img src="images/logo5.gif" alt="*"> Loot rate: '.$config['site']['sInfoLoot'].'
  </td>
 
    <td>
  <img src="images/logo8.gif" alt="*"> Ram: 32 GB
  </td>
 
  <tr>
   <td>
<img src="images/logo3.gif" alt="*"> Players: '.$players[0].'
  </td>
      <td>
  <img src="images/logo6.gif" alt="*"> Skills rate: '.$config['site']['sInfoSkill'].'
  </td>
 
      <td>
  <img src="images/logo9.gif" alt="*"> Linux Debian 7.0.0
  </td>
  <tr>
  
</table>
<p align="center"><img src="images/line.png" alt="*"><br/>
</p>
    ';

   
    if($group_id_of_acc_logged >= $config['site']['access_admin_panel']){$main_content .=  '<a href="?subtopic=forum&action=new_topic&section_id=1">Add new news</a>';}
$tables = $SQL->query("SELECT `z_forum`.`post_topic`, `z_forum`.`author_guid`, `z_forum`.`post_date`, `z_forum`.`post_text`, `z_forum`.`id`, `z_forum`.`replies`, `players`.`name` FROM `z_forum`, `players` WHERE `section` = '1' AND `z_forum`.`id` = `first_post` AND `players`.`id` = `z_forum`.`author_guid` ORDER BY `post_date` DESC LIMIT 6;")->fetchAll();
foreach ($tables as $row)
{
         $BB = array(
        '/\[b\](.*?)\[\/b\]/is' => '<strong>$1</strong>',
        '/\[quote\](.*?)\[\/quote\]/is' => '<table cellpadding="0" style="background-color: #c4c4c4; width: 480px; border-style: dotted; border-color: #007900; border-width: 2px"><tr><td>$1</td></tr></table>',
        '/\[u\](.*?)\[\/u\]/is' => '<u>$1</u>',
        '/\[i\](.*?)\[\/i\]/is' => '<i>$1</i>',
        '/\[url](.*?)\[\/url\]/is' => '<a href=$1>$1</a>',
        '/\[img\](.*?)\[\/img\]/is' => '<img src=$1 alt=$1 />',
        '/\[player\](.*?)\[\/player\]/is' => '<a href='.$server['ip'].'?subtopic=characters&amp;name=$1>$1</a>',
        '/\[code\](.*?)\[\/code\]/is' => '<div dir="ltr" style="margin: 0px;padding: 2px;border: 1px inset;width: 500px;height: 290px;text-align: left;overflow: auto"><code style="white-space:nowrap">$1</code></div>'
        );
        $message = preg_replace(array_keys($BB), array_values($BB), nl2br($row['post_text']));
        $main_content .= '<div class=\'NewsHeadline\'>

        </div>
        <table style=\'clear:both\' border=0 cellpadding=0 cellspacing=0 width=\'100%\'><tr>
        <td><img src="'.$layout_name.'/images/global/general/blank.gif" width=10 height=1 border=0 alt=\'\' /></td>';
        if($group_id_of_acc_logged >= $config['site']['access_admin_panel'])
        {
            $main_content .='<td width="100%">'.$message.'<br><h6><i>Posted by </i><font color="green">'.$row['name'].'</font></h6><p align="right"><a href="?subtopic=forum&action=remove_post&id='.$row['id'].'"><font color="red">[Delete this news]</font></a>  <a href="?subtopic=forum&action=edit_post&id='.$row['id'].'"><font color="green">[Edit this news]</font></a>      <a href="?subtopic=forum&action=show_thread&id='.$row['id'].'">Comments: '.$row['replies'].'</a></p>';
        }
        else       
        {
            $main_content .='<td width="100%">'.$message.'<br><h6><i>Posted by </i><font color="green">'.$row['name'].'</font></h6><p align="right"><a href="?subtopic=forum&action=show_thread&id='.$row['id'].'">Comments: '.$row['replies'].'</a></p>';       
        }
        $main_content .= '</td>
        <td><img src="'.$layout_name.'/images/global/general/blank.gif" width=10 height=1 border=0 alt=\'\' /></td>
        </tr></table>';
}

?>