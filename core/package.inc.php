<?php

function addPackage(){
    $arr=$_POST;
    $arr['user_id']=$_SESSION['user_id'];
    //$order_date=date('Y-m-d');
    $arr['order_date']=date('Y-m-d');
    $arr['note']=mysql_real_escape_string($arr['note']);
    //print_r($arr); exit;
    if($arr['line']=='' &&
        $arr['catalogue']=='' &&
        $arr['brand']=='' &&
        $arr['pPrice']=='' &&
        $arr['quantity']=='' &&
        $arr['unit']==''
    ){
        echo "<script>alert('Please fill out all required information');</script>";
    }else{
        $res=insert("tpexpress_package",$arr);
//        echo "<img src='images/default/check.png' class='check-icon'></img>";
        alertMes("添加包裹成功", "my_package.php");
    }
}

function addRecipients(){
    $arr=$_POST;
    $arr['user_id']=$_SESSION['user_id'];
    if($arr['name']=='' &&
        $arr['phone']=='' &&
        $arr['province']=='' &&
        $arr['city']=='' &&
        $arr['address']==''
    ){
        echo "<script>alert('请填写完整信息');</script>";
    }else{
        $res=insert("tpexpress_recipients",$arr);
        //echo "<img src='images/default/check.png' class='check-icon'></img>";
        alertMes('收件人添加成功', 'add_recipients.php');
    }
}

// function getPackage(){

//     $id=$_SESSION['user_id'];

//     $sql="SELECT *
//             FROM tpexpress_package
//             where user_id = {$id}";
//     $rows=fetchAll($sql);
// }

function delRecipients($recipients_id,$user_id){

    $sql="DELETE FROM tpexpress_recipients where id={$recipients_id} and user_id={$user_id}";
    $res=mysql_query($sql);
    if($res){
        alertMes('收件人删除成功！','add_recipients.php');
    }else{
        alertMes('收件人删除失败！','add_recipients.php');
    }
}

function addOrder(){
    $arr=$_POST;
    $arr['user_id']=$_SESSION['user_id'];
    $arr['oDate']=date('Y-m-d');
    if($arr['oName']=='' &&
        $arr['oPrice']=='' &&
        $arr['oQuantity']=='' &&
        $arr['oUnit']==''
    ){
        echo "<script>alert('请填写完整信息');</script>";
    }else{
        $res=insert("tpexpress_order",$arr);
        //echo "<img src='images/default/check.png' class='check-icon'></img>";
        alertMes('商品订单添加成功', 'order.php');
    }
}


?>