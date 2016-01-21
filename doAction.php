<?php

require_once 'include.php';

$act=$_REQUEST['act'];
//@$id=$_REQUEST['id'];
@$recipients_id=$_REQUEST['recipients_id'];
@$user_id=$_REQUEST['user_id'];

if($act=="register"){
    $mes=register();
}
elseif($act=="login"){
    $mes=login();
}
elseif($act=="userOut"){
    $mes=userOut();
}
elseif($act=="changePwd"){
    $mes=changePwd();
}
elseif($act=="addPackage"){
    $mes=addPackage();
}
elseif($act=="addRecipients"){
    $mes=addRecipients();
}
elseif($act=="delRecipients"){
    $mes=delRecipients($recipients_id,$user_id);
}
elseif($act=="addOrder"){
    $mes=addOrder();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Welcome</title>
</head>
<body>
<?php
	if($mes){
		echo $mes;
	}
?>
</body>
</html>