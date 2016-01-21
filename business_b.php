<?php
    require_once 'include.php';
    require_once 'header.php';
    $num1=10;
    $num2=6;
    $lineName='商业件B类（首磅10美金， 6美金/续磅）';
    $weight='限重： 2磅起，6磅以下，可混装； 单一品类：可至10磅；';
    $time='时间： 15-20个工作日；';
    $note='享有关税补贴（包关税）；';
    $desc='普通品牌服装：男式/女式鞋、童鞋、羽绒服、童服、毛衣、西装、靴子、衬衫、T恤、大衣、棉衣、内衣、裤、帽子、皮带、皮带扣、领带夹、腰带、等；<br /><br />
                                 保健品类：维他命、葡萄粉、鱼油、维生素、液体钙、儿童DHA、螺旋藻、等；<br /><br />
                                 其他： 旅行箱、旅行背包、帐篷、厨房用品、儿童座椅/推车、低价值工艺饰品、等；<br /><br />
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
