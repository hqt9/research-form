<?php

$brandName = $_POST['brand-name'];

setcookie("brandName", '123', time()+600);

$linkWebsite = $_POST['link-website'];

if ($_POST['industry'] != ""){
    $industry = $_POST['industry'];
}else{
    $industry = $_POST['other-industry'];
}

$position = $_POST['position'];

$keyProduct = $_POST['key-product'];

$keyService = $_POST['key-service'];

$promote = $_POST['promote'];

$linkProduct = $_POST['link-product'];

$object = $_POST['object'];

$styleMoney = $_POST['style-money'];

$lowest = $_POST['lowest'];

$highest = $_POST['highest'];


if ($_POST['consumers'] == 'generalSex'){
    $sex = $_POST['character'];
}else{
    if(isset($_POST['specific-consumers'])){
        $sex = $_POST['specific-consumers'];
    }else{
        $sex = '';
    }
}

$age = $_POST['age'];

$target = $_POST['target'];

$kolWay = $_POST['kol-way'];


// echo "<script type='text/javascript'>window.history.back();</script>";

// echo "<script type='text/javascript'>Test();</script>";
?>





