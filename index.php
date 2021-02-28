<?php

// Lấy được request yêu cầu đến controller và action
$controller =  isset($_GET["controller"]) ? $_GET["controller"] :  null;
$action = $_GET["action"] ?? null;

// Hàm kiểm tra lien kết có đúng với đường dẫn hay không, nếu đúng thì in ra active
function showActive($controllerName, $actionName = null){
    global $controller;
    if($controller == $controllerName){
        echo "active";
    }
}

// Yêu cầu kết nối MySQL
require_once("db.php");

$connect = DB::getInstance();

var_dump($connect);

//  Nhúng file controller
require_once("controllers/$controller"."_controller.php");

// Khởi tạo controller
// home: HomeController
$controllerName = ucwords($controller)."controller";

$controllerInstance = new $controllerName;

// Gọi action
$controllerInstance->$action();

// Thử connection sql
$sql = "SELECT * FROM products";

$smtp = DB::getInstance()->prepare($sql);
$smtp->execute();

var_dump($smtp->fetchAll());