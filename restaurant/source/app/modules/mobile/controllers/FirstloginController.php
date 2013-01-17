<?php

/** @see MyLib_Zend_Controller_Action_Mobile.php */
require_once 'MyLib/Zend/Controller/Action/Mobile.php';

/**
 * Mobile Restaurant firstlogin Controller(modules/mobile/controllers/FirstloginController.php)
 *
 * @copyright  Copyright (c) 2008 Community Factory Inc. (http://communityfactory.com)
 * @create huch
 */
class FirstloginController extends MyLib_Zend_Controller_Action_Mobile
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
    
    public function newuserAction()
    {
        $this->render();
    }
    
    public function characterselectAction()
    {
        $this->view->chara = $this->_getParam('CF_chara', 'f');
        $this->view->error = $this->_getParam('error', '0');
        $this->render();
    }

    public function loginAction()
    {
        $character = $this->getPost('character');
        $name = $this->getPost('txtName');
        $name = mb_ereg_replace( "^(　| |\t|\n|\r|\0|\x0B)*|(　| |\t|\n|\r|\0|\x0B)*$", "", $name);
        
        if ($name == "" ) {
            $this->_redirect('/firstlogin/characterselect/CF_chara/' . substr($character, 0, 1) . '/error/1');
        } 
        else if (mb_strlen($name,'utf-8') > 13 || mb_strlen($name,'utf-8') < 2) {
            $this->_redirect('/firstlogin/characterselect/CF_chara/' . substr($character, 0, 1) . '/error/2');
        }
        
        $info = array('uid' => $this->_USER_ID, 'name' => $name, 'create_time' => time(), 'character' => $character);
        $mbllFirstlogin = new Mbll_Restaurant_Firstlogin();
        $result = $mbllFirstlogin->login($this->_USER_ID, $info);
        
        if (!$result) {
            $this->_redirect('/error/error');
        }
        else {
            $this->_redirect('/firstlogin/restaurant');
        }
    }
    
    public function restaurantAction()
    {
        $mdalUser = Mdal_Restaurant_User::getDefaultInstance();
        $user = $mdalUser->getUser($this->_USER_ID);
        Bll_User::appendPerson($user);
        $this->view->user = $user;
        $this->render();
    }
    
    public function todaymenuAction()
    {
        $this->render();
    }
    
    public function todaymenuconfirmAction()
    {
        
        $this->render();
    }
    
    public function todaymenucompleteAction()
    {
        $this->render();
    }
    
    public function todaycookcompleteAction()
    {
        $this->render();
    }

    public function shoppingAction()
    {
        $this->render();
    }
    
    public function todayshoppingcompleteAction()
    {
        $this->render();
    }
    
    public function npcfriendAction()
    {
        $this->render();
    }
    
    public function npcfriendfoodAction()
    {
        $this->render();
    }
    
    public function npcfriendmenuAction()
    {
        $this->render();
    }
    
    public function npcfriendfoodconfirmAction()
    {
        $recipeId = $this->_getParam('recipeId');
        $this->view->recipeId = $recipeId;
        $this->render();
    }

    public function npcfriendfoodcompleteAction()
    {
        $recipeId = $this->_getParam('recipeId');
        $this->view->recipeId = $recipeId;
        
        $dalUser = Mdal_Restaurant_User::getDefaultInstance();
        $this->view->userProfile = $dalUser->getUser($this->_USER_ID);
        
        
        $mdalRecipe = Mdal_Restaurant_Recipe::getDefaultInstance();
        $userRecipe = $mdalRecipe->getUserRecipeList($this->_USER_ID);
        $userRecipe = Zend_Json::decode($userRecipe);
        $userRecipe = array_merge($userRecipe, array($recipeId => array('lv'=>1, 'times'=>0)));
        $userRecipe = Zend_Json::encode($userRecipe);
        $mdalRecipe->update($this->_USER_ID, 1, array('food' => $userRecipe));
            
        $this->render();
    }
    
    public function todaygetrecipeAction()
    {
        $recipeId = $this->_getParam('recipeId');
        $this->view->recipeId = $recipeId;

        $this->render();
    }
    
    public function todaygetrecipe02Action()
    {
        $recipeId = $this->_getParam('recipeId');
        $this->view->recipeId = $recipeId;
        
        $this->render();
    }
    
    public function todaygetcompleteAction()
    {
        $recipeId = $this->_getParam('recipeId');
        $this->view->recipeId = $recipeId;
        
        $this->render();
    }

    public function todaylastAction()
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
        return $this->_redirect($this->_baseUrl . '/error/notfound');
    }
}