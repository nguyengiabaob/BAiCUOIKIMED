<?php
session_start();
$id=$_REQUEST['id'];
$numver_adding=$_REQUEST['number'];
$tong=0;

$key=-1;
foreach($_SESSION['item_cart'] as $k=>$v)
{
    if($v['id']==$id)
    {
        $_SESSION['item_cart'][$k]['add']=$numver_adding;
        $key=$k;
       
    }
   
}
$single= $_SESSION['item_cart'][$key]['add']*$_SESSION['item_cart'][$key]['Price'];
echo $single;
   
?>