<?php
    require_once 'include.php';
    require_once 'header.php';
    $num1=8;
    $num2=5;
    $lineName='奶粉专线（首磅8美金， 5美金/续磅）';
    $weight='限重： 2磅起，每个包裹最多不超过6磅；';
    $time='时间： 10-15个工作日；';
    $note='需上传收件人第二代身份证正反两面，清关使用，如包裹产生关税由寄件人或收件人支付；';
    $desc='建议：每个包裹2罐/盒奶粉.';
?>

<!-- Content Start -->
<section id="content_wrap" class="business">
<article>

    <?php
        require_once 'price_list.php';
    ?>

	<!-- Portfolio Start -->

    <?php
        require_once 'ads/3cols_ads.php';
    ?>
    <!-- Portfolio End -->

</article>
</section>
<!-- Content End -->

<?php
    require_once 'footer.php';
?>

