<?php
session_start();
$id=$_REQUEST['id'];
$numver_adding=$_REQUEST['number'];
$tong=0;
$a=array(1,2,3);
foreach($_SESSION['item_cart'] as $k=>$v)
{
    if($v['id']==$id)
    {
        $_SESSION['item_cart'][$k]['add']=$numver_adding;
    }
    $tong+= $_SESSION['item_cart'][$k]['add']*$v['Price'];
}
   echo $tong
?>