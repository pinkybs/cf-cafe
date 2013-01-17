<?php

/** @see MyLib_Zend_Controller_Action_Mobile.php */
require_once 'MyLib/Zend/Controller/Action/Mobile.php';

/**
 * Mobile Restaurant restaurant Controller(modules/mobile/controllers/RestaurantController.php)
 *
 * @copyright  Copyright (c) 2008 Community Factory Inc. (http://communityfactory.com)
 * @create huch
 */
class RestaurantController extends MyLib_Zend_Controller_Action_Mobile
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
        $mdalUser = Mdal_Restaurant_User::getDefaultInstance();
        $this->view->userMoney = $mdalUser->getUserMoney($this->_USER_ID);
        
        $this->view->userName = $this->_user->getDisplayName();
        $this->render();
    }

    public function profileAction()
    {
        $mdalResUser = new Mdal_Restaurant_User();
        
        $userPro = $mdalResUser->getUser($this->_USER_ID);
        $userMoney = $mdalResUser->getUserMoney($this->_USER_ID);
        $userPatron = $mdalResUser->getUserPatron($this->_USER_ID);
        $userArrive = $mdalResUser->getUserArrive($this->_USER_ID);
        $userSpeech = $mdalResUser->getUserSpeech($this->_USER_ID);
        $userEatList = $mdalResUser->getUserEatCount($this->_USER_ID);
        
        if (!empty($userEatList) && count($userEatList) > 0) {
            Bll_User::appendPeople($userEatList, 'uid');
        }
        
        //get user's patron count 常連客
        $patronCount = 0;
        if ($userPatron['patron']) {
            $aryPatron = explode(',', $userPatron['patron']);
            $patronCount = count($aryPatron);
        }
        
        //get user's arrive count 行きつけ
        $arriveCount = 0;
        if ($userArrive['arrive']) {
            $aryArrive = explode(',', $userArrive['arrive']);
            $arriveCount = count($aryArrive);
        }
        
        //unescape emoji
        $mbllEmoji = new Mbll_Emoji();
        $userSpeech = $mbllEmoji->unescapeEmoji($userSpeech['speech']);
        
        $mbllResCache = new Mbll_Restaurant_Cache();
        $nbLevList = $mbllResCache->getNbLevelList();
        
        $nbExp = 0;
        foreach ($nbLevList as $lev) {
            if ($lev['level'] == $userPro['level']) {
                $nbExp = $lev['exp'];
                break;
            }
        }
        
        $this->view->userEatList = $userEatList;
        $this->view->userPro = $userPro;
        $this->view->userMoney = $userMoney;
        $this->view->patronCount = $patronCount;
        $this->view->arriveCount = $arriveCount;
        $this->view->userSpeech = $userSpeech;
        $this->view->nbExp = $nbExp;
        
        $this->render();
    }

    public function editspeechAction()
    {
        $speechText = $this->getPost('CF_speech', '');
        $hidSpeechText = $this->getPost('CF_hid_speech', '');
        $speechText = mb_ereg_replace("^(　| |\t|\n|\r|\0|\x0B)*|(　| |\t|\n|\r|\0|\x0B)*$", "", $speechText);
        //        if (mb_strlen($speechText,'utf-8') > 20) {
        //            $error = 2;
        //        }
        

        if ($hidSpeechText != $speechText) {
            //escape emoji
            $mbllEmoji = new Mbll_Emoji();
            $speechText = $mbllEmoji->escapeEmoji($speechText);
            
            $mdalResUser = new Mdal_Restaurant_User();
            $mdalResUser->updateUserSpeech(array('speech' => $speechText, 'speech_time' => time()), $this->_USER_ID);
        }
        
        $this->_redirect($this->_baseUrl . "/mobile/restaurant/profile");
        return;
    }

    public function menulistAction()
    {
        $genre = $this->_getParam('CF_genre', 1);
        
        //get user genre
        $mdalRecipe = Mdal_Restaurant_Recipe::getDefaultInstance();
        $this->view->userGenre = $mdalRecipe->getUserGener($this->_USER_ID);
        
        //get user genre food 
        $food = $mdalRecipe->getUserGenreFood($this->_USER_ID, $genre);
        $food = Zend_Json::decode($food['food']);
        
        $userFood = array();
        foreach ($food as $key=>$value) {
            $userFood[] = array('food' => $key);
        }
        
        while (count($userFood) < 10) {
        	$userFood[] = array('food' => 0);
        }
        
        $this->view->food = $userFood;
        $this->view->foodCount = count($food);
        $this->render();
    }

    public function menuconfirmAction()
    {
        $food = $this->_getParam('CF_food');
        
        if (empty($food)) {
            $this->_redirect('/restaurant/menulist');
        }
        
        $this->view->food = $food;
        $this->render();
    }
    
    public function menucompleteAction()
    {
        $food = $this->_getParam('CF_food');
        
        if (empty($food)) {
            $this->_redirect('/restaurant/menulist');
        }
        
        //update cook times
        $mbllRecip = new Mbll_Restaurant_Recipe();
        $mbllRecip->updateUserFoodCookTimes($this->_USER_ID, $food);
        
        $this->render();
    }

    /**
     * friend list action
     *
     */
    public function friendlistAction()
    {
        $pageIndex = $this->getParam('CF_page', 1);
        $pageSize = 6;
        $orderCol = 'level';
        $orderType = "DESC";

        $fids = Bll_Friend::getFriends($this->_USER_ID);

        $mdalResUser = new Mdal_Restaurant_User();
        
        //get friend list
        $friendList = $mdalResUser->getFriendList($this->_USER_ID, $fids, $pageIndex, $pageSize, $orderCol, $orderType);
        $friendCount = $mdalResUser->getFriendCount($this->_USER_ID, $fids);
        
        Bll_User::appendPeople($friendList, 'uid');
        
        $this->view->friendList = $friendList;
        $this->view->friendCount = $friendCount;

        //get pager info
        $this->view->pager = array('count' => $friendCount, 'pageIndex' => $pageIndex, 'requestUrl' => 'mobile/restaurant/friendlist', 'pageSize' => $pageSize, 'maxPager' => ceil($friendCount / $pageSize));

        $this->render();
    }
    

    /**
     * friend list action
     *
     */
    public function friendAction()
    {
        $proUid = $this->getParam('CF_uid', $this->_USER_ID);

        $mdalResUser = new Mdal_Restaurant_User();
        $commentList = $mdalResUser->getUserBoard($proUid);

        if (!empty($commentList) && count($commentList) > 0) {
            Bll_User::appendPeople($commentList, 'fid');
            
            $this->formatDate($commentList, 'board_time');
        }

        $this->view->proUid = $proUid;
        $this->view->uid = $this->_USER_ID;
        $this->view->commentList = $commentList;
        
        $this->render();
    }

    /**
     * friend list action
     *
     */
    public function commentlistAction()
    {
        $proUid = $this->getParam('CF_uid', $this->_USER_ID);

        $mdalResUser = new Mdal_Restaurant_User();
        $commentList = $mdalResUser->getUserBoard($proUid, 1, 10);

        if (!empty($commentList) && count($commentList) > 0) {
            Bll_User::appendPeople($commentList, 'fid');
            
            $this->formatDate($commentList, 'board_time');
        }

        $this->view->proUid = $proUid;
        $this->view->uid = $this->_USER_ID;
        $this->view->commentList = $commentList;
        
        $this->render();
    }
    
    public function commentAction()
    {
        $uid = $this->_USER_ID;
        $proUid = $this->getParam('CF_uid', $uid);

        if ($uid == $proUid) {
            $this->_redirect($this->_baseUrl . '/mobile/error/error');
        }
        
        $comment = $this->getPost('CF_comment', '');
        
        $comment = mb_ereg_replace("^(　| |\t|\n|\r|\0|\x0B)*|(　| |\t|\n|\r|\0|\x0B)*$", "", $comment);

        if ("" != $comment) {
            //escape emoji
            $mbllEmoji = new Mbll_Emoji();
            $comment = $mbllEmoji->escapeEmoji($comment);
            
            $info = array('uid' => $proUid, 'board' => $comment, 'board_time' => time(), 'fid' => $uid);
            $mdalResUser = new Mdal_Restaurant_User();
            $mdalResUser->insertBoard($info);
        }
        
        if ($uid != $proUid) {
            $this->_redirect($this->_baseUrl . "/mobile/restaurant/friend?CF_uid=" . $proUid);
        } else {
            $this->_redirect($this->_baseUrl . "/mobile/restaurant/index?CF_uid=" . $proUid);
        }
        
        return;
    }
    
    public function deletecommentAction()
    {
        $uid = $this->_USER_ID;
        $id = $this->getParam('CF_id');
        $fromAction = $this->getParam('CF_fromaction', 'index');
        

        if (empty($id)) {
            $this->_redirect($this->_baseUrl . '/mobile/error/error');
        }
        
        $mdalResUser = new Mdal_Restaurant_User();
        $mdalResUser->deleteBoard($id);
        
        if ("list" == $fromAction) {
            $this->_redirect($this->_baseUrl . "/mobile/restaurant/commentlist");
        } else {
            $this->_redirect($this->_baseUrl . "/mobile/restaurant/index");
        }
        
        return;
    }

    /**
     * friend list action
     *
     */
    public function patronlistAction()
    {
        $pageIndex = $this->getParam('CF_page', 1);
        $pageSize = 6;
        $orderCol = 'create_time';
        $orderType = "DESC";

        $mdalResUser = new Mdal_Restaurant_User();
        
        $aryPatrons = $mdalResUser->getUserPatron($this->_USER_ID);
        $patrons = $aryPatrons['patron'];
        
        //get friend list
        $friendList = $mdalResUser->getUserPatronComment($this->_USER_ID, $patrons, $pageIndex, $pageSize, $orderCol, $orderType);
        $friendCount = $mdalResUser->getFriendCount($this->_USER_ID, $fids);
        
        Bll_User::appendPeople($friendList, 'uid');
        
        $this->view->friendList = $friendList;
        $this->view->friendCount = $friendCount;

        //get pager info
        $this->view->pager = array('count' => $friendCount, 'pageIndex' => $pageIndex, 'requestUrl' => 'mobile/restaurant/patronlist', 'pageSize' => $pageSize, 'maxPager' => ceil($friendCount / $pageSize));

        $this->render();
    }
    
    /**
     * friend list action
     *
     */
    public function patroncommentAction()
    {
        $fid = $this->getParam('CF_fid');
        
        $mdalResUser = new Mdal_Restaurant_User();

        $aryPatron =$mdalResUser->getPatronCommentByUid($this->_USER_ID, $fid);
        
        if ($aryPatron) {
            $comment = $aryPatron['comment'];
        } else {
            $comment = "";
        }
        
        $this->view->fid = $fid;
        $this->view->comment = $comment;

        $this->render();
    }
    
    /**
     * friend list action
     *
     */
    public function patroncommentconfirmAction()
    {
        $comment = $this->getParam('CF_comment', '');
        $hidComment = $this->getParam('CF_hid_comment', '');
        $fid = $this->getParam('CF_fid');
        
        $this->view->fid = $fid;
        $this->view->comment = $comment;
        $this->view->hidComment = $hidComment;

        $this->render();
    }
    
    /**
     * friend list action
     *
     */
    public function patroncommentcompleteAction()
    {
        $comment = $this->getParam('CF_comment', '');
        $hidComment = $this->getParam('CF_hid_comment', '');
        $fid = $this->getParam('CF_fid');
        
        $mbllEmoji = new Mbll_Emoji();
        $escapeComment = $mbllEmoji->escapeEmoji($comment);
        
        if ($escapeComment != $hidComment) {
            $mdalResUser = new Mdal_Restaurant_User();
    
            $aryPatron =$mdalResUser->getPatronCommentByUid($this->_USER_ID, $fid);
            
            if ($aryPatron) {
                $mdalResUser->updateUserPatronComment($this->_USER_ID, $fid, $escapeComment, time());
            } else {
                $info = array('uid' => $this->_USER_ID, 'comment' => $escapeComment, 'comment_time' => time(), 'fid' => $fid);
                $mdalResUser->insertPatronComment($info);
            }
        }
        
        $this->view->fid = $fid;
        $this->view->comment = $comment;

        $this->render();
    }
    
    private function formatDate(&$list, $key) {
        $curDate = strtotime(date("Y-m-d",time()));
        
        foreach($list as &$item) {
            if ($item[$key] < $curDate) {
                $item['format_'.$key] = date("n月j日",$item[$key]);
            } else {
                $item['format_'.$key] = date("H:m",$item[$key]);
            }
        }
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