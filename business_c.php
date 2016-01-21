<?php
    require_once 'include.php';
    require_once 'header.php';
    $num1=10;
    $num2=7;
    $lineName='商业件C类（首磅10美金， 7美金/续磅）';
    $weight='限重： 2磅以下小包（化妆品），可混装；2磅起；';
    $time='时间： 15-20个工作日；';
    $note='享有关税补贴（包关税）；';
    $desc='普通化妆护肤品：唇膏、眼霜、面膜、防晒霜、眼影、睫毛膏、眉笔、面霜、身体乳、成人洗护用品（洗发水、生发液、沐浴露）、等;<br /><br />
                                 手袋（限2只/包裹，钱包3-4只/包裹）：限Coach、MK、CK、KateSpade或同级品牌，钱包、眼镜、手表、等；<br /><br />
                                 电子数码产品及配件： 录音笔、耳机线、无线麦克风、耳机等；<br /><br />
                                 小家电类：电动剃须刀、电动吸奶器、电动洗脸刷、等；
          ';
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

