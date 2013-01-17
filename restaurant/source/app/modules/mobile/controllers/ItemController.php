<?php

/** @see MyLib_Zend_Controller_Action_Mobile.php */
require_once 'MyLib/Zend/Controller/Action/Mobile.php';

/**
 * Mobile Restaurant firstlogin Controller(modules/mobile/controllers/FirstloginController.php)
 *
 * @copyright  Copyright (c) 2008 Community Factory Inc. (http://communityfactory.com)
 * @create huch
 */
class ItemController extends MyLib_Zend_Controller_Action_Mobile
{
    /**
     * preDispatch
     *
     */
    function preDispatch()
    {
        
    }
    
    public function itemlistAction()
    {
        $type = $this->_getParam('CF_type', '1');
        
        //get nb recipe list by genre
        $mbllResItem = new Mbll_Restaurant_Item();
        $userItemsList = $mbllResItem->getUserItems($this->_USER_ID, $type);
        
        $this->view->userItemsList = $userItemsList;

        $this->render();
    }
    
    public function itemdetailAction()
    {
        $itemId = $this->_getParam('CF_item_id');
        
        $nbItem = Mbll_Restaurant_Cache::getItem($itemId);
        
        $this->view->nbItem = $nbItem;
        
        $this->render();
    }
    
    public function characterselectAction()
    {
        $this->render();
    }

    public function restaurantAction()
    {
        $this->render();
    }
    
    public function todaymenuAction()
    {
        $this->render();
    }

    public function shoppingAction()
    {
        $this->render();
    }
    
    public function npcfriendAction()
    {
        $this->render();
    }

    /**
     * magic function
     *   if call the function is undefined,then forward to not found
     *
     * @param string $methodName
     * @param array $args
     * @return void
     */
    function __call($methodName, $args)
    {
        return $this->_redirect($this->_baseUrl . '/mobile/error/notfound');
    }
}