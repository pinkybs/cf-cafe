<?php

/** @see MyLib_Zend_Controller_Action_Mobile.php */
require_once 'MyLib/Zend/Controller/Action/Mobile.php';

/**
 * Mobile Restaurant firstlogin Controller(modules/mobile/controllers/FirstloginController.php)
 *
 * @copyright  Copyright (c) 2008 Community Factory Inc. (http://communityfactory.com)
 * @create huch
 */
class RecipeController extends MyLib_Zend_Controller_Action_Mobile
{
    /**
     * preDispatch
     *
     */
    function preDispatch()
    {
        
    }
    
    public function recipelistAction()
    {
        $genre = $this->_getParam('CF_genre', '1');
        
        //get nb recipe list by genre
        $mbllResRecipe = new Mbll_Restaurant_Recipe();
        $nbRecipeListByGenre = $mbllResRecipe->getNbRecipeByGenre($genre);
        $genreName = $mbllResRecipe->getNbGenreName($genre);
        
        //get user recipe list by genre
        $userRecipeList = $mbllResRecipe->getUserRecipeByGenre($genre, $this->_USER_ID);
        
        $nbCount = count($nbRecipeListByGenre);
        $userCount = 0;
        for ($i =0; $i < $nbCount; $i++) {
            $nbRecipeListByGenre[$i]['isDisplay'] = 0;
            if ($userRecipeList[$nbRecipeListByGenre[$i]['recipe_id']]) {
                  $nbRecipeListByGenre[$i]['isDisplay'] = 1;
                  $userCount++;
            }
        }
        
        $this->view->recipeList = $nbRecipeListByGenre;
        $this->view->genreName = $genreName;
        $this->view->userCount = $userCount;
        $this->view->nbCount = $nbCount;
        
        $this->render();
    }
    
    public function recipedetailAction()
    {
        $recipeId = $this->_getParam('CF_recipe_id');
        
        $nbRecipe = Mbll_Restaurant_Cache::getRecipe($recipeId);
        
        $mbllResRecipe = new Mbll_Restaurant_Recipe();
        $userRecipeList = $mbllResRecipe->getUserRecipeByGenre($nbRecipe['genre'], $this->_USER_ID);
        
        if(!$userRecipeList[$recipeId]) {
            $this->_redirect('/error/error');
        }
        
        $genreName = $mbllResRecipe->getNbGenreName($nbRecipe['genre']);
        
        $this->view->genreName = $genreName;
        $this->view->nbRecipe = $nbRecipe;
        $this->view->userRecipe = $userRecipeList[$recipeId];
        
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