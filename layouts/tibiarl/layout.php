<div id="barrinha"><center><span style="color:#FFFFFF"><b>IP:</b> www.xtibia.com            <b>Client:</b> 8.60             <b>Port:</b> 7171          </b></a> </b></a></span></center>
<div style="margin-top:-17px;float:right;padding-right:10px;">
			<!-- Begin TranslateThis Button -->
<div id="translate-this"><a style="width:180px;height:18px;display:block;" class="translate-this-button" href="http://www.translatecompany.com/">Translate Company</a></div>
<script type="text/javascript" src="http://x.translateth.is/translate-this.js"></script>
<script type="text/javascript">
TranslateThis();
</script>
			<!-- End TranslateThis Button -->
	   </div>
</div>
<?php
if(!defined('INITIALIZED'))
	exit;
?>
<?php
include("status.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>xGesior XTIBIA.COM</title>
<meta name="description" content="Tibia is a free massively multiplayer online role-playing game (MMORPG)">
<meta name="author" content="Liane">
<meta http-equiv="content-language" content="en">
<meta name="keywords" content="free online rpg, free mmorpg, mmorpg, mmog, online role playing game, online multiplayer game, internet game, online rpg, rpg">
<!--ICON-->
<link rel="shortcut icon" href="<?PHP echo $layout_name; ?>/images/general/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?PHP echo $layout_name; ?>/images/general/favicon.ico" type="image/x-icon">
<!--CSS'S-->
<link href="<?PHP echo $layout_name; ?>/css/basic_d.css" rel="stylesheet" type="text/css">
<link href="<?PHP echo $layout_name; ?>/css/news.css" rel="stylesheet" type="text/css">
<!--JS--> 
<script id="twitter-wjs" src="<?PHP echo $layout_name; ?>/js/widgets.js"></script>
<script id="facebook-jssdk" async src="<?PHP echo $layout_name; ?>/js/all.js"></script>
<script type="text/javascript" src="<?PHP echo $layout_name; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?PHP echo $layout_name; ?>/js/ajaxcip.js"></script>
<script type="text/javascript" src="<?PHP echo $layout_name; ?>/js/generic.js"></script>
<script type="text/javascript" src="<?PHP echo $layout_name; ?>/js/create_character.js"></script>
<script type="text/javascript">  
var loginStatus=0; 
loginStatus='<?PHP if($logged){ ?>true<?PHP }else{ ?>false<?PHP } ?>';  
var activeSubmenuItem='<?PHP echo $subtopic; ?>';  
var JS_DIR_IMAGES=0; 
JS_DIR_IMAGES='<?PHP echo $layout_name; ?>/images/';  
var JS_DIR_ACCOUNT=0; 
JS_DIR_ACCOUNT='';  
var g_FormName='';  
var g_FormField='';  
var g_Deactivated=false;
var FB_TryLogin = 0;
var FB_ForceReload = 0;
</script>
<script type="text/javascript">
  if(top.location != window.location) {
    top.location = self.location;
  }
</script>
<script type="text/javascript" src="<?PHP echo $layout_name; ?>/initialize.js"></script>

<link href="<?PHP echo $layout_name; ?>/css/facebook.css" rel="stylesheet" type="text/css">  
</head>

<body onBeforeUnLoad="SaveMenu();" onUnload="SaveMenu();" data-twttr-rendered="true">
<script type="text/javascript">
  window.fbAsyncInit = function() {
    FB.init({
      appId      : 497232093667125, // App ID
      status     : true,              // check login status
      cookie     : true,              // enable cookies to allow the server to access the session
      xfbml      : true               // parse XFBML
    });
    FB.Event.subscribe('auth.login', function() {
      var URLHelper = "?";
      if (window.location.search.replace("?", "").length > 0) {
        URLHelper = "&";
      }
      if (FB_TryLogin == 1) {
        window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
      } else if (FB_TryLogin == 2) {
        window.location = window.location + URLHelper + "page=facebooktrylogin&wasreloaded=1";
      } else {
        window.location = window.location + URLHelper + "wasreloaded=1";
      }
    });
    FB.Event.subscribe('auth.logout', function(a_Response) {
      if (a_Response.status !== 'connected') {
        window.location.href=window.location.href;
      } else {
        /* nothing to do here*/
      }
    });
    FB.Event.subscribe('auth.statusChange', function(response) {
      if (FB_ForceReload == 1 && response.status == "connected") {
        var URLHelper = "?";
        if (window.location.search.replace("?", "").length > 0) {
          URLHelper = "&";
        }
        window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
      }
    });
  };
  (function(d){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    ref.parentNode.insertBefore(js, ref);
  }(document));
</script>
  <a name="top"></a>
  <div id="MainHelper1">
  	<div id="MainHelper2">
    	<div id="ArtworkHelper1">
        	<div id="ArtworkHelper2">
          		<div id="HeaderArtworkDiv" style="background-image:url(<?PHP echo $layout_name; ?>/images/header/background-artwork.jpg);"></div>
        	</div>
      	</div>
      	<div id="DeactivationContainer" onclick="DisableDeactivationContainer();"></div>

      	<div id="Bodycontainer">
      	<div id="ContentRow">
          	<div id="MenuColumn">
            	<div id="LeftArtwork">
              		<a href="index.php?subtopic=latestnews">
						<img id="TibiaLogoArtworkTop" src="<?PHP echo $layout_name; ?>/images/header/tibia-logo-artwork-top.gif" alt="logoartwork">
					</a>
            	</div>
  				<?PHP include "loginbox.php"; ?>
				<div id="Menu">
					<div id="MenuTop" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-top.gif);"></div>
						<div id="news" class="menuitem">
							<span onclick="MenuItemAction('news')">
  								<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
    								<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
      								<span id="news_Lights" class="Lights">
        								<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
										<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
										<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
      								</span>
									<div id="news_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-news.gif);"></div>
									<div id="news_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-news.gif);"></div>
									<div id="news_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/minus.gif);"></div>
    							</div>
  							</div>
						</span>
						<div id="news_Submenu" class="Submenu">
							<a href="?subtopic=latestnews">
  								<div id="submenu_latestnews" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
    								<div id="ActiveSubmenuItemIcon_latestnews" class="ActiveSubmenuItemIcon" style="background-image: url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
    								<div id="ActiveSubmenuItemLabel_latestnews" class="SubmenuitemLabel">Novidades <img src="http://i.imgur.com/p2Jz44h.gif" /></div>
    								<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  								</div>
							</a>
                                               <a href="?subtopic=cast">
  								<div id="submenu_cast" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
    								<div id="ActiveSubmenuItemIcon_cast" class="ActiveSubmenuItemIcon" style="background-image: url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
    								<div id="ActiveSubmenuItemLabel_cast" class="SubmenuitemLabel">TV System</div>
    								<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  								</div>
							</a>

							<a href="?subtopic=archive">
  								<div id="submenu_archive" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
									<div id="ActiveSubmenuItemIcon_archive" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
									<div id="ActiveSubmenuItemLabel_archive" class="SubmenuitemLabel">News Archive</div>
									<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  								</div>
							</a>
                                                         <a href="?subtopic=help">
  								<div id="submenu_compreaqui" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    								<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
									<div id="ActiveSubmenuItemIcon_compreaqui" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
									<div id="ActiveSubmenuItemLabel_compreaqui" class="SubmenuitemLabel">Atendimento <img src="http://i.imgur.com/p2Jz44h.gif" /></div>
									<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  								</div>
							</a>
						</div>
					</div>
				<div id="account" class="menuitem">
				<span onclick="MenuItemAction('account')">
  					<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
    					<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
      					<span id="account_Lights" class="Lights">
        					<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
      					</span>
					  	<div id="account_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-account.gif);"></div>
					  	<div id="account_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-account.gif);"></div>
					  	<div id="account_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
    				</div>
  				</div>
			</span>
			<div id="account_Submenu" class="Submenu">
			<?PHP
			if($group_id_of_acc_logged >= $config['site']['access_admin_panel']){
			?>
				<a href="?subtopic=cpanel">
  					<div id="submenu_cpanel" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_cpanel" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_cpanel" class="SubmenuitemLabel">Admin Panel <img src="https://cdn0.iconfinder.com/data/icons/bremen/16/my-account.png" /> </div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
			<?PHP } ?>
				<a href="?subtopic=accountmanagement">
  					<div id="submenu_accountmanagement" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_accountmanagement" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_accountmanagement" class="SubmenuitemLabel">Minha Conta! <img src="https://cdn0.iconfinder.com/data/icons/bremen/16/my-account.png" /></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<a href="?subtopic=createaccount">
  					<div id="submenu_createaccount" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
    					<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_createaccount" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_createaccount" class="SubmenuitemLabel">Criar Conta <img src="https://cdn0.iconfinder.com/data/icons/bremen/16/my-account.png" /> </div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<?PHP
				if($config['site']['download_page']){
				?>
				<a href="?subtopic=download&action=downloadagreement">
  					<div id="submenu_download" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_download" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_download" class="SubmenuitemLabel">Baixar Cliente <img src="https://cdn0.iconfinder.com/data/icons/bremen/16/my-account.png" /></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
				<?PHP } ?>
				<a href="?subtopic=lostaccount">
  					<div id="submenu_lostaccount" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_lostaccount" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_lostaccount" class="SubmenuitemLabel">Perdeu Senha? <img src="https://cdn0.iconfinder.com/data/icons/bremen/16/my-account.png" /></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
  					</div>
				</a>
			</div>
		</div>
			<div id="community" class="menuitem">
				<span onclick="MenuItemAction('community')">
					<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
						<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
						<span id="community_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
						</span>
						<div id="community_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-community.gif);"></div>
						<div id="community_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-community.gif);"></div>
						<div id="community_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
					</div>
				</div>
			</span>
			<div id="community_Submenu" class="Submenu">
				<a href="?subtopic=characters">
					<div id="submenu_characters" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_characters" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_characters" class="SubmenuitemLabel">Personagens <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-16.png" /></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=whoisonline">
					<div id="submenu_whoisonline" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_whoisonline" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_whoisonline" class="SubmenuitemLabel">Quem esta online? <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-16.png" /></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=highscores">
					<div id="submenu_highscores" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_highscores" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_highscores" class="SubmenuitemLabel">TOP Ranks <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-16.png" /></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=killstatistics">
					<div id="submenu_killstatistics" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_killstatistics" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_killstatistics" class="SubmenuitemLabel">Estastiticas <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-16.png" /></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=houses">
					<div id="submenu_houses" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_houses" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_houses" class="SubmenuitemLabel">Casas <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-16.png" /></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=guilds">
					<div id="submenu_guilds" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_guilds" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_guilds" class="SubmenuitemLabel">Guildas <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-16.png" /></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
				<a href="?subtopic=wars">
					<div id="submenu_wars" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_guilds" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_guilds" class="SubmenuitemLabel">Guilds Wars <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-16.png" /></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
			</div>
		</div>
			<div id="forum" class="menuitem">
				<span onclick="MenuItemAction('forum')">
					<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
						<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
						<span id="forum_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
						</span>
						<div id="forum_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-forum.gif);"></div>
						<div id="forum_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-forum.gif);"></div>
						<div id="forum_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
					</div>
				</div>
			</span>
			<div id="forum_Submenu" class="Submenu">
				<a href="?subtopic=forum">
					<div id="submenu_forum" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
						<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						<div id="ActiveSubmenuItemIcon_forum" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
						<div id="ActiveSubmenuItemLabel_forum" class="SubmenuitemLabel">Forum do Server <img src="https://cdn4.iconfinder.com/data/icons/free-3d-social-icons/png/16x16/Orange%20forum.png" /></div>
						<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
					</div>
				</a>
			</div>
		</div>
		
