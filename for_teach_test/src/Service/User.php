<?php

namespace App\Service;

use PDO;
use Exception;
use App\Config\Database;

class User
{

    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * 使用者登入
     *
     * @param   string  $account      使用者名
     * @param   string  $password     使用者密碼
     *
     * @throws  Exception   $e          回應錯誤訊息
     *
     * 密碼或帳號錯誤
     * 回傳 "帳號名或密碼錯誤"
     *
     * @return  array       $return     將回傳的 API 回應資訊，回傳成功 *                                  或者失敗
     */
    public function userLogin(string $account, string $password)
    {
        $db = $this->db->dbConnect();
        $statement = $db->prepare("SELECT * FROM users WHERE `account`=? AND `password`=?");
        $statement->execute([$account, $password]);
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}
