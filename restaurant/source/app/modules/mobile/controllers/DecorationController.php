<?php

/** @see MyLib_Zend_Controller_Action_Mobile.php */
require_once 'MyLib/Zend/Controller/Action/Mobile.php';

/**
 * Mobile Restaurant decoration Controller(modules/mobile/controllers/DecorationController.php)
 *
 * @copyright  Copyright (c) 2008 Community Factory Inc. (http://communityfactory.com)
 * @create huch
 */
class DecorationController extends MyLib_Zend_Controller_Action_Mobile
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
        $pageIndex = $this->getParam('CF_page', 1);
        $pageSize = 9;
        
        $dalDecoration = Mdal_Restaurant_Decoration::getDefaultInstance();
        $decoration = $dalDecoration->getUserDecoration($this->_USER_ID, $pageIndex, $pageSize);
        $count = $dalDecoration->getAllShopDecorationCount();
        
        $this->view->decoration = $decoration;
        $this->view->type = $type;
        $this->view->paytype = $paytype;
        
        $this->view->pager = array('count' => $count,
                                   'pageIndex' => $pageIndex,
                                   'requestUrl' => 'decoration',
                                   'pageSize' => $pageSize,
                                   'maxPager' => ceil($count / $pageSize),
                                   'pageParam' => '&CF_type=' . $type . '&CF_pay=' . $paytype
                                   );
                                   
        $this->render();
    }
    
    public function setAction()
    {
        $did = $this->_getParam('did');
        $x = $this->_getParam('x');
        $y = $this->_getParam('y');
        
        if (empty($did)) {
            $this->_redirect('/error/error');
        }
        
        //set decoration
        $mbllDecoration = new Mbll_Restaurant_Decoration();
        //$result = $mbllDecoration->setDecoration($this->_USER_ID, $did, $x, $y);
        $result = true;
        if (!$result) {
            $this->_redirect('/error/error');
        }
        else {
            $this->_redirect('/decoration/complete/did/' . $did);
        }
    }
    
    public function completeAction()
    {
        $did = $this->_getParam('did');
        
        if (empty($did)) {
            $this->_redirect('/error/error');
        }
        
        $dalDecoration = Mdal_Restaurant_Decoration::getDefaultInstance();
        $this->view->decoration = $dalDecoration->getDecorationByDid($did);
        
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
        return $this->_redirect($this->_baseUrl . '/error/notfound');
    }
}