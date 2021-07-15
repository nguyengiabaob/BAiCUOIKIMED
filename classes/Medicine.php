<?php
Class Medicine
{
     public $name;
     Private $price;
    public  $img;
    public $type;
    Private $number;
    function _contruct()
    {

    }
   public function Medicine ($name, $price,$img,$type,$number,$des)
    {
        $this->name=$name;
        $this->price=$price;
        $this->img=$img;
        $this->type=$type;
        $this->number=$number;
        $this->des=$des;
    } 
   public function addMedicine()
    {
        include "../public/connect.inc";
        // if(empty($this->$name)||empty($this->$price)||empty($this->$img))
        // {
        //     echo "Thông tin sản phẩm chưa đầy đủ";
        // }
        // else
        // {
            $sql3="select * from tblmedicines where Type='$this->type'";
            $rs3=mysqli_query($con,$sql3);
            while($row=mysqli_fetch_array($rs3))
            {
                if($row['NameMedicine']==$this->name and $row['PriceMedicine']==$this->price and $row['ImgMedicine']==$this->img and $row['Type']==$this->type )
                {
                    $lold_number=$row['Number'];
                    $lold_number+=$number;
                    $sql4="update tblmedicines set Number=$lold_number where NameMedicine='$this->name' ";
                    $rs=mysqli_query($con,$sql4);
                    if($rs)
                    {
                        return ;
                    }
                }
            }
            
            $before_number=0;
            $sql2= "select *from tbltype where Name_type='$this->type'";
            $rs1=mysqli_query($con,$sql2);
            if($row=mysqli_fetch_array($rs1))
            {
                $before_number=$row["Number"];
            }
            $sql="insert into tblmedicines (NameMedicine,PriceMedicine,ImgMedicine,Type,Number,description) values('$this->name',$this->price,'$this->img','$this->type',$this->number,'$this->des')";
           
            $rs= mysqli_query($con,$sql);
            if(!empty($rs)) 
            {
                $before_number+=$this->number;
                $sql1="update tbltype set Number = $before_number where Name_type='$this->type'" ;
                $rs= mysqli_query($con,$sql1);
                if(!empty($rs))
                {
                    echo "<script>alert('Thêm thành công')</script>";
                }
               header("location:insertdetail.php?type=$this->type");
                
            }
       // }
    }
  public  function removeMedicine($id)
    {
        if(empty($id))
        {
            echo "Mời bạn chọn đối tượng xóa";

        }
        else
        {
        $sql="Delete from tblmedicines where ID_medicines=$id";
        $rs =mysqli_query($con,$sql);
        if(!$rs)
        {
            echo "Bạn đã xóa thành công";
        }
        }

    }
  public  function getPrice()
    {
        return $this->$price;
    }
 public   function setPrice($price)
    {
        if($price>=0)
        {
            $this->$price=$price;
        }
        else
        {
            echo "Xin vui lòng nhập lại giá";
        }
    }


}

?>