<?php
$url = parse_url(getenv("mysql://be31fcaddd81c0:3756fe50@us-cdbr-east-05.cleardb.net/heroku_cff8651284cd5d3?reconnect=true"));
    
$db_name = substr($url["heroku_cff8651284cd5d3"], 1);
$db_host = $url["us-cdbr-east-05.cleardb.net"];
$user = $url["be31fcaddd81c0"];
$password = $url["3756fe50"];
    
$dsn = "mysql:dbname=".$db_name.";host=".$db_host; 

    try {
        $pdo = new PDO($dsn, $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        return $pdo;
    } catch(PDOExeption $e) {
        echo '接続失敗です！'. $e->getMessage();
        exit();
    }


}
?>
