<?php

/**
 * Mobile restaurant decoration logic
 *
 * @copyright  Copyright (c) 2009 Community Factory Inc. (http://communityfactory.com)
 * @create  hch  2010-7-7
 */
require_once 'Mbll/Abstract.php';

class Mbll_Restaurant_Decoration extends Mbll_Abstract
{
    public function buyDecoration($uid, $decorationId)
    {
        $result = false;
    	
        $mdalUser = Mdal_Restaurant_User::getDefaultInstance();            
        $userMoney = $mdalUser->getUserMoney($uid);
        
        $mdalDecoration = Mdal_Restaurant_Decoration::getDefaultInstance();    
        $decoration = $mdalDecoration->getDecorationById($decorationId);
        
        if (empty($decoration['price']) || $decoration['price'] > $userMoney) {
            return $result;
        }
        
        try {
            $this->_wdb->beginTransaction();
            
            //reduce user money
            $mdalUser->updateUserMoney($uid, -$decoration['price']);
            
            //add item to user
            $mdalDecoration->addUserDecoration($uid, $decorationId);
            
            $this->_wdb->commit();
            $result = true;
        }
        catch (Exception $e){
            $this->_wdb->rollBack();
            return $result;
        }
        
        return $result;
    }
    
    public function setDecoration($uid, $did, $x, $y)
    {
        $result = false;
        
        $mdalDecoration = Mdal_Restaurant_Decoration::getDefaultInstance();
        
        //check did is the user and is not setted
        if (!$mdalDecoration->checkUserDid($uid, $did)) {
            return $result;
        }
        
        try {
            $this->_wdb->beginTransaction();
            
            //update user decoration
            $mdalDecoration->updateUserDecoration($did);
            
            //add user decoration position
            $mdalDecoration->insertUserDecorationPosition(array('uid'=>$uid, 'did'=>$did, 'x'=>$x, 'y'=>$y));
            
            $this->_wdb->commit();
            $result = true;
        }
        catch (Exception $e){
            $this->_wdb->rollBack();
            return $result;
        }
        
        return $result;
    }
}