<div id="library" class="menuitem">
					<span onclick="MenuItemAction('library')">
						<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
							<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
							<span id="library_Lights" class="Lights">
								<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
								<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
								<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							</span>
							<div id="library_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-library.gif);"></div>
							<div id="library_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-library.gif);"></div>
							<div id="library_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
						</div>
					</div>
				</span>
				<div id="library_Submenu" class="Submenu">
					<a href="?subtopic=serverinfo">
						<div id="submenu_serverinfo" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_serverinfo" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_serverinfo" class="SubmenuitemLabel">Server Info <img src="https://cdn3.iconfinder.com/data/icons/mixed-3d-icons/512/Learning_3D-16.png" /></div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
					<a href="?subtopic=experiencetable">
						<div id="submenu_experiencetable" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
							<div class="LeftChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
							<div id="ActiveSubmenuItemIcon_experiencetable" class="ActiveSubmenuItemIcon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);"></div>
							<div id="ActiveSubmenuItemLabel_experiencetable" class="SubmenuitemLabel">Experience Table <img src="https://cdn3.iconfinder.com/data/icons/mixed-3d-icons/512/Learning_3D-16.png" /> </div>
							<div class="RightChain" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);"></div>
						</div>
					</a>
				</div>
			</div>
		<?PHP
			if($config['site']['shop_system']){
		?>
			<div id="shops" class="menuitem">
				<span onclick="MenuItemAction('shops')">
  					<div class="MenuButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);">
    					<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image: url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);"></div>
      					<span id="shops_Lights" class="Lights">
							<div class="light_lu" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ld" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
							<div class="light_ru" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);"></div>
      					</span>
					  	<div id="shops_Icon" class="Icon" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-shops.gif);"></div>
					  	<div id="shops_Label" class="Label" style="background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-shops.gif);"></div>
					  	<div id="shops_Extend" class="Extend" style="background-image: url(<?PHP echo $layout_name; ?>/images/general/plus.gif);"></div>
    				</div>
  				</div>
			</span>
			<div id="shops_Submenu" class="Submenu">
				<a href='?subtopic=buypoints'>
  					<div id='submenu_buypoints' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    					<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_buypoints' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'><font color='yellow'/>Doar! <img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/shop_open.png" /></font></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<a href='?subtopic=shopsystem'>
  					<div id='submenu_shopsystem' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_shopsystem' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'><font color='white'/>Shopping <img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/shop_open.png" /></font></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
   
				<a href='?subtopic=changename'>
  					<div id='submenu_changename' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    					<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_buypoints' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'><font color='white'/>Trocar Nome <img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/shop_open.png" /></font></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<?PHP
				if($logged){
				?>
				<a href='?subtopic=shopsystem&action=show_history'>
  					<div id='submenu_show_history' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_show_history' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'>History <img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/shop_open.png" /></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<?PHP } ?>
				<?PHP
				if($group_id_of_acc_logged >= $config['site']['access_admin_panel']){
				?>
				<a href='?subtopic=shopadmin'>
  					<div id='submenu_shopadmin' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
						<div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
						<div id='ActiveSubmenuItemIcon_shopadmin' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
						<div class='SubmenuitemLabel'>Shop Admin <img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/shop_open.png" /></div>
						<div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  					</div>
				</a>
				<?PHP } ?>
			</div>
		</div>
		<?PHP } ?>
		<div id="MenuBottom" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif);"></div>
	</div>
	<script type="text/javascript">InitializePage();</script></div>
    	<div id="ContentColumn">
        	<div id="Content" class="Content">
            	<div id="ContentHelper">
				<script type="text/javascript" src="<?PHP echo $layout_name; ?>/newsticker.js"></script>
				<?PHP echo $news_content; ?>
  				<div id="news" class="Box">
    				<div class="Corner-tl" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-tl.gif);"></div>
					<div class="Corner-tr" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-tr.gif);"></div>
					<div class="Border_1" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/border-1.gif);"></div>
					<div class="BorderTitleText" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/title-background-green.gif);"></div>
    				<img id="ContentBoxHeadline" class="Title" src="pages/headline.php?txt=<?PHP echo ucwords(str_replace('_', ' ', strtolower($subtopic))); ?>" alt="Contentbox headline">
    				<div class="Border_2">
      					<div class="Border_3">
        					<div class="BoxContent" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/scroll.gif);">
								<?PHP echo $main_content; ?>
        					</div>
      					</div>
    				</div>
					<div class="Border_1" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/border-1.gif);"></div>
					<div class="CornerWrapper-b"><div class="Corner-bl" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-bl.gif);"></div></div>
					<div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-br.gif);"></div></div>
  				</div>
              	<div id="ThemeboxesColumn">
                	<div id="DeactivationContainerThemebox" onclick="DisableDeactivationContainer();"></div>
                	<div id="RightArtwork">
                  		<img id="Monster" src="images/monster/marid.gif" onclick="window.location = #" alt="Monster of the Week">
                  		<img id="PedestalAndOnline" src="<?PHP echo $layout_name; ?>/images/header/pedestal-and-online.gif" alt="Monster Pedestal and Players Online Box">
                  		<div id="PlayersOnline" onClick="window.location='?subtopic=whoisonline'">
		  				<?PHP
							if($config['status']['serverStatus_online'] == 1)
								echo $config['status']['serverStatus_players'].'<br />Players Online';
							else
								echo $number_of_players_online.'<br /> Players Online';
		  				?>
		  				</div>
        			</div>
