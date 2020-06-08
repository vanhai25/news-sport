<?php 
require"config.php";
if(!isset($_SESSION)){ // kiểm tra nếu không có session thì start nó
    session_start();
}
require"app/model/Model.php";
$model = new Model;

// phần header
$catalog = $model->getCatalog();
?>