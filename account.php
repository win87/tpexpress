<?php
    require_once 'include.php';
    require_once 'header.php';
    checkProfileSession();
    $email=$_SESSION['email'];
    $id=$_SESSION['user_id'];

    $sql="SELECT *
        FROM tpexpress_user
        where user_id = {$id}";
    $row=fetchOne($sql);
    $user_type=$row['user_type'];

?>
<!-- Content Start -->
<section id="content_wrap" class="typography">
<article>

    <!-- Page Content -->
    <div class="container">

        <!-- Tab col-md-2 left side-->
		<div class="col-md-2">
	        <ul class="nav nav-pills nav-stacked" id="">
	            <li class="active" style="position: relative;">
				    <a href="#info-tab" data-toggle="tab">个人信息</a>
				</li>
				<li>
				    <a href="#address-tab" data-toggle="tab">我的海外收件地址</a>
				</li>
				<li>
				    <a href="#security-tab" data-toggle="tab">修改密码</a>
				</li>
			</ul>
        </div>
		<!-- Tab col-md-2 left side end-->

        <div class="col-md-10"  style="width:75%;">
        <div id="myTabContent" class="tab-content">

            <!-- Personal info tab begin -->
    		<div class="tab-pane fade in active" id="info-tab">
                <div class="col-md-12">
                    <table class="table table-condensed table-hover">
                        <tbody>
                        <tr>
                            <td style="border:none;">
                                <h3>登录邮箱</h3>
                                <input type="text" class="form-control list-space-input" placeholder="<?php echo $_SESSION['email']; ?>" readonly>
                            </td>
                            <td style="border:none;">
                                <p></p><p></p><p></p><p></p>
                                <a href="#" class="btn btn-primary" style="margin-bottom:20px;">修改个人资料</a>
                            </td>

                        </tr>
                        <tr>
                            <td style="border:none;">
                                <h3>会员等级</h3>
                                <input type="text" class="form-control list-space-input" value="<?php
                                    switch ($user_type){
                                        case 1:
                                            echo '普通会员';
                                            break;
                                        case 2:
                                            echo 'VIP会员';
                                            break;
                                        default:
                                            echo '普通会员';
                                            break;
                                    }

                                ; ?>" readonly>
                            </td>
                            <td style="border:none;">
                                <p></p><p></p><p></p><p></p>
                                <a href="#" class="btn btn-success" style="margin-bottom:20px;">申请会员升级</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
    		</div>
    		<!-- Personal info tab end -->

    		<!-- shipping address tab begin-->
    		<div class="tab-pane fade" id="address-tab" >
                <div class="pane info account">
                <h3>我的海外收货地址</h3>
                    <ul class="list list_style2">
                        <li>Full Name: 你的姓名拼音</li>
                        <li>Address line 1： 3288 Pierece ST.</li>
                        <li>Address line 1：  C-108</li>
                        <li>City: Richmond</li>
                        <li>State: California</li>
                        <li>Country: U.S.A.</li>
                        <li>Phone Number: 1(415)-767-6188</li>
                    </ul>
                </div>
    	    </div>
    		<!-- address tab end -->

    		<!-- Security tab begin -->
    		<div class="tab-pane fade" id="security-tab">
                <div class="col-md-12">
                <form action="doAction.php?act=changePwd&email=<?php echo $email ;?>" method="post">
                    <table class="table table-condensed table-hover">
                        <caption style="padding:10px 0 10px 20px;border:1px solid #ccc;margin-top:20px;background:#ccc;color:white;">请输入新密码</caption>
                        <tbody>
                        <tr>
                            <td>
                                <h3>旧密码:</h3>
                                <input type="password" class="form-control list-space-input" name="oldPwd" id="oldPwd" required placeholder="Enter current password">
                                <p id="pwdErr"></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border:none;">
                                <h3>新密码:</h3>
                                <input type="password" class="form-control list-space-input" name="pwd1" id="pwd1" required placeholder="Enter new password">
                                <p id="pwdErr1"></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border:none;">
                                <h3>重复新密码:</h3>
                                <input type="password" class="form-control list-space-input" name="pwd2" id="pwd2" required placeholder="Re-type new password">
                                <p id="pwdErr2"></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="submit" name="submit" value="submit" class="btn btn-danger fr" style="margin-bottom:20px;">更改密码</button>
                </form>
                </div>
    		</div>
    		<!-- Security tab end -->

        </div>
        <!-- my content tab end -->
        </div>
        <!-- /.col-md-10 -->
    </div>
    <!-- /.container -->


</article>
</section>
<!-- Content End -->


<?php
    require_once 'footer.php';
?>
