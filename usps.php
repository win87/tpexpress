<?php
    require_once 'include.php';
    require_once 'header.php';
    $num1=40;
    $num2=5;
    $lineName='大包裹（首磅40美金， 5美金/续磅）';
    $weight='限重： 2-50磅，可混装；';
    $time='时间： 5-7个工作日；';
    $note='无关税补贴；';
    $desc='适用范围： 除违禁品外.';
?>

<!-- Content Start -->
<section id="content_wrap" class="portfolio">
<article>

    <?php
        require_once 'price_list.php';
    ?>

	<!-- Portfolio Start -->
    <ul class="splitter" id="filter">
        <li>
            <ul>
                <li class="segment-1 selected-1"><a href="#" data-value="all">All</a></li>
                <li class="segment-0"><a href="#" data-value="buisness">Buisness</a></li>
                <li class="segment-2"><a href="#" data-value="logo">Logos</a></li>
                <li class="segment-3"><a href="#" data-value="photgraphy">Photgraphy</a></li>
            </ul>
        </li>
    </ul>

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
