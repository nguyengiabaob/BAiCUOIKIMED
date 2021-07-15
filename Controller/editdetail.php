<?php
include "../public/connect.inc";
function __autoload($class)
{
    include_once "../classes/$class.php";
}

if(isset($_POST['txttensp']))
{
    $id = $_POST['txtid'];
    $img=$_POST['txtimg'];
    $name=$_POST['txttensp'];
    $price=$_POST['txtprice'];
    $number=$_POST['txtnumber'];
    $lsp=$_POST['txttenlsp'];
    $des=$_POST['txtdes'];
    $old_number=$_POST['txtnber'];
     if($_FILES['txtimages']['name']!=NULL)
     {
        
        $path="../Images/";
        $name_img=$_FILES['txtimages']['name'];
        
    if($_FILES['txtimages']['type']=="image/jpg"||$_FILES['txtimages']['type']=="image/jpeg"||$_FILES['txtimages']['type']=='image/png')
        {
            
            $tmp_name=$_FILES['txtimages']['tmp_name'];
            $type=$_FILES['txtimages']['type'];
            $size=$_FILES['txtimages']['size'];
            move_uploaded_file($tmp_name,$path.$name_img);
            $path.=$name_img;
            $before_number=0;
            $sql2="select * from tbltype where Name_type ='$lsp'";
            $rs2=mysqli_query($con,$sql2);
            if($row=mysqli_fetch_array($rs2))
            {
                $before_number=$row['Number'];
               
            }
            $sql="update tblmedicines set NameMedicine='$name' ,PriceMedicine=$price,ImgMedicine='$path',Type='$lsp',Number=$number ,description='$des' where ID_medicines=$id";
            $rs=mysqli_query($con,$sql);
            if(!empty($rs))
            {
                $before_number-=$old_number;
                $before_number+=$number;
                $sql="update tbltype set Number = $before_number where Name_type ='$lsp'";
                $rs=mysqli_query($con,$sql);
                if($rs)
                {
                    unlink("../Images/".$img);
                    echo "<script>alert('Thêm thành công')</script>";
                    header("location:editdetail.php?id=$id");
                }
                
            }
            // $med= new Medicine($name,$price,$path,$lsp,$number);
            // $med->addMedicine();
             }
    //     // else
    //     // {
    //     //     echo "<script>alert('Xin vui lòng chọn hình dạng jpg,jpeg,png')</script>";
    //     // }

        

     }
     else
     {
        $before_number=0;
        $sql2="select * from tbltype where Name_type ='$lsp'";
        $rs2=mysqli_query($con,$sql2);
        if($row=mysqli_fetch_array($rs2))
        {
            $before_number=$row['Number'];
           
        }
        $sql="update tblmedicines set NameMedicine='$name' ,PriceMedicine=$price,Type='$lsp',Number=$number, description='$des' where ID_medicines=$id";
        $rs=mysqli_query($con,$sql);
        if(!empty($rs))
        {
            $before_number-=$old_number;
            $before_number+=$number;
            $sql="update tbltype set Number = $before_number where Name_type ='$lsp'";
            $rs=mysqli_query($con,$sql);
            if($rs)
            {
              
                echo "<script>alert('Thêm thành công')</script>";
                header("location:editdetail.php?id=$id");
            }
            
        }
     }

   
   
}

?>