<?php
include "../public/connect.inc";
function __autoload($class)
{
    include_once "../classes/$class.php";
}

if(isset($_POST['txttensp']))
{
     if($_FILES['txtimages']['name']!=NULL)
     {
        $path="../Images/";
        $name_img=$_FILES['txtimages']['name'];
        
        $name=$_POST['txttensp'];
        $price=$_POST['txtprice'];
        $number=$_POST['txtnumber'];
        $lsp=$_POST['txttenlsp'];
        $des=$_POST['txtdes'];
    if($_FILES['txtimages']['type']=="image/jpg"||$_FILES['txtimages']['type']=="image/jpeg"||$_FILES['txtimages']['type']=='image/png')
        {
            
            $tmp_name=$_FILES['txtimages']['tmp_name'];
            $type=$_FILES['txtimages']['type'];
            $size=$_FILES['txtimages']['size'];
            move_uploaded_file($tmp_name,$path.$name_img);
            $path.=$name_img;
            // $sql="insert into tblmedicines (NameMedicine ,PriceMedicine,ImgMedicine,Type,Number) values('$name',$price,'$path','$lsp',$number)";
            // $rs=mysqli_query($con,$sql);
            // echo $rs;
            // if(!empty($rs))
            // {
            //     echo "<script>alert('Thêm thành công')</script>";
            //     header("location:insertdetail.php?type=$lsp");
            // }
            $med= new Medicine($name,$price,$path,$lsp,$number,$des);
            $med->addMedicine();
             }
    //     // else
    //     // {
    //     //     echo "<script>alert('Xin vui lòng chọn hình dạng jpg,jpeg,png')</script>";
    //     // }

        

     }

   
   
}

?>