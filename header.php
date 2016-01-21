<!DOCTYPE html>
<html lang="zh">
<head>

<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<meta name="viewport" content="width=device-width" />
<title>Moment Express</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/jqueryslidemenu.css" />
<link rel="stylesheet" type="text/css" href="css/quicksand.css" />
<link rel="stylesheet" type="text/css" href="css/widget.css" />
<link rel="stylesheet" type="text/css" href="css/elements.css" />
<link rel="stylesheet" type="text/css" href="css/portfolio.css" />
<link rel="stylesheet" type="text/css" href="css/hoverdir.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700' rel='stylesheet' type='text/css' />

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<body>
<!-- Header Start -->
<section id="header_wrap">
<nav id="myslidemenu" class="jqueryslidemenu clearfix">
    <ul>
        <li><a href="index.php">首页</a></li>
        <li><a href="about.php">关于我们</a></li>
        <li><a href="#">快递路线 <i class="fa fa-angle-down"></i></a>
        <ul>
            <li><a href="index.php">所有线路</a></li>
            <li><a href="common_b.php">奶粉专线</a></li>
            <li><a href="business_b.php">保健品（关税补贴）专线</a></li>
            <li><a href="business_c.php">手袋（关税补贴）专线</a></li>
            <li><a href="common_a.php">普通快件A</a></li>
            <li><a href="business_a.php">商业件A类</a></li>
            <li><a href="business_b.php">商业件B类</a></li>
            <li><a href="business_c.php">商业件C类</a></li>
            <li><a href="special_item.php">特殊件</a></li>
            <li><a href="usps.php">大包裹</a></li>
            <li><a href="hk_d.php">香港送货上门</a></li>
            <li><a href="hk_p.php">香港自提</a></li>
        </ul>
        </li>
        <?php if(empty($_SESSION['user_id']) && empty($_SESSION['email'])){ ?>
			<li><a href="#">海淘转运<i class="fa fa-angle-down"></i></a>
            <ul>
                <li><a href="login.php">使用指南</a></li>
                <li><a href="login.php">加盟合作</a></li>
            </ul>
            </li>
	    <?php } else { ?>
	        <li><a href="#">海淘转运 <i class="fa fa-angle-down"></i></a>
            <ul>
                <li><a href="#">“购朋友”商城</a></li>
                <li><a href="#">站内团购</a></li>
                <li><a href="partners.php">加盟合作</a></li>
                <li><a href="elements.html">海外购物流程</a></li>
            </ul>
            </li>
	    <?php } ?>

        <li><a href="contact.php">联系我们</a></li>
        <li><a href="#">帮助 <i class="fa fa-angle-down"></i></a>
            <ul>
                <li><a href="faq.php">常见问题</a></li>
                <li><a href="forbidden.php">禁运物品</a></li>
            </ul>
        </li>
        <?php if(empty($_SESSION['user_id']) && empty($_SESSION['email']) && empty($_COOKIE['user_id']) && empty($_COOKIE['email'])){ ?>
            <li><a href="signup.php">注册</a></li>
            <li><a href="login.php">登录</a></li>
        <?php } else { ?>
        <li>
            <a href="#"><?php echo $_SESSION['email']; ?> <i class="fa fa-angle-down"></i></a>
            <ul>
                <li><a href="account.php">账户管理</a></li>
                <li><a href="order.php">下订单</a></li>
                <li><a href="my_package.php">我要寄包裹</a></li>
                <li><a href="my_package_list.php">查看包裹状态</a></li>
                <li><a href="add_recipients.php">添加收件人</a></li>
                <li><a href="my_recipients_list.php">收件人列表</a></li>
                <li><a href="doAction.php?act=userOut">退出</a></li>
            </ul>
        </li>
        <li>
            <a href="doAction.php?act=userOut">退出</a>
        </li>
        <?php } ?>

    </ul>
</nav>
</section>
<!-- Header End -->

<!-- Logo Start -->
<figure><a href="index.php"><img src="images/" alt="US express logo" style="margin-bottom: 20px;" /></a></figure>
<!-- Logo End -->

<div id="triangle-up"></div>
