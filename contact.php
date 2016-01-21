<?php
    require_once 'include.php';
    require_once 'header.php';
?>

<!-- Content Start -->
<section id="content_wrap">
<article>

    <!-- Contact Form Start -->
    <div class="two_third">
        <h3>联系我们</h3>
        <p></p>
        <div class="contact_form">
            <form method="post" action="sendEmail.php" name="contact-form" id="contact-form" />
            <div id="main">
                <div id="response"></div>
                <div class="one_third">
                    <label>称呼:</label>
                    <p><input type="text" name="name" id="name" size="30" /></p>
                </div>
                <div class="one_third">
                    <label>邮箱:</label>
                    <p><input type="text" name="email" id="email" size="30" /></p>
                </div>
                <div class="one_third_last">
                    <label>标题:</label>
                    <p><input type="text" name="subject" id="subject" size="30" /></p>
                </div>
                <label>内容:</label>
                <p><textarea name="message" id="message" cols="30" rows="10"></textarea></p>
                <p><input class="contact_button button" type="submit" name="submit" id="submit" value="Email Us!" /></p>
            </div>
            </form>
        </div>
    </div>
	<!-- Contact Form End -->

    <!-- Contact Details Start -->
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
