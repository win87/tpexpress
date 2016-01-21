<?php
    require_once 'include.php';
    require_once 'header.php';

    $title='海淘转运会员价格表';
?>

<!-- Content Start -->

<link rel="stylesheet" type="text/css" href="css/pricing_table.css" />

<section id="content_wrap" class="typography">
<article>

    <?php
        require_once 'search.php';
    ?>

    <h4>美元：人民币汇率 = 1:6.3（每个月1号更新汇率）</h4>

    <div class="v_space"></div>

    <!-- Four Column Pricing Table Start -->

    <div class="pricing_table">

    <div class="one_third">
    <div class="column_1">
        <div class="pricing_header">
            <h3>会员等级</h3>
        </div>
        <div class="price">
            <h1>服务内容</h1>
        </div>
        <div class="pricing_content">
            <ul>
                <li><strong>会员退费</strong></li>
                <li><strong>提供代购、下单服务（免代购费）</strong></li>
                <li><strong>海淘商品微信支付</strong></li>
                <li><strong>网站平台微商推广（名额限制）</strong></li>
                <li><strong>拆箱、重新包装、拼箱服务</strong></li>
                <li><strong>免费仓储日期</strong></li>
                <li><strong>超过仓储日期服务费</strong></li>
                <li><strong>最长仓储日期</strong></li>
                <li><strong>退回</strong></li>
                <li><strong>转寄</strong></li>
                <li><strong>包裹跟踪</strong></li>
            </ul>
        </div>
        <div class="pricing_footer">
            <a href="index.php">查询运费</a>
        </div>

    </div>
    </div>

    <div class="one_third">
    <div class="column_2">
        <div class="pricing_header">
            <h3>普通会员</h3>
        </div>
        <div class="price">
            <h1>$0/月</h1>

        </div>
        <div class="pricing_content">
            <ul>
                <li><strong>无会员费</strong></li>
                <li><img src="images/correct.png" alt="img" /></li>
                <li><img src="images/correct.png" alt="img" /></li>
                <li><img src="images/close.png" alt="img" /></li>
                <li><strong>$2/包裹</strong></li>
                <li><strong>15天</strong></li>
                <li><strong>$0.5/天/件</strong></li>
                <li><strong>30</strong></li>
                <li><strong>$6/件 + 实际产生运费</strong></li>
                <li><strong>$6/件 + 实际产生运费</strong></li>
                <li><strong>免费</strong></li>
            </ul>
        </div>
        <div class="pricing_footer">
            <a href="#">注册立即成为普通会员</a>
        </div>
    </div>
    </div>

    <div class="one_third">
    <div class="column_3">
        <div class="pricing_header">
            <h3>VIP会员</h3>
        </div>
        <div class="price">
            <h1>$8/月</h1>

        </div>
        <div class="pricing_content">
            <ul>
                <li><strong>如果该月内未使用过一次服务，则退回该月会员费</strong></li>
                <li><img src="images/correct.png" alt="img" /></li>
                <li><img src="images/correct.png" alt="img" /></li>
                <li><img src="images/correct.png" alt="img" /></li>
                <li><strong>免费</strong></li>
                <li><strong>30天</strong></li>
                <li><strong>免费</strong></li>
                <li><strong>45天</strong></li>
                <li><strong>$3/件 + 实际产生运费</strong></li>
                <li><strong>$3/件 + 实际产生运费</strong></li>
                <li><strong>免费</strong></li>
            </ul>
        </div>
        <div class="pricing_footer">
            <a href="#">马上申请</a>
        </div>
    </div>
    </div>

    </div>
	<!-- Four Column Pricing Table End -->

</article>
</section>
<!-- Content End -->

<?php
    require_once 'footer.php';
?>