<?php

/**
 * flash controller
 * init each flash 
 *
 * @copyright  Copyright (c) 2008 Community Factory Inc. (http://communityfactory.com)
 * @create    2010/07/12    HCH
 */
class FlashController extends MyLib_Zend_Controller_Action_Mobile
{
    public function indexAction()
    {
        $url = $this->_getParam('url');
        if (!empty($url)) {
            $this->_redirect($url);
        }
        exit;
    }
    
    public function levelupAction()
    {
        exit(0);
    }

    public function cookcompleteAction()
    {
        exit(0);
    }
    
    public function trydecorationAction()
    {
        $did = $this->_getParam('did');
        $swf = Mbll_Restaurant_Flash::tryDecoration($this->_USER_ID, $did);
        
        ob_end_clean();
        ob_start();
        header("Accept-Ranges: bytes");
        header("Content-Type: application/x-shockwave-flash");
        header("Cache-Control: no-cache, must-revalidate");

        echo $swf;
        exit(0);
    }
    
    public function decorationAction()
    {
        exit(0);
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
        return $this->_forward('index');
    }
}