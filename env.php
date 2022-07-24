<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
define('DB_HOST', $url["host"]);
define('DB_NAME', substr($url["path"], 1));
define('DB_USER', $url["user"]);
define('DB_PASS', $url["pass"]);
?>