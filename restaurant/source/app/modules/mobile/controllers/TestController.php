<?php

class TestController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $config = new Zend_Config_Xml('F:\app\restaurant\doc\sample.xml');
        print_r($config->kitchen->row->toArray());
        exit;
    }
}