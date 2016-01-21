<?php
    require_once 'include.php';
    require_once 'header.php';
    $num1=10;
    $num2=5;
    $lineName='普通快件A（首磅10美金， 5美金/续磅）';
    $weight='限重： 2磅起 ， 15磅以下，可混装；';
    $time='时间： 10-15个工作日;';
    $note='无需要提供收件人身份证，如包裹产生关税，由收件人支付；';
    $desc='物品及物品价值需如实申报，物品类别、品名、品牌、规格需详细具体，物品品种为私人物品，数量为个人自用范围.';
?>


<!-- Content Start -->
<section id="content_wrap" class="portfolio">
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

