<?php

require_once 'Dbcon.php';

class tblproduct{
    public $conn;

    public function __construct()
    {
        $dbcon=new Dbcon();
        $this->conn=$dbcon->createConnection();
    }

    //inserting product
    public function insertproduct($productname,$link){
     $sql="INSERT INTO `tbl_product` (`prod_parent_id`,`prod_name`,`prod_available`,`prod_launch_date`,`link`) 
        VALUES (1,'$productname',1,NOW(),'$link')";
        $data=$this->conn->query($sql);
        if ($data) {
            return $data;
        }
        return false;
    }
    //update the category
    public function updateProductByCategory($productname, $link, $availability, $id) 
    {
        $sql="UPDATE `tbl_product` SET `prod_name`='$productname', `html`='$link',`prod_available`='$availability' WHERE `id` = '$id'";
        $data=$this->conn->query($sql);
        if ($data) {
            return true;
        }
        return false;
    }

    //getsubcategory
    public function subcategory(){
        $sql="SELECT * FROM `tbl_product` WHERE `prod_parent_id`=1 AND `prod_available`=1";
        $data=$this->conn->query($sql);
        if($data->num_rows > 0){
            while($row=$data->fetch_assoc()){
                $arr[]=$row;
                
            }
            return $arr;
        }
        return false;
       
    }

    //add the product
        public function addproduct($productCategory,$productname,$pageURL,$monthlyprice,$annualprice,$sku,$webspace,$bandwidth,$freedomain,$languagetechnology,$mailbox){
            $description=array(
                "webspace"=>$webspace,
                "bandwidth"=>$bandwidth,
                "freedomain"=>$freedomain,
                "languagetechnology"=>$languagetechnology,
                "mailbox"=>$mailbox

            );
            $description=json_encode($description);
            $sql="INSERT INTO `tbl_product`(`prod_parent_id`,`prod_name`,`prod_available`,`prod_launch_date`,`link`) 
                        VALUES('$productCategory','$productname',1,NOW(),'$pageURL')";
                     
                        if($this->conn->query($sql)===true){
                            $child_id=$this->conn->insert_id;
                             
                           
            $sql1="INSERT INTO `tbl_product_description`(`prod_id`, `description`, `mon_price`, `annual_price`, `sku`) 
                            VALUES ('$child_id','$description','$monthlyprice','$annualprice','$sku')";
                           
                            if ($this->conn->query($sql1)===true) {
                                return true;
                            }
                            return false;
                        }
                        return false;
                        }

           
        //inner join operation for displaying the data in datatable

        public function showproducts() 
    {
        $sql="SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`";
        $data=$this->conn->query($sql);
        $arr['data']=array();
        while ($row=$data->fetch_assoc()) {
            if ($row['prod_available']=='1') {
                $available="available";
            } else {
                $available="unavailable";
            }
            $decoded_description=json_decode($row['description']);
            $webspace=$decoded_description->{'webspace'};
            $bandwidth=$decoded_description->{'bandwidth'};
            $freedomain=$decoded_description->{'freedomain'};
            $languagetechnology=$decoded_description->{'languagetechnology'};
            $mailbox=$decoded_description->{'mailbox'};
            $prod_parent_id=$row['prod_parent_id'];
            $sql="SELECT * FROM `tbl_product` WHERE `id`='$prod_parent_id'";
            $roww=$this->conn->query($sql);
            $data1=$roww->fetch_assoc();
            $arr['data'][]=array($data1['prod_name'],$row['prod_name'],$row['html'],$available,$row['prod_launch_date'],$row['mon_price'],$row['annual_price'],$row['sku'],$webspace,$bandwidth,$freedomain,$languagetechnology,$mailbox,"<a href='javascript:void(0)' class='btn btn-outline-info' data-id='".$row['prod_id']."' id='edit-product-by-category' data-toggle='modal' data-target='#exampleModalSignUp'>Edit</a> <a href='javascript:void(0)' class='btn btn-outline-danger' data-id='".$row['prod_id']."' id='delete-product-by-category'>Delete</a>");
        }
        return json_encode($arr);
    
    }

    //navigation
    public function getheading(){
        $sql="SELECT * FROM `tbl_product` WHERE `prod_parent_id`=1";
        $data=$this->conn->query($sql);
        if($data->num_rows>0){
            return $data->fetch_all(MYSQLI_ASSOC);
        } else{
            return false;
        }
    }
    
    //get category details by clicking the link

    public function categorydetails($id){
        $sql="SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` WHERE `tbl_product`.`prod_parent_id`='$id'";
        $data=$this->conn->query($sql);            
        if ($data->num_rows>0) {
            $arr=array();
            while ($row=$data->fetch_assoc()) {
                if ($row['prod_available']=='0') {
                    continue;
                } else {
                    $available="available";
                }
                $decoded_description=json_decode($row['description']);
                $webspace=$decoded_description->{'webspace'};
                $bandwidth=$decoded_description->{'bandwidth'};
                $freedomain=$decoded_description->{'freedomain'};
                $languagetechnology=$decoded_description->{'languagetechnology'};
                $mailbox=$decoded_description->{'mailbox'};
                $arr[]=array(
                    "prod_id"=>$row['prod_id'],
                    "sku"=>$row['sku'],
                    "mon_price"=>$row['mon_price'],
                    "annual_price"=>$row['annual_price'],
                    "prod_parent_id"=>$row['prod_parent_id'],
                    "prod_name"=>$row['prod_name'],
                    "link"=>$row['html'],
                    "available"=>$available,
                    "prod_launch_date"=>$row['prod_launch_date'],
                    "webspace"=>$webspace,
                    "bandwidth"=>$bandwidth,
                    "freedomain"=>$freedomain,
                    "languagetechnology"=>$languagetechnology,
                    "mailbox"=>$mailbox
                );
            }
            return $arr;
        }
        return false;
    }

    // get heading in catpage
    public function getdetails($id){
        $sql="SELECT * FROM tbl_product WHERE  'id'=$id";
        $data=$this->conn->query($sql);
        if($data->num_rows>0){
            return $data->fetch_all(MYSQLI_ASSOC);
        } else{
            return false;
        }
    }

    }

    

                    
        
        
        
        