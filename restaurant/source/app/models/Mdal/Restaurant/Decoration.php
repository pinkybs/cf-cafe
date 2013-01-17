<?php

require_once 'Mdal/Abstract.php';

class Mdal_Restaurant_Decoration extends Mdal_Abstract
{
    protected static $_instance;

    /**
     * getDefaultInstance
     *
     * @return Mdal_Restaurant_Decoration
     */
    public static function getDefaultInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
    
    public function getShopDecoration($type)
    {
        $sql = "SELECT * FROM res_shop_decoration WHERE type=:type";
        return $this->_rdb->fetchAll($sql, array('type'=>$type));
    }
    
    public function getAllShopDecorationCount()
    {
        $sql = "SELECT COUNT(1) FROM res_shop_decoration";
        return $this->_rdb->fetchOne($sql);
    }
    
    public function getShopDecorationCount($type)
    {
        $sql = "SELECT COUNT(1) FROM res_shop_decoration WHERE type=:type";
        return $this->_rdb->fetchOne($sql, array('type'=>$type));
    }
    
    public function getUserDecoration($uid, $pageIndex, $pageSize)
    {
        $start = ($pageIndex - 1) * $pageSize;
        
        $sql = "SELECT a.*,IFNULL(b.count,0) AS `count` FROM res_shop_decoration AS a LEFT JOIN 
                (SELECT uid,decoration_id,COUNT(uid) AS `count` FROM res_user_decoration WHERE uid=:uid GROUP BY uid,decoration_id) AS b 
                ON a.id=b.decoration_id AND b.uid=:uid LIMIT $start, $pageSize";
        
        return $this->_rdb->fetchAll($sql, array('uid'=>$uid));        
    }
    
    public function getUserDecorationByType($uid, $type, $pageIndex, $pageSize)
    {
        $start = ($pageIndex - 1) * $pageSize;
        
        $sql = "SELECT a.*,IFNULL(b.count,0) AS `count` FROM res_shop_decoration AS a LEFT JOIN 
                (SELECT uid,decoration_id,COUNT(uid) AS `count` FROM res_user_decoration WHERE uid=:uid GROUP BY uid,decoration_id) AS b 
                ON a.id=b.decoration_id AND b.uid=:uid WHERE a.type=:type LIMIT $start, $pageSize";
        
        return $this->_rdb->fetchAll($sql, array('uid'=>$uid, 'type'=>$type));        
    }
    
    public function getDecorationById($id)
    {
        $sql = "SELECT * FROM res_shop_decoration WHERE id=:id";
        return $this->_rdb->fetchRow($sql, array('id'=>$id));
    }
    
    public function getDecorationByDid($id)
    {
        $sql = "SELECT a.* FROM res_shop_decoration AS a,res_user_decoration AS b WHERE a.id=b.decoration_id AND b.id=:id";
        return $this->_rdb->fetchRow($sql, array('id'=>$id));
    }
    
    public function addUserDecoration($uid, $decorationId)
    {
        $this->_wdb->insert('res_user_decoration', array('uid' => $uid, 'decoration_id' => $decorationId, 'create_time' => time()));
        return $this->_wdb->lastInsertId();
    }
    
    public function updateUserDecoration($did, $isSet = 1)
    {
        $sql = "UPDATE res_user_decoration SET is_set=:isSet WHERE did=:did";
        $this->_wdb->query($sql, array('isSet' => $isSet, 'did' => $did));
    }
    
    public function insertUserDecorationPosition($info)
    {
        $this->_wdb->insert('res_user_decoration_position', $info);
    }
    
    public function checkUserDid($uid, $did)
    {
        $sql = "SELECT COUNT(1) FROM res_user_decoration WHERE is_set=0 AND uid=:uid AND did=:did";
        $result = $this->_rdb->fetchOne($sql, array('uid' => $uid, 'did' => $did));
        
        return $result > 0;
    }
}