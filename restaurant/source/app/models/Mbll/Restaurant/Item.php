<?php

/**
 * Mobile restaurant item logic
 *
 * @copyright  Copyright (c) 2009 Community Factory Inc. (http://communityfactory.com)
 * @create  hch  2010-7-7
 */
require_once 'Mbll/Abstract.php';

class Mbll_Restaurant_Item extends Mbll_Abstract
{
    public function buyItem($uid, $itemId)
    {
        $result = false;
    	
        $mdalUser = Mdal_Restaurant_User::getDefaultInstance();
        $mdalItem = Mdal_Restaurant_Item::getDefaultInstance();
        
        $userMoney = $mdalUser->getUserMoney($uid);
        $item = $mdalItem->getItemById($itemId);
        
        if (empty($item['price']) || $item['price'] > $userMoney) {
            return $result;
        }
        
        try {
            $this->_wdb->beginTransaction();
            
            //reduce user money
            $mdalUser->updateUserMoney($uid, -$item['price']);
            
            //add item to user
            $mdalItem->addUserItem($uid, $itemId);
            
            $this->_wdb->commit();
            $result = true;
        }
        catch (Exception $e){
            $this->_wdb->rollBack();
            return $result;
        }
        
        return $result;
    }
    
    /**
     * get nb item by type
     *
     * @param string $type
     * @return array
     */
    public function getNbItemsByType($type) 
    {
        $itemList = array();
        
        $nbItemList = Mbll_Restaurant_Cache::getItem();
        
        foreach ($nbItemList as $item) {
            if ($type == $item['type']) {
                $itemList[] = $item;
            }
        }

        return $itemList;
    }
    
    /**
     * get nb item by type
     *
     * @param string $type
     * @return array
     */
    public function getUserItems($uid, $type) {
        
        $mdalResItem = Mdal_Restaurant_Item::getDefaultInstance();
        $itemList = $mdalResItem->getUserItemList($uid, $type);
        
        return $itemList;
    }
}