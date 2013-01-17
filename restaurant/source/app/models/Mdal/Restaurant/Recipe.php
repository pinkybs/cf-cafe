<?php

require_once 'Mdal/Abstract.php';

class Mdal_Restaurant_Recipe extends Mdal_Abstract
{
    /**
     * user table name
     *
     * @var string
     */
    protected $table_recipe = 'res_nb_recipe';

    protected static $_instance;

    /**
     * getDefaultInstance
     *
     * @return Mdal_Restaurant_Recipe
     */
    public static function getDefaultInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
    
    public function getTableName($id)
    {
        $n = $id % 10;
        return 'res_user_recipe' . $n;
    }
    
    /**
     * insert into Restaurant
     *
     * @param array $info
     * @return integer
     */
    public function insert($info)
    {
        $tableName = $this->getTableName($info['uid']);
        $this->_wdb->insert($tableName, $info);
    }

	/**
	 * update
	 *
	 * @param integer $uid
	 * @param integer $genre
	 * @param array $info
	 */
    public function update($uid, $genre, $info)
    {
        $tableName = $this->getTableName($uid);
    	$where = array($this->_wdb->quoteInto('uid=?', $uid),
                       $this->_wdb->quoteInto('genre=?', $genre));
        $this->_wdb->update($tableName, $info, $where);
    }
    
    public function getFoodGenre($food)
    {
        $sql = "SELECT genre FROM res_nb_recipe WHERE recipe_id=:food";
        return $this->_rdb->fetchOne($sql, array('food' => $food));
    }
    
    /**
     * get all recipe
     *
     * @return unknown
     */
    public function getAllRecipe()
    {
        $sql = "SELECT * FROM res_nb_recipe";
        return $this->_rdb->fetchAll($sql);
    }

    
    public function getUserRecipeList($uid)
    {
        $tableName = $this->getTableName($uid);
        
        $sql = "SELECT * FROM $tableName WHERE uid=:uid";
        return $this->_rdb->fetchAll($sql, array('uid' => $uid));
    }
    
    public function getNbGenreList()
    {
        $sql = "SELECT * FROM res_nb_genre";
        return $this->_rdb->fetchAll($sql);
    }
    
    public function getUserGener($uid)
    {
        $sql = "SELECT b.*,IFNULL(c.genre,0) AS has FROM res_nb_genre AS b LEFT JOIN
                (SELECT DISTINCT a.genre FROM res_user_recipe4 AS a WHERE a.uid=:uid) AS c ON b.genre=c.genre";
        
        return $this->_rdb->fetchAll($sql, array('uid'=>$uid));
    }
    
    public function getUserGenreFood($uid, $genre)
    {
        $tableName = $this->getTableName($uid);
        
        $sql = "SELECT * FROM $tableName WHERE uid=:uid AND genre=:genre";
        return $this->_rdb->fetchRow($sql, array('uid' => $uid, 'genre' => $genre));
    }
    
    
}