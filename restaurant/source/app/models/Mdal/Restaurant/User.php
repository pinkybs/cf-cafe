<?php

require_once 'Mdal/Abstract.php';

class Mdal_Restaurant_User extends Mdal_Abstract
{
    /**
     * user table name
     *
     * @var string
     */
    protected $table_user = 'res_user_profile';
    
    protected static $_instance;

    /**
     * getDefaultInstance
     *
     * @return Mdal_Restaurant_User
     */
    public static function getDefaultInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new self();
        }
        
        return self::$_instance;
    }

    public function insertProfile($info)
    {
        $this->_wdb->insert('res_user_profile', $info);
        return $this->_wdb->lastInsertId();
    }

    public function insertPatron($info)
    {
        $this->_wdb->insert('res_user_patron', $info);
        return $this->_wdb->lastInsertId();
    }

    public function insertMoney($info)
    {
        $this->_wdb->insert('res_user_money', $info);
        return $this->_wdb->lastInsertId();
    }

    public function insertMenu($info)
    {
        $this->_wdb->insert('res_user_menu', $info);
        return $this->_wdb->lastInsertId();
    }

    public function insertHungry($info)
    {
        $this->_wdb->insert('res_user_hungry', $info);
        return $this->_wdb->lastInsertId();
    }

    public function insertBoard($info)
    {
        $this->_wdb->insert('res_user_board', $info);
        return $this->_wdb->lastInsertId();
    }

    public function insertArrive($info)
    {
        $this->_wdb->insert('res_user_arrive', $info);
        return $this->_wdb->lastInsertId();
    }

    public function insertAccount($info)
    {
        $this->_wdb->insert('res_user_account', $info);
        return $this->_wdb->lastInsertId();
    }

    public function insertSpeech($info)
    {
        $this->_wdb->insert('res_user_speech', $info);
        return $this->_wdb->lastInsertId();
    }

    public function insertEatCount($info)
    {
        $this->_wdb->insert('res_user_eat_count', $info);
        return $this->_wdb->lastInsertId();
    }

    public function insertPatronComment($info)
    {
        $this->_wdb->insert('res_user_patron_comment', $info);
        return $this->_wdb->lastInsertId();
    }

    public function deleteBoard($id)
    {
        $where = $this->_wdb->quoteInto('id=?', $id);
        $this->_wdb->delete('res_user_board', $where);
        return $this->_wdb->lastInsertId();
    }
    
    public function getUser($uid)
    {
        $sql = "SELECT  * FROM $this->table_user WHERE uid=:uid";
        return $this->_rdb->fetchRow($sql, array('uid' => $uid));
    }

    /**
     * check is join app
     *
     * @param integer $uid
     * @return boolean
     */
    public function isJoin($uid)
    {
        $sql = "SELECT COUNT(1) FROM $this->table_user WHERE uid=:uid";
        $result = $this->_rdb->fetchOne($sql, array('uid' => $uid));
        return $result > 0 ? true : false;
    }

    /**
     * update User
     *
     * @param array $info
     * @param integer $uid
     * @return integer
     */
    public function updateUser($info, $uid)
    {
        $where = $this->_wdb->quoteInto('uid=?', $uid);
        return $this->_wdb->update($this->table_user, $info, $where);
    }

    public function getUserMoney($uid)
    {
        $sql = "SELECT gold FROM res_user_money WHERE uid=:uid";
        return $this->_rdb->fetchOne($sql, array('uid' => $uid));
    }

    public function updateUserMoney($uid, $money)
    {
        $sql = "UPDATE res_user_money SET gold=gold+$money WHERE uid=:uid";
        return $this->_wdb->query($sql, array('uid' => $uid));
    }

    /**
     * update User
     *
     * @param array $info
     * @param integer $uid
     * @return integer
     */
    public function updateUserSpeech($info, $uid)
    {
        $where = $this->_wdb->quoteInto('uid=?', $uid);
        return $this->_wdb->update('res_user_speech', $info, $where);
    }

    public function updateUserEatCount($uid, $fid, $count = 1)
    {
        $sql = "UPDATE res_user_eat_count SET eat_count = eat_count + $count WHERE uid=:uid AND fid=:fid";
        return $this->_wdb->query($sql, array('uid' => $uid, '$fid' => $fid));
    }

    public function updateUserPatronComment($uid, $fid, $comment, $time)
    {
        $sql = "UPDATE res_user_patron_comment SET comment = :comment, comment_time = :time WHERE uid=:uid AND fid=:fid";
        return $this->_wdb->query($sql, array('comment' => $comment, 'time' => $time, 'uid' => $uid, 'fid' => $fid));
    }

    public function getUserArrive($uid)
    {
        $sql = "SELECT  * FROM res_user_arrive WHERE uid=:uid";
        return $this->_rdb->fetchRow($sql, array('uid' => $uid));
    }

    public function getUserPatron($uid)
    {
        $sql = "SELECT  * FROM res_user_patron WHERE uid=:uid";
        return $this->_rdb->fetchRow($sql, array('uid' => $uid));
    }

    public function getUserPatronComment($uid, $fids, $pageIndex, $pageSize, $orderCol, $orderType)
    {
        $start = ($pageIndex - 1) * $pageSize;
        
        if (empty($fids)) {
            $fids = '0';
        }
        
        $sql = "SELECT a.*, b.comment FROM res_user_profile a
                LEFT JOIN res_user_patron_comment b ON b.uid = $uid AND a.uid = b.fid
                WHERE a.uid IN ($fids)
                ORDER BY  $orderCol $orderType
                LIMIT $start, $pageSize";
        
        return $this->_rdb->fetchAll($sql);
    }

    public function getPatronCommentByUid($uid, $fid)
    {

        $sql = "SELECT * FROM res_user_patron_comment WHERE uid = :uid AND fid = :fid";
       
        return $this->_rdb->fetchRow($sql, array('uid' => $uid, 'fid' => $fid));
    }
    
    public function getUserSpeech($uid)
    {
        $sql = "SELECT  * FROM res_user_speech WHERE uid=:uid";
        return $this->_rdb->fetchRow($sql, array('uid' => $uid));
    }

    public function getUserEatCount($uid, $orderCol = 'eat_count', $orderType = 'DESC')
    {
        $sql = "SELECT  * FROM res_user_eat_count WHERE fid=:fid ORDER BY $orderCol $orderType";
        return $this->_rdb->fetchAll($sql, array('fid' => $uid));
    }

    /**
     * get friend list
     * @param integer $uid
     * @param array $fids
     * @param integer $pageIndex
     * @param integer $pageSize
     * @param string $orderCol
     * @param string $orderType
     * @return array
     */
    public function getFriendList($uid, $fids, $pageIndex, $pageSize, $orderCol, $orderType)
    {
        $start = ($pageIndex - 1) * $pageSize;
        
        if (empty($fids)) {
            $fids = '0';
        }
        else {
            $fids = $this->_rdb->quote($fids);
        }
        
        $sql = "SELECT a.*, b.speech FROM res_user_profile a
                LEFT JOIN res_user_speech b ON a.uid = b.uid
                WHERE a.uid IN ($fids)
                ORDER BY  $orderCol $orderType
                LIMIT $start, $pageSize";
        
        return $this->_rdb->fetchAll($sql);
    }

    /**
     * get friend count
     * @param integer $uid
     * @param array $fids
     * @return array
     */
    public function getFriendCount($uid, $fids)
    {
        if (empty($fids)) {
            $fids = '0';
        }
        else {
            $fids = $this->_rdb->quote($fids);
        }
        
        $sql = "SELECT COUNT(uid) AS count FROM res_user_profile WHERE uid IN ($fids)";
        
        return $this->_rdb->fetchOne($sql);
    }

    public function getUserBoard($uid, $pageIndex = 1 , $pageSize = 4)
    {
        $start = ($pageIndex - 1) * $pageSize;
        
        $sql = "SELECT * FROM res_user_board rub
                LEFT JOIN res_user_profile rup ON rub.fid = rup.uid
                WHERE rub.uid=:uid
                ORDER BY rub.board_time DESC
                LIMIT $start, $pageSize";
        return $this->_rdb->fetchAll($sql, array('uid' => $uid));
    }
    
}