<br>
<br>
<br>
<br>
<br>
<br>


                	<div id="Themeboxes">
<?php
$skills = $SQL->query('SELECT * FROM players WHERE deleted = 0 AND group_id = 1 AND account_id != 1 ORDER BY level DESC LIMIT 5');
?>
<br />
<style type="text/css" media="all">
  .Toplevelbox {
    top: 15px;
    position: relative;
    margin-bottom: 10px;
    width: 182px;
    height: 200px;
  }
  .top_level {
    position: absolute;
    top: 29px;
    left: 6px;
    height: 160px;
    width: 168px;
    z-index: 20;
    text-align: center;
    padding-top: 6px;
    font-family: Tahoma, Geneva, sans-serif;
    font-size: 9.2pt;
    color: #FFF;
    font-weight: bold;
    text-align: right;
    text-decoration: inherit;
    text-shadow: 0.1em 0.1em #333
  }

  #Topbar a {
  text-decoration: none;
  cursor: auto;
  }
  a.topfont {
    font-family: Verdana, Arial, Helvetica; 
    font-size: 11px; 
        color: #ff9c00;
    text-decoration: none
  }
  a:hover.topfont {
    font-family: Verdana, Arial, Helvetica; 
    font-size: 11px; 
    color: #CCC; 
    text-decoration:none
  }
