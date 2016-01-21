d<?php
    require_once 'include.php';
    require_once 'header.php';
    $num1=18;
    $num2=2;
    $num1=40;
    $num2=5;
    $lineName='美国国内快件（首磅18美金， 2美金/续磅）';
    $weight='限重： 2-50磅，可混装；';
    $time='时间： 5-7个工作日；';
    $note='不产生关税；';
    $desc='适用范围： 除违禁品外.';
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

