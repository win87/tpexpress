<?php

/**
 * Registration
 * @return string
 */
function register(){

    $arr=$_POST;
    $arr['pwd1'] = sha1($_POST['pwd1']);
    $arr['pwd2'] = sha1($_POST['pwd2']);
    $email=mysql_escape_string(trim($_POST['email']));
    $arr['join_date']=date('Y-m-d H:i:s');
    $arr['verify_code']=md5(rand(0,1000));
    //print_r($arr);exit;

    if (!empty($email) && !empty($arr['pwd1']) && ($arr['pwd2']==$arr['pwd1'])){

        $sql="select * from tpexpress_user where email='{$email}'";
        $row=fetchOne($sql);

        if(empty($row)){

            $user_id = strtotime("now");
            $arr['user_id']= $user_id;

            insert("tpexpress_user",$arr);

            $sql="select email,user_id from tpexpress_user where email='{$email}'";
            $row=fetchOne($sql);

            if($row){
                $_SESSION['user_id']=$row['user_id'];
                $_SESSION['email']=$row['email'];
//                 $_COOKIE['user_id']=$_SESSION['user_id'];
//                 $_COOKIE['email']=$_SESSION['email'];

                 $id=$_SESSION['user_id'];

//                 // For php 5.3 and below
//                 switch ($row['user_type']){
//                     case 1:
                        //insert("tpexpress_package",'user_id'=>$id);
//                         $sql="INSERT INTO tpexpress_package (user_id) VALUES ('$id')";
//                         mysql_query($sql);
//                         break;
                }
                header("location:index.php");

//             }else{
//                 alertMes("The email is exists!", "index.php");
//                 return false;
//             }
        }else{
            alertMes("该邮箱已经存在，请重新输入！", "signup.php");
        }
    }else{
        alertMes("两次密码不匹配，请重新输入！", "signup.php");
    }
}

/**
 * Login
 */
function login(){

    if(isset($_POST['submit'])){

        $email=mysql_escape_string(trim($_POST['loginEmail']));
        $pwd=sha1($_POST['pwd1']);
        @$auto_flag=$_POST['auto_flag'];

        if(!empty($email) && !empty($pwd)){

            $sql="select user_id,email,pwd1,user_type,auto_flag from tpexpress_user where email='{$email}' and pwd1='{$pwd}'";
            $row=fetchOne($sql);
            $_POST['last_login']=date('Y-m-d H:i:s');
            $last_login=$_POST['last_login'];

            if($row){

                $_SESSION['email']=$row['email'];
                $_SESSION['user_id']=$row['user_id'];
                $user_id=$_SESSION['user_id'];
                $sql="UPDATE tpexpress_user SET last_login='{$last_login}' where user_id='{$user_id}'";
                mysql_query($sql);

                if($auto_flag){
                    setcookie("user_id",$row['user_id'],time()+30*24*3600);
                    setcookie("email",$row['email'],time()+30*24*3600);
                }

                switch ($row['user_type']){
                    case 1:
                        header("location:index.php");
                        break;
                }
            }else{
                alertMes('登录邮箱或密码无效，请重新输入',"login.php");
            }
        }else{
            alertMes('请输入登录邮箱和密码', "login.php");
        }
    }else{
        alertMes('请先登录', "login.php");
    }
    //     }else{
    //         alertMes('Please Login', "index.php");
    //     }
}

/**
 * User logout
 */
function userOut(){
    if(isset($_SESSION['user_id'])){
        $_SESSION=array();
    }

    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),"",time()-1);
    }

    session_destroy();
    setcookie('user_id', '', time()-1);
    setcookie('email', '', time()-1);

    header("location:index.php");
}

/**
 * check if login or not
 * @param $sql
 */
function checkProfileSession(){

    if(empty($_SESSION['user_id']) && empty($_COOKIE['user_id'])){
        alertMes("Please login first", 'login.php');
    }
}

function changePwd(){
    $email=$_REQUEST['email'];

    $arr=$_POST;
    $arr['oldPwd'] = sha1($_POST['oldPwd']);
    $arr['pwd1'] = sha1($_POST['pwd1']);
    $arr['pwd2'] = sha1($_POST['pwd2']);
    $oldPwd=$arr['oldPwd'];
    $pwd1=$arr['pwd1'];
    $pwd2=$arr['pwd2'];

    $sql="select pwd1 from tpexpress_user where email='$email'";
    $row=fetchOne($sql);

    if($oldPwd != $row['pwd1']){
       alertMes("旧密码输入错误，请重新输入！", "account.php");
    }else{
        if(!empty($pwd1) && $pwd1 == $pwd2){

            $sql="UPDATE tpexpress_user SET pwd1='$pwd1', pwd2='$pwd2' where email='$email'";
            mysql_query($sql);
            alertMes('密码修改成功！', 'index.php');
        }else{
            echo '密码修改失败，请重新输入！';
        }
    }
}


?>