</style>

<div id="Topbar" class="Toplevelbox" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/top_level.png);">
  <div class="top_level" style="background:url(<?PHP echo $layout_name; ?>/images/themeboxes/bg_top.png)" align="	">
    <?php 
    $a = 1;
    foreach($skills as $skill) {
      echo '<div align="left"><a href="?subtopic=characters&name='.$skill['name'].'" class="topfont">
        <font color="#CCC">&nbsp;&nbsp;&nbsp;&nbsp;'.$a.' - </font>'.$skill['name'].'
        <br>
        <small><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Level: ('.$skill['level'].')</font></small>
        <br>
      </a>
      </div>';
      $a++;
    }
    ?>
    <div class="Bottom" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif); top: 159px;; left:-5px;">
    </div>
  </div>
<br>
<br>
<br>
<br>

                  		<!-- premium theme box -->
						<div id="PremiumBox" class="Themebox" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/premium/premiumbox.gif);">
    						<div class="ThemeboxButton">
    							<form action="#" method="post" style="padding:0px;margin:0px;">
									<div class="BigButton" style="background-image:url(<?PHP echo $layout_name; ?>/images/buttons/sbutton.gif)">
										<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image:url(<?PHP echo $layout_name; ?>/images/buttons/sbutton_over.gif);"></div>
											<input class="ButtonText" type="image" name="Get Premium" alt="Get Premium" src="<?PHP echo $layout_name; ?>/images/buttons/_sbutton_getpremium.gif">
										</div>
									</div>
								</form>  
							</div>
  							<div class="Bottom" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif);"></div>
						</div>
						<!-- premium theme box -->
						<div id="NetworksBox" class="Themebox" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/premium/apoio.png);">
    						<div class="ThemeboxButton">
    							
							</div>
  							<div class="Bottom" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif);"></div>
						</div>
						<!-- networks theme box -->
						<?PHP
						$nF = $SQL->query("SELECT " .$SQL->fieldName('network_link'). " FROM " .$SQL->tableName('z_network_box'). " WHERE " .$SQL->fieldName('network_name'). " = 'facebook'")->fetch();
						$nT = $SQL->query("SELECT " .$SQL->fieldName('network_link'). " FROM " .$SQL->tableName('z_network_box'). " WHERE " .$SQL->fieldName('network_name'). " = 'twitter'")->fetch();
						?>
						<?PHP if(!empty($nF)){ ?>
						
						<div id="NetworksBox" class="Themebox" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/networks/networksbox.png);">
  							<div id="FacebookBlock">
    							<div id="FacebookLikeBox">
      								<div class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/<?PHP echo $nF['network_link']; ?>" data-width="175" data-height="180" data-show-faces="true" data-stream="false" data-border-color="none" data-header="false" fb-xfbml-state="rendered">
										<span style="vertical-align: bottom; width: 181px; height: 180px;">
										</span>
									</div>
    							</div>
    							<div id="FacebookSendBox">
      								<div class="fb-send fb_iframe_widget" data-href="https://www.facebook.com/<?PHP echo $nF['network_link']; ?>" data-width="50" data-height="20" fb-xfbml-state="rendered">
										<span style="vertical-align: bottom; width: 50px; height: 20px;">
										</span>
									</div>
    							</div>
    							<div id="FacebookLikes">
      								<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="https://www.facebook.com/<?PHP echo $nF['network_link']; ?>" data-send="false" data-width="225" data-show-faces="false" fb-xfbml-state="rendered">
										<span style="height: 28px; width: 225px;">
										</span>
									</div>
    							</div>
  							</div>
							<?PHP if(!empty($nT)){ ?>
  							<div id="TwitterBlock">
    							<a href="https://twitter.com/<?PHP echo $nT['network_link']; ?>" class="twitter-follow-button" data-show-count="false">Follow @<?PHP echo $nT['network_link']; ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  							</div>
							<?PHP } ?>
  							<div class="Bottom" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif);"></div>
						</div>

						<?PHP } ?>
						<?PHP if($config['site']['screenshot_page']){ ?>
  						<!-- screenshot theme box -->
  						<div id="ScreenshotBox" class="Themebox" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/screenshot/screenshotbox.gif);">
    						<a href="#">
      							<img id="ScreenshotContent" class="ThemeboxContent" src="images/screenshots/witch_thumb.gif" alt="Screenshot of the Day">
    						</a>
  							<div class="Bottom" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif);"></div>
  						</div>
						<?PHP } ?>
    					<!-- current poll theme box -->
						<?PHP
    						$time = time();
							$viewpoll = $SQL->query('SELECT * FROM z_polls where end > '.$time.' ORDER BY id DESC LIMIT 1');
							foreach($viewpoll as $p)
							$polls .= '<center>'.$p['question'].'</center>';
								if(count($p['id']) > 0)
								 echo '<div id="CurrentPollBox" class="Themebox" style="background-image:url('.$layout_name.'/images/themeboxes/current-poll/currentpollbox.gif);">
								  <div id="CurrentPollText">'.$polls.'</div>
								  <a class="ThemeboxButton" href="index.php?subtopic=polls&id= '.$p['id'].'" onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif);"><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
									<div class="ButtonText" style="background-image:url('.$layout_name.'/images/buttons/_sbutton_votenow.gif);"></div>
								  </a>
								<div class="Bottom" style="background-image:url('.$layout_name.'/images/general/box-bottom.gif);"></div>
								</div>';
							?>
				<br>
			<br>
		<br>
    <br>
