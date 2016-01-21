<?php
    require_once 'include.php';
    require_once 'header.php';
    $num1=15;
    $num2=10;
    $num1=10;
    $num2=5;
    $lineName='特殊件（首磅15美金， 10美金/续磅）';
    $weight='限重： 2磅起，6磅以下，可混装； 单一品类：可至10磅；';
    $time='时间： 15-20个工作日；';
    $note='享有关税补贴（包关税）；';
    $desc='高价值商品（$750-$2500）；<br /><br />
                                 名牌护肤品/化妆品、眼镜、名牌手袋、钱包、手表、游戏机；<br /><br />
                                 海参/花旗参；<br /><br />
                                 液晶显示屏/电视、家用扫描仪、打印机、投影机、家庭音响、电脑配件、手机、手提电脑、电动工具；<br /><br />
                                 高档体育用品；<br />
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
