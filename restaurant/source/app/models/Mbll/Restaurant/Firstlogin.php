<?php

/**
 * Mobile restaurant first login logic
 *
 * @copyright  Copyright (c) 2009 Community Factory Inc. (http://communityfactory.com)
 * @create  hch  2010-7-7
 */
require_once 'Mbll/Abstract.php';

class Mbll_Restaurant_Firstlogin extends Mbll_Abstract
{
    /**
     * user first login logic
     *
     * @param integer $uid
     * @param array $chef
     * @return boolean
     */
    public function login($uid, $info)
    {
        $result = false;
    	
        $mdalUser = Mdal_Restaurant_User::getDefaultInstance();
            
        try {
            $this->_wdb->beginTransaction();
            
            $mdalUser->insertProfile($info);
            
            $mdalUser->insertPatron(array('uid' => $uid));
            
            $mdalUser->insertMoney(array('uid' => $uid, 'gold' => 0, 'point' => '0', 'update_time' => time()));
            
            $mdalUser->insertHungry(array('uid' => $uid, 'hungry' => 5, 'hungry_time' => time()));
            
            $mdalUser->insertArrive(array('uid' => $uid));
            
            $mdalUser->insertSpeech(array('uid' => $uid));
            
            //add tow recipe wo user
            $mdalRecipe = Mdal_Restaurant_Recipe::getDefaultInstance();
            $food = '{"a01":{"lv":1,"times":0},"a02":{"lv":1,"times":0}}';
            $mdalRecipe->insert(array('uid' => $uid, 'genre' => 1, 'food'=> $food));
            
            $this->_wdb->commit();
            $result = true;
        }
        catch (Exception $e){
            $this->_wdb->rollBack();
            return $result;
        }
        
        return $result;
    }
        
    public function loginTwice($uid)
    {
    	$result = false;
    	
    	
        
        return $result;
    }
}