<br>
<br>
<br>
<div id="Themeboxes">

                	</div>
              	</div>
            </div>
		</div>
		
        <div id="Footer">
        	Copyright by CipSoft GmbH. All rights reserved.<br>
            <a href="#">About CipSoft</a> | 
			<a href="#">Service Agreement</a> | 
			<a href="#">Privacy Policy</a>
        </div>
	</div>
</div>
</div>
</div>
</div>
  
  <script type="text/javascript">
    // disable all control elements which are not part of the content container element
    if (g_Deactivated == true) {
      document.getElementById('LoginButtonContainer').style.zIndex = "1";
      document.getElementById('DeactivationContainer').style.display = "block";
      document.getElementById('DeactivationContainer').style.zIndex = "50";
      document.getElementById('DeactivationContainerThemebox').style.display = "block";
      document.getElementById('Monster').style.cursor = "auto";
      document.getElementById('PlayersOnline').style.cursor = "auto";
      document.getElementById('ThemeboxesColumn').style.opacity = "0.30";
      document.getElementById('ThemeboxesColumn').style.MozOpacity = "0.30";
      document.getElementById('ThemeboxesColumn').filters.alpha.opacity = "0.75";
      document.getElementById('ThemeboxesColumn').style.filter = "alpha(opacity=50); opacity: 0.30";
      document.getElementById('Monster').setAttribute("onclick", "")
      document.getElementById('PlayersOnline').setAttribute("onclick", "")
    }
  </script>
  	<div id="HelperDivContainer" style="background-image: url(<?PHP echo $layout_name; ?>/images/content/scroll.gif);">
  		<div class="HelperDivArrow" style="background-image: url(<?PHP echo $layout_name; ?>/images/content/helper-div-arrow.png);"></div>
  		<div id="HelperDivHeadline"></div>
  		<div id="HelperDivText"></div>
 		<center>
  			<img class="Ornament" src="<?PHP echo $layout_name; ?>/images/content/ornament.gif">
  		</center>
  	<br>
	</div>
</body>
</html>