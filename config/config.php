<?PHP
$config['site']['worlds'] = array(0 => 'xGesior - XTIBIA.COM'); #! NOME DO SERVIDOR !#
# Account Maker Config
$config['site']['serverPath'] = "C:/Users/endenson/Desktop/servidor/";
$config['site']['useServerConfigCache'] = false;
$config['site']['name'] = false;
$config['site']['nameName'] = Xgesior;
$towns_list = array(1 => 'Venore',
2 => 'Thais',
3 => 'Kazordoon',
4 => 'Carlin',
5 => 'Ab\'Dendriel',
6 => 'Rookgaard',
7 => 'Liberty Bay',
8 => 'Port Hope',
9 => 'Ankrahmun',
10 => 'Darashia',
11 => 'Edron',
12 => 'Svargrond',
13 => 'Yalahar',
14 => 'Farmine');

$config['site']['outfit_images_url'] = 'http://outfit-images.ots.me/outfit.php';
$config['site']['item_images_url'] = 'images/items/';
$config['site']['item_images_extension'] = '.gif';
$config['site']['flag_images_url'] = 'images';
$config['site']['flag_images_extension'] = '.png';

# Create Account Options
$config['site']['one_email'] = false;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = false;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 7;
$config['site']['send_register_email'] = false;

# Create Character Options
$config['site']['newchar_vocations'] = array(1 => 'Sorcerer Sample', 2 => 'Druid Sample', 3 => 'Paladin Sample', 4 => 'Knight Sample');
$config['site']['newchar_towns'] = array(2);
$config['site']['max_players_per_account'] = 4;


# Emails Config
$config['site']['send_emails'] = true;
$config['site']['mail_address'] = "no-reply@tibiaold.org";
$config['site']['smtp_enabled'] = true;
$config['site']['smtp_host'] = "mail.tibiaold.org";
$config['site']['smtp_port'] = 25;
$config['site']['smtp_auth'] = true;
$config['site']['smtp_user'] = "no-reply@tibiaold.org";
$config['site']['smtp_pass'] = "]!uX?SNaQ%nn";

# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 0;
/*
Server id on 'private-servlist.com' to show Players Online Chart (whoisonline.php page), set 0 to disable Chart feature.
To use this feature you must register on 'private-servlist.com' and add your server.
Format: number, 0 [disable] or higher
*/

# PAGE: characters.php
$config['site']['quests'] = array();
$config['site']['show_skills_info'] = true;
$config['site']['show_vip_storage'] = 0;

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['generate_new_reckey'] = true;
$config['site']['generate_new_reckey_price'] = 20;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 60;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 250;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 555;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 50;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5, 6);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(2, 3, 4, 5);
$config['site']['accounts_hidden'] = array(1);

# PAGE: shopsystem.php
$config['site']['shop_system'] = true;

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# Layout Config
$config['site']['layout'] = 'tibiarl';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = false;
$config['site']['serverinfo_page'] = true;

############################
## PagSeguro/Paypal Email ##
############################
$config['pagseguro']['email'] = 'wellcrusher@gmail.com'; ## EMAIL PAGSEGURO ##
$config['paypal']['email'] = 'gufasano@hotmail.com'; ## EMAIL PAYPAL ##

## Formas de pagamento [1 = ativo | 0 = inativo] ##
$config['site']['pagseguro'] = 1;
$config['site']['paypal'] = 1;
$config['site']['bonusPoints'] = 1;

#####################
## Nome do Produto ##
#####################
$config['pagseguro']['produtoNome'] = 'Premium Points';

#############################
######### C A I X A ########
#############################
#! Informações do pagamento com caixa economica federal !#
$config['site']['CaixaCont'] = "
Conta/Corrente: NUMERO
Ag: NUMERO
Favorecido: NOME
OP: NUMERO
"; 
