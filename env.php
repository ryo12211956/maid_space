<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("mysql://be31fcaddd81c0:3756fe50@us-cdbr-east-05.cleardb.net/heroku_cff8651284cd5d3?reconnect=true"));
$cleardb_server = $cleardb_url["us-cdbr-east-05.cleardb.net"];
$cleardb_username = $cleardb_url["be31fcaddd81c0"];
$cleardb_password = $cleardb_url["3756fe50"];
$cleardb_db = substr($cleardb_url["tennis"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>

// define('DB_HOST', 'us-cdbr-east-05.cleardb.net');
// define('DB_NAME', 'tennis');
// define('DB_USER', 'be31fcaddd81c0');
// define('DB_PASS', '3756fe50');