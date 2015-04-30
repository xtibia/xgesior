<?php
//  ALTER TABLE `z_shop_history_item` CHANGE `offer_id` `offer_id` VARCHAR( 255 ) NOT NULL;
// UPDATE `z_shop_history_item`, `z_shop_offer` SET `z_shop_history_item`.`offer_id` = `z_shop_offer`.`offer_name` WHERE `z_shop_history_item`.`offer_id` = `z_shop_offer`.`id`;

function getItemByID($id)
{
  $id = (int) $id;
  $SQL = $GLOBALS['SQL'];
  $data = $SQL->query('SELECT * FROM '.$SQL->tableName('z_shop_offer').' WHERE '.$SQL->fieldName('id').' = '.$SQL->quote($id).';')->fetch();
  if ($data['offer_type'] == 'pacc')
  {
    $offer['id'] = $data['id'];
    $offer['type'] = $data['offer_type'];
    $offer['days'] = $data['count1'];
    $offer['points'] = $data['points'];
    $offer['description'] = $data['offer_description'];
    $offer['name'] = $data['offer_name'];
  }
  elseif ($data['offer_type'] == 'item')
  {
    $offer['id'] = $data['id'];
    $offer['type'] = $data['offer_type'];
    $offer['item_id'] = $data['itemid1'];
    $offer['item_count'] = $data['count1'];
    $offer['points'] = $data['points'];
    $offer['description'] = $data['offer_description'];
    $offer['name'] = $data['offer_name'];
  }
  elseif ($data['offer_type'] == 'vipdays')
  {
    $offer['id'] = $data['id'];
    $offer['type'] = $data['offer_type'];
    $offer['days'] = $data['count1'];
    $offer['points'] = $data['points'];
    $offer['description'] = $data['offer_description'];
    $offer['name'] = $data['offer_name'];
  }
  elseif ($data['offer_type'] == 'itemvip')
  {
    $offer['id'] = $data['id'];
    $offer['type'] = $data['offer_type'];
    $offer['item_id'] = $data['itemid1'];
    $offer['item_count'] = $data['count1'];
    $offer['points'] = $data['points'];
    $offer['description'] = $data['offer_description'];
    $offer['name'] = $data['offer_name'];
  }
  elseif ($data['offer_type'] == 'container')
  {
    $offer['id'] = $data['id'];
    $offer['type'] = $data['offer_type'];
    $offer['container_id'] = $data['itemid2'];
    $offer['container_count'] = $data['count2'];
    $offer['item_id'] = $data['itemid1'];
    $offer['item_count'] = $data['count1'];
    $offer['points'] = $data['points'];
    $offer['description'] = $data['offer_description'];
    $offer['name'] = $data['offer_name'];
  }
  elseif ($data['offer_type'] == 'unban')
  {
    $offer['id'] = $data['id'];
    $offer['type'] = $data['offer_type'];
    $offer['points'] = $data['points'];
    $offer['description'] = $data['offer_description'];
    $offer['name'] = $data['offer_name'];
  }

  elseif ($data['offer_type'] == 'redskull')
  {
    $offer['id'] = $data['id'];
    $offer['type'] = $data['offer_type'];
    $offer['points'] = $data['points'];
    $offer['description'] = $data['offer_description'];
    $offer['name'] = $data['offer_name'];
  }
  elseif ($data['offer_type'] == 'itemlogout')
  {
    $offer['id'] = $data['id'];
    $offer['type'] = $data['offer_type'];
    $offer['points'] = $data['points'];
    $offer['description'] = $data['offer_description'];
    $offer['pid'] = $data['pid'];
    $offer['count1'] = $data['count1'];
    $offer['item_id'] = $data['itemid1'];
    $offer['free_cap'] = $data['free_cap'];
  }
  elseif ($data['offer_type'] == 'changename')
  {
    $offer['id'] = $data['id'];
    $offer['type'] = $data['offer_type'];
    $offer['points'] = $data['points'];
    $offer['description'] = $data['offer_description'];
    $offer['name'] = $data['offer_name'];
  }
  return $offer;
}

