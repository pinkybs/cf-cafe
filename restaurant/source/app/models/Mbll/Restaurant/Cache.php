<?php

/**
 * Mobile kitchen cache logic
 *
 * @copyright  Copyright (c) 2009 Community Factory Inc. (http://communityfactory.com)
 * @create  hch  2010-1-7
 */
require_once 'Bll/Cache.php';

class Mbll_Restaurant_Cache
{
	/**
	 * mdal restaurent recipe
	 *
	 * @var Mdal_Restaurant_Recipe
	 */
    private static $_mdalRecipe = null;

    /**
     * mdal restaurent item
     *
     * @var Mdal_Restaurant_Item
     */
    private static $_mdalItem = null;

    /**
     * mdal restaurent NbLevel
     *
     * @var Mdal_Restaurant_NbLevel
     */
    private static $_mdalNbLev = null;
    
    private static $_prefix = 'Mbll_Restaurant_Cache';

    public static function getCacheKey($salt, $params = null)
    {
        return Bll_Cache::getCacheKey(self::$_prefix, $salt, $params);
    }

    /**
     * get mdal recipe
     *
     * @return Mdal_Kitchen_Recipe
     */
    public static function getMdalRecipe()
    {
        if (self::$_mdalRecipe === null) {
            require_once 'Mdal/Restaurant/Recipe.php';
            self::$_mdalRecipe = Mdal_Restaurant_Recipe::getDefaultInstance();
        }

        return self::$_mdalRecipe;
    }

    /**
     * get mdal recipe
     *
     * @return Mdal_Kitchen_Recipe
     */
    public static function getMdalItem()
    {
        if (self::$_mdalItem === null) {
            require_once 'Mdal/Restaurant/Item.php';
            self::$_mdalItem = Mdal_Restaurant_Item::getDefaultInstance();
        }

        return self::$_mdalItem;
    }

    /**
     * get mdal recipe
     *
     * @return Mdal_Kitchen_Recipe
     */
    public static function getMdalNbLevel()
    {
        if (self::$_mdalNbLev === null) {
            require_once 'Mdal/Restaurant/NbLevel.php';
            self::$_mdalNbLev = Mdal_Restaurant_NbLevel::getDefaultInstance();
        }

        return self::$_mdalNbLev;
    }

    
    
    
    /**
     * get recipe
     *
     * @param string $key
     * @return array
     */
    public static function getRecipe($recipe_id="")
    {
        $key = self::getCacheKey('getRecipe');

        if (!$result = Bll_Cache::get($key)) {

            $mdalRecipe = self::getMdalRecipe();
            $result = $mdalRecipe->getAllRecipe();

            if ($result) {
                Bll_Cache::set($key, $result,  Bll_Cache::LIFE_TIME_MAX );
            }
        }

        if (empty($recipe_id)) {
            return $result;
        }
        else {
            foreach ($result as $item) {
                if ($item['recipe_id'] == $recipe_id) {
                    return $item;
                }
            }
        }
    }

    /**
     * clear recipe
     */
    public static function clearRecipe()
    {
        Bll_Cache::delete(self::getCacheKey('getRecipe'));
    }

    /**
     * get recipe
     *
     * @param string $key
     * @return array
     */
    public static function getNbGenreList()
    {
        $key = self::getCacheKey('getNbGenreList');

        if (!$result = Bll_Cache::get($key)) {

            $mdalRecipe = self::getMdalRecipe();
            $result = $mdalRecipe->getNbGenreList();

            if ($result) {
                Bll_Cache::set($key, $result,  Bll_Cache::LIFE_TIME_MAX );
            }
        }

        return $result;
    }

    /**
     * clear place
     */
    public static function clearNbGenreList()
    {
        Bll_Cache::delete(self::getCacheKey('getNbGenreList'));
    }
    
    /**
     * get item
     *
     * @param string $item_id
     * @return array
     */
    public static function getItem($item_id="")
    {
        $key = self::getCacheKey('getItem');

        if (!$result = Bll_Cache::get($key)) {

            $mdalItem = self::getMdalItem();
            $result = $mdalItem->getAllItem();

            if ($result) {
                Bll_Cache::set($key, $result,  Bll_Cache::LIFE_TIME_MAX );
            }
        }

        if (empty($item_id)) {
            return $result;
        }
        else {
            foreach ($result as $item) {
                if ($item['id'] == $item_id) {
                    return $item;
                }
            }
        }
    }
    
    /**
     * clear item
     */
    public static function clearItem()
    {
        Bll_Cache::delete(self::getCacheKey('getItem'));
    }
    

    /**
     * get recipe
     *
     * @param string $key
     * @return array
     */
    public static function getNbLevelList()
    {
        $key = self::getCacheKey('getNbLevelList');

        if (!$result = Bll_Cache::get($key)) {

            $mdalNbLevel = self::getMdalNbLevel();
            $result = $mdalNbLevel->listNbLevel();

            if ($result) {
                Bll_Cache::set($key, $result,  Bll_Cache::LIFE_TIME_MAX );
            }
        }

        return $result;
    }

    /**
     * clear place
     */
    public static function clearNbLevelList()
    {
        Bll_Cache::delete(self::getCacheKey('getNbLevelList'));
    }
    
    

}