<?php 

define("logo_path",'images/sample-logo.jpg');
define("db_host",'localhost');
define("db_username",'root');
define("db_password",'');
define("db_name",'subscription_db');


$http = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] =='on' ? "https://" : "http://";
$path_dir = pathinfo($_SERVER['REQUEST_URI'], PATHINFO_DIRNAME);
$path_dir = str_replace("\\", "/", $path_dir);
if($path_dir == '/'){
    $path_dir = "/".pathinfo($_SERVER['REQUEST_URI'], PATHINFO_BASENAME);
}

$siteURL = $http.$_SERVER['SERVER_NAME'].$path_dir. "/";
define("siteURL",$siteURL);
?>