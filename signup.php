<?php
    require_once 'include.php';
    require_once 'header.php';
?>

<!-- Content Start -->
<section id="content_wrap">
<article>

    <!-- Contact Form Start -->
    <div class="two_third" style="position:relative;">
        <h3>新用户注册</h3>
        <form method="post" action="doAction.php?act=register" id="contact-form" />
        <div class="contact_form">
            <div id="main">
                <div id="response"></div>
                <div class="one_third">
                    <label>邮箱:</label>
                    <p><input type="email" name="email" id="email" size="30" required /></p>
                    <b><span class="fa fa-envelope-o hidden-sm hidden-xs" style="position:absolute;top:82px;left:167px;"></span></b>
                    <p id="emailStatus"></p>
                    <p>已经有账号？<a href="login.php"><span style="color:red;">登录</span></a></p>
                </div>
                <div class="one_third">
                    <label>密码:</label>
                    <p><input type="password" name="pwd1" id="pwd1" size="30" required /></p>
                    <span class="fa fa-unlock-alt hidden-sm hidden-xs" style="position:absolute;top:84px;left:397px;"></span>
                    <p id="pwdErr1"></p>
                </div>
                <div class="one_third_last">
                    <label>重复密码:</label>
                    <p><input type="password" name="pwd2" id="pwd2" size="30" required /></p>
                    <span class="fa fa-unlock-alt hidden-sm hidden-xs" style="position:absolute;top:84px;left:623px;"></span>
                    <p id="pwdErr2"></p>
                    <p>“注册”代表您阅读并同意<a href="exeception_clause.php" style="color:red;">使用条款</a></p>
                    <p><input class="contact_button button" type="submit" id="submit" value="注册" /></p>
                </div>
            </div>
        </div>
        </form>

    </div>
	<!-- Contact Form End -->

        <?php
            require_once 'ads/1col_right_ads.php';
        ?>

</article>
</section>
<!-- Content End -->

<?php
    require_once 'footer.php';
?>
