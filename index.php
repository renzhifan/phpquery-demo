<?php
//header("Content-Type:text/html;charset=gbk;");
require("phpQuery/phpQuery.php");
$url = "http://www.coding10.com/course/laravel-resource-management";
phpQuery::newDocumentFile($url);
echo pq('.lesson-link')->html();

//echo pq("h1")->html();
?>