<?php

require_once 'include.php';


if(isset($_POST['email'])){

    $email = mysql_real_escape_string($_POST['email']);

    if(!empty($email)){

        $query = mysql_query("select id from tpexpress_user where email='{$email}'");
        $email_result = mysql_num_rows($query);

        if($email_result==1){
            echo "该邮箱已经存在！";
        }
    }
}


if(isset($_POST['loginEmail'])){

    $loginEmail = mysql_real_escape_string($_POST['loginEmail']);

    if(!empty($loginEmail)){

        $query = mysql_query("select email from tpexpress_user where email='{$loginEmail}'");
        @$email_result = mysql_num_rows($query);

        if($email_result==0){
            echo "该邮箱地址尚未注册！";
        }
    }
}


if(isset($_POST['pwd1'])){

    $password1 = sha1($_POST['pwd1']);

    if(!empty($password1)){

        $query = mysql_query("select user_id from tpexpress_user where pwd1='{$password1}'");
        $pwd_res = mysql_num_rows($query);

        if($pwd_res == 0){
            echo "无效的密码！";
        }
    }
}

// reset password
if(isset($_POST['oldPwd'])){

    $oldPwd = sha1($_POST['oldPwd']);

    if(!empty($oldPwd)){

        $query = mysql_query("select pwd1 from tpexpress_user where pwd1='{$oldPwd}'");
        $pwd_res = mysql_num_rows($query);

        if($pwd_res == 0){
            echo "旧密码错误！";
        }
    }
}

?>