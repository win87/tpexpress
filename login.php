<?php
    require_once 'include.php';
    require_once 'header.php';
?>

<!-- Content Start -->
<section id="content_wrap">
<article>

    <!-- Contact Form Start -->
    <div class="two_third">
        <h3>用户登录</h3>
        <p>了解更多优惠内容，请先登录</p>
        <form method="post" action="doAction.php?act=login" id="contact-form" />
        <div class="contact_form">
            <div id="main" style="position:relative">
                <div id="response"></div>
                <div class="one_third">
                    <label>登录邮箱:</label>
                    <p><input type="email" name="loginEmail" id="loginEmail" size="30" required /></p>
                    <b><span class="fa fa-envelope-o hidden-sm hidden-xs" style="position:absolute;top:45px;left:167px;"></span></b>
                    <p id="lEmailStatus"></p>
                    <p>还没有账号？<a href="signup.php"><span style="color:red;">马上注册</span></a></p>
                </div>
                <div class="one_third">
                    <label>登录密码:</label>
                    <p><input type="password" name="pwd1" id="" size="30" required /></p>
                    <span class="fa fa-unlock-alt hidden-sm hidden-xs" style="position:absolute;top:47px;left:397px;"></span>
                    <a href="#"><span>忘记密码</span></a>
                </div>
                <p><input class="contact_button button" type="submit" name="submit" id="submit" value="登录" style="margin-top:27px;" /></p>
            </div>
        </div>
        </form>

    </div>
	<!-- Contact Form End -->

    <?php
        require_once 'ads/1col_right_ads.php';
    ?>

	<!-- Contact Details End -->
</article>
</section>
<!-- Content End -->

<?php
    require_once 'footer.php';
?>