function getOfferArray()
{
  $offer_list = $GLOBALS['SQL']->query('SELECT * FROM '.$GLOBALS['SQL']->tableName('z_shop_offer').';');
  $i_pacc = 0;
  $i_item = 0;
  $i_vipdays = 0;
  $i_itemvip = 0;
  $i_container = 0;
  $i_unban = 0;
  $i_redskull = 0;
  $i_itemlogout = 0;
  $i_changename = 0;
  while($data = $offer_list->fetch()) {
    if ($data['offer_type'] == 'pacc')
    {
      $offer_array['pacc'][$i_pacc]['id'] = $data['id'];
      $offer_array['pacc'][$i_pacc]['days'] = $data['count1'];
      $offer_array['pacc'][$i_pacc]['points'] = $data['points'];
      $offer_array['pacc'][$i_pacc]['description'] = $data['offer_description'];
      $offer_array['pacc'][$i_pacc]['name'] = $data['offer_name'];
      $i_pacc++;
    }
    elseif ($data['offer_type'] == 'item')
    {
      $offer_array['item'][$i_item]['id'] = $data['id'];
      $offer_array['item'][$i_item]['item_id'] = $data['itemid1'];
      $offer_array['item'][$i_item]['item_count'] = $data['count1'];
      $offer_array['item'][$i_item]['points'] = $data['points'];
      $offer_array['item'][$i_item]['description'] = $data['offer_description'];
      $offer_array['item'][$i_item]['name'] = $data['offer_name'];
      $i_item++;
    }
    elseif ($data['offer_type'] == 'vipdays')
    {
      $offer_array['vipdays'][$i_vipdays]['id'] = $data['id'];
      $offer_array['vipdays'][$i_vipdays]['days'] = $data['count1'];
      $offer_array['vipdays'][$i_vipdays]['points'] = $data['points'];
      $offer_array['vipdays'][$i_vipdays]['description'] = $data['offer_description'];
      $offer_array['vipdays'][$i_vipdays]['name'] = $data['offer_name'];
      $i_vipdays++;
    }
    elseif ($data['offer_type'] == 'itemvip')
    {
      $offer_array['itemvip'][$i_itemvip]['id'] = $data['id'];
      $offer_array['itemvip'][$i_itemvip]['item_id'] = $data['itemid1'];
      $offer_array['itemvip'][$i_itemvip]['item_count'] = $data['count1'];
      $offer_array['itemvip'][$i_itemvip]['points'] = $data['points'];
      $offer_array['itemvip'][$i_itemvip]['description'] = $data['offer_description'];
      $offer_array['itemvip'][$i_itemvip]['name'] = $data['offer_name'];
      $i_itemvip++;
    }
    elseif ($data['offer_type'] == 'container')
    {
      $offer_array['container'][$i_container]['id'] = $data['id'];
      $offer_array['container'][$i_container]['container_id'] = $data['itemid2'];
      $offer_array['container'][$i_container]['container_count'] = $data['count2'];
      $offer_array['container'][$i_container]['item_id'] = $data['itemid1'];
      $offer_array['container'][$i_container]['item_count'] = $data['count1'];
      $offer_array['container'][$i_container]['points'] = $data['points'];
      $offer_array['container'][$i_container]['description'] = $data['offer_description'];
      $offer_array['container'][$i_container]['name'] = $data['offer_name'];
      $i_container++;
    }
    elseif ($data['offer_type'] == 'unban')
    {
      $offer_array['unban'][$i_unban]['id'] = $data['id'];
      $offer_array['unban'][$i_unban]['points'] = $data['points'];
      $offer_array['unban'][$i_unban]['description'] = $data['offer_description'];
      $offer_array['unban'][$i_unban]['name'] = $data['offer_name'];
      $i_unban++;
    }
    elseif ($data['offer_type'] == 'redskull')
    {
      $offer_array['redskull'][$i_redskull]['id'] = $data['id'];
      $offer_array['redskull'][$i_redskull]['points'] = $data['points'];
      $offer_array['redskull'][$i_redskull]['description'] = $data['offer_description'];
      $offer_array['redskull'][$i_redskull]['name'] = $data['offer_name'];
      $i_redskull++;
    }
    elseif ($data['offer_type'] == 'itemlogout')
    {
      $offer_array['itemlogout'][$i_itemlogout]['id'] = $data['id'];
      $offer_array['itemlogout'][$i_itemlogout]['points'] = $data['points'];
      $offer_array['itemlogout'][$i_itemlogout]['description'] = $data['offer_description'];
      $offer_array['itemlogout'][$i_itemlogout]['name'] = $data['offer_name'];
      $offer_array['itemlogout'][$i_itemlogout]['count1'] = $data['count1'];
      $offer_array['itemlogout'][$i_itemlogout]['pid'] = $data['pid'];
      $offer_array['itemlogout'][$i_itemlogout]['item_id'] = $data['itemid1'];
      $offer_array['itemlogout'][$i_itemlogout]['free_cap'] = $data['free_cap'];
      $i_itemlogout++;
    }
    elseif ($data['offer_type'] == 'changename')
    {
      $offer_array['changename'][$i_changename]['id'] = $data['id'];
      $offer_array['changename'][$i_changename]['points'] = $data['points'];
      $offer_array['changename'][$i_changename]['description'] = $data['offer_description'];
      $offer_array['changename'][$i_changename]['name'] = $data['offer_name'];
      $i_changename++;
    }
  }
  return $offer_array;
}
?>