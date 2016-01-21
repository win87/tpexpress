<?php
    require_once 'include.php';
    require_once 'header.php';
    $num1=10;
    $num2=5;
    $lineName='商业件A类（首磅10美金， 5美金/续磅）';
    $weight='限重： 2磅起，6磅以下，可混装； 单一品类：可至10磅；';
    $time='时间： 15-20个工作日；';
    $note='享有关税补贴（包关税）；';
    $desc='母婴用品： 奶瓶、辅食研磨器、尿片、吸管、婴儿餐具餐椅、婴儿洗护品、玩具、等；<br /><br />
                                 食品类：泡芙、坚果、饼干、米粉、糖果、巧克力、茶叶、果泥等；<br /><br />
                                 日常用品（合理自用范围）：宠物用品、食用油、调味料、净水壶滤芯、低值工艺饰品、渔具配件、IPAD套、手机壳、等；<br /><br />
                                 生活日用品： 运动物品-装备、玩具、手动剃须刀、牙膏、文具、餐具、杯子、等；<br />
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
