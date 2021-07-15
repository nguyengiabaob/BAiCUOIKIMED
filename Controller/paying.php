<?php
session_start();
include "../public/connect.inc";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $note=$_POST['note'];
    $sql="insert into tblcustomers(name_customer,email_customer,phone_customer,address_customer,note_customer) values('$name','$email','$phone','$address','$note')";
    $rs=mysqli_query($con,$sql);
    if($rs)
    {   $id_max=-1; 
        $sql_idcustomer="select Max(ID_customer) as id_max from tblcustomers ";
        $rs_max=mysqli_query($con,$sql_idcustomer);
        if($rs_max)
        {
            if($row=mysqli_fetch_array($rs_max))
            {
                $id_max=$row['id_max'];
            }
           
        }
       
       if(isset($_POST['id']))
       {
           $id=$_POST['id'];
           $num=$_POST['add'];
           $sql="select * from tblmedicines where ID_medicines =$id";
           $rs=mysqli_query($con,$sql);
           if( $row=mysqli_fetch_array($rs))
           {
                $name= $row['NameMedicine'];
                $price =$row['PriceMedicine'];
                $img= $row['ImgMedicine'];

                
           }
           $sql_insert="insert into tbldetail_bill (ID_customer,NameMedicine, PriceMedicine,ImgMedicine,Number_buying) values($id_max,'$name',$price,'$img',$num)";
           $rs_insert=mysqli_query($con,$sql_insert);
           if($rs_insert)
           {
               echo 1;
           }
         
          
       }
       else
        if(!empty($_SESSION['item_cart']))
            {   $count=0;
                $number= count($_SESSION['item_cart']);
                foreach ($_SESSION['item_cart'] as $k=>$v)
                {
                    $name=$v['name'];
                    $price= $v['Price'];
                    $img= $v['img'];
                    $add=$v['add'];
                    $sql_insert="insert into tbldetail_bill (ID_customer,NameMedicine, PriceMedicine,ImgMedicine,Number_buying) values($id_max,'$name',$price,'$img',$add)";
                    $rs_insert=mysqli_query($con,$sql_insert);
                    if($rs_insert)
                    {
                        $count++;
                    }
                }
                if($count==$number)
                {
                    echo 1;
                }
            }
    }


?>