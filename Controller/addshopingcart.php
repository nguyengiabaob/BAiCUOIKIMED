<?php
    session_start();
    // unset( $_SESSION['item_cart']);
   
    include "../public/connect.inc";
    
    if(isset($_POST['add']))
    {
        $numberbuying=$_POST['add'];
        if(empty($_SESSION['username']))
    {
        echo 0;
      
     
    }
    else if(!empty($_SESSION['username']))
    {
    $id_add= $_POST['id'];
    $sql="select *  from tblmedicines where ID_medicines= $id_add";
    $rs= mysqli_query($con,$sql);
    

     if($rs)
     {
            $c=0;
           $row=mysqli_fetch_array($rs);
           $item_array=array($row['ID_medicines']=>array('name'=>$row['NameMedicine'],'Price'=>$row['PriceMedicine'],'img'=>$row['ImgMedicine'],'Number'=>$row['Number'],'add'=>$numberbuying,'id'=>$row['ID_medicines']));
            
            if(!empty($_SESSION['item_cart']))
          {
             foreach ($_SESSION['item_cart'] as $k=>$v)
             {
                 if($row['ID_medicines']==$v['id'])
                 {
                    $_SESSION['item_cart'][$k]['add']+=1;
                    $c=1;
                 }
             }
            //    if(in_array($row['ID_medicines'],$_SESSION['item_cart']['id']))
            //   {

            //       $_SESSION['item_cart'][$row['ID_medicines']]['add']+=1;
                  
            //     }
          
                if($c==0)
              {
                $_SESSION['item_cart']= array_merge( $_SESSION['item_cart'],$item_array);
                 
                  
             }
         }
             else
            {
                $_SESSION['item_cart']=$item_array;
               
            }
        
         echo 1;
      
     }

    }
  
      
}

    
?>