<?php

require_once 'Mdal/Abstract.php';

class Mdal_Restaurant_Item extends Mdal_Abstract
{
    protected static $_instance;

    /**
     * getDefaultInstance
     *
     * @return Mdal_Restaurant_Item
     */
    public static function getDefaultInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
    
    public function getShopItem($type)
    {
        $sql = "SELECT * FROM res_shop_item WHERE type=:type";
        return $this->_rdb->fetchAll($sql, array('type'=>$type));
    }
    
    public function getShopItemCount($type)
    {
        $sql = "SELECT COUNT(1) FROM res_shop_item WHERE type=:type";
        return $this->_rdb->fetchOne($sql, array('type'=>$type));
    }
    
    public function getUserItemByType($uid, $type, $pageIndex, $pageSize)
    {
        $start = ($pageIndex - 1) * $pageSize;
        
        $sql = "SELECT a.*,IFNULL(b.item_count,0) AS `count` FROM res_shop_item AS a
                LEFT JOIN res_user_item AS b ON a.id=b.item_id AND b.uid=:uid WHERE a.type=:type LIMIT $start, $pageSize";
        
        return $this->_rdb->fetchAll($sql, array('uid'=>$uid, 'type'=>$type));
    }
    
    public function getItemById($id)
    {
        $sql = "SELECT * FROM res_shop_item WHERE id=:id";
        return $this->_rdb->fetchRow($sql, array('id'=>$id));
    }
    
    public function addUserItem($uid, $itemId)
    {
        $sql = "SELECT COUNT(1) FROM res_user_item WHERE uid=:uid AND item_id=:id";
        $result = $this->_wdb->fetchOne($sql, array('uid' => $uid, 'id' => $itemId));
        
        if ($result > 0) {
            $sql = "UPDATE res_user_item SET item_count=item_count+1 WHERE uid=:uid AND item_id=:id";
            $this->_wdb->query($sql, array('uid' => $uid, 'id' => $itemId));
        }
        else {
            $this->_wdb->insert('res_user_item', array('uid' => $uid, 'item_id' => $itemId, 'item_count' => 1));
        }
    }




    public function getAllItem()
    {
        $sql = "SELECT * FROM res_shop_item";
        return $this->_rdb->fetchAll($sql);
    }

    public function getUserItemList($uid, $type) {
        $params = array();
        
        $append = "";
        if ($type) {
            $append .= " AND rsi.type = :type ";
            $params['type'] = $type;
        }
        
        $sql = "SELECT * FROM res_user_item rui, res_shop_item rsi WHERE rui.uid = :uid AND rsi.id = rui.item_id " . $append . " ORDER BY item_id ";
        $params['uid'] = $uid;
        
        return $this->_rdb->fetchAll($sql, $params);
        
    }
    


}