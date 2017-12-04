<?php
echo $_POST['brand-name'].'<br>';
$brandName = $_POST['brand-name'];

echo $_POST['link-website'].'<br>';
$linkWebsite = $_POST['link-website'];

if ($_POST['industry'] != ""){
    $industry = $_POST['industry'];
}else{
    $industry = $_POST['other-industry'];
}
echo $industry.'<br>';

echo $_POST['position'].'<br>';
$position = $_POST['position'];

echo $_POST['key-product'].'<br>';
$keyProduct = $_POST['key-product'];

echo $_POST['key-service'].'<br>';
$keyService = $_POST['key-service'];

echo $_POST['promote'].'<br>';
$promote = $_POST['promote'];

echo $_POST['link-product'].'<br>';
$linkProduct = $_POST['link-product'];

echo $_POST['object'].'<br>';
$object = $_POST['object'];

echo $_POST['style-money'].': '.$_POST['lowest'].' - '.$_POST['highest'].'<br>';
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
echo $sex.'<br>';

echo $_POST['age'].'<br>';
$age = $_POST['age'];

print_r($_POST['target']);
$target = $_POST['target'];

echo '<br>'.$_POST['kol-way'];
$kolWay = $_POST['kol-way'];
