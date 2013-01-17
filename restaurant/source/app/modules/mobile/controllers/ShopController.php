<?php

/** @see MyLib_Zend_Controller_Action_Mobile.php */
require_once 'MyLib/Zend/Controller/Action/Mobile.php';

/**
 * Mobile Restaurant shop Controller(modules/mobile/controllers/ShopController.php)
 *
 * @copyright  Copyright (c) 2008 Community Factory Inc. (http://communityfactory.com)
 * @create huch
 */
class ShopController extends MyLib_Zend_Controller_Action_Mobile
{
    /**
     * preDispatch
     *
     */
    function preDispatch()
    {
        
    }
    
    public function indexAction()
    {
        $this->render();
    }
    
    public function decorationAction()
    {
        $type = $this->_getParam('CF_type', 1);
        $paytype = $this->_getParam('CF_pay', 1);
        $pageIndex = $this->getParam('CF_page', 1);
        $pageSize = 4;
        
        $userMoney = Mdal_Restaurant_User::getDefaultInstance();
        $this->view->money = $userMoney->getUserMoney($this->_USER_ID);
        
        $dalDecoration = Mdal_Restaurant_Decoration::getDefaultInstance();
        $decoration = $dalDecoration->getUserDecorationByType($this->_USER_ID, $type, $pageIndex, $pageSize);
        $count = $dalDecoration->getShopDecorationCount($type);
        
        $this->view->decoration = $decoration;
        $this->view->type = $type;
        $this->view->paytype = $paytype;
        
        $this->view->pager = array('count' => $count,
                                   'pageIndex' => $pageIndex,
                                   'requestUrl' => 'shop/decoration',
                                   'pageSize' => $pageSize,
                                   'maxPager' => ceil($count / $pageSize),
                                   'pageParam' => '&CF_type=' . $type . '&CF_pay=' . $paytype
                                   );
        $this->render();
    }
    
    public function decorationconfirmAction()
    {
        $id = $this->_getParam('decorationId');
        $paytype = $this->_getParam('CF_pay');
        
        if (empty($id) || empty($paytype)) {
            $this->_redirect('/shop/decoration');
        }
        
        $userMoney = Mdal_Restaurant_User::getDefaultInstance();
        $this->view->money = $userMoney->getUserMoney($this->_USER_ID);
        
        $dalDecoration = Mdal_Restaurant_Decoration::getDefaultInstance();
        $this->view->decoration = $dalDecoration->getDecorationById($id);
        $this->view->paytype = $paytype;
        $this->render();
    }
    
    public function buydecorationAction()
    {
        $id = $this->_getParam('decorationId');
        $paytype = $this->_getParam('CF_pay');
        
        if (empty($id) || empty($paytype)) {
            $this->_redirect('/shop/decoration');
        }
        
        if ($paytype == 2) {
            $this->_redirect("/shop/payment/type/1/id/$id");
        }
        
        //buy decoration
        $mbllDecoration = new Mbll_Restaurant_Decoration();
        $result = $mbllDecoration->buyDecoration($this->_USER_ID, $id);
        
        //if error
        if (!$result) {
            $this->_redirect('/error/error');    
        }
        else {
            $this->_redirect("/shop/decorationcomplete/decorationId/$id/CF_pay/1");
        }
    }
    
    public function decorationcompleteAction()
    {
        $id = $this->_getParam('decorationId');
        $paytype = $this->_getParam('CF_pay');
        
        $dalDecoration = Mdal_Restaurant_Decoration::getDefaultInstance();
        $this->view->item = $dalDecoration->getDecorationById($id);
        
        $this->view->paytype = $paytype;
        $this->render();
    }
    
    public function itemAction()
    {
        $type = $this->_getParam('CF_type', 1);
        $paytype = $this->_getParam('CF_pay', 1);
        $pageIndex = $this->getParam('CF_page', 1);
        $pageSize = 4;
        
        $userMoney = Mdal_Restaurant_User::getDefaultInstance();
        $this->view->money = $userMoney->getUserMoney($this->_USER_ID);
        
        $dalItem = Mdal_Restaurant_Item::getDefaultInstance();
        $item = $dalItem->getUserItemByType($this->_USER_ID, $type, $pageIndex, $pageSize);
        $count = $dalItem->getShopItemCount($type);
        
        $this->view->item = $item;
        $this->view->type = $type;
        $this->view->paytype = $paytype;
        
        $this->view->pager = array('count' => $count,
                                   'pageIndex' => $pageIndex,
                                   'requestUrl' => 'shop/item',
                                   'pageSize' => $pageSize,
                                   'maxPager' => ceil($count / $pageSize),
                                   'pageParam' => '&CF_type=' . $type . '&CF_pay=' . $paytype
                                   );
        $this->render();
    }
    
    public function itemconfirmAction()
    {
        $id = $this->_getParam('itemId');
        $paytype = $this->_getParam('CF_pay');
        
        if (empty($id) || empty($paytype)) {
            $this->_redirect('/shop/item');
        }
        
        $userMoney = Mdal_Restaurant_User::getDefaultInstance();
        $this->view->money = $userMoney->getUserMoney($this->_USER_ID);
        
        $dalItem = Mdal_Restaurant_Item::getDefaultInstance();
        $this->view->item = $dalItem->getItemById($id);
        $this->view->paytype = $paytype;
        $this->render();
    }
    
    public function buyitemAction()
    {
        $id = $this->_getParam('itemId');
        $paytype = $this->_getParam('CF_pay');
        
        if (empty($id) || empty($paytype)) {
            $this->_redirect('/shop/item');
        }
        
        if ($paytype == 2) {
            $this->_redirect("/shop/payment/type/2/id/$id");
        }
        
        //buy item
        $mbllItem = new Mbll_Restaurant_Item();
        $result = $mbllItem->buyItem($this->_USER_ID, $id);
        
        //if error
        if (!$result) {
            $this->_redirect('/error/error');    
        }
        else {
            $this->_redirect("/shop/itemcomplete/itemId/$id/CF_pay/1");
        }
    }
    
    public function itemcompleteAction()
    {
        $id = $this->_getParam('itemId');
        $paytype = $this->_getParam('CF_pay');
        
        $dalItem = Mdal_Restaurant_Item::getDefaultInstance();
        $this->view->item = $dalItem->getItemById($id);
        
        $this->view->paytype = $paytype;
        $this->render();
    }
    
    
    public function paymentAction()
    {
        
    }
    
    public function getdecorationcallbackAction()
    {
        
    }
    
    public function getdecorationcompleteAction()
    {
        
    }
    
    public function getitemcallbackAction()
    {
        
    }
    
    public function getitemcompleteAction()
    {
        
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
        return $this->_redirect($this->_baseUrl . '/error/notfound');
    }
}