<?php
//DB接続関数
function db_conn(){
    try {
        $db_name = 'gs_kadai08'; //データベース名
        $db_id   = 'root'; //アカウント名
        $db_pw   = 'root'; //パスワード
        $db_host = 'localhost'; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}


